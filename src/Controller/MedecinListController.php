<?php

namespace App\Controller;

use App\Entity\Medecin;
use App\Entity\Service;

use App\Repository\MedecinRepository;
use App\Repository\ServiceRepository;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedecinListController extends AbstractController
{


    /**
     * @param $repository
     * @Route("/medecinliste", name="medecinliste")
     * @return Response
     */
    public function index(MedecinRepository $repository): Response
    {
        /*$addMedecin = new Medecin();
        $addMedecin->setPrenom("Johnny");
        $addMedecin->setNom("Halliday");
        $addMedecin->setSpecialite("Orthopédie");
        $em = $this->getDoctrine()->getManager();
        $em->persist($addMedecin);
        $em->flush();*/
        $medecins = $repository;

        return $this->render('medecin_list/index.html.twig', [
            'controller_name' => 'ServiceController',
            'medecins' => $medecins->findAll()
        ]);
    }
    /**
     * @param $repository
     * @Route("/medecinAdd", name="medecinAdd")
     * @return Response
     */
    public function addMedecin(Request $request): Response
    {
        $medecin = new Medecin();

        $form = $this->createFormBuilder($medecin);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $service = $form ->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirectToRoute('medecin');
        }
        return $this->render('medecin/medecinAdd.html.twig', [
            'controller_name' => 'MedecinListController',
            'form' => $form->createView()
        ]);
    }
}
