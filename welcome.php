<!doctype html>

<html>
  <head>
    <title> quiz 2 </title>
    <meta name ="author" content="Alexandra Savage">
    <link rel="stylesheet" href="./CSS/index.css">
  </head>
  <body>
    <h2> Cutest Cat!!</h2>
    <h3> Let us send you cat photos weekly </h3>
    <form id="myForm" action="register.php" method="POST">
      <p>
        <label> First Name:  </label>
        <input type="text" name="fName"  id="fName" />
        <br /><br />
        <label> Last Name: </label>
       <input type="text" name="lName"  id="lName"   />
        <br /><br />
        <label> Email: </label>
        <input type="text" name="email"  id="email"/>
        <br /><br />
        <input type="submit">
      </p>
    </form>
    <script type="text/javascript"  src="./JS/checker.js"> </script>
  </body>
</html>
