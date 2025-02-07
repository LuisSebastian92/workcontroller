<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'file',
        'status',
        'user_id',
        'phone'

    ];
    public function searchjobs(){
        return $this->belongsTo(Searchjob::class,'searchjob_id');
    }
}
