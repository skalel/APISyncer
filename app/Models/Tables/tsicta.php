<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsicta extends Model
{
    use HasFactory;

    protected $table = 'tsicta';

    public $timestamps = false;

    protected $fillable = [
      'NUMCLIENTE',
      'SALDOREAL',
      'SEQREM',
      'SEQREM2',
      'TAXA',
      'TIPOIMPRESSORA',
      'VLRMINBOLETA',
      'ZERARAUT',
      'IDCLIENTE',
      'CODAGEBENEF',
      'CODCTABENEF',
      'CODCONTARURAL',
      'NUCONTRATO',
      'CAMPOLIVRE',
      'RESTOSUBST2',
      'DIGITOSUBST1',
      'RESTOSUBST3',
      'RESTOSUBST1',
      'SUBRESTMODULO',
      'TIPMULTIPSOMA',
      'MULTIPNOSSONUM',
      'DIGITOSUBST3',
      'NOSSONUMERO',
      'TIPMODNOSSNUM',
      'DIGITOSUBST2',
      'NOSSONUMATIVO',
      'LINHADIGATIVO',
      'CONVENIO',
      'CTADEFEMIBOL',
      'CTAMINBOLETA',
      'DESCRICAO',
      'DIASPROT',
      'DTALTER',
      'DTIMPLANT',
      'EMITEBOLETA',
      'EXCLUSIVA',
      'IMPBOLETA',
      'INSTRUCAOI',
      'INSTRUCAOII',
      'MODALIDADE',
      'MODBOLETA',
      'NUMCHEQ',
      'NURFEMODCHEQG',
      'REMBCO',
      'REMBCOMAX',
      'REMFINAL',
      'REMFINAL2',
      'SALDOBCO',
      'ATIVA',
      'CARTEIRA',
      'CATEGLANCHQ',
      'CLASSE',
      'CODAGE',
      'CODBCO',
      'CODCORRBCO',
      'CODCTABCO',
      'CODCTABCOINT',
      'CODCTABCOINTREM',
      'CODCTACTB',
      'CODEMP',
      'CODMOEDA',
      'CODOPEREXCL',
      'CODPARC',
      'CODUSU',
      'BJBBAIBOLPAG',
      'CODCTABAIXA',
      'CODLANCBAIXABOLRAP',
      'CODTIPOPERBAIXABOLRAP',
      'PJBCHAVE',
      'PJBCONBAIXCRED',
      'PJBCRED',
      'TIPOBOLETO',
      'LOGOURL',
      'APIBAIXAAUTOMATICA',
      'APICONCILIACAOAUTOMATICA',
      'DATAMULTA',
      'DIASMULTA',
      'DIASPARANEGATIVACAO',
      'DIASPROTESTO',
      'DTREGCONTA',
      'ORGAONEGATIVADOR',
      'TIPOJUROS',
      'TIPOMULTA',
      'VALORJUROS',
      'VALORMULTA',
      'INDICADORPIX',
      'ACEITATITULOVENCIDO',
      'IDAPIBANCO',
      'RECEBIMENTODIAS',
      'RECEBIMENTOPARCIAL',
      'STATUSAPI',
      'TIPOAPIBOLETO',
      'VARIACAO',
      'IDSEQBOL',
      'CONTABILIZARDIAS',
      'INSTRUCAONEGATIVACAO',
      'INSTRUCAOPROTESTO',
      'DESCONSLCDPR',
      'NUMCONTARURAL',
      'CHAVEPIX',
      'QTDDIASVALPIX',
      'URLPIX',
      'CHAVEAPIPIX',
      'CONCAUTRECEBPIX',
      'IDCLIPIX',
      'MENADICPIX',
      'NURFEMODBOLETO',
      'SENCLIPIX',
      'TITINFADICPIX',
    ];
}
