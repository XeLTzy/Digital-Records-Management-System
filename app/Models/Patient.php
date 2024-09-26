<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients'; // Specify the table name if necessary
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID


    protected $fillable = [
        // 'id',
        'firstname',
        'lastname'
    ];

    public function contactinformation(): HasOne
    {
        return $this->hasOne(ContactInformation::class,'patient_id');
    }

    public function appointment(): HasOne
    {
        return $this->hasOne(Appointment::class,'patient_id');
    }

    // Set the patient UUID automatically when creating a new instance 
    // otherwise remove this and add id on fillable if needs to specify in future use
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
