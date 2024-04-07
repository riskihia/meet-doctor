<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'permission_role';

    protected $dates = [
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'permission_id',
        'role_id',
        'creadted_at',
        'updated_at',
        'deleted_at',
    ];

    // == belongs to
    public function role(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    
    public function permission(){
        return $this->belongsTo(Permission::class, 'permission_id', 'id');
    }
}
