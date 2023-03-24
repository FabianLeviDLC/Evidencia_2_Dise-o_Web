

<label for="Inserta el Nombre">Inserta el Nombre</label>
<input type="text" name="Nombre"  value="{{isset($heroe->Nombre)?$heroe->Nombre:''}}" id="Nombre">
<br>
<label for="Inserta el Super Nombre">Inserta el Super Nombre</label>
<input type="text" name="Super_Nombre" value="{{isset($heroe->Super_Nombre)?$heroe->Super_Nombre:''}}" id="Super_Nombre">
<br>
<label for="Inserta alguna informacion adicional">Inserta alguna informacion adicional</label>
<input type="text" name="Info_Extra" value="{{isset($heroe->Info_Extra)?$heroe->Info_Extra:''}}" id="Info_Extra">
<br>
<input type="submit" value="Agregar">