$(document).ready(function(){
     
    $('#email').blur(function(){//Email проверка.
        if($(this).val() != '') {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($(this).val())){
            } else {
                alert("Enter correct email!");
            }
        } else {
            alert("The field is empty. Enter email!");
        }
    });

});  

    function validateAge(input) {//Не допускает ввода никаких символов, кроме чисел.
	    input.value = input.value.replace(/[^\d,]/g, '');
    };	
    
    function validateText(input) {//Не допускает ввода никаких символов, кроме латинских букв.
	    input.value = input.value.replace(/[^a-z, A-Z]/, '');
    };	
   
   function checkPass() {//Проверка на равенство паролей. 
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords do not match!");
        document.getElementById("pass1").style.borderColor = "#CD5C5C";//При неверном вводе пароля, делаем границу красной.
        document.getElementById("pass2").style.borderColor = "#CD5C5C";
        ok = false;
    }else{
        document.getElementById("pass1").style.borderColor = "#F8F8FF";//При верном вводе пароля, делаем границу белой.
        document.getElementById("pass2").style.borderColor = "#F8F8FF";
	}
    return ok;
}
          
