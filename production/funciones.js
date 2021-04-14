


			function SelectRegistro(){
											id = document.getElementById("tipoequipo").value;
											if (id == 'nada') {
												$("#frmdesktop").hide();
												$("#frmlaptop").hide();
												$("#fmrcelular").hide();
												$("#frmtel").hide();
												$("#frmotros").hide();
												$("#btndesktop").hide();
												$("#btnlaptop").hide();
												$("#btncelular").hide();
												$("#btntel").hide();
												$("#btnotros").hide();
												}
												
											else if (id == "desktop") {
											$("#frmdesktop").show();
											$("#btndesktop").show();
											$("#frmlaptop").hide();
											$("#fmrcelular").hide();
											$("#frmtel").hide();
											$("#frmotros").hide();
											}
											
											else if (id == "laptop") {
											$("#frmlaptop").show();
											$("#btnlaptop").show();
											$("#frmdesktop").hide();
											$("#fmrcelular").hide();
											$("#frmtel").hide();
											$("#frmotros").hide();
										
											}
											else if(id == "celular") {
												$("#frmlaptop").hide();
											$("#frmdesktop").hide();
											$("#fmrcelular").show();
											$("#btncelular").show();
											$("#frmtel").hide();
											$("#frmotros").hide();
										
											}else if(id=="telefono"){
												$("#frmlaptop").hide();
											$("#frmdesktop").hide();
											$("#fmrcelular").hide();
											$("#frmtel").show();
											$("#btntel").show();
											$("#frmotros").hide();
											$("#btnotros").hide();

											}else if(id=="otros"){
												$("#frmlaptop").hide();
											$("#frmdesktop").hide();
											$("#fmrcelular").hide();
											$("#frmtel").hide();
											$("#frmotros").show();
											$("#btnotros").show();
											}
										}
						
										










