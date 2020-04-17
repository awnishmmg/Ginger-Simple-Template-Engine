<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Know About us ::</title>
</head>
<body>
    <h1>Welcome to About us</h1>

    <?php  $load_content=true  ?>

    <?php  if($load_content==true):  ?>
        <?php  die();  ?>
    <?php  endif;  ?>

    <?php  $res=mysqli_query($conn,"select * from std_info")  ?>

    <table border="1" width="50%" align="center" rules="all">
    <tr>
        <th>#</th>
        <th>name</th>
        <th>email</th>
    
    </tr>
    <?php  $a=1  ?>
    <?php  while($row=mysqli_fetch_assoc($res)):  ?>

    <tr>
        <td><?php  echo $a  ?></td>
        <td><?php  echo $row['name']  ?></td>
        <td><?php  echo $row['my_email']  ?></td>

    </tr>
    <?php  $a++;  ?>

    <?php  endwhile;  ?>

    </table>
</body>
</html>