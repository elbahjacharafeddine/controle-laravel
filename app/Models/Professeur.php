<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professeur extends Model
{
    use HasFactory;
    protected $table = 'professeurs';
        protected $fillable=[
            'id',
            'user_id',
            'first_name',
            'last_name',
            'birthdate',
            'genre',
            'Registration_number',
            'role',
            'Department',
            'sector',
            'number_phone',
            'email',
            'city',
            'state',
            'zip_code',
            'full_address',
        ];

        public function userProfesuuer(){
            return $this->belongsTo(User::class);
        }
}
