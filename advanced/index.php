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

    /*--file handling open, read and close
    $file = fopen("file.txt","r") or die("unable to open!!");
    // echo fread($file,filesize("file.txt"));
    // echo fgets($file);      //reads a single line from a file
    // fclose($file);
    while(!feof($file)){
      // echo fgets($file)."<br>";
      echo fgetc($file)."<br>";   //reads a single characterS
    }
    fclose($file);
    */

    /*--file handling create and write a and in a file
    $file = fopen("file.txt","w") or die("Unable to open file!");
    $txt= "John Carter\n";
    fwrite($file,$txt);
    $txt= "John Wick\n";
    fwrite($file,$txt);
    fclose($file);

    $file = fopen("file.txt","r") or die("unable to open!!");
    echo fread($file,filesize("file.txt"));
    fclose($file);
    */ 
/*-- using "a" will not delete or overwrite the file but writes from the new line
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Tom and Jerry\n";
    fwrite($myfile, $txt);
    $txt = "Oggy and the Cockroaches\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    $file = fopen("newfile.txt","r") or die("unable to open!!");
    while(!feof($file)){
      echo fgets($file)."<br>";
    }
    fclose($file);
    */
    
    
    ?>


<form action="upload.php" method="post" enctype="multipart/form-data">
      <br /><br />Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload" /><br /><br />
      <input type="submit" value="Upload Image" name="submit" />
    </form>
    

  </body>
</html>
