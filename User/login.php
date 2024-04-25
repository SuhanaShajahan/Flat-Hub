<?php
?>
<link rel="stylesheet" href="login.css">


<div class="my-6" style="margin-top: 20px;">
    <form method="post" action="loginact.php">
        <h1>SignIn</h1>
        <label for="email"><b>Email</b></label>
        <input type="text" required placeholder="Enter Email" name="email">
        <label for="pwd"><b>Password</b></label>
        <input type="password" required placeholder="Enter Password" name="pwd">
        <button type="submit" name="submit" class="registerbtn"><strong>log in</strong></button><br>
        <p>Don't have an account? <a href="register.php">Sign up</a>.</p>


    </form>
</div>
</body>

</html>