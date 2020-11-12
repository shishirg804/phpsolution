<?php
  $path='dir0/dir1/myfile.php';
  $file='file1.txt';
  // return filename
  echo basename($path);
  echo "<br/>";

  // return filename without ext
  echo basename($path,".php");
  echo "<br/>";

  // return directory name from path
  echo dirname($path);
  echo "<br/>";

  // check if file exists that is current directory only if file exists otherwise return nothing, it can also be used for folder as well
  echo file_exists($file);
  echo "<br/>";
  // Get absolute path only if file exists otherwise returns nothing in current directory
  echo realpath($file);
  echo "<br/>";
  // checks to see if file exists, this can only be used to check existence of a file unlike file_exists(), return nothing if file not found
  echo is_file($file);
  echo "<br/>";

  // if file is writable
  echo is_writable($file);
  echo "<br/>";

  // if file is readable
  echo is_readable($file);
  echo "<br/>";  

  // get file size
  echo filesize($file);
  echo "<br/>";  


  // * Functions to manipulate file system

  // make directory
  // mkdir('testing');
  
  // delete directory if empty
  // rmdir('testing');

  // Copy a file - takes two arguments, first a file from which you want to copy and other the file to which you want to copy and if is not created creates that file
  // echo copy('file1.txt','file2.txt');

  // rename a file
  // rename('file2.txt','myfile.txt');

  // Delete a file
  // unlink('myfile.txt');
  
  // Write from file to string
  // echo file_get_contents($file);

  // write a string to file but it replaces the original text of teh file and returns new size of the file
  // echo file_put_contents($file,'Goodbye Friend!');

  // get contents of a file then append on to it and then put it back
  // $current= file_get_contents($file);
  // $current .= " , Goodbye World!";
  
  // echo file_put_contents($file,$current);

  // open a file for reading
  $handle = fopen($file,'r');// r is for read, w can be sued to write
  $data= fread($handle,filesize($file));
  echo $data;

  // open file for writing
  $handle2 = fopen($file,'w');// r is for read, w can be sued to write
  $current=file_get_contents($file);
  $current .= " , Goodbye World!";
  fwrite($handle2,$current);
  
  fclose($handle2);

   // create file for writing
  $handle3 = fopen("file2.txt",'w');// r is for read, w can be sued to write
  // $current=file_get_contents($file);
  // $current .= " , Goodbye World!";
  fwrite($handle3,"Varun Ramnani\n");
  fwrite($handle3,"Varun Ramnani\n");
  fclose($handle3);
  




?>