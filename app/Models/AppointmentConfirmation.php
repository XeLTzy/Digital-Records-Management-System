<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class AppointmentConfirmation extends Model
{

    use HasFactory;
    protected $table = 'appointment_confirmations'; // Specify the table name
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID

    protected $fillable = ['appointment_id','code'];

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class,'appointment_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
    
}
