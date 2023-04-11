
<div class="form-grup">

<label for="Inserta el IdProducto">Inserta el IdProducto</label>
<input type="text" class="form-control" name="IdProducto"  value="{{isset($pedido->IdProducto)?$pedido->IdProducto:''}}" id="IdProducto">

</div>

<div class="form-grup">

<label for="Inserta la Cantidad">Inserta la Cantidad</label>
<input type="text" class="form-control" name="Cantidad" value="{{isset($pedido->Cantidad)?$pedido->Cantidad:''}}" id="Cantidad">

</div>

<div class="form-grup">

    <label for="Inserta el Estatus">Inserta el Estatus</label>
    <input type="text" class="form-control" name="Estatus" value="{{isset($pedido->Estatus)?$pedido->Estatus:''}}" id="Estatus">
            
 </div>

<input class="btn btn.success" type="submit" value="Agregar">