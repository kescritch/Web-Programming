<!DOCTYPE html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="..\..\css\styles.css">
</head>

<body>
  <header>
    <h1>Login</h1>
  </header>

  <section>
    <form action="login.view.php" method="post">
        <div><input type="text" name = "username" placeholder="Username"></div>
        <div><input type="password" name = "password" placeholder="Password"></div>
        <div><button name = "enter">Enter</button></div>
    </form>

  </section>
</body>

</html>

<?php
require"..\login.php";
?>