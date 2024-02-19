<?php
declare(strict_types=1);

namespace App\product\list\infrastructure\controllers;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
final class ProductsListerGetController
{
    #[Route('product-lister', name: 'products-lister', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(["Hola mundo"]);
    }
}