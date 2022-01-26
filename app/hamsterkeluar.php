<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hamsterkeluar extends Model
{
    protected $table = 'hamsterkeluars';
    protected $fillable = array('tanggal','jumlah','hamster_id');

    public function hamsterstock() {
        return $this->belongsTo('App\hamsterstock', 'hamster_id', 'id');
    }
}
