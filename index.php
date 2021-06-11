<?php include_once("indexbackend.php") ?>
<html>
    <head>
        <title>SWG</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous"> 
        <style>
            .container{
                text-align: center;
                margin-top: 200px;
                width: 350px;
            }
            .margin{
                margin-top: 20px;
            }
            .centre{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Login Gateway</h1>
        <form method="post"  class="margin" autocomplete="off">
  <fieldset class="form-group">
    <label for="uname">Enter the UserName</label>
    <input type="text" class="form-control centre" id="city"  name="uname"  value = "<?php if (array_key_exists('uname', $_POST)) {
    echo $_POST['uname']; 
    
 }
 ?>">
      <label for="pass">Enter the Password</label>
    <input type="password" class="form-control centre" id="city"  name="pass"  value = "<?php if (array_key_exists('pass', $_POST)) {
    echo $_POST['pass'];
}
                                                                                    
?>">
                                                                                        
      
  </fieldset>
  
  
  <button type="submit" class="btn btn-tertiary">Submit</button>
</form>
        
        
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>  
    </body>
</html>