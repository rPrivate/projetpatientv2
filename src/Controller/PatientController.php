<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientAddType;
use App\Form\PatientType;
use App\Form\SearchPatientType;
use App\Repository\PatientRepository;
use phpDocumentor\Reflection\Types\This;
use Symfony\Component\HttpFoundation\Request;
use phpDocumentor\Reflection\DocBlock\Tags\TagWithType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientController extends AbstractController
{
    /**
     * @Route("/patient", name="patient")
     */
    public function index(Request $request): Response
    {
        $form = $this->createForm(SearchPatientType::class);
        $form->handleRequest($request);
        $reponse='none';
        if ($form->isSubmitted() && $form->isValid()){
            $data=$form->getData();
            $repo=$this->getDoctrine()->getRepository(Patient::class);
            $reponse=$repo->searchPatient($data['rechercher']);
        }
        return $this->render('patient/index.html.twig', [
            'controller_name' => 'PatientController',
            'form' => $form->createView(),
            'patient' => $reponse
        ]);
    }


    /**
     * @Route("/patient/add", name="patientadd")
     */
    public function addPatient(Request $request): Response
    {
        $manager =$this->getDoctrine()->getManager();
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($form->getData());
            $manager->flush();

        }
        return $this->render('patient/add.html.twig', [
            'controller_name' => 'PatientController',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/patient/mod/{id}", name="patientmod")
     */
    public function modPatient(Request $request,$id): Response
    {
        $manager =$this->getDoctrine()->getManager();
        $patient = $manager->getRepository(Patient::class)->find($id);
        if (!$patient){
            throw $this->createNotFoundException('Pas de patient trouvé ! ',$id);
        }
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($form->getData());
            $manager->flush();
        }
        return $this->render('patient/add.html.twig', [
            'controller_name' => 'PatientController',
            'form' => $form->createView()
        ]);
    }

}
