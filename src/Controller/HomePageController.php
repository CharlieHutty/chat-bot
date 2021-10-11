<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Database\Destination;

class HomePageController extends AbstractController
{
    private Destination $destination;

    public function __construct(Destination $destination)
    {
        $this->destination = $destination;
    }

	public function home(): Response
	{
        dump($this->destination->fetch());
		return $this->render('test.html.twig');
	}
}