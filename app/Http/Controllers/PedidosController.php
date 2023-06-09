<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Heroes;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['Vistas_pedidos']=pedidos::paginate(8);
        return view('Vistas_pedidos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pedido = new pedidos();
        $precio = Heroes::pluck('Precio', 'id');
        return view('Vistas_pedidos.create',compact('pedido', 'precio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos_pedidos = $request->except('_token');

        $producto = Heroes::find($datos_pedidos['IdProducto']);
        $PrecioUnitario = $producto->Precio;
        $cantidad = $datos_pedidos['Cantidad'];
        $datos_pedidos['PrecioUnitario'] = $PrecioUnitario;
        $datos_pedidos['PrecioTotal'] = $PrecioUnitario * $cantidad;

        pedidos::insert($datos_pedidos);

        return redirect('Vistas_pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function show(pedidos $pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pedido = pedidos::findOrFail($id);
        return view('Vistas_pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datos_pedidos = request()->except(['_token', '_method']);

        pedidos::where('id','=',$id)->update($datos_pedidos);

        $pedido = pedidos::findOrFail($id);

        if ($pedido->Estatus == 'entregado') {
            $heroe = Heroes::findOrFail($pedido->IdProducto);
            $heroe->Stock -= $pedido->Cantidad;
            $heroe->save();
        }
        return view('Vistas_pedidos.edit', compact('pedido'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pedidos  $pedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        pedidos::destroy($id);
        return redirect('Vistas_pedidos');
    }
}
