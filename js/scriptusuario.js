
$(document).ready(function(){
  $('#selpersona').change(function() {
  $('#selpersona option:selected').each(function () {
  var id = $(this).val();
  if(id==""){
    $('.alert').hide();
    limpiarcampos();

  }else{
    $('.alert').hide();
    mostrarUsuarioPorIdPersona(id);

  }
  });
  });
});

function mostrarUsuarioPorIdPersona(id){
  var url = $('#form-actualizarusuario').attr('action')+"listarUsuario";
  $.ajax({
    url:url,
    type:'post',
    dataType:'json',
    data:{id:id},
    success:function(response){

      $.each(response.usuario,function(key,item){
        $('#hiddenidusuario').val(item.Id_usuario)
        $('#usuario').val(item.usuario);
        $('#pass').val(item.clave);
      });
      $('#usuario').attr('disabled',false);
      $('#nuevopass').attr('disabled',false);
      $('#renuevopass').attr('disabled',false);


    }
  });
}
// actualizar el usuario y el password
function actualizarUsuario(){
  $('.text-danger').hide();
  var hasError = false;
  var id =$('#hiddenidusuario').val();
  var usuario =$('#usuario').val();
  var nuevopass =$('#nuevopass').val();
  var renuevopass =$('#renuevopass').val();
  var url = $('#form-actualizarusuario').attr('action')+"actualizarusuario";

          if (nuevopass == '') {
              $("#nuevopass").after('<strong><span class="text-danger">Por favor ingresa una contraseña.</span></strong>');
              hasError = true;
          } else if (renuevopass == '') {
              $("#renuevopass").after('<strong><span class="text-danger">Por favor repita la contraseña.</span></strong>');
              hasError = true;
          } else if (nuevopass != renuevopass) {
              $("#renuevopass").after('<strong><span class="text-danger">Contraseñas no coinciden.</span></strong>');
              hasError = true;
          }

          if(hasError == true) {return false;}

          if(hasError == false) {
               	$.ajax({
  				url:url,
  				type:"POST",
  				dataType:'json',
  				data:{id:id,nuevopass:nuevopass,usuario:usuario},
  				success:function(data){

            if(data.estado){
              color ="success";
              msj ="Se actualizaron los datos satisfactoriamente";
              limpiarcampos();
              $('#selpersona').val("");
            }else{
              color ="danger";
              msj ="No se pudo actualizar los datos";

            }

  					  $('#alerta').html("<div class='alert alert-"+color+" alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+
                                  "<strong>Atención!  </strong>"+msj+"</div>");
  				}
  	});
          };

}

function limpiarcampos(){
  $('#usuario').attr('disabled',true);
  $('#nuevopass').attr('disabled',true);
  $('#renuevopass').attr('disabled',true);

  //limpiar campos
  $('#usuario').val("");
  $('#nuevopass').val("");
  $('#pass').val("");
  $('#renuevopass').val("");
}
