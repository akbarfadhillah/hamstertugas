<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hamstermasuk extends Model
{
    protected $table = 'hamstermasuks';
    protected $fillable = array('jenis','tanggal','jumlah','hamster_id');

    public function hamsterstock() {
        return $this->belongsTo('App\hamsterstock', 'hamster_id', 'id');
    }
}
