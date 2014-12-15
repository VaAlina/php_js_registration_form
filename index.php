<?php
include "config.php";
include 'index.html';
?>

<div class="form" >
<form method="post" action="insert.php" onsubmit="return checkmail(this.email.value)" >
First name:<input type="text" name="f_name" placeholder="John" size="50" maxlength="40" onkeyup="validateText(this)" onchange="validateText(this)" required /><br/>
Email:<input type="email" name="email" placeholder="example@any.com" size="60" maxlength="40" required /><br/>
Password:<input type="password" name="pass" size="40" id="pass1" required><br/>
Confirm password:<input type="password" name="pass2" size="40" id="pass2" onblur="return checkPass()" required><br/>
<input type="submit" name="ok" value="add"/>
</form>
</div>

</body>
</html>
