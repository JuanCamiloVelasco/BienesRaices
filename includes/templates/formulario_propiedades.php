<fieldset>
    <legend>Informacion general</legend>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad" value="<?php

use App\Propiedad;

 echo s($propiedad->titulo); ?>" >

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad" value="<?php echo s($propiedad->precio); ?>">

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">

    <?php if($propiedad->imagen){ ?>
        <img src="/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small">
    <?php } ?>
    <label for="descripcion">Descripcion</label>
    <textarea id="descripcion" name="propiedad[descripcion]" ><?php echo s($propiedad->descripcion); ?></textarea>

</fieldset>

<fieldset>
    <legend>Informacion de la propiedad</legend>

    <label for="habitaciones">habitaciones:</label>
    <input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="Elije el numero de habitaciones" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>"></input>

    <label for="wc">Baños:</label>
    <input type="number" id="wc" name="propiedad[wc]" placeholder="Baños" min="1" max="9" value="<?php echo s($propiedad->wc); ?>"></input>

    <label for="estacionamietno">Estacionamiento:</label>
    <input type="number" id="estacionamietno" name="propiedad[estacionamiento]" placeholder="Estacionamiento" min="1" max="9" value="<?php echo s($propiedad->estacionamiento); ?>"></input>

</fieldset>

<fieldset>
    <legend>Vendedor</legend>

    <label for="vendedor">Vendedor</label>
    <select name="propiedad[vendedorid]" id="vendedor">
        <option selected value="">-- Seleccione --</option>
        <?php foreach($vendedores as $vendedor) { ?>
            <option 
                <?php echo $propiedad->vendedorid === $vendedor->id ? 'selected': '' ?>
                value="<?php echo s($vendedor->id); ?>">  
                <?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?>
            </option>
        <?php } ?>
    </select>
</fieldset>