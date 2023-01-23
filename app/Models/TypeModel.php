<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    use HasFactory;

    protected $table = 'type';
    protected $guarded = ['id'];

    public function assets(){
        return $this->hasMany(AssetModel::class, 'type_id', 'id');
    }
}
