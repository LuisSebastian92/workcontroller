<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searchjob extends Model
{
    use HasFactory;
    protected $fillable=['work_id'];
    public function works(){
        return $this->hasMany(Work::class,'work_id');
    }
    
}
