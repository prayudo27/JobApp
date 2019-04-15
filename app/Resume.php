<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'name', 'email', 'tgl_lahir', 'jenis_kelamin', 'status',
        'agama', 'nik', 'alamat', 'file', 'user_id',
    ];

    public function User()
    {
        $this->belongsToMany('App\user', 'user_id');
    }
}
