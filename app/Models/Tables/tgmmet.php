<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgmmet extends Model
{
    use HasFactory;

    protected $table = 'tgmmet';

    protected $primaryKey = ['CODMETA', 'DTREF', 'CODPROD', 'CODGRUPOPROD', 'CODLOCAL', 'CODPROJ', 'CODCENCUS', 'CODNAT', 'CODREG', 'CODGER', 'CODVEND', 'CODPARC', 'CODUF', 'CODCID', 'CODPAIS', 'CODTIPPARC', 'CONTROLE', 'MARCA', 'DIA', 'CODEMP', 'CODGRUPONAT'];
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
      'CODGRUPONAT',
      'CODGRUPOPROD',
      'CODLOCAL',
      'CODMETA',
      'CODNAT',
      'CODPAIS',
      'CODPARC',
      'CODPROD',
      'CODPROJ',
      'CODREG',
      'CODTIPPARC',
      'CODUF',
      'CODVEND',
      'CODVOL',
      'COMPROMISSODESP',
      'CONTROLE',
      'DIA',
      'DTREF',
      'MARCA',
      'PERCAVISO',
      'PERCENTUAL',
      'PREVDESP',
      'PREVREC',
      'QTDPREV',
      'QTDREAL',
      'REALDESP',
      'REALREC',
      'REDUCAODESP',
      'SEMANAMES',
      'SUPLEMENTODESP',
      'TIPOMSG',
      'TOTALAUTINV',
      'TRANSFDESP',
      'TRANSFSALDODESP',
      'CODCID',
      'CODEMP',
      'ANALITICO',
      'ANTECIPDESP',
      'CODCENCUS',
      'CODGER',
      'DHALTER',
    ];
}
