<!doctype html>

<html>
  <head>
    <title> quiz 2 </title>
    <meta name ="author" content="Alexandra Savage">
    <link rel="stylesheet" href="./CSS/index.css">
  </head>
  <body>
    <p>
      <?php
      // $fname = $_POST["fName"];
      // $lname = $_POST["lName"];
      // $email = $_POST["email"];
      if (isset($_POST["fName"])){
          $fname = $_POST["fName"];
      }else{
        $fname='';
      }
      if (isset($_POST["lName"])){
      $lname = $_POST["lName"];
      }else{
        $lname='';
      }
      if (isset($_POST["email"])){
      $email = $_POST["email"];
      }else{
        $email = '';
      }

      if(isset($_COOKIE['email']) && !(empty($_COOKIE['email'])))
      {
           echo "Hi, ".$fname." , you recently signed up with the email address: ".$email." , thank you!";
      }

      setcookie("fName", $fname, time()+3600);
      setcookie("lName", $lname, time()+3600);
      setcookie("email", $email, time()+3600);

      ?>
    </p>
  </body>
</html>
