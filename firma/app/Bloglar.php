<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloglar extends Model
{
    protected $table='bloglar';
    protected $fillable=['baslik','icerik','yazar','etiketler','resim','slug','kisa_icerik'];
}
