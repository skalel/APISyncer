<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgfven extends Model
{
    use HasFactory;

    protected $table = 'tgfven';

    public $timestamps = false;

    protected $fillable = [
      'TIPVEND',
      'APELIDO',
      'CODPARC',
      'CODREG',
      'COMVENDA',
      'COMGER',
      'PARTICMETA',
      'CODEMP',
      'CODFORM',
      'CODGER',
      'CODFUNC',
      'SENHA',
      'ATIVO',
      'DTALTER',
      'TIPCALC',
      'CODCARGAHOR',
      'CODCENCUSPAD',
      'PERCCUSVAR',
      'EMAIL',
      'DIACOM',
      'TIPVALOR',
      'CODUSU',
      'VLRHORA',
      'SALDODISP',
      'PROVACRESC',
      'DESCMAX',
      'ACRESCMAX',
      'GRUPORETENCAO',
      'GRUPODESCVEND',
      'COMCM',
      'RECHREXTRA',
      'TIPFECHCOM',
      'ATUACOMPRADOR',
    ];
}
