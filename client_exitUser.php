<?php
/*
    require_once('lib/nusoap.php');
     
    $cliente = new nusoap_client('http://10.1.126.7/ws_usuarios/index.php/ws_usuarios');
    $err = $cliente->getError();
    if ($err) { echo 'Error en Constructor' . $err ; }
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOAP Web Service Client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="functions.js"></script>
</head>
<body>
<div class="container">
  <h2>SOAP Web Service Client </h2>
  <form class="form-horizontal" action="send_data.php" method="post"> <!-- client_exitUser.php -->
    <div class="form-group" id="ws">
        <label class="control-label col-sm-2" for="at">Select WS:</label>
        <div class="col-sm-10">
          <label class="radio-inline"><input type="radio" name="optradio" id="existUser" value="existUser">existUser</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="saveDactilar" value="saveDactilar">saveDactilar</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="updateDactilar" value="updateDactilar">updateDactilar</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="deleteDactilar" value="deleteDactilar">deleteDactilar</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="getDactilar" value="getDactilar">getDactilar</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="validaAccesoPrincipal" value="validaAccesoPrincipal">validaAccesoPrincipal</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="cambiaPassword" value="cambiaPassword">cambiaPassword</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="validaPersona" value="validaPersona">validaPersona</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="validaAt" value="validaAt">validaAt</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="sendCorreo" value="sendCorreo">sendCorreo</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="caducidadPassword" value="caducidadPassword">caducidadPassword</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="dataUsuario" value="dataUsuario">dataUsuario</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="dataAplicacion" value="dataAplicacion">dataAplicacion</label>
          <label class="radio-inline"><input type="radio" name="optradio" id="dataGrupo" value="dataGrupo">dataGrupo</label>
        </div>
    </div>
    <div class="form-group" id="usuario"  style="display:none;">
      <label class="control-label col-sm-2" for="usuario">Usuario:</label>
        <div class="col-sm-5">
          <input type="text" name="usuario" class="form-control"  placeholder="Ingresa usuario" required/>
        </div>
    </div>
    <div class="form-group" id="password"  style="display:none;">
      <label class="control-label col-sm-2" for="password">Password:</label>
        <div class="col-sm-5">
          <input type="password" name="password" class="form-control"  placeholder="Ingresa password" required/>
        </div>
    </div>
    <div class="form-group" id="nuevoPassword"  style="display:none;">
      <label class="control-label col-sm-2" for="nuevoPassword">Nuevo Password:</label>
        <div class="col-sm-5">
          <input type="password" name="nuevoPassword" class="form-control"  placeholder="Ingresa el nuevo password" required/>
        </div>
    </div>
    <div class="form-group" id="huellaDactilar" style="display:none;">
      <label class="control-label col-sm-2" for="huellaDactilar">Huella Dactilar:</label>
        <div class="col-sm-5">
          <input type="int" name="huellaDactilar" class="form-control" onkeypress="return justNumbers(event);"  placeholder="Huella Dactilar" maxlength="3" required/>
        </div>
    </div>
    <div class="form-group" id="aplicacion" style="display:none;">
      <label class="control-label col-sm-2" for="aplicacion">Aplicacion:</label>
        <div class="col-sm-5">
          <input type="text" name="aplicacion" class="form-control" onkeypress="return justNumbers(event);" placeholder="Ingresa el num de aplicacion" maxlength="3" required/>
        </div>
    </div>
    <div class="form-group" id="ip" style="display:none;">
      <label class="control-label col-sm-2" for="ip">IP:</label>
        <div class="col-sm-5">
          <input type="text" name="ip" class="form-control" placeholder="Ingresa tu direccion ip" onkeypress="return validar(event)"  required/>
        </div>
    </div>
    <div class="form-group" id="sess" style="display:none;">
      <label class="control-label col-sm-2" for="sess">Sess:</label>
        <div class="col-sm-5">
          <input type="text" name="sess" class="form-control" onkeypress="return justNumbers(event);" placeholder="Ingresa sess" maxlength="3" required/>
        </div>
    </div>
    <div class="form-group" id="persona" style="display:none;">
      <label class="control-label col-sm-2" for="persona">Persona:</label>
        <div class="col-sm-5">
          <input type="text" name="persona" class="form-control" onkeypress="return justNumbers(event);" placeholder="Ingresa persona" maxlength="3" required/>
        </div>
    </div>
    <div class="form-group" id="at" style="display:none;">
      <label class="control-label col-sm-2" for="at">At:</label>
        <div class="col-sm-5">
          <input type="text" name="at" class="form-control"  placeholder="Ingresa at"  required/>
        </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <!-- <button type="submit" name="submit"  value="submit"  class="btn btn-default">Enviar</button> -->
        <!-- <input name="Submit" type="Submit" value="Enviar" /> -->
        <!-- <input type="submit" value="Submit" name="submit" /> -->
        <input type='submit' name="submit" value='Enviar'/>
      </div>
    </div>
  </form>
  <p>&nbsp;</p>
  <h3>
    <?php
  
        // if(isset($_POST['submit'])){
        if (isset($_POST['submit'])){
          echo "entre";
          // if(!empty($_POST)){

          $usuario = $_POST['usuario']; //existUser,saveDactilar,updateDactilar,deleteDactilar,validaAccesoPrincipal,cambiaPassword,validaPersona,validaAt,sendCorreo,caducidadPassword,dataUsuario
          $password = $_POST['password']; //existUser,getDactilar,validaAccesoPrincipal,cambiaPassword,validaPersona,validaAt
          $nuevoPassword=$_POST['nuevoPassword'];//cambiaPassword
          $huellaDactilar = $_POST['huellaDactilar']; //saveDactilar,updateDactilar,deleteDactilar,getDactilar
          $aplicacion=$_POST['aplicacion'];//validaAccesoPrincipal,cambiaPassword,validaPersona,validaAt,sendCorreo,caducidadPassword,dataUsuario,dataAplicacion,dataGrupo
          $ip=$_POST['ip'];//validaAccesoPrincipal,cambiaPassword
          $sess=$_POST['sess'];//validaAccesoPrincipal
          $persona=$_POST['persona'];//validaPersona
          $at=$_POST['at'];//validaAt
 

          // if(isset($_POST["optradio"])){
            $opcion_radio = $_POST["optradio"];
            echo $opcion_radio;
            switch ($opcion_radio) {
                case "existUser":
                    $param = array('usuario' => $usuario,'password' => $password);
                    // $resultado = $cliente->call('existUser',$usuario,$password);
                    $resultado = $cliente->call('existUser',$param);
                    // print_r($resultado);
                    if ($client->fault) {
                      echo 'Fallo';
                      print_r($result);
                    } else {  // Chequea errores
                      $err = $client->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado';
                        print_r ($result);
                      }
                    }

                    break;
                case "saveDactilar":
                    $resultado = $cliente->call('saveDactilar',$usuario,$huellaDactilar);
                    print_r($resultado);


                    break;
                case "updateDactilar":
                    $resultado = $cliente->call('updateDactilar',$usuario,$huellaDactilar);
                    print_r($resultado);


                    break;
                case "deleteDactilar":
                    $resultado = $cliente->call('deleteDactilar',$usuario,$huellaDactilar);
                    print_r($resultado);


                    break;
                case "getDactilar":
                    $resultado = $cliente->call('getDactilar',$usuario,$password);
                    print_r($resultado);


                    break;
                case "validaAccesoPrincipal":
                    $resultado = $cliente->call('validaAccesoPrincipal',$usuario,$password,$aplicacion,$ip,$sess);
                    print_r($resultado);


                    break;
                case "cambiaPassword":
                    $resultado = $cliente->call('cambiaPassword',$usuario,$password,$aplicacion,$nuevoPassword,$ip);
                    print_r($resultado);


                    break;
                case "validaPersona":
                    $resultado = $cliente->call('validaPersona',$usuario,$password,$aplicacion,$persona);
                    print_r($resultado);


                    break;
                case "validaAt":
                    $resultado = $cliente->call('validaAt',$usuario,$password,$aplicacion,$at);
                    print_r($resultado);


                    break;
                case "sendCorreo":
                    $resultado = $cliente->call('sendCorreo',$usuario,$aplicacion);
                    print_r($resultado);


                    break;
                case "caducidadPassword":
                    $resultado = $cliente->call('caducidadPassword',$usuario,$aplicacion);
                    print_r($resultado);


                    break;
                case "dataUsuario":
                    $resultado = $cliente->call('dataUsuario',$usuario,$aplicacion);
                    print_r($resultado);


                    break;
                case "dataAplicacion":
                    $resultado = $cliente->call('dataAplicacion',$aplicacion);
                    print_r($resultado);


                    break;
                case "dataGrupo":
                    $resultado = $cliente->call('dataGrupo',$aplicacion);
                    print_r($resultado);

                    break;
                default:
                  # code...
                    break;
            }//fin switvh

          //}//fin if isset

          // print_r($resultado);
        // }else{
        //   echo "da click en enviar";
        }
    */
    ?>
  </h3>
</div>
</body>
</html>