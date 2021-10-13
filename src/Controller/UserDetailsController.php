<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserDetailsController extends AbstractController
{
    public function getUserName(): Response
    {
        if(isset($_POST["user-name"])) {
            if(isset($_POST['user-name'])) {
                $name = $_POST['user-name'];
                return new Response($name);
            }
        }
        return new Response("
            name was not provided
        ");
    }
}