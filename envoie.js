$(document).ready(function(){
//inscrirption membre
    $("#envoie").submit(function($e){
        var scope = $(this);
        var nom = $("#surname").val();
        var prenom = $("#name").val();
        var date = $("#date").val();
        var sexe = $("#sexe").val();
        var ville = $("#ville").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var pass = $("#login").val();
        var token_password= $("#token_password").val();
        var active = $("#active").val();
  
        $.ajax({
            type: scope.attr("method"),
            url: scope.attr("action"),
            data: scope.serialize(),
            dataType: "json",
            success: function($data){
                if(data.result)
                {
                    scope.html("Inscription valide");
                }
                else
                {
                    alert(data.message);
                    $(data.input).focus();
                }
            }
        });
  
        e.preventDefault();
    });
  
});

