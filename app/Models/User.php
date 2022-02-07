<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){

        return  $this->belongsTo ('App\Models\Role');
    }

    public function IsAdmin() {

        if($this->role->name_rol=='admin'){
            return true;
        } else{

            return false;
        }
    }

    public function IsClient() {

        if($this->role->name_rol=='client'){
            return true;
        } else{

            return false;
        }
    }

}


/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $status
 * @property $role_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
  //protected $primaryKey = 'product_id';

    public static $rules = array(
		//'id' => 'required',
		'name' => 'required',
		'email' => 'required',
		'status' => 'required',
        'role_id' => 'required',
    );

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','email','status','role_id'];


}
