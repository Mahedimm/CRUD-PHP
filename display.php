<?php
include 'connect.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container ">
  <button type="button" class="btn btn-primary m-5"><a href="index.php" class="text-light">Add user</a></button>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">email</th>
                <th scope="col">article</th>
                <th scope="col">TIME</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

           
            <?php

                //fecth data from database
                $sql = "SELECT * FROM article";
                $result = mysqli_query($conn,$sql);

                //find number of rows
                $num = mysqli_num_rows($result);
                // echo $num;
                // echo "<br>";
                $sno=0;
                if($num > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $sno++;
                    echo "<tr>
                    <th scope='row'>". $sno ."</th>
                    <td>". $row['email'] ."</td>
                    <td>". $row['article'] ."</td>
                    <td>". $row['dtime'] ."</td>
                    <td>
                    <button type='button' class='btn btn-success'><a href='update.php?updateid=".$row['sno']." ' class='text-light'>UPDATE</a></button>
                        <button type='button' class='btn btn-danger'><a href='delete.php?deleteid=".$row['sno']." ' class='text-light'>DELETE</a></button>
                    </td>
                </tr>";
                }
                }
                ?>
                
                
            </tbody>
        </table>

        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>