<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST'>
   <h2>Please input your email:</h2>
 <input type="email" name="your_email">
 <input type="submit" value="Submit Name">
 </form>
 <?php
 // $name= $_POST['your_name'];
  //echo "Your name $name";
  $email = $_POST['your_email'];
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
  {
       echo '"' . $email . '" = Valid'."\n";
  }
  else 
  {
       echo '"' . $email . '" = Invalid'."\n";
  }
 ?>
</body>
</html>