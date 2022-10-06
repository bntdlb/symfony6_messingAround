<?php

namespace App\Controller;

use App\Message\SampleMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class SampleController extends AbstractController
{
    #[Route('/sample', name: 'app_sample')]
    public function index(MessageBusInterface $bus): Response
    {
        $message = new SampleMessage('My sample message');
        $bus->dispatch($message);

        return new Response(sprintf('Message with content %s was published', $message->getContent()));
    }
}
