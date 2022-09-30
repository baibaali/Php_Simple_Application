<?php

namespace App\Controller;

use App\Entity\Building;
use App\Form\BuildingType;
use App\Repository\BuildingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/buildings", name="building_")
 */
class BuildingController extends AbstractController
{
    /**
     * @Route("/", name="list", methods={"GET"})
     */
    public function listAction(BuildingRepository $buildingRepository): Response
    {
        return $this->render('building/list.html.twig', [
            'buildings' => $buildingRepository->findAll()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/create", name="create", methods={"GET", "POST"})
     */
    public function createAction(Request $request, EntityManagerInterface $entityManager): Response
    {
        $building = new Building();
        $form = $this->createForm(BuildingType::class, $building, ['method' => 'POST']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($building);
            $entityManager->flush();

            return $this->redirectToRoute('building_detail', ['id' => $building->getId()]);
        }

        return $this->render('building/addBuildingForm.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}", name="detail", methods={"GET"}, requirements={"id": "\d+"})
     */
    public function detailAction(Building $building): Response
    {
        return $this->render('building/detail.html.twig', [
            'building' => $building
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="edit", methods={"GET", "PATCH"}, requirements={"id": "\d+"})
     */
    public function editAction(Building $building, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BuildingType::class, $building, ['method' => 'PATCH']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('building_detail', ['id' => $building->getId()]);
        }

        return $this->render('building/addBuildingForm.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }
}