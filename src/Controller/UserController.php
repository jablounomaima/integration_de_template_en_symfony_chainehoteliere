<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/page', name: 'user_controller')]
class UserController extends AbstractController
{
    #[Route('/dd', name: 'app_admin')]
    public function listUsers(): Response
    {

        return $this->render('index.html.twig', [

]);
}







}



