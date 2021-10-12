<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HomePageController extends AbstractController
{
	public function home(Request $request): Response
	{
        return $this->render('home.html.twig');
	}
}