<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgftit extends Model
{
    use HasFactory;

    protected $table = 'tgftit';

    public $timestamps = false;

    protected $fillable = [
      'IMPCOMPROVANTE',
      'AJUSTAVP',
      'TPAGNFCE',
      'UTILIZAPOS',
      'ATIVO',
      'BAIXACERTO',
      'CARENCIA',
      'CARTAODESC',
      'CARTAOTAXA',
      'CODCTACTB',
      'CODCTACTB2',
      'CODCTACTB3',
      'CODDETRECGNRE',
      'CODGRUPOTIPTIT',
      'CODMOEDA',
      'CODPARCTEF',
      'CODPRODGNRE',
      'CODRECGNRE',
      'CODTIPTIT',
      'CONFERENCIA',
      'DESCRTIPTIT',
      'ESPDOC',
      'EXIBBAIX',
      'EXIGBAIXAACERTO',
      'EXPGRS',
      'EXPTES',
      'FASTBAIXA',
      'FASTUSA',
      'FISCAL',
      'GRUPOLIMCRED',
      'IMAGEM',
      'IMPBOLRENEG',
      'INDTIT',
      'INFCMC7',
      'PERCCUSVAR',
      'PERCJUROS',
      'PERCMULTA',
      'PRAZO',
      'SUBTIPOVENDA',
      'TRANSFBAIX',
      'TRANSFDIF',
      'TRANSFPEND',
      'VALIDAQTDMAXTITVENCIDOS',
      'VLRCUSVAR',
      'TIPDOCRURAL',
      'OPERACAOCTF',
      'TIPVENC',
      'DIAVENC',
      'CODBANDEIRAECONECT',
      'CODFINALIZADORA',
      'GRUPOFINALIZADORA',
      'INTEGRAECONECT',
      'CONVENIOECONECT',
      'NROPARCELAS',
      'ARREDPRIMEIRAPARC',
      'QTDPARCELCTF',
      'RECEBANTAPROV',
      'TIMUSADOLOCACAO',
      'TRUNCPARCELA',
      'PROIBIMPBOL',
      'ALTERASIMULTPV',
      'DESCRTPAGNFCE',
      'INDRECEFDCONT',
      'INFCOMPLEFDCONT',
      'CONSDIASUTEIS',
      'CREDENCIADORACFE',
      'UTILIZAPIXSITEF',
    ];
}
