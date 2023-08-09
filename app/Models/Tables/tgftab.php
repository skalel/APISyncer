<?php

namespace App\Models\tables;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tgftab extends Model
{
    use HasFactory;

    protected $table = 'tgftab';

    public $timestamps = false;

    protected $fillable = [
      'CODTAB',
      'CODTABORIG',
      'DTALTER',
      'DTVIGOR',
      'JAPE_ID',
      'NUTAB',
      'PERCENTUAL',
      'UTILIZADECCUSTO',
    ];
}
