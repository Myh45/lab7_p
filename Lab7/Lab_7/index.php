<!DOCTYPE html>
<html>

<body>
    <main>
        <h1>Registration</h1>
        <form action="registration.php" method="POST" >
            <p>enter name</p>
            <input type="text" name="user_name">
            <p>enter password</p>
            <input type="password" name="user_password">
            <input type="submit">
        </form>
        <hr>
        <h1>log in</h1>
        <form action="login.php" method="POST" >
            <p>enter name</p>
            <input type="text" name="user_name">
            <p>enter password</p>
            <input type="password" name="user_password">
            <input type="submit" ><br>
            <input type="checkbox" name="remember_me">
            <label for="checkbox">remember me</label>
        </form>
        <hr>
        <form action="check_cookie.php" method="POST" >
            <p>click to enter by cookies</p>
            <input type="submit">
        </form>
    </main>
</body>

</html>

