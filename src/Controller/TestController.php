<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/', name: 'test')]
    public function index(BlogRepository $blogRepository, EntityManagerInterface $em): Response
    {

//        $blogs = $blogRepository->findOneBy(['id' => 1]);
//        $blogs->setTitle('Title Ivan');
//        $em->flush();
//        exit;
//
//        $blog = (new Blog())
//            ->setTitle('Title')
//            ->setText('Text')
//            ->setAnything( 'Anything')
//        ;
//
//        $em->persist($blog);
//        $em->flush();

        return $this->redirectToRoute('app_blog_index');

//        exit();

//        return $this->render('test/index.html.twig', [
//            'controller_name' => 'TestController',
//        ]);
    }
}
