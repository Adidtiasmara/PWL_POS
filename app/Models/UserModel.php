<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    /* The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['level_id', 'username', 'nama']; //tanpa password jadinya error
    
}
