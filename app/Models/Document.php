<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function department(){
        return $this->belongsTo(\App\Models\Department::class,'department_id');
    }

    public function attachments(){
        return $this->hasMany(\App\Models\Attachment::class,'document_id');
    }
}
