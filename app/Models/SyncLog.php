<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SyncLog extends Model
{
    use HasFactory;

    protected $table = 'synclog';

    public $timestamps = false;

    protected $fillable = [
      'table_id',
      'name_table',
      'status',
      'error',
      'execution_date',
    ];

    public function syncTable(): BelongsTo
    {
      return $this->belongsTo(SyncTable::class, 'table_id');
    }
}
