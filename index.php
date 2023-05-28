<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Session</title>
 <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>



 <div class="container">
  <form action="./store.php" method="post">
    <label >ID</label>
    <input type="number" name="id" placeholder="Enter Id :">
    <label > Name</label>
    <input type="text" name="name" placeholder="Enter your  name..">
    <input type="submit" value="Submit">
  </form>
  <?php 
  if ($_SERVER['REQUEST_METHOD'] !==  'POST') {
    echo 'Only Server Request is allowed';
    die();
}
    session_start();
  $students = $_SESSION['students'];
?>

<table class="center"> 
    <tr> 
        <th>ID</th> 
        <th>Name</th>
    </tr> 
    <?php 
    foreach($students as $student) {  ?>
    <tr> 
        <td><?php echo $student['id'] ?></td>
         <td><?php echo $student['name'] ?></td> 
    </tr> 
  <?php }  ?>
     
 </table>
</div>
    
</body>
</html>