<?php require "includes/header.php"; ?>

<?php require "config.php"; ?>

<?php

if (isset($_POST['submit'])) {
  if ($_POST['email'] == '' or $_POST['password'] == '') {
    echo "All fields are mandatory!";
  } else {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = $conn->query("Select * from users where email = '$email'");
    $login->execute();

    $data = $login->fetch(PDO::FETCH_ASSOC);
    if ($login->rowCount() > 0) {
      // echo $login->rowCount();
      if (password_verify($password, $data['password'])) {
        // echo "User logged in";
        $_SESSION['email'] = $data['email'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        header('location: index.php');
      } else {
        echo "Wrong password";
      }
    } else {
      echo 'User not found';
    }
  }
}


?>

<main class="form-signin w-50 m-auto">
  <form method="POST" action="login.php">
    <h1 class="h3 mt-5 fw-normal text-center">Sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <br>
    <!-- 
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="user.name">
      <label for="floatingInput">Username</label>
    </div>
    <br> -->

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <br>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account <a href="register.php">Create your account</a></h6>
  </form>
</main>

<?php require "includes/footer.php"; ?>