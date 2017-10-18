<?php
namespace App\Bi\Repositories;
use App\BI\Entities\CuboUno;
class cubounorepo
{
    public function listarCubo()
    {
        $cubouno = CuboUno::All();
        return $cubouno;
       // return "hola mundo";
    }
}