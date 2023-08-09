<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgfnat extends Model
{
    use HasFactory;

    protected $table = 'tgfnat';

    public $timestamps = false;

    protected $fillable = [
      'ALIQCOFINS',
      'ALIQPIS',
      'ANALITICA',
      'ATIVA',
      'CODCENCUS',
      'CODCTACTB',
      'CODCTACTB2',
      'CODGRUPONAT',
      'CODHISTCTB',
      'CODHISTCTB2',
      'CODNAT',
      'CODNATPAI',
      'CODSERVUNICO',
      'CSTCOFINS',
      'CSTPIS',
      'DECVLR',
      'DESCRNAT',
      'FORMULA',
      'GRAU',
      'GRUPOMKP',
      'INCRESULT',
      'NATBCCRED',
      'REGIMEEFD',
      'SUBGRUPOMKP',
      'TIPNAT',
      'CODCTACTBEFD',
      'AD_IMPLIGACAO',
      'AD_IDEXTERNO',
      'RECADIANTRURAL',
      'GERALCDPR',
      'NATEFDCONTM410M810',
    ];
}
