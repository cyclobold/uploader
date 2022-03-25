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

    
    <form id="upload_form" enctype="multipart/form-data">
        <div style="margin-top: 100px;">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div style="margin-top: 10px;">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div style="margin-top: 10px;">
            <div id="uploaded_img"></div>
            <label for="upload_file">Upload Image</label>
            <input type="file" name='upload_file' id="upload_file">
        </div>

        <div style="margin-top: 10px;">
            <button>Register</button>
        </div>

        <a href='login.php'>Login</a>
    </form>
     

    <script src="script.js"></script>
 </body>
 </html>  