<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

    protected $fillable = array('Nombre','Password');
    protected $hidden = array('Password');

    protected $table = "Usuarios";
    protected $primaryKey = "Id";
    public  $timestamps = false;

    public static $rules = array(
        'Nombre' => 'required',
        'Password' => 'required'
    );

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->attributes['Password'];
    }


    public static function validate($data) {
        return Validator::make($data,static::$rules);
    }

}
