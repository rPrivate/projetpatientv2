<?php

namespace App\Controller;

use App\Repository\RendezVousRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class RDVListController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;
    /**
     * @var RendezVousRepository
     */
    private $repository;

    public function __construct(Security $security, RendezVousRepository $repository)
    {

        $this->security = $security;
        $this->repository = $repository;
    }
    /**
     * @Route("/rdvlist", name="rdv_list")
     */
    public function index(RendezVousRepository $repository): Response
    {
        $user = $this->security->getUser();
        $rdvs = $this->repository->findBy(['Patient' => $user]);
        return $this->render('rdv_list/index.html.twig', [
            'controller_name' => 'RDVListController',
            'rdvs' =>$rdvs
        ]);
    }

    /**
     * @Route("/rdvlistWaitPatient", name="rdv_listWaitPatient")
     */
    public function showWaitPatient(RendezVousRepository $repository): Response
    {
        $user = $this->security->getUser();
        $rdvs = $this->repository->findBy(['Patient' => $user, 'Etat' => 'En attente']);
        return $this->render('rdv_list/index.html.twig', [
            'controller_name' => 'RDVListController',
            'rdvs' =>$rdvs
        ]);
    }

    /**
     * @Route("/rdvlistWait", name="rdv_listWait")
     */
    public function showWait(RendezVousRepository $repository): Response
    {
        return $this->render('rdv_list/index.html.twig', [
            'controller_name' => 'RDVListController',
            'rdvs' =>$repository->findBy(['Etat' => 'En attente'])
        ]);
    }

    /**
     * @Route("/rdvlistAccept", name="rdv_listAccept")
     */
    public function showAccept(RendezVousRepository $repository): Response
    {
        $user = $this->security->getUser();
        $rdvs = $this->repository->findBy(['Patient' => $user, 'Etat' => 'Accepté']);
        return $this->render('rdv_list/index.html.twig', [
            'controller_name' => 'RDVListController',
            'rdvs' =>$rdvs
        ]);
    }

    /**
     * @Route("/rdvlistAll", name="rdv_listAll")
     */
    public function showAll(RendezVousRepository $repository): Response
    {
        return $this->render('rdv_list/indexAll.html.twig', [
            'controller_name' => 'RDVListController',
            'rdvs' =>$repository->findAll()
        ]);
    }

    /**
     * @Route("/accept", name="accept")
     */
    public function accept(RendezVousRepository $repository): Response
    {
        $id = $_GET["id"];
        $rdv = $repository->find($id);
        $rdv->setEtat("Accepté");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('rdv_listAll');

    }

    /**
     * @Route("/decline", name="decline")
     */
    public function decline(RendezVousRepository $repository): Response
    {
        $id = $_GET["id"];
        $rdv = $repository->find($id);
        $rdv->setEtat("Refusé");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('rdv_listAll');

    }

    /**
     * @Route("/remove", name="remove")
     */
    public function remove(RendezVousRepository $repository): Response
    {
        $id = $_GET["id"];
        $rdv = $repository->find($id);
        $rdv->setEtat("Annulé");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('rdv_listAll');

    }
}
