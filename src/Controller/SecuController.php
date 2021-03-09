<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecuController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(): Response
    {
        return $this->render('secu/inscription.html.twig', [
            'controller_name' => 'SecuController',
        ]);
    }

        /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(): Response
    {
        return $this->render('secu/connexion.html.twig', [
            'controller_name' => 'SecuController',
        ]);
    }
}
