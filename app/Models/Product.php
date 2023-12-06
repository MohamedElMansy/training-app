<?php

namespace App\Models;

use App\Data\ProductData;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\WithData;
use Venturecraft\Revisionable\RevisionableTrait;

class
Product extends Model
{
    use CrudTrait;
    use HasFactory;
    use RevisionableTrait;
    use WithData;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    protected $guarded = ['id'];
    protected $fillable = ['name','description','image','price','category_id'];
    protected $dataClass=ProductData::class;

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function identifiableName()
    {
        return $this->name;
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    /**
     * Get the category that owns the Product
     *
     */
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
