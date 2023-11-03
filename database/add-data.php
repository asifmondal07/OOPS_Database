<?php
include 'connect.php';

if(isset($_GET['id'])){
    $showupdate=$obj->showdataupdate($_GET['id']);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <a href="view-data.php" class="btn btn-success">VIEW DATA</a>
    <div class="container">
    <form action="connect.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">NAME</label>
            <input type="name" class="form-control" name="username" value="<?php if(!empty($showupdate['user name'])){echo $showupdate['user name'];}?>" placeholder="Enter Your Name">
        </div>
        <div class="mb-3">
            <label for="exampleInputemail" class="form-label">EMAIL</label>
            <input type="email" class="form-control" name="useremail" value="<?php if(!empty($showupdate['user email'])){echo $showupdate['user email'];}?>" placeholder="Enter Your Email Id">
        </div>
        
        <?php if(isset($_GET['id'])){ ?>
          <input type="hidden" name="userid" value="<?php echo($_GET['id']);?>">
            <button type="submit" name="update" class="btn btn-primary">UPDATE DATA</button>
        <?php } 
        else{ ?>
        <button type="submit" name="submit" class="btn btn-primary">ADD DATA</button>
        <?php } ?>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>