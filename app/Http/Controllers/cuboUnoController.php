<?php

namespace App\Http\Controllers;

use App\BI\Repositories\CuboUno;
use Illuminate\Http\Request;

class cuboUnoController extends Controller
{
    protected $cuboUno;

    /**
     * cuboUnoController constructor.
     * @param CuboUno $cuboUno
     */
    public function __construct(CuboUno $cuboUno)
    {
        parent::__construct();
        $this->cuboUno = $cuboUno;
    }
/*
    public function index()
    {
        $datos = $this->tipoTanqueRepo->listarTipoTanque();
        return $this->showAll($datos);
    }
*/
}
