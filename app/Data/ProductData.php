<?php

namespace App\Data;


use App\Models\Product;
use Carbon\Carbon;
use Spatie\LaravelData\Data;

class ProductData extends Data
{
    public function __construct(
      //
        public string $name,
        public string $description,
        public string $price,
        public CategoryData $category,
        public ?Carbon $created_at
    ) {}

    public static function fromModel(Product $product): self
    {
        return new self(
            name: $product->name,
            description: $product->description,
            price: $product->price,
            category: CategoryData::from($product->category),
            created_at: $product->created_at,
        );
    }
}
