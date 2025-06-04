<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


final class TP1Ex1Q1Controller extends AbstractController
{
    #[Route('/tp1ex1q1', name: 'app_t_p1_ex1_q1')]
    public function index(): Response
    {
        return $this->render('tp1_ex1_q1/index.html.twig', [
            'controller_name' => 'TP1Ex1Q1Controller',
        ]);
    }

    #[Route('/dateheure', name: 'app_date_heure')]
    public function dateHeure(): Response
    {
        // Création de la date
        $date = new \DateTime();

        // Envoi de la date à la vue Twig
        return $this->render('tp1_ex1_q1/date_heure.html.twig', [
            'datetime' => $date->format('Y-m-d H:i:s'),
        ]);
    }

    #[Route('formulaire', name: 'accueil')]
public function formulaire(): Response
{
    return $this->render('tp1_ex1_q1/formulaire.html.twig');
}

#[Route('/bonjour', name: 'bonjour')]
public function bonjour(Request $request): Response
{
    $prenom = $request->query->get('prenom');
    $nom = $request->query->get('nom');
    $date = new \DateTime();

    return $this->render('tp1_ex1_q1/bonjour.html.twig', [
        'prenom' => $prenom,
        'nom' => $nom,
        'datetime' => $date->format('Y-m-d H:i:s'),
    ]);
}

}