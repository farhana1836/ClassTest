<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
<?php 

$connection = mysqli_connect('localhost','root','','studentdb') or die("not connected". mysqli_error());

    $query = "SELECT * FROM studentTable";
        $result = mysqli_query($connection,$query) or die("Failed");
        $count = mysqli_num_rows($result);
        if($count > 0){
?>
<table>
    <tr>
      <th>ID</th>
      <th>Name</th>      
      <th>Delete</th>
    </tr>
  <tbody>

  <?php 

while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
      <th scope="row"><?php echo $row['Id'] ?></th>
      <td><?php echo $row['Name'] ?></td>
      <td><a href="deleteStudent.php?id=<?php echo $row['Id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
</body>
</html>