<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class  extends Model  {

use SoftDeletes, HasFactory;

public $table = 's';

protected $hidden = [
'password',
];

protected $dates = [
'created_at',
    'updated_at',
    'deleted_at',
];

protected $fillable = [
'email',
    'password',
    'created_at',
    'updated_at',
    'deleted_at',
];

protected function serializeDate(DateTimeInterface $date)
{
    



return $date->format('Y-m-d H:i:s');
    
}

}