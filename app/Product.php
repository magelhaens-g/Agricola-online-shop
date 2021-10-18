<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; 

class Product extends Model
{
    protected $guarded = [];
    // protected $fillable = ['stock'];

    public function getCover() {
        if (substr($this->pict1,0,3) == "/ima") {
            return $this->pict1;
        }
        return asset($this->pict1);
    }

    public function buyed() {
        return $this->belongsToMany(User::class, 'histories')->withTimestamps();
    }
}
