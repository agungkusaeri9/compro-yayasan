<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function image()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('assets/images/demo/portfolio.jpg');
        }
    }

    public function status()
    {
        if ($this->status == 1) {
            return '<span class="badge badge-success">Ditampilkan</span>';
        } else {
            return '<span class="badge badge-danger">Disembunyikan</span>';
        }
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_id', 'id');
    }
}
