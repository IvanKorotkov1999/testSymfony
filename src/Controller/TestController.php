<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test/{id}', name: 'test', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function index(int $id): Response
    {
        if ($id >= 12)
            echo 'Hello gays';
        else
            echo 'Ты слишком мал, пошел в вон';
        exit();

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
