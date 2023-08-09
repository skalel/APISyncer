<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tgftab extends Model
{
    protected $fillable = [
        'CODTAB',
        'DTVIGOR',
        'CODREG',
        'DTALTER',
        'PERCENTUAL',
        'FORMULA',
        'CODTABORIG',
        'JAPE_ID',
        'UTILIZADECCUSTO',
    ];
}