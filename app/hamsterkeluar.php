<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hamsterkeluar extends Model
{
    protected $table = 'hamsterkeluars';
    protected $fillable = array('jenis','tanggal','jumlah','hamster_id');

    public function hamsterkeluar() {
        return $this->belongsTo('App\hamsterstock', 'hamster_id', 'id');
    }
}
