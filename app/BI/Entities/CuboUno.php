<?php

namespace App\BI\Entities;

use Illuminate\Database\Eloquent\Model;
class CuboUno extends Model
{
protected $table = "dg_provincia";
protected $primaryKey='P_C_CODIGO';

protected $fillable=['P_D_NOMBREPROVINCIA',
    'DEP_C_CODIGO'];

public $timestamps =false;
}