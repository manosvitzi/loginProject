<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php
         if (isset($_GET['error'])) ?>
             <p class="error"><?php echo $_GET['error'] ?></p>
        <label for="">User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password" id="pass"><br>

        <div>
            <input type="checkbox" onclick="change()">
            <label>Show Password</label>
        </div>

        <script>
            function change(){
                var pass= document.getElementById('pass');
                if (pass.type == "password"){
                    pass.type = 'text';
                }else {
                    pass.type = 'password';
                }
            }
        </script>

        <button type="submit">Login</button>
    </form>
</body>
</html>