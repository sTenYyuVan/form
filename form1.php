<?php>
<!DOCTYPE html>
<html>
    <form action="connection.php" method="POST" novalidate>
<label for="name">Frist Name</label> <input type="text"id="name" name="name" value="Name"><br><br>
<label for="number">Phone number</label>  <input type="text"id="number" name="number" value="number"><br><br>
<label for="gender">Gender</label><br>
<input type="radio" id="male" name="gender" value="male"><label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><br>
<input type="radio" id="transgender" name="gender" valeu="transgender"><label for="transgender">Transgender</label><br>
<input type="radio" id="others" name="gender" name="others"><label for="others">others</label> <br><br>
<lable for="email">Email</lable><input type="email"id="email" name="email" value="sample@gmail.com"> <br><br>
<label for="comment">Leave A Comment</label><input type="text" id="comment" name="comment" value="comment" >
<br>
<br>
<input type="submit" value="submit">


    </form>
</html>
<?>
