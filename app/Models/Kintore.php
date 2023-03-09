<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kintore extends Model
{
    use HasFactory;
    // protected $table='users';
    public $timestamps = false;
    protected $fillable = ['idname', 'email', 'pass'];
    public function kintores(){
        return $this->hasOne('App\Models\event');

    }
}
