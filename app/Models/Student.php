<?php
/**
 * Created by PhpStorm.
 * User: anatoliy
 * Date: 13.01.16
 * Time: 15:33
 */

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Student
 * @package App\Models
 */
class Student extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'gender', 'group', 'email', 'marks', 'birthday', 'phone', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}