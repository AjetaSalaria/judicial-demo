<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    protected $fillable=['id','result_id','case_number','case_name','nature_of_proceeding','ruling','background','judge','hearing_date','county','department','department','category'];

}
