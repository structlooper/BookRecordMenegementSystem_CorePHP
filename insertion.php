<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['Author'];

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');

$q="insert into book (title,price,author) values('$title',$price,'$author')";

$result= mysqli_query($con,$q);
mysqli_close($con);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Insertion form</title>
   </head>
   <body>
     <h1>Book Record Managament</h1>
     <p>
<?php
if ($result==1) {
  echo "Record inserted";
}
else {
 echo "insertion failed";
}
 ?>
      </p>
Do you want to insert more record?<a href="insertForm.php">Click here</a>

</body>
</html>
