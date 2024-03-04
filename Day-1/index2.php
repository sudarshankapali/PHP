<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login form</title>
</head>

<body>
  <main>
    <section>
      <header>
        <h1>Login!</h1>
        <?php
        echo phpversion();
        ?>
      </header>
    </section>

    <section>
    <form action="test.php" method="get">
        <input name="email" type="text" placeholder="Enter email">
        <input name="password" type="text" placeholder="Enter password">

        <button type="submit">Login</button>

      </form>
    </section>
  </main>
</body>

</html>