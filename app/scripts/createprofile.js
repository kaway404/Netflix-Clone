$(document).ready(function() {
    $("#createprofile").click(function() {
        var name = $("#name");
        var namePost = name.val();
        $.post("/newprofile", {name: namePost},
        function(data){
        document.getElementById("message").style.display = "block";
         $("#message").html(data);
         }
         , "html");
         return false;
    });
});