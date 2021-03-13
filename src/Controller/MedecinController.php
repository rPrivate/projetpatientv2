<?php

namespace App\Controller;

use App\Entity\Medecin;
use App\Entity\RendezVous;
use App\Form\MedecinAddType;
use App\Repository\MedecinRepository;
use App\Repository\RendezVousRepository;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManager;
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

    public function index(MedecinRepository $repository, RendezVousRepository $rendezVousRepository): Response
    {
        if (isset($_GET["action"])) {

            $type = $_GET["action"];

            switch ($type) {
                case "view":
                    $id = $_GET["id"];
                    $medecin = $repository->find($id);
                    $events = $rendezVousRepository->findBy(["Medecin" => $id]);
                    $rdvs = [];
                    foreach ($events as $event) {
                        if($event->getEtat() == "En attente"){
                            $rdvs[] = [
                                'id' => $event->getId(),
                                'title' => "Réservé",
                                'start' => $event->getHeure()->format("Y-m-d H:i:s"),
                                "etat" => $event->getEtat(),
                                'textColor' => "green",

                            ];
                        }
                        else{
                            $rdvs[] = [
                                'id' => $event->getId(),
                                'title' => "Complet",
                                'textColor' => "green",
                                'start' => $event->getHeure()->format("Y-m-d H:i:s"),
                                "etat" => $event->getEtat()

                            ];
                        }
                    }

                    $datas = json_encode($rdvs);
                    return $this->render('medecin/index.html.twig', [
                        'controller_name' => 'MedecinController',
                        'medecin' => $medecin,
                        'id' => $id,
                        'datas' => $datas
                    ]);
                case "del":
                    $id = $_GET["id"];
                    // get EntityManager
                    $em = $this->getDoctrine()->getManager();

// Get a reference to the entity ( will not generate a query )
                    $medecin = $em->getRepository(Medecin::class)->find($id);
                    $em->remove($medecin);
                    $em->flush();

                    return $this->redirectToRoute('medecinliste');


            }
        }
        else {
            $id = $_GET["id"];
            $medecin = $repository->find($id);
            return $this->render('medecin/index.html.twig', [
                'controller_name' => 'MedecinController',
                'medecin' => $medecin,
                'id' => $id
            ]);
        }

    }

    /**
     * @param MedecinRepository $repository
     * @param Security $security
     * @return Response
     * @Route("/medecinadd", name="medecinadd")
     */

    public function medecinAdd(MedecinRepository $repository,Request $request): Response
    {
        $medecin = new Medecin();
        $form = $this->createForm(MedecinAddType::class, $medecin);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $form->getData();

            $medecin = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($medecin);
            $entityManager->flush();



        }
        return $this->render('medecin/medecinadd.html.twig', [
            'form' => $form->createView()]);
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
            'form' => $form->createView(),
            'medecin' => $medecin
        ]);
    }


}
