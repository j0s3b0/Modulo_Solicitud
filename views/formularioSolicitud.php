<?php  
    $conn = pg_connect("host='localhost' dbname=solicitudProyecto port=5432 user = postgres password = admin") or die ("error de conexion".pg_last_error());
?>
<br>
    <br>
    <div class="container" style="float:left; position:relative; left:13%;">
    <table>
      <tr>
      <tr><td><h4>Usuario Solitante</h4></tr></td>
      <td><select name="departamento">
            <option value="0">Seleccione:</option></td>
      </tr>
    </table>
    </div>

    <div style="float:left; position:absolute; left:33%;">
    <table>
    <tr>
      <tr><td><h4>Fecha de Emision</h4></tr></td>
      <td><input name="fecha" type="text" id="fecha" value="<?php echo date("m/d/Y"); ?>" size="10"  readonly="readonly" /></td>
    </tr>
    </table>
    </div>

    <div style="float:left; position:absolute; left:53%;">
    <table>
    <tr>
      <tr><td><h4>Supervisor</h4></tr></td>
      <td><input type "text" name="supervisor"></td>
    </tr>
    </table>
    </div>

    <div style="float:left; position:absolute; left:73%;">
    <table>
    <tr>
      <tr><td><h4>Departamento</h4></tr></td>
      <td>
         <select name="departamento">
            <option value="0">Seleccione:</option>
         <?php
              
          $query =pg_query("SELECT id_cargo, descripcion FROM departamento"); 
          while ($prueba = pg_fetch_array($query)) {            
            echo '<option value="'.$prueba['id_cargo'].'">'.$prueba['descripcion'].'</option>';

          }

        ?>
    </select>
</td>
    </tr>
    </table>
    </div>
    <br><br><br><br>
    
    <div style=" padding-left: 160px; width: 250px; position:absolute;">
    <table>
    <tr>
      <tr><td><h4>Piso</h4></tr></td>
      <td><select name="piso" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">Piso1</option>
                <option value="2">Piso2</option>
                <option value="3">Piso3</option></td>
    </select>
    </tr>
    </table>
    </div>

    <div style="width: 250px; position:absolute; left:33%;">
    <table>
    <tr>
      <tr><td><h4>Equipo</h4></tr></td>
      <td>         <select name="tipoEquipo">
            <option value="0">Seleccione:</option>
         <?php
              
          $query =pg_query("Select * from tipo_equipo"); 
          while ($equipo = pg_fetch_array($query)) {            
            echo '<option value="'.$equipo['id_tipoEquipo'].'">'.$equipo['descripcion'].'</option>';

          }

        ?>
    </select>
    </tr>
    </table>
    </div>

    <div style="width: 250px; position:absolute; left:53%;">
    <table>
    <tr>
      <tr><td><h4>Tipos de Fallas</h4></tr></td>
      <td>
         <select name="falla">
            <option value="0">Seleccione:</option>
         <?php
              
          $query =pg_query("Select * from falla"); 
          while ($falla = pg_fetch_array($query)) {            
            echo '<option value="'.$falla['id_falla'].'">'.$falla['descripcion'].'</option>';

          }

        ?>
    </select>
    </tr>
    </table>
    </div>

    <div style="width: 300px; position:absolute; left:73%;">
    <table>
    <tr>
      <tr><td><h4>Instalacion</h4></tr></td>
      <td><select name="instalacion" style="width: 150px;  height:30px;">
                <option value="nada">Seleciones</option>
                <option value="1">Cableado</option>
                <option value="2">Reubicacion</option>
                <option value="3">Accesorios</option>
                <option value="4">Revision</option></td>
    </select>
    </tr>
    </table>
    </div>
    <br>

    <div style=" padding-left: 370px; left:250px;">
    <table>
      <tr>
      <tr><td><h4>Observacion</h4></tr></td>
      <td><textarea name="observacion" rows="5" cols="70" placeholder= "Observacion del Usuario con respecto a la falla"></textarea></td>
      </tr>
    <br><br><br><br>
    </table>
    </div>

        <br>
        <center><input type="submit" value="Enviar"></center>
        <br><br><br><br>
        <br><br><br><br>
      </form>