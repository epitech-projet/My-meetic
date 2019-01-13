$(document).ready(function(){
//inscirption membre
    $("#envoie").submit(function($e){
        var scope = $(this);
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var date = $("#date").val();
        var sexe = $("#sexe").val();
        var ville = $("#ville").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var pass = $("#pass").val();
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

