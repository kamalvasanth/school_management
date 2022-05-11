<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $with    = ['term'];

    public function term() {
       return $this->belongsTo(Term::class,'term_id');
    }
}
