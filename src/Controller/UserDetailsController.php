<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserDetailsController extends AbstractController
{
    public function getUserName(): Response
    {
        date_default_timezone_set('Europe/London');
        if(isset($_POST["user-name"])) {
            $date = date('H:i:s');
            if ($date < '12:00:00') {
                $message = 'Good Morning';
            } else {
                $message = 'Good Afternoon';
            }
            if(isset($_POST['user-name'])) {
                $name = $_POST['user-name'];
                $message = $message .', '. $name;
                return new Response($message);
            }
        }
        return new Response("
            name was not provided
        ");
    }
}