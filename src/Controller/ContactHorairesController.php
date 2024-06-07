<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactHorairesController extends AbstractController
{
    /**
     * @Route("/contact/horaires", name="app_contact_horaires")
     */
    public function index(): Response
    {
        return $this->render('contact_horaires/index.html.twig', [
            'controller_name' => 'ContactHorairesController',
        ]);
    }
}
