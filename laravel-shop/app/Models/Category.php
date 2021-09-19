<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'status'
    ];
    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
