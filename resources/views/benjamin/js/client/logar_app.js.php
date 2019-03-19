$("#logar").on('click',function(){
/*	if ($('#aceito').attr('checked'))
{
    alert("aceito");
}
else
{
    alert("num que");

}*/

	if($("#email").val() == ""){
		alert("Seu email nao pode ser vazio");
		return false;
	}

	if($("#password").val() == ""){
		alert("Seu nome nao pode ser vazio");
		return false;
	}

    $.post( "logar", 
     {  password: $("#password").val(), email: $("#email").val() })
     .done(function( data ) {
       // alert(  JSON.stringify(data) );

//        alert(data.status);
        if(data.status == 1){
        	localStorage.setItem('user_token',data.usuario.user_token);
            localStorage.setItem('grupo_logado',data.usuario.group_id);
        	localStorage.setItem('logado',1);
        	localStorage.setItem('usuario_logado',JSON.stringify(data.usuario));
            window.location.replace("/client/qrunidade");
        }

        if(data.status == 0) {
        toastr.error(data.response,'Login não realizado.');
        }
        

      });
    });