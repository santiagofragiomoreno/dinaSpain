<?php
declare(strict_types=1);

namespace App\product\list\domain;

use Symfony\Component\Uid\Uuid;

final class Product
{
    private string $uuidProduct;
    private string $name;

    public function __construct(string $uuidProduct = null , string $name)
    {
        $this->uuidProduct = $uuidProduct ?? Uuid::v4()->toRfc4122();
        $this->name = $name;
    }

    public static function create(string $name): self
    {
        return new self($name);
    }
    public function getProductUUID(): string
    {
        return $this->uuidProduct;
    }
    public function getProductName(): string
    {
        return $this->name;
    }
}