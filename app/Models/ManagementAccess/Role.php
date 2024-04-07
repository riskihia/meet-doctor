<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'role';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == has many
    public function role_users(){
        return $this->hasMany(RoleUser::class, 'role_id');
    }
    
    public function permission_roles(){
        return $this->hasMany(PermissionRole::class, 'role_id');
    }
}
