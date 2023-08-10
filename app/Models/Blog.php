<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function scopeFilter($query, array $filters){
        //dd($filters['category']);
        if($filters['category'] ?? false){
            $query->where('category', 'like', '%' . request('category') . '%');
        }
    }
}
