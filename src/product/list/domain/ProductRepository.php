<?php
declare(strict_types=1);
namespace App\product\list\domain;

interface ProductRepository
{
    public function searchAllProducts(): array;
}