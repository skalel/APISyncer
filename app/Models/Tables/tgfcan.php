<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgfcan extends Model
{
    use HasFactory;

    protected $table = 'tgfcan';

    protected $primaryKey = ['NUMNOTA', 'CODEMP', 'SERIENOTA', 'DTNEG', 'CODMAQ'];
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
      'NUMPROTOCCTE',
      'DHPROTOCCTE',
      'CHAVECTE',
      'TPAMBCTE',
      'NUMPROTOCCANCTE',
      'TPEMISCTE',
      'DHPROTOCCANCTE',
      'NUNOTASUB',
      'DHPROTOCCAN',
      'DHPROTOCESPONT',
      'DHPROTOCNFE',
      'DHREGDPEC',
      'DTCANC',
      'DTFATUR',
      'DTMOV',
      'DTNEG',
      'MODELONFDES',
      'MOTCANCEL',
      'NATUREZAOPERDES',
      'NROREDZ',
      'NUMCF',
      'NUMNFSE',
      'NUMNOTA',
      'NUMPROTOCCAN',
      'NUMPROTOCESPONT',
      'NUMPROTOCNFE',
      'NUMREGDPEC',
      'NUNOTA',
      'NUREM',
      'SERIENFDES',
      'SERIENOTA',
      'TPEMISNFE',
      'VLRNOTA',
      'TPAMBNFE',
      'CHAVENFE',
      'CODEMP',
      'CODMAQ',
      'CODMODDOC',
      'CODPARC',
      'ATUALLIVFIS',
      'ATUALLIVISS',
      'DHCANCPREFNFSE',
      'PROTCANCNFSE',
      'TIPCANCNFSE',
      'TPAMBNFSE',
      'IDPONTUACAOPARCERIA',
      'NFSECABCEXT',
    ];
}
