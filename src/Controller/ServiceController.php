<?php

namespace App\Controller;

use App\Entity\Service;

use App\Repository\ServiceRepository;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{


    /**
     * @param $repository
     * @Route("/service", name="service")
     * @return Response
     */
    public function index(ServiceRepository $repository): Response
    {
        $addService = new Service();
        //$addService->setLibelle("Service Cardiologie");
        //$em = $this->getDoctrine()->getManager();
        //$em->persist($addService);
        //$em->flush();
        $services = $repository;

        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'services' => $services->findAll()
        ]);
    }
    /**
     * @param $repository
     * @Route("/serviceAdd", name="serviceAdd")
     * @return Response
     */
    public function addService(Request $request): Response
    {
        $service = new Service();

        $form = $this->createFormBuilder($service)
            ->add('Libelle', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('Valider', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $service = $form ->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirectToRoute('service');
        }
        return $this->render('service/serviceAdd.html.twig', [
            'controller_name' => 'ServiceController',
            'form' => $form->createView()
        ]);
    }
}
