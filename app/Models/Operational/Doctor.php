<?php

namespace App\Models\Operational;

use App\Models\MasterData\Specialist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'doctor';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == belongs to
    public function specialist(){
        return $this->belongsTo(Specialist::class, 'specialist_id', 'id');
    }

    // == has many
    public function appointments(){
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}
