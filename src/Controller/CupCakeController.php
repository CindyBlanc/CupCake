<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CupCakeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('cup_cake/accueil.html.twig', [
            'controller_name' => 'CupCakeController',
        ]);
    }

    /**
     * @Route("/lescupcakes", name="cupcake")
     */
    public function cupcake(): Response
    {
        return $this->render('cup_cake/cupcake.html.twig', [
            'controller_name' => 'CupCakeController',
        ]);
    }

    /**
     * @Route("/dejauncompte", name="dejauncompte")
     */
    public function redirectionSecu(): Response
    {
        return $this->render('cup_cake/moncompte.html.twig', [
            'controller_name' => 'CupCakeController',
        ]);
    }
}
