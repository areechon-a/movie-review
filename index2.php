<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <header class="navbar"> 
        <div class="max-width">
        <ul class="menu">
            <li class="home"><a href="index.php">Home</a></li>
            <!-- <li class="sign-in"><a href="signin.php">Sign In</a></li> -->
            <li class="post"><a href="index2.php">Post</a></li>
        </ul>
        </div>
    </header>
    <div class="container">
    <h1 class="mt-5">Infomation Page</h1>
    <a href="insert.php" class="btn btn-success">Go to Insert</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>id</th>
            <th>movie_id</th>
            <th>title</th>
            <th>Rating</th>
            <th>Description</th>
           
        </thead>

        <tbody>
            <?php 

                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {

            ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['movie_id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['rating']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php 

                }
            ?>
        </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>