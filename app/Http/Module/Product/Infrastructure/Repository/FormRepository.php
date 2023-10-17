<?php

namespace App\Http\Module\Product\Infrastructure\Repository;

use App\Http\Module\Product\Domain\Model\Form;
use App\Http\Module\Product\Domain\Services\Repository\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

class FormRepository implements FormRepositoryInterface
{
    public function save(Form $product)
    {
        DB::table('forms')->upsert(

            [
                'email' => $product->email,
                'password' => $product->password,
                'name' => $product->name,
                'float' => $product->float,
                'image' => $product->image
            ],
        );
    }
}
