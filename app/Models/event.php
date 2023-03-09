<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $hidden= [
        'kintore_id','created_at'];
    protected $fillable = ['benchpress','dumbbellfly','pushup','sideraise',];
    public function syumokus(){
        return $this->belongsTo('App\Model\kintore');
    }
}
