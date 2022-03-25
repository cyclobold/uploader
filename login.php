 <?php ini_set("display_errors", "on"); ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
         #upload_file{
             display: none;
         }

         label[for="upload_file"]{
             height: 30px;
             display: inline-block;
             padding-top: .5em;
             padding-right: .5em;
             padding-left: .5em;
             border-radius: 5px;
             color: white;
             font-weight: bolder;
             cursor: pointer;
             background-image: linear-gradient(to right, teal, grey);
         }

         label:hover{
             transform: scale(1.1);

         }
     </style>
 </head>
 <body>

    <?php
        if(isset($_POST['login'])){
            $user_username = $_POST['username'];
            $user_password = $_POST['password'];

            require "database.php";

            $query = "SELECT * FROM `users` WHERE `username` = '$user_username' AND `password` = '$user_password' LIMIT 1";

            $result = mysqli_query($conn, $query);

            if($result){
                if(mysqli_num_rows($result) == 1){
                    //there is a match
                    
                    session_start();

                    $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    header("location: user.php");


                }else{
                    //there is no match
                }

            }else{
                //query did not run
            }


        }

     ?>

     
    <form id="login_form" action='' method='POST'>
        <div style="margin-top: 100px;">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div style="margin-top: 10px;">
            <label>Password</label>
            <input type="password" name="password">
        </div>
    
        <div style="margin-top: 10px;">
            <button name='login'>Log in</button>
        </div>

        <a href='index.php'>Register</a>
    </form>
     
 </body>
 </html>  