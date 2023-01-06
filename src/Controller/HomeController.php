<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/users', name: 'app_users')]
    public function users(CallApiService $callApiService): Response
    {
        return $this->render('home/users.html.twig', [
            'data' => $callApiService->getUsersData(),
        ]);
    }
    #[Route('/user/{id}', name: 'app_user')]
    public function user(CallApiService $callApiService,$id): Response
    {
        return $this->render('home/profile.html.twig', [
            'data' => $callApiService->getUserById($id)[0],
        ]);

    }


}
