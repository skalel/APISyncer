<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthLog extends Model
{
    use HasFactory;

    protected $table = 'authlog';

    protected $fillable = [
      'token',
      'error_codigo',
      'error_descricao',
      'created_at',
  ];

  public function getCreatedAtAttribute($value)
  {
    if($value !== null){
      return Carbon::parse($value)->setTimezone('America/Bahia')->format('Y-m-d H:i:s');
    }
    return null;
  }

  protected $hidden = [
      'updated_at'
  ];
}
