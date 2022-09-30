<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Room;
use App\Entity\User;
use App\Form\ReservationType;
use App\Form\RoomType;
use App\Repository\RequestRepository;
use App\Repository\ReservationRepository;
use App\Repository\RoomRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rooms", name="room_")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/", name="list", methods={"GET"})
     */
    public function listAction(RoomRepository $roomRepository): Response
    {
        return $this->render('room/list.html.twig', [
            'rooms' => $roomRepository->findAll()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/create", name="create", methods={"GET", "POST"})
     */
    public function createAction(Request $request, EntityManagerInterface $entityManager): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room, ['method' => 'POST']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($room);
            $entityManager->flush();

            return $this->redirectToRoute('room_detail', ['id' => $room->getId()]);
        }

        return $this->render('room/addRoomForm.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="detail", methods={"GET"}, requirements={"id": "\d+"})
     */
    public function detailAction(Room $room, RequestRepository $requestRepository): Response
    {
        $status = null;
        if(($user = $this->getUser()) !== null) {
            if ($request = $requestRepository->findOneBy(['room' => $room, 'user' => $user])) {
                $status = $request->getStatus();
            }
        }
        return $this->render('room/detail.html.twig', [
            'status' => $status,
            'room' => $room
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="edit", methods={"GET", "PATCH"}, requirements={"id": "\d+"})
     */
    public function editAction(Room $room, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RoomType::class, $room, ['method' => 'PATCH']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('room_detail', ['id' => $room->getId()]);
        }

        return $this->render('room/addRoomForm.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/reservation", name="reservation", methods={"GET", "POST"}, requirements={"id": "\d+"})
     */
    public function reservationAction(Room $room, Request $request, EntityManagerInterface $entityManager, ReservationRepository $reservationRepository): Response
    {
        $this->denyAccessUnlessGranted('reservation', $room);

        /** @var User $user */
        $user = $this->getUser();
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation, ['method' => 'POST']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if($reservation->getFrom() >= $reservation->getTo()) {
                return $this->render('room/form.html.twig', [
                    'error' => '',
                    'title' => '',
                    'form' => $form->createView()
                ]);
            }

            $reservations = $reservationRepository->findAllByInterval($reservation->getFrom(), $reservation->getTo());
            foreach ($reservations as $res) {
                if($res->getSatus() === Reservation::STATUS_APPROVED) {
                    return $this->render('room/form.html.twig', [
                        'error' => '',
                        'title' => '',
                        'form' => $form->createView()
                    ]);
                }
            }

            $reservation->setRoom($room);
            $reservation->setUser($user);
//            $reservation->setStatus(Reservation::STATUS_APPROVED);
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('room_detail', ['id' => $room->getId()]);
        }

        return $this->render('room/form.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/{id}/request", name="request", methods={"POST"}, requirements={"id": "\d+"})
     */
    public function requestAction(Room $room, EntityManagerInterface $entityManager, RequestRepository $requestRepository): Response {
        if (!$requestRepository->findOneBy(['room' => $room, 'user' => $this->getUser()])) {
            $request = new \App\Entity\Request();
            $request->setUser($this->getUser());
            $request->setRoom($room);

            $entityManager->persist($request);
            $entityManager->flush();
        }
        return $this->redirectToRoute('room_detail', ['id' => $room->getId()]);
    }

    /**
     * @Route("/{id}/reservation/", name="decision_reservation", methods={"PATCH"}, requirements={"id": "\d+"})
     */
    public function reservationDecisionAction(Room $room, Request $request, EntityManagerInterface $entityManager, ReservationRepository $reservationRepository): Response
    {
        $reservation = $reservationRepository->find($request->get('reservation_id'));
        $reservation->setStatus($request->get('status'));

        $entityManager->flush();

        return $this->redirectToRoute('room_detail', ['id' => $room->getId()]);
    }

    /**
     * @Route("/{id}/request/", name="decision_request", methods={"PATCH"}, requirements={"id": "\d+"})
     */
    public function requestDecisionAction(Room $room, Request $request, EntityManagerInterface $entityManager, RequestRepository $requestRepository): Response
    {
        $req = $requestRepository->findOneBy(['room' => $request->get('room_id'), 'user' => $request->get('user_id')]);
        $req->setStatus($request->get('status'));

        $entityManager->flush();

        return $this->redirectToRoute('room_detail', ['id' => $room->getId()]);
    }
}