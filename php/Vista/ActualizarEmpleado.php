<?php
 require '../Modelo/conexionBasesDatos.php';
    $objConexion = Conectarse();
    $sql = "SELECT empleados.id, empleados.nombre, empleados.email, empleados.sexo, empleados.area_id, empleados.boletin, empleados.descripcion, areas.nombre as name from empleados, areas where (areas.id=empleados.area_id) and (empleados.id=$id)";
    $resultado = $objConexion->query($sql);
    ?>
<div style="padding: 60px;">
  <form  method="post" action="../Controlador/EditarEmpleado.php">
    <?php while ($res = $resultado->fetch_object()) { ?>
    <div class="form-group row">
      <input hidden="yes" type="text" name="id" id="id" value="<?php echo $res->id?>">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre Completo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $res->nombre?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Electronico</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="correo" name="correo"  value="<?php echo $res->email?>">
    </div>
  </div>
  <fieldset class="form-group" required="true">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino">
          <label class="form-check-label" for="gridRadios1">
            Masculino
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Femenino">
          <label class="form-check-label" for="gridRadios2" >
            Femenino
          </label>
        </div>
   
      </div>
    </div>
  </fieldset>
  
<div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Area</label>
    <div class="col-sm-10">
  <select name="area" class="form-control form-control-lg"  id="area">  
  <option value="<?php echo $res->area_id?>"><?php echo $res->name?></option>
</select>
</div>
</div>

<div class="form-group row">
   <label for="" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
    <label for="exampleFormControlTextarea1"></label>
    <textarea name="descripcion" id="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $res->descripcion?></textarea>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" name="boletin" value="si" id="defaultCheck1">
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
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Profesional de proyectos - Desarrollador
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
  <label class="form-check-label" for="defaultCheck1">
    Gerente Estrategico
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
  <label class="form-check-label" for="defaultCheck1">
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
<?php } ?>
</form>
</div>