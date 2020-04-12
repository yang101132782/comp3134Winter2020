<?php

$store=array("123456","123456789","qwerty","password","111111","12345678","abc123","1234567","password1","12345");

$password=isset($_POST['password']) ? $_POST['password'] : 'no';

if(in_array($password,$store){

print(“Successfully authenticated”
}

?>

<html>
<header>
</header>
<body>
<h1>Weak Password</h1>
<form method="post">
<label>Password</label>
<input type="password" name="password">
<br/>
<input type="submit">
</form>
</body>
</html>
