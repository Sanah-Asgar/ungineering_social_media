$(document).ready(function (){
    $(".form").submit(function () {
        var password = $(".psw").val();
        var confirmPassword = $(".con-psw").val();
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
     });
});
