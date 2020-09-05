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
     * @SWG\Parameter(name="body", in="body", description="JSON Object", type="json",
     *       @SWG\Schema(
     *        type="object",   
     *        @SWG\Property(type="string", property="user", example="admin"),
     *        @SWG\Property(type="string", property="password", example="admin"),
     *        @SWG\Property(
     *             property="profiles",
     *             type="array",
     *             @SWG\Items(
     *                 type="object",
     *                 @SWG\Property(property="id", type="number"),
     *                 @SWG\Property(property="description", type="string",  example="ADMIN"),
     *             ),
     *        ),   
     *      )
     * )
     */
    public function store()
    {
        return $this->json([
            'message' => 'Store',
        ]);
    }
}
