<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    // Page d'accueil (DOIT être en Anglais )
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'nom' => 'VOTRE_NOM',         // [cite: 45]
            'prenom' => 'VOTRE_PRENOM',   // [cite: 45]
            'groupe' => 'BUT1 RT - G1',   // [cite: 45]
        ]);
    }

    // Page CV (DOIT être en Français [cite: 77])
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('/cv.html.twig');
    }

    // Page E-Portfolio (DOIT être en Français [cite: 77])
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('/portfolio.html.twig');
    }

    // Page Loisirs (liée au container de l'accueil [cite: 47])
    #[Route('/hobbies', name: 'app_hobbies')]
    public function hobbies(): Response
    {
        return $this->render('/hobbies.html.twig');
    }
}