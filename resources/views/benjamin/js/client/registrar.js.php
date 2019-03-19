$("#confirma").on('blur',function(){

if($("#password").val() != $("#confirma").val() ){
		toastr.error('Sua senha deve ser igual a da confirmação', 'Erro!');
          
		return false;
	}
});

$("#registrar").on('click',function(){


/*	if($("#name").val() == ""){
		alert("Seu nome nao pode ser vazio");
		return false;
	} 

	if($("#email").val() == ""){
		alert("Seu email nao pode ser vazio");
		return false;
	}


	if($("#password").val() == ""){
		alert("Sua senha nao pode ser vazia");
		return false;
	}
*/

        $.post( "registrar_usuario", 
        { name: $("#name").val() , password: $("#password").val(), email: $("#email").val() })
      .done(function( data ) {

        console.log(  JSON.stringify(data) );

//        alert(data.status);
		if(data.status == 1) {
			$("#container-login").hide();
        	$("#container-registrado").show();
		} 

		if(data.status == 2) {
		toastr.error(data.mensagem,'Seu cadastro não foi realizado.');
		}
        



      }); 



    });