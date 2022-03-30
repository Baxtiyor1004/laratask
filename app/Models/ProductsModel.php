<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
//    protected $with = ['member'];

    protected $fillable = [
        'title', 'amount', 'member_id'
    ];

//    public function member()
//    {
//        return $this->belongsTo(MemberModel::class, 'member_id', 'id');
//    }
}
