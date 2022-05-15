<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public $table='posts';
    public $fillable=['id','userId','title','description','image'];

    public function hasuser(){
        return $this->belongsTo(User::class,'userId');
    }

}
