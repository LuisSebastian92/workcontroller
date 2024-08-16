<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','price','description','image','status','user_id'];

    public function searchservices(){
        return $this->belongsTo(Searchservice::class,'searchservice_id');
    }
}
