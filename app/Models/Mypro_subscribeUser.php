<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mypro_subscribeUser extends Model
{
    use HasFactory;
    protected $table = "mypro_subscribe_users";
    protected $primaryKey = "id";
    protected $fillable =["email"];
}
