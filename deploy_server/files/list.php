<!DOCTYPE html>
<html>
<body>

<?php
$dir = "/home/ubuntu/Alpha";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($each_dir = readdir($dh)) !== false){
      if($each_dir != '.' && $each_dir != '..')
      {
         echo "Client Name:" . $each_dir . "<br>";
         echo "No of failed SSH attempts: <br>";
         $failcount = $dir."/".$each_dir."/ssh_failed_count.txt";
         $file = fopen($failcount,"r") or exit("Unable to open file!");
         while(!feof($file))
         {
           echo fgets($file). "<br>";
         }
         fclose($file);


         $faillog = $dir."/".$each_dir."/ssh_fail.log";
         #echo $faillog;
         $file = fopen($faillog,"r") or exit("Unable to open file!");
         //Output a line of the file until the end is reached
         while(!feof($file))
         {
           echo fgets($file). "<br>";
         }
         fclose($file);

         echo "No of successfull SSH attempts: <br>";
         $successcount = $dir."/".$each_dir."/ssh_success_count.txt";
         $file = fopen($successcount,"r") or exit("Unable to open file!");
         while(!feof($file))
         {
           echo fgets($file). "<br>";
         }
         fclose($file);


         $successlog = $dir."/".$each_dir."/ssh_success.log";
         #echo $successlog;
         $file = fopen($successlog,"r") or exit("Unable to open file!");
         //Output a line of the file until the end is reached
         while(!feof($file))
         {
           echo fgets($file). "<br>";
         }
         fclose($file);
       }

    }
    closedir($dh);
  }
}
?>

</body>
</html>
