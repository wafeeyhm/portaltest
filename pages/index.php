<?php
    $sitename = explode("/", $_SERVER['REQUEST_URI']);
    include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/pages/header-index.php");
?>
<script>
// Set the date we're counting down to
var countDownDate = new Date("May 28, 2018 14:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    //document.getElementById("demo").innerHTML = "EXPIRED";
    document.getElementById("submit").disabled = false;

    var countDownAnswer = new Date("May 28, 2018 14:05:00").getTime();

    var z = setInterval(function(){
        var nowz = new Date().getTime();
        var distancez = countDownAnswer - nowz;

        var hourz = Math.floor((distancez % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutez = Math.floor((distancez % (1000 * 60 * 60)) / (1000 * 60));
        var secondz = Math.floor((distancez % (1000 * 60)) / 1000);

        document.getElementById("demo2").innerHTML = hourz + "h "
  + minutez + "m " + secondz + "s ";

        if(distancez < 0){
            clearInterval(z);
            document.getElementById("submit").disabled = true;
            //document.getElementById("demo").innerHTML = "EXPIRED";
        }

    }, 1000);

    //document.getElementById("demo").innerHTML = "";
  }
}, 1000);
</script>
<div class="row">
<div class="col-md">
    <!-- Display the countdown timer in an element -->
    <h1 id="demo"></h1>
    <h1 id="demo2"></h1>
</div>
</div>
<div class="row">
    <div class="col-md">
    <form>
        <div class="form-group">
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="My Username">
        </div>
        <div class="form-group">
        <input typse="password" class="form-control" id="password" name="username" placeholder="My Password">
        </div>
        <div class="form-group">
        <input typse="text" class="form-control" id="service_no" name="serviceno" placeholder="Service number">
        </div>
        <button type="submit" id="submit" name="submit" class="btn btn-warning btn-block" disabled>Login</button>
        <small id="emailHelp" class="form-text text-muted">Please register here if you dont have a My account</small>
    </form>
    </div>
</div>
<?php 
    include_once($_SERVER['DOCUMENT_ROOT'] . "/" . $sitename[1] . "/pages/footer-index.php"); 
?>
