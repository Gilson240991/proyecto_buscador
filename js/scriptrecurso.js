
function agregarrecurso(){
var formData = new FormData($('#form-recurso')[0]);
var url=$('#form-recurso').attr('action');

$.ajax({
  url:url,
  type:'post',
  dataType:'json',
  data:formData,
  cache:false,
  contentType:false,
  processData:false,
  success: function(resp){

    if(resp.estado){
    color = "success";
    mensaje  = resp.msj;
    limpiarcampos();
  }else{
    color = "danger";
    mensaje  = resp.msj;
  }
  $("#alert-recurso").html("<div class='alert alert-"+color+" alert-dismissable'>"+
  "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+
  "<strong>Atención!</strong> "+mensaje+"</div>");
}
});

}
function actualizarrecurso(){
  var url=$('#form-recurso').attr('action');
  var formData = new FormData($('#form-recurso')[0]);
  $.ajax({
    url:url,
    type:'post',
    dataType:'json',
    data:formData,
    cache:false,
    contentType:false,
    processData:false,
    success: function(resp){

      if(resp.estado){
      color = "success";
      mensaje  = resp.msj;
    }else{
      color = "danger";
      mensaje  = resp.msj;
    }
    $("#alert-recurso").html("<div class='alert alert-"+color+" alert-dismissable'>"+
    "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+
    "<strong>Atención!</strong> "+mensaje+"</div>");
  }
  });
}



function limpiarcampos(){
$('#nombre').val("");
$('#codigo').val("");
$('#descripcion').val("");
$('#estado').val("");
$('#imagen').val("");
$('#codigo').focus();

}
