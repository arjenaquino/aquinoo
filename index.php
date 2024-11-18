<?php
    include_once 'config/setting-configuration.php';
    if(isset($_SESSION ['adminSession'])){
        echo "<script>alert('User is logged in!'); window.location.href = 'dashboard/admin';</script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
       
        <h1>...</h1>
        <div class="signin">
            <form action="dashboard/admin/authentication/admin.class.php" method="POST">
                 <label for="chk" aria-hidden="true">Sign in</label>
                 <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
                 <input type="email" name="email" placeholder="Enter email" required> <br>
                 <input type="password" name="password" placeholder="Enter Password" required> <br>
                 <button type="submit" name="btn-signin">SIGN IN</button>
            </form>
        </div>  
 

        <h1> REGISTRATION</h1>
        <div class="register">
         <form action="dashboard/admin/authentication/admin.class.php" method="POST">
             <label for="chk" aria-hidden="true">REGISTRATION</label>
             <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
             <input type="text" name="username" placeholder="Enter Username" required> <br>
             <input type="email" name="email" placeholder="Enter email" required> <br>
             <input type="password" name="password" placeholder="Enter Password" required> <br>
             <button type="submit" name="btn-signup">SIGN UP</button>
            </form>

        </div>
       

    </div>
    <div>11111111</div>
    <div>11111111</div>
    <div>11111111</div>
    <div>11111111</div>
    <div>11111111</div>
    
<body>
    
</html>

