<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BooksController;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'book_name',
        'isbn',
        'language',
        'page_number',
        'writer_id',
        'publisher_id',
        'category_id'
    ];

    public function category() {
        return $this->hasOne('App\Models\Category','id','category_id');
    }

    public function writer() {
        return $this->hasOne('App\Models\Writer','id','writer_id');
    }

    public function publisher() {
        return $this->hasOne('App\Models\Publisher','id','publisher_id');
    }
}
