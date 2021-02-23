<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexRDVController extends AbstractController
{
    /**
     * @Route("/rdv", name="rdv")
     */
    public function index(): Response
    {
        return $this->render('index_rdv/index.html.twig', [
            'controller_name' => 'IndexRDVController',
        ]);
    }
}
