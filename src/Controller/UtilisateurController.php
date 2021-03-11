<?php

namespace App\Controller;

use App\Entity\CupCake;
use App\Form\CupcakeType;
use App\Repository\CupCakeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UtilisateurController extends AbstractController
{
    // /**
    //  * @Route("/utilisateur", name="utilisateur")
    //  */
    // public function index(CupCakeRepository $repository): Response
    // {
    //     $cupcakes =$repository->findAll();
    //     return $this->render('utilisateur/compte.html.twig', [
    //         'cupcakes' => $cupcakes,
    //     ]);
    // }

}
