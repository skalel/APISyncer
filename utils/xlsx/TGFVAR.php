<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tgfvar extends Model
{
    protected $fillable = [
        'SEQUENCIA',
        'NUNOTAORIG',
        'SEQUENCIAORIG',
        'QTDATENDIDA',
        'CUSATEND',
        'ORDEMPROD',
        'STATUSNOTA',
        'FIXACAO',
        'NROMEMORANDO',
        'NROREGEXPORT',
        'NROATOCONCDRAW',
    ];
}