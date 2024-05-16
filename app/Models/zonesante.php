<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class zonesante extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
     protected $table="t_zone";
     protected $fillable = [
        'name',
        "territoirid",
        "id",
    ];
    public function airesante()
    {
        return $this->hasMany(airesante::class, 'zoneid', 'id');
    }
    public function territoir(){
        return $this->belongsTo(territoir::class, 'territoirid','id');
     }
}
