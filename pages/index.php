<?php
    $sitename = explode("/", $_SERVER['REQUEST_URI']);
    include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/pages/header-index.php");
?>

<form>
    <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="My Username">
    </div>
    <div class="form-group">
    <input typse="password" class="form-control" id="exampleInputPassword1" placeholder="My Password">
    </div>
    <div class="form-group">
    <input typse="text" class="form-control" id="exampleInputPassword1" placeholder="Service number">
    </div>
    <button type="submit" class="btn btn-warning btn-block">Login</button>
    <small id="emailHelp" class="form-text text-muted">Please register here if you dont have a My account</small>
</form>

<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/pages/footer-index.php"); 
?>
