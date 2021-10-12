<?php

namespace App\Controller;

use App\Database\Destination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjaxController extends AbstractController
{
    private Destination $destination;

    public function __construct(Destination $destination)
    {
        $this->destination = $destination;
    }

    public function ajaxRequest(Request $request): JsonResponse
    {
        $category = $request->get('category');
        $location = $request->get('location');
        $data = $this->destination->fetch($category, $location);
        return new JsonResponse($data);
    }
}