<?php
include 'connect.php';
       
    

    //post Methods
    if (isset($_POST['submit'])) { 
    $id=$_GET['updateid'];
    echo $id;
    $email = $_POST['email'];
    $article = $_POST['article'];
     //insert data into database
     $sql = "UPDATE `article` SET `sno`=$id, `email`='$email',`article`='$article'  WHERE `article`.`sno`=$id";
     $result = mysqli_query($conn,$sql);

     if($result){
            echo "data updated successfully";
            header("Location:display.php");
     }
     else{
         echo "data not UPDATED ";
     }        

    }
   

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Get/Post!</title>
  </head>
  
  
  
  <body>
  <nav class="navbar navbar-dark bg-dark p-4">
  <div class="container-fluid ">
    <a class="navbar-brand" href="/GETPOST/display.php">Get/Post</a>
    
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="container">
        <form class="d-flex align-items-center flex-column"  method="POST">
            <div class="mb-3  w-75">
                <label for="email " class="form-label fw-bold fs-3">Email address</label>
                <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3  w-75">
                <label for="article" class="form-label fw-bold fs-4">Article</label>
                <textarea type="textarea" name="article" rows="4" cols="50" class="form-control" id="article"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary py-2 px-4">UPDATED</button>
        </form>

    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>