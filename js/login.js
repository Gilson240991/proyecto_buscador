function validarUsuario(){
				var url =$('.upd').attr('action');
				var url_action=url+"login/acceder";
				var method =$('.upd').attr('method');
				//alert(url_action);
				if($('#usuario').val()==""){
					return false;
				}

				if($('#clave').val()==""){
					return false;
				}
				
				$.ajax({
					url:url_action,
					type:method,
					data: $('.upd').serialize(),
					success:function(resp){
						console.log(resp);
						if(resp){
							location.href=url+"dashboard/";
						}else{
							var msj='Este usuario no esta registrado';
							$('#msj').html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>¡Error! </strong>'+msj+'</div>');
						}
					}
				}) .done(function( data ) {
        console.log("done");
    })
    .fail( function(xhr, textStatus, errorThrown) {

    });


			}