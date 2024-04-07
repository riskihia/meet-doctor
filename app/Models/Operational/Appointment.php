<?php

namespace App\Models\Operational;

use App\Models\MasterData\Consultation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'appointment';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'doctor_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == has one
    public function transaction(){
        return $this->hasOne(Appointment::class, 'appointment_id');
    }

    // == belongs to
    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
    
    public function consultation(){
        return $this->belongsTo(Consultation::class, 'consultation_id', 'id');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
