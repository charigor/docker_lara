<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'short_desc',
        'desc',
        'price'
    ];
    /**
     * Get the post's image.
     */
    public function image()
    {
        return $this->morphOne(Images::class, 'imageable');
    }
}
