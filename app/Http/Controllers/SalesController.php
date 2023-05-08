<?php

namespace App\Http\Controllers;
use App\Models\Sale;

use Illuminate\Http\Request;


class SalesController extends Controller
{
    public function index()
    {
        $sales=Sale::all();
        return $sales;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $sales = new Sale();
        $sales->nombre_vendedor = $request->nombre_vendedor;
        $sales->nombre_cliente = $request->nombre_cliente;
        $sales->nombre_producto = $request->nombre_producto;
        $sales->precio = $request->precio;
        $sales->fecha_compra = $request->fecha_compra;
        $sales->save();
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, $id)
    {
        $sales = Sale::find($id);
        $sales->nombre_vendedor = $request->nombre_vendedor;
        $sales->nombre_cliente = $request->nombre_cliente;
        $sales->nombre_producto = $request->nombre_producto;
        $sales->precio = $request->precio;
        $sales->fecha_compra = $request->fecha_compra;
        $sales->save();
        return $sales;
    }

    public function destroy($id)
    {
        $sales = Sale::find($id);
        $sales->delete();
        return $sales;
    }

}