$(document).ready(main);
function main(){
    mostrarDatosParametro("",1);
    $("input[name=txtBuscarParametro]").keyup(function(){
      textobuscar =$(this).val();
      mostrarDatosParametro(textobuscar,1);
    });
    $("body").on("click",".paginacion li a",function(e){
      e.preventDefault();
      valorhref=$(this).attr("href");
      valorBuscar=$("input[name=textoBuscarParametro]").val();
      mostrarDatosParametro(valorBuscar,valorhref);
    });

}
function mostrarDatosParametro(valorBuscar,pagina){
  $.ajax({
    url:"http://localhost/iglesiamisioneracasadeoracion/admin/parametros/mostrar",
    type:"POST",
    dataType:"json",
    data:{buscar:valorBuscar,nropagina:pagina},
    success: function(response){
    //  console.log(response);
      filas ="";
      $.each(response.parametro,function(key,item){
        filas+="<tr style='background-color:#fff'><td>"+item.IDent_Parametro+"</td><td>"+item.Nombre+"</td><td>"+item.Descripcion+"</td><td>"+item.Valor+"</td>"+
        "<td><a href='#' data-toggle='modal' data-target='#modalEditarParametro' class='btn btn-success' onclick='EditarParametro("+item.IDent_Parametro+")'>Editar</button></td>"+
        "<td><a href='#' data-toggle='modal' data-target='#modalDetalleParametro' class='btn btn-success' onclick=''>Detalle</button></td></tr>";
      });
      $('#tbparametro').html(filas);
      linkseleccionado= Number(pagina);
      //total de registros
      totalregistros =response.totalregistros;

      //cantidad deregistros por paginaci
      cantidadregistros = response.cantidad;

      numerolinks= Math.ceil(totalregistros/cantidadregistros);
      paginador="<ul class='pagination'>";

        if(linkseleccionado>1){
          paginador+="<li><a href='1'>&laquo;</a></li>";
          paginador+="<li><a href='"+(linkseleccionado-1)+"'>&lsaquo;</a></li>";
        }else{
          paginador+="<li class='disabled'><a href='#'>&laquo;</a></li>";
          paginador+="<li class='disabled'><a href='#'>&lsaquo;</a></li>";
        }

        //muestro de los enlaces
        //cantidad de link hacia atras y adelante
        cant=2;
        //inicio de donde se va mostrar los linkseleccionado
        pagInicio  =(linkseleccionado>cant)?(linkseleccionado-cant):1;
        //condicion en la cual establecemnos el fin de los link
        if(numerolinks>cant)
{
        pagRestantes =numerolinks  - linkseleccionado;
        pagFin =(pagRestantes>cant)?(linkseleccionado+cant):numerolinks;
}else{
  pagFin =numerolinks;
}

    for (var i = pagInicio; i <=pagFin; i++){
        if(i==linkseleccionado)
            paginador+="<li class='active'><a href='javascript:void(0)'>"+i+"</a></li>";
          else
            paginador+="<li><a href='"+i+"'>"+i+"</a></li>";
      }
      if(linkseleccionado<numerolinks){
        paginador+="<li><a href='"+(linkseleccionado+1)+"'>&rsaquo;</a></li>";
        paginador+="<li><a href='"+numerolinks+"'>&raquo;</a></li>";
      }else{
        paginador+="<li class='disabled'><a href='#'>&rsaquo;</a></li>";
        paginador+="<li class='disabled'><a href='#'>&raquo;</a></li>";
      }
        paginador+="</ul>";
        $(".paginacion").html(paginador);
    }
  });
}

function EditarParametro(id){
  $.ajax({
    url:"http://localhost/iglesiamisioneracasadeoracion/admin/parametros/listarInformacionParametro",
    type:'post',
    dataType:'json',
    data:{id:id},
    success: function(response){
      console.log(response);
      //lista el estado de parametro para el combo estado
      var parametro="<option value='0'>SELECCIONAR</option>";
      $.each(response.detparametro,function(key,item){
        parametro+="<option value='"+item.IDent_Detalle+"'>"+item.Valor+"</option>"
      });
      $('#EstadoParametro').html(parametro);
      //lista los datos del parametro
      $.each(response.parametro,function(key,item){
        $('#idparametro').val(item.IDent_Parametro);
        $('#ParametroEditar').val(item.Nombre);
        $('#DescripcionParametroEditar').val(item.Descripcion);
        $('#EstadoParametroEditar').val(item.IDent_001_Estado);
      });
    }
  })
}

function updateParametro(){
  var id = $('#idparametro').val();
  var Parametro  = $('#ParametroEditar').val();
  var Descripcion  = $('#DescripcionParametroEditar').val();
  var Estado  = $('#EstadoParametroEditar').val();
  //alert(Dni+" "+Nombre);
  $.ajax({
    url:'http://localhost/iglesiamisioneracasadeoracion/admin/parametros/update',
    type:'post',
    dataType:'json',
    data:{id:id,Parametro:Parametro,Descripcion:Descripcion,Estado:Estado},
    success:function(data){
     if(data.estado){
        alert('Se actualizaron los datos correctamente');
        location.reload();
      }else{
        alert('Atencion hubo un error');
      }
    }
  });
}

function insertParametro(){
  var Parametro  = $('#Parametro').val();
  var Descripcion  = $('#DescripcionParametro').val();
  var Estado  = $('#EstadoParametro').val();

  var campos = ["Parametro", "DescripcionParametro", "EstadoParametro"];
  $.ajax({
    url:'http://localhost/iglesiamisioneracasadeoracion/admin/parametros/insertparametro',
    type:'post',
    dataType:'json',
    data:{Parametro:Parametro,Descripcion:Descripcion,Estado:Estado},
    success:function(data){
     if(data.estado){
        alert('Se inserto correctamente el usuario');
        limpiarcampos(Parametro,campos);
        mostrarDatosParametro("",1);
      }else{
        alert('Atencion hubo un error');
      }
    }
  });
}

function deletepersona(id){
  var r = confirm("¿Desea eliminar este usuario?");
      if (r == true) {
        $.ajax({
          url:'http://localhost/iglesiamisioneracasadeoracion/admin/usuario/deletepersona',
          type:'post',
          dataType:'json',
          data:{id:id},
          success:function(data){
           if(data.estado){
              mostrarDatos("",1);
            }else{
              alert('Atencion hubo un error');
            }
          }
        });
      } else {

      }


}

function limpiarcampos(focus,campos){

  $.each(campos, function(key,item){
    if("0"==key){
      $("#"+item).focus();
    }
    $("#"+item).val("");
  });
}
