<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BanniereRestaurationController extends AbstractController
{
    /**
     * @Route("/banniere/restauration", name="app_banniere_restauration")
     */
    public function index(): Response
    {
        return $this->render('banniere_restauration/index.html.twig', [
            'controller_name' => 'BanniereRestaurationController',
        ]);
    }
}
