<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgfest extends Model
{
    use HasFactory;

    protected $table = 'tgfest';

    protected $primaryKey = ['CODEMP', 'CODLOCAL', 'CODPROD', 'CONTROLE', 'TIPO', 'CODPARC'];
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
      'ATIVO',
      'CODBARRA',
      'CODPROD',
      'CONTROLE',
      'CODLOCAL',
      'CODPARC',
      'ESTDOCAWMS',
      'DTFABRICACAO',
      'DTVAL',
      'ESTMAX',
      'ESTMIN',
      'ESTOQUE',
      'PERCGERMIN',
      'PERCPUREZA',
      'RESERVADO',
      'STATUSLOTE',
      'TIPO',
      'WMSBLOQUEADO',
      'CODEMP',
      'CODAGREGACAO',
    ];
}
