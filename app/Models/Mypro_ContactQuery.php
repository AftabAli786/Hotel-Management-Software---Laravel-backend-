<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypro_ContactQuery extends Model
{
    use HasFactory;
    protected $table = "mypro__contact_queries";
    protected $primaryKey = "id";
    protected $fillable = ['name','email','mobile_no','message']; 

}
