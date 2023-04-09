
<div class="form-grup">

<label for="Inserta el Nombre">Inserta el Nombre</label>
<input type="text" class="form-control" name="Nombre"  value="{{isset($heroe->Nombre)?$heroe->Nombre:''}}" id="Nombre">

</div>

<div class="form-grup">

<label for="Inserta la descripcion">Inserta la Descripcion</label>
<input type="text" class="form-control" name="Descripcion" value="{{isset($heroe->Descripcion)?$heroe->Descripcion:''}}" id="Descripcion">

</div>

<div class="form-grup">

<label for="Inserta Foto">Inserta Foto</label>

<input type="file" class="form-control" name="Foto" id="Foto">

</div>

<div class="form-grup">

    <label for="Inserta Precio">Inserta Precio</label>
    <input type="text" class="form-control" name="Precio" value="{{isset($heroe->Precio)?$heroe->Precio:''}}" id="Precio">
    
    </div>

<div class="form-grup">

    <label for="Inserta Stock">Inserta Stock</label>
    <input type="text" class="form-control" name="Stock" value="{{isset($heroe->Stock)?$heroe->Stock:''}}" id="Stock">
        
    </div>

<input class="btn btn.success" type="submit" value="Agregar">