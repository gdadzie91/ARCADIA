<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoBannerController extends AbstractController
{
    /**
     * @Route("/video/banner", name="app_video_banner")
     */
    public function index(): Response
    {
        return $this->render('video_banner/index.html.twig', [
            'controller_name' => 'VideoBannerController',
        ]);
    }
}
