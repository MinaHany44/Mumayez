<?php

$username= $_REQUEST["Name"];
$studentNumber= $_REQUEST["Student_Number"]
$phone= $_REQUEST['Parent_Number']

if(isset($_POST['Submint'])){
   $host="localhost"; //privllage
   $user="root"
   $password=""
   $db="mumayz"

   $conn=mysqli_connect($host, $user, $db)
   $insert ="insert into monz values($username, $studentNumber, $phone)"
   mysqli_query($conn,$insert);
   if($conn){
      echo("<h1 style='color:green;' > Registeration is Done! <h1>")
   } 
else{
   echo("<h1 style='color:red';> your Registration is failed! <h1>")
}
}