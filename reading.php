<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read write file</title>
</head>
<body>
<?php

$file = 'reading.txt';
if(file_exists($file)){
    echo "<pre>";
    echo readfile($file);
    echo "</pre>";
    // copy content from one file to another file
    // copy($file,"copyfile.txt");
    // rename($file, "happy.txt");
}
else{
    echo 'file does not exist';
}
echo "components folder created" . "<br>";
//    echo "hello". " <br>";
//    $myfile = fopen("reading.txt", "r") or die("Unable to open file!");
//     echo  "this is myfile result: ".$myfile;
//    fread($myfile,filesize("webdictionary.txt"));
//    echo " I am after file reading and  before file closing";
//    fclose($myfile);

?>
</body>
</html>


