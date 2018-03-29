<?php

namespace PuntoVenta\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use PuntoVenta\Http\Requests\IngresoFormRequest;
use PuntoVenta\Ingreso;
use PuntoVenta\DetalleIngreso;
use DB;

//Esto es para usar el formato de fecha
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class IngresoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    	if($request)
    	{
            $query=trim($request->get('searchText'));
            $ingresos = DB::table('ingreso as i')
                ->join('persona as p','i.idproveedor','=','p.idpersona')
                ->join('detalle_ingreso as di','i.idingreso','=','di.idingreso')
                ->select('i.idingreso','i.fecha_hora','p,nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado',DB::raw('sum(di.cantidad * precio_compra) as total'))
                ->where('i.num_comprobante','LIKE','%'.$query.'%')
                ->orderBY('i.idingreso','desc')
                ->groupBy('i.idingreso','i.fecha_hora','p,nombre','i.tipo_comprobante','i.serie_comprobante','i.num_comprobante','i.impuesto','i.estado')
                ->paginate(6);
                return view('compras.ingreso.index',["ingresos" => $ingresos, "searchText" => $query]);
     	}
    }
    public function create()
    {
        $personas = DB::table('persona')->where('tipo_persona', '=', 'Proveedor')->get();
        $articulos = DB::table('articulos as art')
            ->select(DB::raw('CONCAT(art.codigo, " ", art.nombre) AS articulo'), 'art.idarticulo')
            ->where('art.estado','=','Activo')
            ->get();
        return view("compras.ingreso.create",["personas" => $personas, "articulos" => $articulos]);
    }
}
