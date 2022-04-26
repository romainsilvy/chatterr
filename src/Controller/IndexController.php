<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MessageRepository;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(MessageRepository $messageRepository): Response
    {
        //retrieve all the messages 
        $messages = $messageRepository->findAll();
        //display the messages

        return $this->render('index/index.html.twig', [
            'messages' => $messages,
        ]);
    }
}