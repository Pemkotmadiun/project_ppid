<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "profile";
    protected $fillable = [
        'kategori_profie','deskripsi', 'user_id'];

}
