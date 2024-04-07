<?php

namespace App\Models\ManagementAccess;

use App\Models\MasterData\TypeUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == belong to
    public function type_user(){
        return $this->belongsTo(TypeUser::class, 'type_user_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
