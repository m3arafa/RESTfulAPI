<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];

    protected $fillable = [
        'name',
        'description',
    ];
    /** to hide pivot column from the collection */
    protected $hidden = [
        'pivot'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
