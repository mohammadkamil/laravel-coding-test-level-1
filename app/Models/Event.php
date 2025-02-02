<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Ramsey\Uuid\Uuid;

class Event extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'name',
        'slug',
    ];

    public $incrementing = false;
    protected $fillable = [
        'name',
        'slug',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute($model->getKeyName(), Uuid::uuid4());
        });
    }

}
