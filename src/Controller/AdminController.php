<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class AdminController extends AbstractController
{
    /**
     * @Route("/superadmin", name="superadmin")
     */
    public function index(UserRepository $users): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'users' => $users->findAll()
        ]);
    }

    /**
     * @Route("/superadminDel", name="superadminDel")
     */
    public function del(UserRepository $users): Response
    {
        $id = $_GET["id"];
        $del = $users->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($del);
        $em->flush();
        return $this->redirectToRoute('superadmin');

    }
}
