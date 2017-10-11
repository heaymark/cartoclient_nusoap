  <?php

    require_once('lib/nusoap.php');
     
    $cliente = new nusoap_client('http://10.1.126.7/ws_usuarios/index.php/ws_usuarios');
    $err = $cliente->getError();
    if ($err) { echo 'Error en Constructor' . $err ; }

        // if(isset($_POST['submit'])){
        if(!empty($_POST)){
            // var_dump($_POST);

            $usuario = $_POST['usuario']; //existUser,saveDactilar,updateDactilar,deleteDactilar,validaAccesoPrincipal,cambiaPassword,validaPersona,validaAt,sendCorreo,caducidadPassword,dataUsuario
            $password = $_POST['password']; //existUser,getDactilar,validaAccesoPrincipal,cambiaPassword,validaPersona,validaAt
            $nuevoPassword=$_POST['nuevoPassword'];//cambiaPassword
            $huellaDactilar = $_POST['huellaDactilar']; //saveDactilar,updateDactilar,deleteDactilar,getDactilar
            $aplicacion=$_POST['aplicacion'];//validaAccesoPrincipal,cambiaPassword,validaPersona,validaAt,sendCorreo,caducidadPassword,dataUsuario,dataAplicacion,dataGrupo
            $ip=$_POST['ip'];//validaAccesoPrincipal,cambiaPassword
            $sess=$_POST['sess'];//validaAccesoPrincipal
            $persona=$_POST['persona'];//validaPersona
            $at=$_POST['at'];//validaAt
            $opcion_radio = $_POST["optradio"];

            switch ($opcion_radio) {
                case "existUser":
                    $param = array('usuario' => $usuario,'password' => $password);
                    // $resultado = $cliente->call('existUser',$usuario,$password);
                    $resultado = $cliente->call('existUser',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                case "saveDactilar":
                    $param = array('usuario' => $usuario,'huellaDactilar' => $huellaDactilar);
                    // $resultado = $cliente->call('saveDactilar',$usuario,$huellaDactilar);
                    $resultado = $cliente->call('saveDactilar',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                case "updateDactilar":
                    $param = array('usuario' => $usuario,'huellaDactilar' => $huellaDactilar);
                    // $resultado = $cliente->call('updateDactilar',$usuario,$huellaDactilar);
                    $resultado = $cliente->call('updateDactilar',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                case "deleteDactilar":
                    $param = array('usuario' => $usuario,'huellaDactilar' => $huellaDactilar);
                    // $resultado = $cliente->call('deleteDactilar',$usuario,$huellaDactilar);
                    $resultado = $cliente->call('deleteDactilar',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                case "getDactilar":
                    $param = array('usuario' => $usuario,'password' => $password);
                    // $resultado = $cliente->call('getDactilar',$usuario,$password);
                    $resultado = $cliente->call('getDactilar',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "validaAccesoPrincipal":
                    $param = array('usuario' => $usuario,'password' => $password,'aplicacion' => $aplicacion,'ip' => $ip,'sess' => $sess);
                    // $resultado = $cliente->call('validaAccesoPrincipal',$usuario,$password,$aplicacion,$ip,$sess);
                    $resultado = $cliente->call('validaAccesoPrincipal',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "cambiaPassword":
                    $param = array('usuario' => $usuario,'password' => $password,'aplicacion' => $aplicacion,'nuevoPassword' => $nuevoPassword,'ip' => $ip);
                    // $resultado = $cliente->call('cambiaPassword',$usuario,$password,$aplicacion,$nuevoPassword,$ip);
                    $resultado = $cliente->call('cambiaPassword',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "validaPersona":
                    $param = array('usuario' => $usuario,'password' => $password,'aplicacion' => $aplicacion,'persona' => $persona);
                    // $resultado = $cliente->call('validaPersona',$usuario,$password,$aplicacion,$persona);
                    $resultado = $cliente->call('validaPersona',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "validaAt":
                    $param = array('usuario' => $usuario,'password' => $password,'aplicacion' => $aplicacion,'at' => $at);
                    // $resultado = $cliente->call('validaAt',$usuario,$password,$aplicacion,$at);
                    $resultado = $cliente->call('validaAt',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "sendCorreo":
                    $param = array('usuario' => $usuario,'aplicacion' => $aplicacion);
                    // $resultado = $cliente->call('sendCorreo',$usuario,$aplicacion);
                    $resultado = $cliente->call('sendCorreo',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                case "caducidadPassword":
                    $param = array('usuario' => $usuario,'aplicacion' => $aplicacion);
                    // $resultado = $cliente->call('caducidadPassword',$usuario,$aplicacion);
                    $resultado = $cliente->call('caducidadPassword',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                case "dataUsuario":
                    $param = array('usuario' => $usuario,'aplicacion' => $aplicacion);
                    // $resultado = $cliente->call('dataUsuario',$usuario,$aplicacion);
                    $resultado = $cliente->call('dataUsuario',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "dataAplicacion":
                    $param = array('aplicacion' => $aplicacion);
                    // $resultado = $cliente->call('dataAplicacion',$aplicacion);
                    $resultado = $cliente->call('dataAplicacion',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }


                    break;
                case "dataGrupo":
                    $param = array('aplicacion' => $aplicacion);
                    // $resultado = $cliente->call('dataGrupo',$aplicacion);
                    $resultado = $cliente->call('dataGrupo',$param);
                    // print_r($resultado);
                    if ($cliente->fault) {
                      echo 'Fallo'."<br>";
                      print_r($resultado);
                    } else {  // Chequea errores
                      $err = $cliente->getError();
                      if ($err) {   // Muestra el error
                        echo 'Error' . $err ;
                      } else {    // Muestra el resultado
                        echo 'Resultado'."<br>";
                        print_r ($resultado);
                      }
                    }

                    break;
                default:
                  echo "Seleccione un radio button";
                    break;
            }//fin switvh

        }else{
          echo "da click en enviar";
        }    
  ?>