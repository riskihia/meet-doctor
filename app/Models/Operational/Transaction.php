<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'transaction';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == belongs to
    public function appointment(){
        return $this->belongsTo(Appointment::class, 'appointment_id', 'id');
    }
}
