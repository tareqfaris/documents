<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function deocuments(){
        return $this->hasMany(\App\Models\Document::class,'department_id');
    }
}
