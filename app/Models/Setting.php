<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function favicon()
    {
        if ($this->favicon) {
            return asset('storage/' . $this->favicon);
        } else {
            return asset('assets/images/logo.svg');
        }
    }

    public function image()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        } else {
            return asset('assets/images/logo.svg');
        }
    }
}
