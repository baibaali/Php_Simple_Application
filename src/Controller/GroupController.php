<?php

namespace App\Controller;

use App\Entity\Group;
use App\Form\GroupType;
use App\Repository\GroupRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_ADMIN")
 * @Route("/groups", name="group_")
 */
class GroupController extends AbstractController
{
    /**
     * @Route("/", name="list", methods={"GET"})
     */
    public function listAction(GroupRepository $groupRepository): Response
    {
        return $this->render('group/list.html.twig', [
            'groups' => $groupRepository->findAll()
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/create", name="create", methods={"GET", "POST"})
     */
    public function createAction(Request $request, EntityManagerInterface $entityManager): Response
    {
        $group = new Group();
        $form = $this->createForm(GroupType::class, $group, ['method' => 'POST']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($group);
            $entityManager->flush();

            return $this->redirectToRoute('group_detail', ['id' => $group->getId()]);
        }

        return $this->render('form.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="detail", methods={"GET"}, requirements={"id": "\d+"})
     */
    public function detailAction(Group $group): Response
    {
        return $this->render('group/detail.html.twig', [
            'group' => $group
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/{id}/edit", name="edit", methods={"GET", "PATCH"}, requirements={"id": "\d+"})
     */
    public function editAction(Group $group, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(GroupType::class, $group, ['method' => 'PATCH']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('group_detail', ['id' => $group->getId()]);
        }
        return $this->render('form.html.twig', [
            'title' => '',
            'form' => $form->createView()
        ]);
    }
}