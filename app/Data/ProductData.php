<?php

namespace App\Data;


use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Lazy;
use Spatie\LaravelData\Optional;

class ProductData extends Data
{
    public function __construct(
      //
        public string $name,
        public string $description,
        public string $price,
        public string $category_id,
        public Lazy|Optional|CategoryData $category,
        public ?Carbon $created_at
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->input('name'),
            description: $request->input('description'),
            price: $request->input('price'),
            category_id: $request->input('category_id'),
            category: Optional::create(),
            created_at: $request->input('created_at'),
        );
    }

    public static function fromModel(Product $product): self
    {
        return new self(
            name: $product->name,
            description: $product->description,
            price: $product->price,
            category_id: $product->category_id,
            category: Lazy::create(fn() => CategoryData::from($product->category)) ,
            created_at: $product->created_at,
        );
    }

}
