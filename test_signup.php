<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
  <h1 >Register Smartly</h1>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
    h1{
      font-size: 5em;
      text-align: center;
    }
  </style>
</head>

<body>
<form method="POST" action="projectsignup.php">
  <ul class="items"></ul>
  <fieldset class="username enable">
    <div class="icon left"><i class="user"></i></div>
    <input type="text" name="name" placeholder="Username"/>
    <div class="icon right button" onclick=""><i class="arrow"></i></div>
  </fieldset>
  <fieldset class="email">
    <div class="icon left"><i class="letter"></i></div>
    <input type="mail" name="email" placeholder="Email"/>
    <div class="icon right button" onclick=""><i class="arrow"></i></div>
  </fieldset>
  <fieldset class="password">
    <div class="icon left"><i class="lock"></i></div>
    <input type="password" name="password" placeholder="Password"/>
    <div class="icon right button" name="" onclick=""><i class="arrow" ></i></div>
  </fieldset>
  <fieldset class="thanks">
    <div class="icon left button" ><i class="heart"></i></div>
    <p>Thanks for your time</p>
    <button class="icon right button" name="submit"/><i class="arrow" ></i></button>
  </fieldset>
<!--   <button name="signup" onclick="signup()" >Signup</button> -->
  <!-- <input type="btn btn-success" name="submit"/> -->

</form>


  
    <script src="js/index.js">
      // function isSubmit( flag)
      // {

      //   if(flag)
      //     return true;
      //   else
      //     return false;
      // }
      function load(){
            document.getElementById("content").innerHTML='<object type="type/html" data="home.html" ></object>';
  }
  // function signupp(e)
  // {
  //  e.preventDefault;

  // }

    </script>

</body>
</html>

