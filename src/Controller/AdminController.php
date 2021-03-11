<?php

namespace App\Controller;

use App\Entity\CupCake;
use App\Form\CupcakeType;
use App\Repository\CupCakeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(CupCakeRepository $repository): Response
    {
        $cupcakes =$repository->findAll();
        return $this->render('admin/compte.html.twig', [
            'cupcakes' => $cupcakes,
        ]);
    }
    
    /**
     * @Route("/admin/creation", name="creationCupcake")
     * @Route("/admin/cupcake/{id}", name="modificationCupcake", methods="GET|POST")
     */
    public function ajoutEtModif(CupCake $cupcake = null, Request $request, EntityManagerInterface $entityManager): Response
    {  
            if(!$cupcake){
                $cupcake = new CupCake();
            }
            $form = $this->createForm(CupcakeType::class,$cupcake);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $modif = $cupcake->getId() !== null; // On verifie si l'ID existe
                $entityManager->persist($cupcake);
                $entityManager->flush();
                $this->addFlash("success", ($modif) ? "La modification a été effectuée" : "L'ajout a été effectuée");
                // Message a afficher : success. si $modif est vrai (?) alors message (:) sinon ce message
                return $this->redirectToRoute("admin");
            }
            return $this->render('admin/ajouter.html.twig', [
                'cupcake'=>$cupcake,
                'form'=> $form->createView(),
                "isModification" => $cupcake->getid() !== null
            ]);
    }

    /**
     * @Route("admin/cupcake/{id}", name="supprimerCupcake", methods="delete")
     */
    public function delete(CupCake $cupcake, Request $request, EntityManagerInterface $entityManager): Response
            { 
                if($this->isCsrfTokenValid("SUP". $cupcake->getId(),$request->get('_token'))){
                    $entityManager->remove($cupcake);
                    $entityManager->flush();
                    // Stock le message dès qu'un flush est fait 
                    $this->addFlash("success", "La suppression a été effectuée");
                    return $this->redirectToRoute("admin");
                }    
    }
}
