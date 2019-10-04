<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    protected $table = "personas";

    protected $fillable = [
        'user_id','nombre', 'apellido','ci','celular'
    ];
    public function user(){
        return $this->belongsTo("App\User");
    }
}
