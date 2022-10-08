<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class post extends Model
{
    use HasFactory;
    public $table='posts';
    public $fillable=['id','userId','title','description','image','locations','gender','skills','status'];

    public function hasuser(){
        return $this->belongsTo(User::class,'userId');
    }

//    public function getImageAttribute($value){
//        return Storage::url($value);
//    }

}
