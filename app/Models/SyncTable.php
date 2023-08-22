<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class SyncTable extends Model
{
    use HasFactory;

    protected $table = 'synctable';

    public $timestamps = false;

    protected $fillable = [
      'name',
      'name_entity',
      'name_table',
      'request_model',
      'url',
      'expression',
      'last_synced_offset',
      'last_fetched_registers',
  ];

  public function getCreatedAtAttribute($value)
  {
    if($value !== null){
      return Carbon::parse($value)->setTimezone('America/Bahia')->format('d/m/Y H:i:s');
    }
    return null;
  }

  public function log(): HasMany
  {
    return $this->hasMany(SyncLog::class, 'table_id');
  }
}
