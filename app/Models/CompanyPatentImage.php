<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPatentImage extends Model
{
     protected $table="patent_image";
    protected $fillable=['company_id','image'];
}
