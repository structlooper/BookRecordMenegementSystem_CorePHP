<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm_db');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Delete book records</title>
    <link rel="stylesheet" href="./css/viewStyle.css">
   </head>
   <body>
     <h1>Book Record Managament</h1>
     <form action="Deletion.php" method="post">
     <table id="view_table" >
       <tr>
          <th calss='c1'>Select to Delete</th>
       <th class="c1" >Book id</th>
       <th class="c1" >Title</th>
       <th class="c1" >Price</th>
       <th class="c1" >Author</th>

       </tr>
       <?php for ($i=1; $i<=$num  ; $i++) {
         $row=mysqli_fetch_array($result);
        ?>
        <tr>
          <td> <input type="checkbox" value="<?php echo $row['bookid']; ?>" name="b<?php echo $i;  ?>" > </td>
          <td class="d1"><?php echo $row['bookid']; ?></td>
          <td class="d1"><?php echo $row['title']; ?></td>
          <td class="d1"><?php echo $row['price']; ?></td>
          <td class="d1"><?php echo $row['author']; ?></td>

        </tr>
      <?php } ?>
      <tr>
        <td colspan="5px"> <input type="submit" name="" value="Delete"> </td>
      </tr>
     </table>
   </form>
   </body>
   </html>
