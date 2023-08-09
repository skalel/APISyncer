<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tgfest extends Model
{
    protected $fillable = [
        'CODPROD',
        'CODLOCAL',
        'CONTROLE',
        'CODPARC',
        'TIPO',
        'RESERVADO',
        'ESTMIN',
        'ESTMAX',
        'ATIVO',
        'CODBARRA',
        'DTVAL',
        'PERCPUREZA',
        'PERCGERMIN',
        'ESTOQUE',
        'DTFABRICACAO',
        'STATUSLOTE',
        'MD5PAF',
        'DTENTRADA',
        'QTDPEDPENDEST',
        'WMSBLOQUEADO',
        'PERCVC',
        'CODAGREGACAO',
    ];
}