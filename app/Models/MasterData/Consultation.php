<?php

namespace App\Models\MasterData;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'consultation';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == has many
    public function appointments(){
        return $this->hasMany(Appointment::class, 'consultation_id');
    }
}
