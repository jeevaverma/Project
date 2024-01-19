<?php
require "include/nav.php";
require "include/config.php";
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>iDiscuus - A Best Forum</title>
</head>
<style>

 #min{
    min-height: 433px;
 }
</style>

<body>

    <?php
    $id=$_GET['thread-id'];
    $sql="SELECT * FROM `threads` WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
           $thread_title = $row['thread_title'];
           $thread_desc = $row['thread_desc'];
           
        }

    ?>
    <!-- Container Start here  -->
    <div class="container my-4" id="min">
        <div class="jumbotron">
            <h1 class="display-4"><b> Welcome to <?php echo $thread_title; ?></b></h1>
            <p class="lead"><?php echo $thread_desc; ?></p>
            <hr class="my-4">
            <p>Warn About Adult Content.
                Do not spam.
                Do Not Bump Posts.
                Do Not Offer to Pay for Help.
                Do Not Offer to Work For Hire.
                Do Not Post About Commercial Products.
                Do Not Create Multiple Accounts (Sockpuppets)
                When creating links to other resources.</p>
            <!-- <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a> -->
            <p> <b>Posted By: Aaryan </b> </p>
        </div>





    </div>



    <div class="container" id="min">

        <h1 class="py-2">Discussions:</h1>

        <?php
          $id=$_GET['thread-id'];
          $sql="SELECT * FROM `threads` WHERE thread_cat_id=$id";
          $result = mysqli_query($conn, $sql);
          $noResult= true;
           while($row = mysqli_fetch_assoc($result)){
            $noResult= false;
           $thread_id = $row['thread_id'];
           $thread_title = $row['thread_title'];
           $thread_desc = $row['thread_desc'];
           
       
         echo'<div class="media">
            <img src="img/user.png" width="54px" class="mr-3" alt="user">
            <div class="media-body">
                <h5 class="mt-0"><a class="text-dark" href="thread.php?thread='.$thread_id.'">'.$thread_title.'</a></h5>
                <p>'.$thread_desc.'</p>
            </div>
        </div>';

       }
       if ($noResult) {
        echo '<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">No any Discussion Yet</h1>
          <p class="lead"> <b>Be the First to Ask a Question.<b></p>
        </div>
      </div>';
       }


    ?>
    </div>











    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
</body>
<?php require "include/footer.php"; ?>
</html>











<!-- 
INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`)
VALUES ('1', 'How to Install Python in Windows 7?', 'I am Facing issue in installing Python in my pc currently running
on windows 7. Please help me with that', '1', '0', current_timestamp()); -->