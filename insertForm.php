<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertion form</title>
  </head>
  <body>
    <h1>Book Record Managament</h1>

    <form  action="insertion.php" method="post">
      <table>
        <tr>
          <th>Title</th>
          <td><input type="text" name="title" required ></td>
        </tr>
        <tr>
          <th>Price</th>
          <td><input type="text" name="price" required></td>
        </tr>
        <tr>
          <th>Author</th>
          <td> <input type="text" name="Author"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Insert"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
