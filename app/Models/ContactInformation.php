<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Patient;
use Str;

class ContactInformation extends Model
{
    
    use HasFactory;

    protected $table = 'contact_informations'; // Specify the table name
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID

    protected $fillable = ['patient_id','number','email'];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class,'patient_id');
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
