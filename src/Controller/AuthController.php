<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;

/**
 * @Route("/auth", name="auth")
 * @SWG\Tag(name="Authentication")
 * @SWG\Response(response=200, description="OK")
 * @SWG\Response(response=401, description="Precisa se autenticar")
 */
class AuthController extends AbstractController
{
    /**
     * @Route("/login", name="login", methods="POST")
     */
    public function index()
    {
        return $this->json([
            'token' => uniqid(),
        ]);
    }
}
