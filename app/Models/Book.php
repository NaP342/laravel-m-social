<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'author',
        'price',
    ];

    public function rules()
    {
        return [
            'name' => ['required'],
            'author' => ['required'],
            'price' => ['required'],
        ];
    }

    /**
     * The authors that belong to the books.
     */
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
}
