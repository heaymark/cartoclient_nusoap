/*
    $(function(){
        $("#aai").click('checked',cmb);
        $("#abi").click('checked',cmb);
        $("#tae").click('checked',cmb);
    });

    function cmb(evt){
     
        switch(evt.target.value){
            case "alertaaltoimpacto":
                lyrs.getSubLayer(8).show();
                lyrs.getSubLayer(7).hide();
                break;
            case "alertabajoimpacto":
                lyrs.getSubLayer(7).show();
                lyrs.getSubLayer(8).hide();
                break;
            case "todaslasalertas":
                lyrs.getSubLayer(7).show();
                lyrs.getSubLayer(8).show();
                break;
        }
    }
*/
    function justNumbers(e)
    {
      var keynum = window.event ? window.event.keyCode : e.which;
      if ((keynum == 8) || (keynum == 46))
      return true;
       
      return /\d/.test(String.fromCharCode(keynum));
    }

    function validar(e) { // 1
        tecla = (document.all) ? e.keyCode : e.which; // 2
        if (tecla==8) return true; // 3
        patron =/[0123456789.\s]/; // 
        // patron =/[A-Za-z\s]/; // 4
        // patron = /\d/; // Solo acepta números
        // patron = /\w/; // Acepta números y letras
        // patron = /\D/; // No acepta números
        // patron =/[A-Za-zñÑ\s]/; // igual que el ejemplo, pero acepta también las letras ñ y Ñ
        // patron = /[ajt69]/; //Solo se acepte a, j, t, 6 y 9:
        te = String.fromCharCode(tecla); // 5
        return patron.test(te); // 6
    } // onkeypress="return validar(event)"


$(document).ready(function() {
    $("input[type=radio]").click(function(event){
        var valor = $(event.target).val();
        switch (valor) {
                case "existUser":
                    //
                    // $("#usuario").css("display", "block");
                    $("#usuario").show("swing");
                    // $("#password").css("display", "block");
                    $("#password").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#aplicacion").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#aplicacion").hide("linear");
                    $("#aplicacion").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "saveDactilar":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#huellaDactilar").css("display", "block");
                    $("#usuario").show("swing");
                    $("#huellaDactilar").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#aplicacion").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#aplicacion").hide("linear");
                    $("#aplicacion").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "updateDactilar":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#huellaDactilar").css("display", "block");
                    $("#usuario").show("swing");
                    $("#huellaDactilar").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#aplicacion").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#aplicacion").hide("linear");
                    $("#aplicacion").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "deleteDactilar":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#huellaDactilar").css("display", "block");
                    $("#usuario").show("swing");
                    $("#huellaDactilar").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#aplicacion").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#aplicacion").hide("linear");
                    $("#aplicacion").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "getDactilar":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#password").css("display", "block");
                    $("#usuario").show("swing");
                    $("#password").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#aplicacion").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#aplicacion").hide("linear");
                    $("#aplicacion").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "validaAccesoPrincipal":
                    //
                    $("#usuario").show("swing");
                    $("#password").show("swing");
                    $("#aplicacion").show("swing");
                    $("#ip").show("swing");
                    $("#sess").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "cambiaPassword":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#password").css("display", "block");
                    // $("#aplicacion").css("display", "block");
                    // $("#nuevoPassword").css("display", "block");
                    // $("#ip").css("display", "block");

                    $("#usuario").show("swing");
                    $("#password").show("swing");
                    $("#aplicacion").show("swing");
                    $("#nuevoPassword").show("swing");
                    $("#ip").show("swing");

                    // $("#huellaDactilar").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "validaPersona":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#password").css("display", "block");
                    // $("#aplicacion").css("display", "block");
                    // $("#persona").css("display", "block");

                    $("#usuario").show("swing");
                    $("#password").show("swing");
                    $("#aplicacion").show("swing");
                    $("#persona").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "validaAt":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#password").css("display", "block");
                    // $("#aplicacion").css("display", "block");
                    // $("#at").css("display", "block");

                    $("#usuario").show("swing");
                    $("#password").show("swing");
                    $("#aplicacion").show("swing");
                    $("#at").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    break;
                case "sendCorreo":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#aplicacion").css("display", "block");

                    $("#usuario").show("swing");
                    $("#aplicacion").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "caducidadPassword":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#aplicacion").css("display", "block");
                    $("#usuario").show("swing");
                    $("#aplicacion").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "dataUsuario":
                    //
                    // $("#usuario").css("display", "block");
                    // $("#aplicacion").css("display", "block");

                    $("#usuario").show("swing");
                    $("#aplicacion").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");


                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "dataAplicacion":
                    //
                    // $("#aplicacion").css("display", "block");

                    $("#aplicacion").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#usuario").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#usuario").hide("linear");
                    $("#usuario").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                case "dataGrupo":
                    //
                    // $("#aplicacion").css("display", "block");

                    $("#aplicacion").show("swing");

                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#usuario").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#usuario").hide("linear");
                    $("#usuario").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
                default:
                // statements_def
                    // $("#aplicacion").css("display", "none");
                    // $("#nuevoPassword").css("display", "none");
                    // $("#huellaDactilar").css("display", "none");
                    // $("#password").css("display", "none");
                    // $("#usuario").css("display", "none");
                    // $("#ip").css("display", "none");
                    // $("#sess").css("display", "none");
                    // $("#persona").css("display", "none");
                    // $("#at").css("display", "none");

                    $("#aplicacion").hide("linear");
                    $("#aplicacion").val("");
                    $("#nuevoPassword").hide("linear");
                    $("#nuevoPassword").val("");
                    $("#huellaDactilar").hide("linear");
                    $("#huellaDactilar").val("");
                    $("#password").hide("linear");
                    $("#password").val("");
                    $("#usuario").hide("linear");
                    $("#usuario").val("");
                    $("#ip").hide("linear");
                    $("#ip").val("");
                    $("#sess").hide("linear");
                    $("#sess").val("");
                    $("#persona").hide("linear");
                    $("#persona").val("");
                    $("#at").hide("linear");
                    $("#at").val("");
                    break;
        }

    });
});