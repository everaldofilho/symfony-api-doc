<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/products", name="product")
 * @SWG\Tag(name="Products")
 * @SWG\Response(response=200, description="ok")
 * @SWG\Response(response=401, description="Precisa se autenticar")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="index", methods="GET")
     * @SWG\Parameter(name="description", in="query", type="string", description="Filtrar por descrição", default="notebook")
     * @SWG\Parameter(name="order", in="query", type="string", description="ordernar listagem", default="amount")
     */
    public function index()
    {
        return $this->json([
            'message' => 'products',
        ]);
    }

    /**
     * @Route("/upload", name="upload", methods="post")
     * @SWG\Parameter(name="image", in="formData", type="file", description="Selecione a imagem do produto")
     */
    public function update(Request $request)
    {
        $file = $request->files->get('image');
        $context = file_get_contents($file->getRealPath());
        $headers = [
            'Content-Type'     => 'image/jpeg',
            'Content-Disposition' => 'inline; filename="image.jpg"'
        ];
        return new Response($context, 200, $headers);
    }
}
