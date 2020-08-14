<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table="Books";
 protected $primaryKey="id";
 protected $fillable=['kode_buku','judul','deskripsi'];
}