<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Str;

class Service extends Model
{
    use HasFactory;
    
    protected $table = 'services'; // Specify the table name if necessary
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID

    protected $fillable = [
        // 'id',
        'name',
        'description'
    ];

    // public function servicesgategories(): HasMany
    // {
    //     return $this->hasMany(ServiceCategory::class,'service_id');
    // }

    public function servicescategories()
    {
        return $this->hasMany(ServiceCategory::class, 'service_id'); // 'service_id' is the foreign key in ServiceCategory table
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

}
