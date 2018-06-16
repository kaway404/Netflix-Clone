$(document).ready(function() {
    $("#btn-red-registro").click(function() {
        var email = $("#remail");
        var emailPost = email.val();
        var senha = $("#rsenha");
        var senhaPost = senha.val();
        $.post("/registro", {email: emailPost, senha: senhaPost},
        function(data){
        document.getElementById("message").style.display = "block";
         $("#message").html(data);
         }
         , "html");
         return false;
    });
});