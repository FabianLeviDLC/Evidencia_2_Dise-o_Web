
<div class="form-grup">

<label for="Inserta el Nombre">Inserta el Nombre</label>
<input type="text" class="form-control" name="Nombre"  value="{{isset($heroe->Nombre)?$heroe->Nombre:''}}" id="Nombre">

</div>

<div class="form-grup">

<label for="Inserta el Super Nombre">Inserta el Super Nombre</label>
<input type="text" class="form-control" name="Super_Nombre" value="{{isset($heroe->Super_Nombre)?$heroe->Super_Nombre:''}}" id="Super_Nombre">

</div>

<div class="form-grup">

<label for="Inserta alguna informacion adicional">Inserta alguna informacion adicional</label>
<input type="text" class="form-control" name="Info_Extra" value="{{isset($heroe->Info_Extra)?$heroe->Info_Extra:''}}" id="Info_Extra">

</div>

<input class="btn btn.success" type="submit" value="Agregar">