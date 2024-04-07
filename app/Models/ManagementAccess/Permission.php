<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'permission';

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
    public function permission_roles(){
        return $this->hasMany(PermissionRole::class, 'permission_id', 'id');
    }
}
