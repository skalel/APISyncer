<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsiemp extends Model
{
    use HasFactory;

    protected $table = 'tsiemp';

    public $timestamps = false;

    protected $fillable = [
      'COREMPRESA',
      'RAZAOSOCIALCOMPLETA',
      'QTDACESSOS',
      'RNTRC',
      'ATIVECON',
      'CARGAS',
      'CEP',
      'CGC',
      'CODBAI',
      'CODCID',
      'CODCNL',
      'CODEMP',
      'CODEMPMATRIZ',
      'CODEND',
      'CODMUN',
      'CODPARC',
      'CODREGTRIB',
      'COMISSOES',
      'COMPLEMENTO',
      'CONTABILIDADE',
      'COOPERATIVA',
      'CPFRESP',
      'DTCONVSOC',
      'DTREGJUNTA',
      'DUPLIV',
      'EMAIL',
      'EMPAGRUPARGOL',
      'ESTOQUE',
      'FAX',
      'FINANCEIRO',
      'FOLHAPAGTO',
      'HOMEPAGE',
      'INSCESTAD',
      'INSCMUN',
      'LATITUDE',
      'LIMCURVA_B',
      'LIMCURVA_C',
      'LIVROSFISCAIS',
      'LOGOMARCA',
      'LONGITUDE',
      'MODELONFDES',
      'NATESTAB',
      'NATJUR',
      'NOMEFANTASIA',
      'NUMEND',
      'NUMPROPR',
      'PRINCTITULAR',
      'PRODUCAO',
      'RAMOATIV',
      'RAZAOABREV',
      'RAZAOSOCIAL',
      'REGJUNTACOM',
      'SERIENFDES',
      'SIMPLES',
      'SIMPLESNACNAUF',
      'SUPDECISAO',
      'TELEFONE',
      'TELEX',
      'TIPOREGRA',
      'TIPOSN',
      'PRODUTORRURAL',
      'EMPIDENOTAS',
      'USARAZAOSOCIAL',
      'ACDINTISENMULTA',
      'CLASSTRIB',
      'INDCONSTR',
      'INDCOOP',
      'INDOPCCP',
      'INDSITESP',
      'INFOOBRA',
      'COTM',
      'CNAEPREPON',
      'DHCONSITIMEND',
      'NUMTAF',
      'NUREST',
    ];
}
