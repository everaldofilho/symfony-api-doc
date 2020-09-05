<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;

/**
 * @Route("/users", name="user")
 * @SWG\Tag(name="Users")
 * @SWG\Response(response=200, description="OK")
 * @SWG\Response(response=401, description="Precisa se autenticar")
 * @SWG\Response(response=403, description="Não tem permissão")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="index", methods="GET")
     */
    public function index()
    {
        return $this->json([
            'message' => 'List',
        ]);
    }

    /**
     * @Route("/{id}", name="show", methods="GET")
     */
    public function show()
    {
        return $this->json([
            'message' => 'Show',
        ]);
    }

    /**
     * @Route("/{id}", name="update", methods="PUT")
     */
    public function update()
    {
        return $this->json([
            'message' => 'Update'
        ]);
    }

    /**
     * @Route("/", name="store", methods="POST")
     */
    public function store()
    {
        return $this->json([
            'message' => 'Store',
        ]);
    }
}
