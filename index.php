<?php 
  require('connect.php')
?>

<html>

<head>
  <title>Confession office</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="banner">
    <div class="navbar">
      <img src="https://i.postimg.cc/28TXFzX0/saturn1.png" class="logo">
      <ul>
        <li><a href="https://twitter.com/SlomDiary_">Social</a></li>
        <li><a href="http://calculator-calories.rf.gd">Calculater website</a></li>

      </ul>
    </div>
    <div class="content">
      <form action="process.php" method="POST">
        <textarea placeholder="What is on your mind?" id="text" name="text" rows="4"></textarea>
        <div>
          <button type="submit" name="submit"><span></span>Send</button>

        </div>
      </form>


    </div>


  </div>

</body>

</html>
