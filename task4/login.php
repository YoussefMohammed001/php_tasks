 <?php
  require_once 'data.php';

  $errors =[];  
if(isset($_POST['username1'])){
  $username = $_POST['username1'];
  $passwrod = $_POST['password1'];
  $email = $_POST['email1'];
  $flag = 0;
  if(! empty($username)){

    $flag++;
    } else{
      $errors['username empty'] = 'plz write username';
    }

  if(! empty($passwrod)){
    if(strlen($passwrod) >= 8){
     } else{
      $errors['passwordln'] = "pass must be >= 8";
     }
    } else{
      $errors['password empty'] = 'plz write password';
    }


  if(!empty($email)){
     if(preg_match('/.com$/',$email)){
      $flag++;
     } else {
      $errors['emailRegx'] = 'plz end vaild email';
     }
    
    } else{
      $errors['email empty'] = 'plz write email';
    }


    if($flag == 2){
      foreach($users as $user){
        if($user['username'] == $username && $user['password'] == $passwrod){
         if($email == 'admin@admin.com' && $passwrod == '12345678'){
          header('location:dashboard.php');

         } else{
          $loginUser = $username;
          echo $loginUser . "test";
          //header('location:index.php');
       
         }
        } 
      }
    }
    
    
    
      var_dump(($_GET));
      var_dump(($_POST));
  }



  ?>
  
  <!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>CodePen - Animated Login Form using Html &amp; CSS Only</title> 

  <link rel="stylesheet" href="./style.css"> 
  

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

   <form action="" method="post">
    <input type="text" name="username1">
    <input type="text" name="email1">
    <input type="text" name="password1">
    <button>login</button>
   <?php foreach($errors as $error): ?>
    <?=  $error; ?>
    <?php endforeach ?>

    <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
   </form>

   </div> 

  </section> <!-- partial --> 

 </body>

</html>

 