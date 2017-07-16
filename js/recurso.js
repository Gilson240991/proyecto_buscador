$(document).ready(main);
function main(){
    mostrarDatos("",1);
    $("input[name=txtBuscarrecurso]").keyup(function(){
      textobuscar =$(this).val();
      mostrarDatos(textobuscar,1);
    });
    $("body").on("click",".paginacion li a",function(e){
      e.preventDefault();
      valorhref=$(this).attr("href");
      valorBuscar=$("input[name=txtBuscarrecurso]").val();
      mostrarDatos(valorBuscar,valorhref);
    });

}
function mostrarDatos(valorBuscar,pagina){
  var url =$('#form-recurso-buscar').attr('action');
  $.ajax({
    url:url+"admin/recurso/mostrar",
    type:"POST",
    dataType:"json",
    data:{buscar:valorBuscar,nropagina:pagina},
    success: function(response){
    //  console.log(response);
      filas ="";
      $.each(response.recurso,function(key,item){
        if(item.IDent_001_Estado==1){
         estado ="ACTIVO";
        }else{
         estado ="INACTIVO";
        }
        filas+="<tr><td>"+item.IDent_Recurso+"</td><td>"+item.Codigo+"</td><td>"+item.Nombre+"</td><td>"+item.Descripcion+"</td><td>"+estado+"</td><td><img src='"+url+"files/"+item.Imagen+"' class='myImg' id='img"+item.IDent_Recurso+"' onclick='mostrarimagen(\"img"+item.IDent_Recurso+"\")'  widht='60px' height='60px' alt='"+item.Nombre+"'></td>"+
        "<td class='editar'><a href='"+url+"admin/recurso/editar/"+item.IDent_Recurso+"' class='btn btn-success btn-xs' >Editar</button></td><td class='eliminar'><a type='button' class='btn btn-danger btn-xs' onclick='deleterecurso("+item.IDent_Recurso+",\""+item.Imagen+"\");'>Eliminar</button></td>"+
        "</tr>";
      });
      $('#tbrecurso').html(filas);
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

function deleterecurso(id,imagen){
  var r = confirm("¿Desea eliminar este recurso?");
      if (r == true) {
        $.ajax({
          url:$('#form-recurso-buscar').attr('action')+'admin/recurso/deleterecurso',
          type:'post',
          dataType:'json',
          data:{id:id,imagen:imagen},
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

function mostrarimagen(string){

  // Get the modal
  var modal = document.getElementById('myModal');
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById(string);
  //alert(img);
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
  modal.style.display = "none";
  }

}
