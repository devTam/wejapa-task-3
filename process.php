<?php
    $color = $_POST['color'];
    $styleBlock = sprintf('
    <style type="text/css">
       body {
         background-color:%s
       }
    </style>
  ', $color);
  echo $styleBlock;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Congratulations</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="media.css">
</head>
<style>

  body {
    overflow: hidden;
    font-family: 'Open Sans', sans-serif;
  }

.container {
      width: 100%;
  height: 100%;
}
.confetti {
  width: 15px;
  height: 15px;
  background-color: #f2d74e;
  position: absolute;
  left: 50%;
  animation: confetti 5s ease-in-out -2s infinite;
  transform-origin: left top;
}
.confetti:nth-child(1) {
  background-color: #f2d74e; left: 10%; animation-delay: 0;
}
.confetti:nth-child(2) {
  background-color: #95c3de; left: 20%; animation-delay: -5s;
}
.confetti:nth-child(3) {
  background-color: #ff9a91; left: 30%; animation-delay: -3s;
}
.confetti:nth-child(4) {
  background-color: #f2d74e; left: 40%; animation-delay: -2.5s;
}
.confetti:nth-child(5) {
  background-color: #95c3de; left: 50%; animation-delay: -4s;
}
.confetti:nth-child(6) {
  background-color: #ff9a91; left: 60%; animation-delay: -6s;
}
.confetti:nth-child(7) {
  background-color: #f2d74e; left: 70%; animation-delay: -1.5s;
}
.confetti:nth-child(8) {
  background-color: #95c3de; left: 80%; animation-delay: -2s;
}
.confetti:nth-child(9) {
  background-color: #ff9a91; left: 90%; animation-delay: -3.5s;
}
.confetti:nth-child(10) {
  background-color: #f2d74e; left: 100%; animation-delay: -2.5s;
}

@keyframes confetti {
  0% { transform: rotateZ(15deg) rotateY(0deg) translate(0,0); }
  25% { transform: rotateZ(5deg) rotateY(360deg) translate(-5vw,20vh); }
  50% { transform: rotateZ(15deg) rotateY(720deg) translate(5vw,60vh); }
  75% { transform: rotateZ(5deg) rotateY(1080deg) translate(-10vw,80vh); }
  100% { transform: rotateZ(15deg) rotateY(1440deg) translate(10vw,110vh); }
}

.header {
  text-align: center;
  /* color: #fff; */
  font-weight: bold;
}

ul {
  list-style-type: none;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -100%);
  font-weight: bold;
}


</style>
<body>
  <div class="header">
    <h1>Congratulations! &#128513;</h1>
  </div>
  
    <ul>
      <li>First Name: <?php echo $_POST['firstName']?></li>
      <li>Last Name: <?php echo $_POST['lastName']?></li>
      <li>Email: <?php echo $_POST['email']?></li>
      <li>Date of birth: <?php echo $_POST['dob']?></li>
      <li>Gender: <?php 
        if (isset($_POST['male'])) {
          echo "male";
        } else {
          echo "female";
        }
      ?></li>
      <li>Department: <?php echo $_POST['dept']?></li>
    </ul>


  
  <div class="container">
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
    <div class="confetti"></div>
  </div>
  
  
</body>
</html>