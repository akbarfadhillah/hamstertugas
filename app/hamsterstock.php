<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hamsterstock extends Model
{
    protected $table = 'hamsterstocks';
    protected $fillable = array('jenis','stok','harga');

    public function hamstermasuk() {
        return $this->hasMany('App\hamstermasuk', 'hamster_id', 'id');
    }

    public function hamsterkeluar() {
        return $this->hasMany('App\hamsterkeluar', 'hamster_id', 'id');
    }
}
