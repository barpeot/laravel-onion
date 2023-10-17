<?php

namespace App\Http\Module\Product\Application\Services\CreateProduct;

class CreateProductRequest
{
    public function __construct(
        public string $email,
        public string $password,
        public string $name,
        public float $float,
        public string $image
    )
    {
    }
}
