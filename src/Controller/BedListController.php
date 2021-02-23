<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Service;
use App\Form\ChambreType;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use App\Repository\ChambreRepository;

class BedListController extends AbstractController
{


    /**
     * @param $repository
     * @Route("/bedList", name="bed_list")
     * @return Response
     */

    public function index(ChambreRepository $repository, ServiceRepository $serviceRepo): Response
    {

        $addChambre = new Chambre();
        //$service = new Service();
        //$addChambre->setNumChambre(214)
        //->setNombreLits(1)
        //->setTele(0)
        //->setService($serviceRepo->find("2"));
        //$em = $this->getDoctrine()->getManager();
        //$em->persist($addChambre);
        //$em->flush();
        $chambre = $repository;
        $id = $_GET["id"];
        $service = $serviceRepo->find($id);
        return $this->render('bed_list/index.html.twig', [
            'controller_name' => 'BedListController',
            'chambres' => $chambre->findBy(['service' => $id]),
            'id' => $id,
            'service' => $service
        ]);
    }

    /**
     * @param $repository
     * @Route("/bedAdd", name="bedAdd")
     * @return Response
     */
    public function addChambre(Request $request, ServiceRepository $serviceRepo): Response
    {
        $chambre = new Chambre();
        $id = $_GET["id"];
        $service = $serviceRepo->find($id);
        $form = $this->createFormBuilder($chambre)
            ->add('NumChambre')
            ->add('NombreLits')
            ->add('Tele')
            ->add("Valider", SubmitType::class)
            ->getForm();
        $chambre->setService($service);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $chambre = $form ->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($chambre);
            $em->flush();

            return $this->redirectToRoute("service");
        }
        return $this->render('bed_list/bedAdd.html.twig', [
            'controller_name' => 'BedListController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @param $repository
     * @Route("/bedDel", name="bedDel")
     * @return Response
     */
    public function delChambre(Request $request, ChambreRepository $repository, ServiceRepository $service): Response
    {
        $id = $_GET["id"];
        $chambre = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($chambre);
        $em->flush();
        return $this->render('service/index.html.twig', [
            'controller_name' => 'BedListController',
            'services' => $service->findAll()
        ]);
    }

    /**
     * @param $repository
     * @Route("/bedMod{id}", name="bedMod")
     * @return Response
     */
    public function modChambre(Request $request, ChambreRepository $repository, Chambre $chambre): Response
    {
        //$id = $_GET["id"];
        //$chambre = $repository->find($id);
        $form = $this->createFormBuilder($chambre)
            ->add('NumChambre')
            ->add('NombreLits')
            ->add('Tele')
            ->add("Valider", SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('service');
        }
       // $em->flush();
        return $this->render('bed_list/bedMod.html.twig', [
            'controller_name' => 'BedListController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @param $repository
     * @Route("/bedVoir", name="bedVoir")
     * @return Response
     */
    public function voirChambre(Request $request, ChambreRepository $repository): Response
    {
        $id = $_GET["id"];
        return $this->render('bed_list/bedVoir.html.twig', [
            'controller_name' => 'BedListController',
            'chambre' => $repository->find($id)
        ]);
    }

}
