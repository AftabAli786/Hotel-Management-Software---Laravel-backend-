<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypro_service extends Model
{
    use HasFactory;
    protected $table ="mypro_services";
    protected $primaryKey = "id";
    protected $fillable = ['title','image','description'];
}
