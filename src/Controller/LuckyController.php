<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;   

class LuckyController extends AbstractController
{
    #[Route('/lucky/number', name: 'lucky_number', methods: ['GET'])]
    //#[Route('/lucky/number', name: 'number', methods: ['GET'])]
    public function number(): Response
    {
        $number = random_int(0, 100);
        
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}