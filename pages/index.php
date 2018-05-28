<?php
    $sitename = explode("/", $_SERVER['REQUEST_URI']);
    include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/pages/header-index.php");
?>

    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="test" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPassword" class="sr-only">Service Number</label>
      <input type="text" id="inputPassword" class="form-control" placeholder="Service Number" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/pages/footer-index.php"); 
?>
