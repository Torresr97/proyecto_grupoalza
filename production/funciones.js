



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



