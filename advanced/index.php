<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Home Page</h1>
    <?php include 'header.php'; ?>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, amet.
    </p>
    <?php //echo readfile('file.txt')."<br>";
    $file = fopen("file.txt","r") or die("unable to open!!");
    echo fread($file,filesize("file.txt"));
    fclose($file);
    
    ?>
    
  </body>
</html>
