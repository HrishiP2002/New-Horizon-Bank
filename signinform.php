<!DOCTYPE html>
<html>
    <head>
        <title>Sign in page</title>

    </head>

    <body>
        <div>
        <p class="sign">Sign in</p>
    <form action="signinVerify.php" method = "post">
          <label for="User"></label><br>
          <input type="text" id="User" name="User" placeholder="Username"><br>

          <label for="Pass"></label><br>
          <input type = "text" id = "Pass" name="Pass" placeholder="Password"><br>

          <label for="AcNo"> </label><br>
          <input type = "text" id = "AcNo" name="AcNo" placeholder="Account Number"><br>

          <label for="Pin"> </label><br>
          <input type = "text" id = "Pin" name="Pin" placeholder="Pin"><br>


          <input type="submit" value="Login">

        
    </form>
        </div>
    </body>
</html>