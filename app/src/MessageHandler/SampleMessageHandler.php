<?php

namespace App\MessageHandler;

use App\Message\SampleMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SampleMessageHandler implements MessageHandlerInterface
{
    public function __invoke(SampleMessage $message)
    {
        // Handling the message
        print_r('Handler handled the message!');
    }
}