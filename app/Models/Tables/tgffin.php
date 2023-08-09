<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgffin extends Model
{
    use HasFactory;

    protected $table = 'tgffin';

    public $timestamps = false;

    protected $fillable = [
      'VLRVENDOR',
      'VLRVARCAMBIAL',
      'VLRTROCO',
      'VLRTOTALCALC',
      'VLRPROV',
      'VLRMULTANEGOC',
      'VLRMULTALIB',
      'VLRMULTAEMBUT',
      'VLRMULTACALC',
      'VLRMULTA',
      'VLRMOEDABAIXA',
      'VLRMOEDA',
      'VLRLIQUIDO',
      'VLRLANCORIG',
      'VLRJUROSMAISMULTA',
      'VLRJURONEGOC',
      'VLRJUROLIB',
      'VLRJUROEMBUT',
      'VLRJUROCALC',
      'VLRJURO',
      'VLRISS',
      'VLRIRF',
      'VLRINSS',
      'VLRICMS',
      'VLRGNREDOIS',
      'VLRFATCARTAO',
      'VLRDESDOBCALC',
      'VLRDESDOB',
      'VLRDESCEMBUT',
      'VLRDESCCALC',
      'VLRDESC',
      'VLRCHEQUE',
      'VLRCESSAO',
      'VLRBAIXA',
      'VLRATUAL',
      'VLRALIBERAR',
      'VALORPRESENTE',
      'TROCOPDV',
      'TPAGNFCE',
      'TIPMULTA',
      'TIPMARCCHEQ',
      'TIPJURO',
      'TIPAPURACAO',
      'TIMVLRJUROCONTRATO',
      'TIMVLRCORRMONET',
      'TIMVLRAMORTCONTRATO',
      'TIMVLRALUGUEL',
      'TIMVENDALOTE',
      'TIMVENDAIMV',
      'TIMTXADMGERALU',
      'TIMTIPOINTERMED',
      'TIMSAC',
      'TIMRESCISAOLTV',
      'TIMRESCISAOLOC',
      'TIMREPPARCIAL',
      'TIMREPINTELIGENTE',
      'TIMRENEGLOTE',
      'TIMRENEGIMV',
      'TIMRENEGCANCLOTE',
      'TIMPARCELA',
      'TIMORIGRENEG',
      'TIMORIGEM',
      'TIMNUMREG',
      'TIMNUFINORIG',
      'TIMNOMEADVOGADO',
      'TIMNEGOCIACAO',
      'TIMIMOVEL',
      'TIMFINGARANTORIG',
      'TIMFECHAMENTOALU',
      'TIMFECHAMENTO',
      'TIMESTAGIO',
      'TIMDTREPPARCIAL',
      'TIMDTREPASSE',
      'TIMDTIMPBOLLOCAL',
      'TIMDTIMPBOL',
      'TIMDHGERREPPARCIAL',
      'TIMDHGERREPASSE',
      'TIMDHBAIXA',
      'TIMDATADEJUR',
      'TIMCONTRATOLTV',
      'TIMCONTRATOLOC',
      'TIMCONTRATOADM',
      'TIMCONTAREP',
      'TIMCONTALANC',
      'TIMBLOQUEADA',
      'SUBTIPOVENDA',
      'STATUSLIB',
      'STATUSGNRE',
      'SITESPECIALRESP',
      'SERIENOTACOMPL',
      'SERIENOTA',
      'SERIENFDES',
      'SERIEENTSAFFIX',
      'SEQUENCIA',
      'SEQCAIXA',
      'RETORNADOAC',
      'REJEICAOGNRE',
      'REGESPTRIBUT',
      'REFATCON',
      'RECEBIDO',
      'RECEBCARTAO',
      'RECDESPFILTER',
      'RECDESP',
      'RECADIANTAMENTORURAL',
      'RATEADOCAB',
      'RATEADO',
      'PROVISAO',
      'PRAZOINICIAL',
      'PRAZO',
      'PERTENCEAC',
      'PERCDESC',
      'PDD',
      'PARCRENEG',
      'ORIGEM',
      'ORDEMCARGA',
      'OBSERVACAOAC',
      'OBRACONSTCIVIL',
      'NUVERBA',
      'NURENEG',
      'NUPED',
      'NUNOTA',
      'NUMTRANSF',
      'NUMREMESSA',
      'NUMPROCADMJUDIC',
      'NUMOS',
      'NUMNOTA',
      'NUMNFSE',
      'NUMENTSAFFIX',
      'NUMDUPL',
      'NUMDOCARRECAD',
      'NUMCONTRATO',
      'NUMCOMPLFIX',
      'NUMBOR',
      'NUFTC',
      'NUFIN',
      'NUDEV',
      'NUCOMPENS',
      'NUCKC',
      'NUCHQ',
      'NUCCR',
      'NUBCO',
      'NUAPONTA',
      'NUANTBANC',
      'NROLOTEGNRE',
      'NROCESSAOFDIC',
      'NOSSONUM',
      'NOMEEMITENTE_CMC7',
      'NFENTSEQFIX',
      'NFCOMPLFIX',
      'NATUREZAOPERDES',
      'MOTNAORETERISSQN',
      'MOSTRARENEG',
      'MONIOCOREM',
      'MODELONFDES',
      'M2',
      'LINHADIGITAVEL',
      'JUROSAVP',
      'ISSRETIDO',
      'IRFRETIDO',
      'INSSRETIDO',
      'INFCOMPLEFDCONT',
      'INDRECEFDCONT',
      'IDUNICO',
      'IDTRANSACAOPIX',
      'IDLOTEFDIC',
      'HISTORICO',
      'EXIGEISSQN',
      'EMVPIX',
      'DTVENCINIC',
      'DTVENC',
      'DTREFERENCIA',
      'DTPRAZO',
      'DTNEGFILTER',
      'DTNEG',
      'DTINTEGRACAOIPI',
      'DTINITREFAPURACAO',
      'DTENTSAIINFO',
      'DTENTSAI',
      'DTCONTABBAIXA',
      'DTCONTAB',
      'DTBAIXAPREV',
      'DTANTECIPACAO',
      'DTALTER',
      'DIGSAFRA',
      'DHTIPOPERBAIXA',
      'DHTIPOPER',
      'DHMOV',
      'DHCONCIL',
      'DHBAIXA',
      'DESPCART',
      'DESPADVOGADO',
      'DESDOBRAMENTO',
      'DESDOBDUPL',
      'DESCRTPAGNFCE',
      'DESCRLANCBCO',
      'DESCRHISTAC',
      'DESCALINEACHEQDEV',
      'DEPOSITOJUDICIAL',
      'CUSTASPROCESSUAIS',
      'CTABCOBAIXA',
      'CONTABILIZADOPDD',
      'CONTABILIZADO',
      'CONTA_CMC7',
      'CONCILIADO',
      'CODVEND',
      'CODVEICULO',
      'CODUSUCOBR',
      'CODUSUBAIXA',
      'CODUSU',
      'CODTRIB',
      'CODTIPTIT',
      'CODTIPOPERBAIXA',
      'CODTIPOPER',
      'CODREGUA',
      'CODRECEITA',
      'CODPROJ',
      'CODPARCMATRIZ',
      'CODPARC',
      'CODOBSPADRAO',
      'CODOBRA',
      'CODNAT',
      'CODMOEDA',
      'CODLST',
      'CODLANC',
      'CODIPTU',
      'CODIMOVELRURAL',
      'CODIGOBARRA',
      'CODHISTAC',
      'CODFUNC',
      'CODEMPBAIXA',
      'CODEMP',
      'CODCTABCOINT',
      'CODCONTATO',
      'CODCIDINICTE',
      'CODCIDFIMCTE',
      'CODCFO',
      'CODCENCUS',
      'CODCC',
      'CODCBE',
      'CODBCO_CMC7',
      'CODBCO',
      'CODBARRA',
      'CLASSIFCESSAOOBRA',
      'CHEQUERASTREADO_CMC7',
      'CHAVEPIX',
      'CHAVENFEGNRE',
      'CHAVECTEREF',
      'CHAVECTE',
      'CGC_CPF_PARC',
      'CGC_CPF_CMC7',
      'CARTAODESC',
      'CARTA',
      'BLOQVAR',
      'BASEIRF',
      'BASEINSS',
      'BASEICMS',
      'AUTORIZADO',
      'ATRASOINICIAL',
      'ATRASO',
      'ANTECIPADO',
      'ALIQICMS',
      'AGENCIA_CMC7',
      'AD_STATUSBOLETO',
      'AD_NRNF',
      'AD_IDEXTERNO',
      'AD_ID_EXTERNO_CODPARC',
      'AD_ID_EXTERNO_CODNAT',
      'AD_ID_EXTERNO_CODEMP',
      'AD_DOCSREF',
      'ABATIMENTOCAN',
      'ABATIMENTO',
    ];
}
