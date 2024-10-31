<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aplikasi extends Model
{
     use HasFactory, HasUuids;

    protected $fillable = ["nama","pengguna_id"];

    public function fakultas(){
        return $this->belongsTo(penggunaAplikasi::class, 'pengguna_id');
}
}