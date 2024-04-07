<?php

namespace App\Models\ManagementAccess;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'role_user';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'role_id',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == belongs to
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
