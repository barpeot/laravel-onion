<?php

namespace App\Http\Module\Product\Application\Services\CreateProduct;

use App\Http\Module\Product\Domain\Model\Form;
use App\Http\Module\Product\Infrastructure\Repository\FormRepository;

class CreateFormService
{

    public function __construct(
        private FormRepository $product_repository
    )
    {
    }

    public function execute(CreateFormRequest $request){
        $product = new Form(
            $request->nama,
            $request->price,
            $request->description,
        );

        $this->product_repository->save($product);
    }
}
