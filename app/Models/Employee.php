<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuid;

class Employee extends Model
{
    use HasFactory;
    use Uuid;
    use SoftDeletes;

    protected $fillable = ['name','salary','account_id'];
}
