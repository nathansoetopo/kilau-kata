<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetModel extends Model
{
    use HasFactory;

    protected $table = 'assets';
    protected $guarded = ['id'];

    public function book(){
        return $this->hasOne(BookModel::class, 'book_id', 'id');
    }

    public function author(){
        return $this->belongsTo(AuthorModel::class, 'author_id');
    }

    public function category(){
        return $this->belongsTo(CategoriesModel::class, 'category_id');
    }

    public function type(){
        return $this->belongsTo(TypeModel::class, 'type_id');
    }

    public function publisher(){
        return $this->belongsTo(PublisherModel::class, 'publisher_id');
    }
}
