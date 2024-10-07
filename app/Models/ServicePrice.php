<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class ServicePrice extends Model
{
    use HasFactory;

    protected $table = 'services_prices'; // Specify the table name if necessary
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID

    protected $fillable = ['type_id', 'price'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function servicestypes(): BelongsTo
    {
        return $this->belongsTo(ServiceType::class, 'type_id', 'id');
    }



}
