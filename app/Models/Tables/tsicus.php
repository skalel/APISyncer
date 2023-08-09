<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsicus extends Model
{
    use HasFactory;

    protected $table = 'tsicus';

    public $timestamps = false;

    protected $fillable = [
      'CODPARCRESP',
      'VEICULO',
      'ANALITICO',
      'AREA',
      'AREACONT',
      'AREAPERM',
      'AREAREAL',
      'ATIVO',
      'CODCENCUS',
      'CODCENCUSPAI',
      'CODPARC',
      'CODTAB',
      'CODUNG',
      'CODUNN',
      'CODUSURESP',
      'DESCRCENCUS',
      'DTINCLUSAO',
      'FRACCONT',
      'FRACGEREN',
      'GRAU',
      'CALCELALURPARTEA',
      'AD_IDEXTERNO',
    ];
}
