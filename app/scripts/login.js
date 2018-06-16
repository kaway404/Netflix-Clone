$(document).ready(function() {
    $("#btn-red-login").click(function() {
        var email = $("#lemail");
        var emailPost = email.val();
        var senha = $("#lsenha");
        var senhaPost = senha.val();
        $.post("/logando", {email: emailPost, senha: senhaPost},
        function(data){
        document.getElementById("message").style.display = "block";
         $("#message").html(data);
         }
         , "html");
         return false;
    });
});