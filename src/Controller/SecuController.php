<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecuController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class,$utilisateur); // Creation du formulaire

        $form->handleRequest($request); // Récuperer ce qui est renseigné
        if($form->isSubmitted() && $form->isValid()) { 
            $passwordCrypt = $encoder->encodePassword($utilisateur, 
            $utilisateur->getPassword());
            $utilisateur->setPassword($passwordCrypt);
            
            $em->persist($utilisateur); // On fait persister
            $em->flush();
            return $this->redirectToRoute("cupcakes");
        }
        return $this->render('secu/inscription.html.twig', [
            "form" => $form->createView(),
        ]);
    }



    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(AuthenticationUtils $util): Response
    {
        return $this->render('secu/connexion.html.twig', [
            "lastUsername" => $util->getLastUsername(),
            "error"=> $util->getLastAuthenticationError()
        ]);
        

    }

    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function deconnexion(){

        return $this->redirectToRoute('cup_cake/accueil.html.twig');

    }

}
