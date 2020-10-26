<?php
 require '../Modelo/conexionBasesDatos.php';
    $objConexion = Conectarse();
    $sql = "select * from areas";
    $resultado = $objConexion->query($sql);
    ?>

<div style="padding: 60px;">
  <form  method="post" action="../Controlador/AgregarEmpleado.php">
    <h1>Crar Empleado</h1>
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre Completo*</label>
    <div class="col-sm-10">
      <input required="yes" type="text" class="form-control" id="name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Electrónico*</label>
    <div class="col-sm-10">
      <input required="yes" type="email" class="form-control" id="correo" name="correo">
    </div>
  </div>
  <fieldset required="yes" class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexo*</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="Masculino" checked="yes">
          <label class="form-check-label" for="sexoM">
            Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="Femenino">
          <label class="form-check-label" for="sexoF">
            Femenino
          </label>
        </div>
   
      </div>
    </div>
  </fieldset>
  
<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Área*</label>
    <div class="col-sm-10">
  <select required="yes" name="area" class="form-control form-control-lg"  id="area">
    <?php while ($res = $resultado->fetch_object()) { ?>
  <option value="<?php echo $res->id?>"><?php echo $res->nombre?></option>
   <?php } ?>
</select>
</div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Descripción*</label>
    <div class="col-sm-10">
    <label for="exampleFormControlTextarea1"></label>
    <textarea name="descripcion" id="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" name="boletin" value="si" id="defaultCheck1" checked="yes">
  <label  class="form-check-label" for="defaultCheck1">
    Deseo Recibir el boletin informativo
  </label>
</div>
  </div>

</div>
<div class="form-group row">
  <label for="" class="col-sm-2 col-form-label">Roles*</label>
    <div class="col-sm-10">
<fieldset class="form-group">
   <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Profesional_de_Proyectos" name="Rol1" id="v1" checked="yes">
  <label class="form-check-label" for="v1">
    Profesional de proyectos - Desarrollador
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Gerente_Estrategico" name="Rol2" id="v2" >
  <label class="form-check-label" for="v2">
    Gerente Estrategico
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Auxiliar_Administrativo" name="Rol3" id="v3" >
  <label class="form-check-label" for="v3">
    Auxiliar Administrativo
  </label>
</div>

  </fieldset>
</div>
</div>

<div class="form-group row">
  <div class="col-sm-10">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>

</form>

<?php
if ($msj == 1){
 ?>

 <div class="alert alert-primary" role="alert">
  Agregado Correctamente
</div>

<?php

}
if ($msj == 2){
  ?>  
  <div class="alert alert-danger" role="alert">
  Error al agregar el Empleado!
</div>

<?php
}
?>
</div>