<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Use App\Crud;
class Crud extends Model
{
    protected $table = 'coba_lagi';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','isi'];
    public $timestamps = false;
}
