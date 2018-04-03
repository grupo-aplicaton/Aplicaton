$(document).ready(dockOk)
function dockOk(){
  // Inicio Botones de Redireccion
  $("#ir-login").click(irLogin)
  $("#ir-registro").click(irRegistro)
  $("#categorias").click(categorias)
  $("#subcategorias").click(subcategorias)
  $("#acciones").click(acciones)
  $("#inicio").click(volverInicio)
  // Fin Botones de Redireccion
  // Inicio Login
  $("#validar-login").submit(validarLogin)
  // Fin Login
  // Inicio Registro User
  $("#formulario-registro").submit(registrarUser)
  // Fin Registro User
  // Inicio Categorias ---------------------------------------
  $("#guardarCategoria").click(crearCategoria)
  // Inicio Modificar Categoria
  $("#editar-categoria").click(editarCategoria)
  $("#actualizarCategoria").click(actualizarCategoria)
  // Inicio Eliminar Categoria
  $("#eliminar-categoria").click(eliminarCategoria)
  // Fin Categorias ------------------------------------------
  // Inicio SubCategorias ------------------------------------
  // Inicio Agregar SubCategoria
  $("#form-subCate").submit(crearSubCategoria)
  // Inicio Modificar SubCategoria
  $("#editar-subcategoria").click(editarSubCategoria)
  $("#actualizarSubCategoria").click(actualizarSubCategoria)
  // Inicio Eliminar Categoria
  $("#eliminar-subcategoria").click(eliminarSubCategoria)
  // Fin SubCategorias ---------------------------------------
  // Inicio Acciones -----------------------------------------
  $("#form-acciones").submit(crearAcciones)
  $("#editar-accion").click(editarAccion)
  $("#actualizarAccion").click(actualizarAccion)
  $("#eliminarAccion").click(eliminarAccion)
  // Fin Acciones --------------------------------------------


}
function irLogin(x){
  x.preventDefault()
  window.location = "login.php"
}
function irRegistro(x){
  x.preventDefault()
  window.location = "registro.php"
}
function categorias(x){
  x.preventDefault()
  window.location = "categorias.php";
}
function subcategorias(x){
  x.preventDefault()
  window.location = "subcategorias.php";
}
function volverInicio(x){
  x.preventDefault()
  window.location = "index.php";
}
function acciones(x){
   x.preventDefault() 
   window.location = "acciones.php"
}
// Inicio Validar Login
function validarLogin (x) {
  x.preventDefault()
  var datos = $("#validar-login").serialize()
  $.ajax({
    url: 'controller/loginController.php',
    type: 'POST',
    data: datos,
    beforeSend: function(){
      //$('#load').show()
    },
    success: function (resultado) {
      if(resultado == 1) {
        //$('#load').hide()
        alertify.success("Datos Correctos. Iniciando Sesión...")
        setTimeout(function(){
          window.location = 'view/user/index.php'    
        },2000)
          
      } else {
        alertify.error('Email o Contraseña Invalidos')
      }     
    }
  })
}
// Fin Validar Login
// Inicio Registrar
function registrarUser(x){
  x.preventDefault()
  var datos = $("#formulario-registro").serialize()
  $.ajax({
    url: 'controller/registroController.php',
    type: 'POST',
    data: datos,
    beforeSend: function(){
    },
    success: function(resultado){
      if (resultado == 1) {
        alertify.error('El correo ya se encuentra registrado')
      } else if (resultado ==2) {
        alertify.error('Las claves no son iguales')
      } else if (resultado ==3) {
        alertify.success('Usuario creado con exito. Redireccionando...')
        setTimeout(function(){
          window.location='login.php'
        },3000)
      }
    }
  })
}
// Fin Registrar
// Inicio Crear Categoria
function crearCategoria(x){
  x.preventDefault()
  var datos = new FormData($("#formCategorias")[0])
  $.ajax({
    url: '../../model/modeloCategoria.php',
    type: 'POST',
    contentType: false,
    processData: false,
    data: datos,
    beforeSend: function(){

    },
    success: function(resultado){
      if (resultado == 1) {
        alertify.success("Se Creo la Categoria con Exito. Recargando...")
        setTimeout(function(){
          window.location.reload()
          },2000)  
      } else if (resultado == 2) {
        alertify.error("Ocurrio un Error al Crear la Categoria")
      } else if (resultado == 3) {
        alertify.error("No se pudo Guardar la Imagen")
      } else if (resultado == 4) {
        alertify.error("Debe Seleccionar una imagen de tipo JPG o PNG")
      } else if (resultado == 5) {
        alertify.error("El tamaño del archivo imagen es muy grande")
        // No me funciona ahora
      }
    }
  })
}
// Fin Crear Categoria
// Inicio Modificar Categoria
  // Inicio Funcion Mostrar Datos en el Formulario
function editarCategoria(x){
  x.preventDefault()
  var idCategoria = $("#cate").val()
  if (idCategoria) {
    $.ajax({
      url: '../../model/editarCategoria.php',
      type: 'POST',
      data: {idCate: idCategoria},
      beforeSend: function(){

      },
      success: function(resultado){
        $("#imagen").attr('src' , resultado)
        $('.servicioSelecionado').val($("#cate option:selected").text())
      }
    })
  } else {
    alertify.error("Debe seleccionar una Categoria")
  }
}
  // Fin Funcion Mostrar Datos en el Formulario
  // Inicio Funcion Actualizar Datos Nuevos
function actualizarCategoria(x){
  x.preventDefault()
  var datos = new FormData($("#formCategorias")[0])
  $.ajax({
    url: '../../model/actualizarCategoria.php',
    type: 'POST',
    contentType: false,
    processData: false,
    data: datos,
    beforeSend: function(){

    },
    success: function(resultado){ 
      if (resultado == 1) {
        alertify.success("Se Actualizo la Categoria con Exito. Recargando...")
        setTimeout(function(){
          window.location.reload()
          },2000)  
      } else if (resultado == 2) {
        alertify.error("Ocurrio un Error al Crear la Categoria")
      } else if (resultado == 3) {
        alertify.error("No se pudo Guardar la Imagen")
      } else if (resultado == 4) {
        alertify.error("Debe Seleccionar una imagen de tipo JPG o PNG")
      } else if (resultado == 5) {
        alertify.error("El tamaño del archivo imagen es muy grande")
        // No me funciona ahora
      }
     }
  })
}
  // Fin Funcion Actualizar Datos Nuevos
// Fin Modificar Categoria
// Inicio Mostrar Imagen
function mostrarImagen(input) {
 if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('.previaF').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
 }
}
$("#file").change(function(){
 mostrarImagen(this);
});
// Fin Mostrar Imagen
// Inicio Eliminar Categoria
function eliminarCategoria(x) {
  x.preventDefault()
  var idCategoria = $("#cate").val()
  console.log(idCategoria)
  if (idCategoria) {
    $.ajax({
      url: '../../model/eliminarCategoria.php',
      type: 'POST',
      data: {idCate: idCategoria},
      beforeSend: function(){

      },
      success:function(resultado){
        console.log(resultado)
        if (resultado == 1) {
          alertify.success('Categoria Eliminada con Exito. Recargando...')
          setTimeout(function(){
          window.location.reload()
        },3000)
        }else if (resultado == 3) {
          alertify.error('Ocurrio un problema al eliminar la categoria')
        } else {
          alertify.error('Ocurrio un problema al eliminar la imagen')
        }
      }
    })
  } else {
    alertify.error("Debe seleccionar una categoria")
  }
}
// Fin Eliminar Categoria
// Inicio Crear subcategoria
function crearSubCategoria(x){
  x.preventDefault()
  var datos = new FormData($("#form-subCate")[0])
  $.ajax({
    url: '../../model/crearSubcategoria.php',
    type: 'POST',
    contentType: false,
    processData: false,
    data: datos,
    beforeSend: function(){

    },
    success: function(resultado){
      console.log(resultado)
      if (resultado == 1) {
        alertify.success("Se Creo la Subcategoria con Exito. Recargando...")
        setTimeout(function(){
          window.location.reload()
          },2000)  
      } else if (resultado == 2) {
        alertify.error("Ocurrio un Error al Crear la Subategoria")
      } else if (resultado == 3) {
        alertify.error("No se pudo Guardar la Imagen")
      } else if (resultado == 4) {
        alertify.error("Debe Seleccionar una imagen de tipo JPG o PNG")
      } else if (resultado == 5) {
        alertify.error("El tamaño del archivo imagen es muy grande")
        // No me funciona ahora
      } else if (resultado == 6) {
        alertify.error("Debe seleccionar una Categoria")
      }
    }
  })
}
function mostrarImagen2(input) {
 if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('.previaFa').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
 }
}
$("#fileSub").change(function(){
 mostrarImagen2(this);
});
// Fin Crear subcategoria

// Inicio Modificar Categoria
  // Inicio Funcion Mostrar Datos en el Formulario
function editarSubCategoria(x){
  x.preventDefault()
  var idSubCategoria = $("#subCate").val()
  if (idSubCategoria) {
    $.ajax({
      url: '../../model/editarSubcategoria.php',
      type: 'POST',
      data: {idSubCate: idSubCategoria},
      beforeSend: function(){

      },
      success: function(resultado){
        $("#imagen2").attr('src' , resultado)
        $('.opcion-seleccionada').val($("#subCate option:selected").text())
      }
    })
  } else {
    alertify.error("Debe seleccionar una SubCategoria")
  }
}
  // Fin Funcion Mostrar Datos en el Formulario
  // Inicio Funcion Actualizar Datos Nuevos
function actualizarSubCategoria(x){
  x.preventDefault()
  var datos = new FormData($("#form-subCate")[0])
  $.ajax({
    url: '../../model/actualizarSubcategoria.php',
    type: 'POST',
    contentType: false,
    processData: false,
    data: datos,
    beforeSend: function(){

    },
    success: function(resultado){ 
      if (resultado == 1) {
        alertify.success("Se Actualizo la SubCategoria con Exito. Recargando...")
        setTimeout(function(){
          window.location.reload()
          },2000)  
      } else if (resultado == 2) {
        alertify.error("Ocurrio un Error al Crear la SubCategoria")
      } else if (resultado == 3) {
        alertify.error("No se pudo Guardar la Imagen")
      } else if (resultado == 4) {
        alertify.error("Debe Seleccionar una imagen de tipo JPG o PNG")
      } else if (resultado == 5) {
        alertify.error("El tamaño del archivo imagen es muy grande")
        // No me funciona ahora
      }
     }
  })
}
  // Fin Funcion Actualizar Datos Nuevos
// Fin Modificar Categoria



// Inicio Eliminar Subcategoria
function eliminarSubCategoria(x) {
  x.preventDefault()
  var idSubCategoria = $("#subCate").val()
  console.log(idSubCategoria)
  if (idSubCategoria) {
    $.ajax({
      url: '../../model/eliminarSubcategoria.php',
      type: 'POST',
      data: {idSubCate: idSubCategoria},
      beforeSend: function(){

      },
      success:function(resultado){
        console.log(resultado)
        if (resultado == 1) {
          alertify.success('SubCategoria Eliminada con Exito. Recargando...')
          setTimeout(function(){
          window.location.reload()
        },3000)
        }else if (resultado == 3) {
          alertify.error('Ocurrio un problema al eliminar la Subcategoria')
        } else {
          alertify.error('Ocurrio un problema al eliminar la imagen')
        }
      }
    })
  } else {
    alertify.error("Debe seleccionar una Subcategoria")
  }
}
// Fin Eliminar Subcategoria
// Inicio Crear Acciones
function crearAcciones(x){
  x.preventDefault()
  var datos = new FormData($("#form-acciones")[0])
  $.ajax({
    url: '../../model/crearAcciones.php',
    type: 'POST',
    contentType: false,
    processData: false,
    data: datos,
    beforeSend: function(){

    },
    success: function(resultado){
      console.log(resultado)
      if (resultado == 1) {
        alertify.success("Se Creo la Accion con Exito. Recargando...")
        setTimeout(function(){
          window.location.reload()
          },2000)  
      } else if (resultado == 2) {
        alertify.error("Ocurrio un Error al Crear la Accion")
      } else if (resultado == 3) {
        alertify.error("No se pudo Guardar la Imagen")
      } else if (resultado == 4) {
        alertify.error("Debe Seleccionar una imagen de tipo JPG o PNG")
      } else if (resultado == 5) {
        alertify.error("El tamaño del archivo imagen es muy grande")
        // No me funciona ahora
      } else if (resultado == 6) {
        alertify.error("Debe seleccionar una SubCategoria")
      }
    }
  })
}


function mostrarImagen3(input) {
 if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('.previaFo').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
 }
}
$("#fileAc").change(function(){
 mostrarImagen3(this);
});
// Fin Crear Acciones
// Inicio Modificar Acciones
  // Inicio Editar Acciones
function editarAccion(x){
  x.preventDefault()
  var idAccion = $("#accion").val()
  console.log(idAccion)
  if (idAccion) {
    $.ajax({
      url: '../../model/editarAccion.php',
      type: 'POST',
      data: {idAccion: idAccion},
      beforeSend: function(){

      },
      success: function(resultado){
        $("#imagen3").attr('src' , resultado)
        $('.opcionAccion').val($("#accion option:selected").text())
      }
    })
  } else {
    alertify.error("Debe seleccionar una Accion")
  }
}
  // Fin Editar Acciones
  // Inicio Actualizar Acciones
  function actualizarAccion(x){
  x.preventDefault()
  var datos = new FormData($("#form-acciones")[0])
  $.ajax({
    url: '../../model/actualizarAccion.php',
    type: 'POST',
    contentType: false,
    processData: false,
    data: datos,
    beforeSend: function(){

    },
    success: function(resultado){ 
      if (resultado == 1) {
        alertify.success("Se Actualizo la Accion con Exito. Recargando...")
        setTimeout(function(){
          window.location.reload()
          },2000)  
      } else if (resultado == 2) {
        alertify.error("Ocurrio un Error al Crear la Accion")
      } else if (resultado == 3) {
        alertify.error("No se pudo Guardar la Imagen")
      } else if (resultado == 4) {
        alertify.error("Debe Seleccionar una imagen de tipo JPG o PNG")
      } else if (resultado == 5) {
        alertify.error("El tamaño del archivo imagen es muy grande")
        // No me funciona ahora
      }
     }
  })
}
  // Fin actualizar Acciones
// Fin Modificar Acciones
// Inicio Eliminar Acciones
function eliminarAccion(x) {
  x.preventDefault()
  var idAccion = $("#accion").val()
  if (idAccion) {
    $.ajax({
      url: '../../model/eliminarAccion.php',
      type: 'POST',
      data: {idAccion: idAccion},
      beforeSend: function(){

      },
      success:function(resultado){
        console.log(resultado)
        if (resultado == 1) {
          alertify.success('Accion Eliminada con Exito. Recargando...')
          setTimeout(function(){
          window.location.reload()
        },3000)
        }else if (resultado == 3) {
          alertify.error('Ocurrio un problema al eliminar la Accion')
        } else {
          alertify.error('Ocurrio un problema al eliminar la imagen')
        }
      }
    })
  } else {
    alertify.error("Debe seleccionar una Accion")
  }
}
// Fin Eliminar Acciones