<?php

namespace App\Controller;

use App\Entity\RendezVous;
use App\Repository\MedecinRepository;
use App\Repository\RendezVousRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class MedecinController extends AbstractController
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(Security $security)
    {

        $this->security = $security;
    }


    /**
     * @param MedecinRepository $repository
     * @param Security $security
     * @return Response
     * @Route("/medecin", name="medecin")
     */

    public function index(MedecinRepository $repository): Response
    {
        $id = $_GET["id"];
        $medecin = $repository->find($id);
        return $this->render('medecin/index.html.twig', [
            'controller_name' => 'MedecinController',
            'medecin' => $medecin,
            'id' => $id
        ]);
    }

    /**
     * @param Request $request
     * @param MedecinRepository $repository
     * @param Security $security
     * @return Response
     * @Route("/rdvAdd", name="rdvAdd")
     */

    public function rdvAdd(Request $request, MedecinRepository $repository, Security $security, RendezVousRepository $rdvrepository): Response
    {
        $id = $_GET["id"];
        $medecin = $repository->find($id);
        $user = $this->security->getUser();
        $rdv = new RendezVous();
        $form = $this->createFormBuilder($rdv)
            ->add('Heure')
            ->add("Valider", SubmitType::class)
            ->getForm();
        $rdv->setMedecin($medecin);
        $rdv->setEtat('En attente');
        $rdv->setPatient($user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $heure = $form->get('Heure')->getData();
            $verifications = $rdvrepository->findBy(['Medecin'=>$medecin]);
            foreach ($verifications as $value){
                $testheure = $value->getHeure();
                var_dump($testheure);
                if ($testheure == $heure){
                    var_dump("ca existe déjà");
                    return $this->redirectToRoute('rdv');
                }
            }
            $rdv = $form ->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($rdv);
            $em->flush();
            return $this->redirectToRoute('rdv');

        }
        return $this->render('medecin/rdvAdd.html.twig', [
            'controller_name' => 'MedecinController',
            'form' => $form->createView()
        ]);
    }


}
