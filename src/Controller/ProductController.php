<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;

/**
 * @Route("/products", name="product")
 * @SWG\Tag(name="Products")
 * @SWG\Response(response=200, description="ok")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="index", methods="GET")
     */
    public function index()
    {
        return $this->json([
            'message' => 'products',
        ]);
    }
}
