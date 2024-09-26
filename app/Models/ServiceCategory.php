<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class ServiceCategory extends Model
{

    use HasFactory;

    protected $table = 'services_categories'; // Specify the table name if necessary
    protected $keyType = 'string'; // For UUID as primary key
    public $incrementing = false; // Disable auto-incrementing ID

    protected $fillable = [ 'service_id','category'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function servicestypes(): hasMany
    {
        return $this->hasMany(ServiceType::class,'categories_id');
    }

    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class,'service_id');
    }

}
