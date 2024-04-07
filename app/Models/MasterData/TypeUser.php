<?php

namespace App\Models\MasterData;

use App\Models\ManagementAccess\DetailUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'type_user';

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

    public function detail_users(){
        return $this->hasMany(DetailUser::class, 'type_user_id');
    }
}
