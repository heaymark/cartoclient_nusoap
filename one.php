<pre>
<?php
 
    require_once('lib/nusoap.php');
     
    $cliente = new nusoap_client('http://www.mauricioalpizar.com/ejemplos/nusoap/mi_ws1.php');
    //print_r($cliente);
     
    $datos_persona_entrada = array( "datos_persona_entrada" => array(    
                                                                    'nombre'    => "Mauricio A.",
                                                                    'email'     => "ealpizar@ticosoftweb.com",
                                                                    'telefono'  => "8700-5455",
                                                                    'ano_nac'   => 1980)
                                                                    );
 
    $resultado = $cliente->call('calculo_edad',$datos_persona_entrada);
     
    print_r($resultado);
     
?>
</pre>