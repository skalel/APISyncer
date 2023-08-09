<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgfvar extends Model
{
    use HasFactory;

    protected $table = 'tgfvar';

    protected $primaryKey = ['NUNOTA', 'SEQUENCIA', 'NUNOTAORIG', 'SEQUENCIAORIG'];
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
      'CUSATEND',
      'NUNOTA',
      'NUNOTAORIG',
      'ORDEMPROD',
      'QTDATENDIDA',
      'SEQUENCIA',
      'SEQUENCIAORIG',
      'STATUSNOTA',
      'NROREGEXPORT',
      'NROATOCONCDRAW',
      'NROMEMORANDO',
    ];
}
