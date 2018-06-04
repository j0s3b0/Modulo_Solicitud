 <section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="pageTitle">Validacion de Empleado</h2>
      </div>
    </div>
  </div>
  </section>

   <!-- Form itself -->
<form action="index.php?c=request&a=userValidation" method="POST">
 <div class="control-group">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <h3>Codigo de Empleado</h3>
            <div class="controls">
              <p>Ingrese la cedula del empleado</p><input type="text" class="form-control" placeholder="Cedula del usuario" name="cedula" required minlength="7" maxlength="8" autocomplete="off">
          <p class="help-block"></p>
          <button type="submit" class="btn btn-default">Ejecutar</button>
      </div>
    </div>
   </div>
   </div>
   </div>
   </form>
    
