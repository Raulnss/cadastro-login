 window.onload = $(document).ready(function(){
    var email =  $("#n1").val();
    var senha =  $("#n2").val();
                $.ajax({
                   url: "../teste.php",
                   type: "POST",
                   data: "email="+email+"&senha="+senha,
                dataType: "html"
        }).done(function(resposta) {
            if (resposta == "<h1>Voce nao pode acessar.</h1><p><a href=\"index.html\">Entrar</a></p>") {
                $("#protect").html(resposta);
            } else {
                $("#di").html(resposta);
            }
        }).fail(function(jqXHR, textStatus ) {
            console.log("Request failed: " + textStatus);
        }).always(function() {
            console.log("Foi");
      });
    });