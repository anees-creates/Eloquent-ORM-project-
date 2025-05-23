<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //incase u changed the table name from students to new_name
    protected $table = 'new_name';
    //incase u changed the primary key from id to new_id
    protected $primaryKey = 'new_id';
    //incase u chaged the created_at and updated_at column names
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updation_date';
 // incase u want to set defult values for the columns if user dont provide them
    protected $attributes = [
        'name' => 'default name',
        'age' => 0,
        'city' => 'default city',
    ];
}
