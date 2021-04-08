



			function SelectRegistro(){
											id = document.getElementById("tipoequipo").value;
											if (id =="nulo") {
												$("#desktop").hide();
												$("#laptop").hide();
												$("#celular").hide();
												$("#telefono").hide();
												$("#otros").hide();
												}
												
											else if (id == "desktop") {
											$("#desktop").show();
											$("#laptop").hide();
											$("#celular").hide();
											$("#telefono").hide();
											$("#otros").hide();
											}
											
											else if (id == "laptop") {
											$("#laptop").show();
											$("#desktop").hide();
											$("#celular").hide();
											$("#telefono").hide();
											$("#otros").hide();
										
											}
											else if(id == "celular") {
												$("#laptop").hide();
											$("#desktop").hide();
											$("#celular").show();
											$("#telefono").hide();
											$("#otros").hide();
										
											}else if(id=="telefono"){
												$("#laptop").hide();
											$("#desktop").hide();
											$("#celular").hide();
											$("#telefono").show();
											$("#otros").hide();
											}else if(id=="otros"){
												$("#laptop").hide();
											$("#desktop").hide();
											$("#celular").hide();
											$("#telefono").hide();
											$("#otros").show();
											}
										}
						
										



function validar(obj){
	var checkbox1=document.getElementById("Checkbox1").checked = false;
	var	checkbox2=document.getElementById("Checkbox1").checked = false;
		obj.checked = true;}

		
if (checkbox1.checked == true) { // si, se ejecuta
	checkbox2.checked = false; // checkbox 2 se vuelve a false
	}else if(checkbox2.checked == true){ // es un else, no se ejecuta
	checkbox1.checked =false;
	}


function validaForm(){
    // Campos de texto
    if($("#nombre").val() == ""){
        alert("El campo Nombre no puede estar vacío.");
        $("#nombre").focus();       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
        return false;
    }
    if($("#apellidos").val() == ""){
        alert("El campo Apellidos no puede estar vacío.");
        $("#apellidos").focus();
        return false;
    }
    if($("#direccion").val() == ""){
        alert("El campo Dirección no puede estar vacío.");
        $("#direccion").focus();
        return false;
    }

    // Checkbox
    if(!$("#mayor").is(":checked")){
        alert("Debe confirmar que es mayor de 18 años.");
        return false;
    }

    return true; // Si todo está correcto
}



