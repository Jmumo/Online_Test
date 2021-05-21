<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultsResponse extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function results(){

        $this->belongsTo(User::class);
    }

    //implement
    //every question fetch user results
    public function user(){

        return $this->belongsTo(User::class);
    }

    public function question(){
        
    }
}
