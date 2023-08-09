<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tcbpla extends Model
{
    use HasFactory;

    protected $table = 'tcbpla';

    public $timestamps = false;

    protected $fillable = [
      'PODELANCTOMANUAL',
      'CODCTACTBSUBST',
      'DTINCLUSAO',
      'DTALTER',
      'CODUSU',
      'DTINATIV',
      'DESCRCTA',
      'CODCTACTBPAI',
      'CODEMP',
      'DTBASECONVMOEDA',
      'GRAU',
      'OBSERVACOES',
      'PLANTA',
      'PROCESSO',
      'PRODUTO',
      'PROJOBRIG',
      'CODGRUPOCTA',
      'CONVSALDOMOEDA',
      'CTACTB',
      'CODCTACTB',
      'ANALITICA',
      'ATIVA',
      'BEMORIGINAL',
      'BEMOUTROS',
      'BEMRESREAV',
      'CENCUSOBRIG',
      'CODRAZAUX',
      'TABELA',
      'TIPSALALUR',
      'LALUR_A',
      'NATUREZAEFD',
      'LALUR_A_CRED',
      'RECDESP',
      'TABELACRED',
      'CLASSIFCSLL',
      'CLASSIFIRPJ',
      'ADICOESCSLL',
      'ADICOESIRPJ',
      'CONRESULTCSLL',
      'CONRESULTIRPJ',
      'EXCLUSOESCSLL',
      'EXCLUSOESIRPJ',
      'PAT4IRPJ',
      'ZERACRCSLL',
      'ZERACRIRPJ',
      'CODCONTA',
      'CODLALURB',
      'DESCRCONTA',
      'INDTRIBLALURB',
      'AD_IDEXTERNO',
      'TABELALALURB',
  ];
}
