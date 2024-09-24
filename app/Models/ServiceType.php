<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Str;

class ServiceType extends Model
{

    use HasFactory;

    protected $table = 'services_types'; // Specify the table name if necessary
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID

    protected $fillable = ['categories_id', 'type']; // Ensure 'types' is included

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function servicesprices(): HasMany
    {
        return $this->hasMany(ServicePrice::class, 'type_id', 'id');
    }


    public function servicescategories(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'categories_id');
    }
}
