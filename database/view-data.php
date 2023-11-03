<?php include 'connect.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container border-primary">
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>user_id</th>
                    <th>USER NAME</th>
                    <th>USER EMAIL</th> 
                    <th>DATE TIME</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                
                <?php foreach($fetch_data as $key=>$arr){?>
                <tr>
                    <td><?php echo ++$key?></td>
                    <td><?php echo $arr['user_id']?></td>
                    <td><?php echo $arr['user name']?></td>
                    <td><?php echo $arr['user email']?></td>
                    <td><?php echo $arr['datetime']?></td>
                    <td><a href="add-data.php?id=<?php echo $arr['user_id']?>">EDIT</a></td>
                    <td><a href="connect.php?delid=<?php echo $arr['user_id']?>">DELETE</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>