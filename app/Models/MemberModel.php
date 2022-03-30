<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table = 'members';
    protected $with = ['product'];

    protected $fillable = [
        'name', 'family', 'phone'
    ];

    public function product()
    {
        return $this->hasMany(ProductsModel::class, 'member_id', 'id');
    }
}
