<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrintController extends AbstractController
{
    #[Route('/print', name: 'app_print')]
    public function index(): Response
    {
        return $this->render('print/index.html.twig', [
            'controller_name' => 'PrintController',
        ]);
    }
}
