<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hamstermasuk extends Model
{
    protected $table = 'hamstermasuks';
    protected $fillable = array('jenis','tanggal','jumlah','hamster_id');

    public function hamstermasuk() {
        return $this->belongsTo('App\hamstermasuk', 'hamster_id', 'id');
    }
}
