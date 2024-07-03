<?php include('reusable/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 1000 Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('reusable/nav.php'); ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-4 mt-5 mb-5">All Movies</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    include('inc/functions.php');
                    get_message();
                    ?>
                </div>
            </div>
            <div class="row">
                <?php
                $query = 'SELECT * FROM movies';
                $movies = mysqli_query($connect, $query);

                foreach ($movies as $movie) {
                    echo '
                    <div class="col-md-4 mt-2 mb-2">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="card-title">' . $movie['name'] . '</h5>
                                <p class="card-text">' . $movie['description'] . '</p>
                                <span class="badge bg-secondary">' . $movie['rating'] . '</span>
                                <span class="badge bg-info">' . $movie['Metascore'] . '</span>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col">
                                        <form action="update.php" method="GET">
                                            <input type="hidden" name="rank" value="' . $movie['rank'] . '">
                                            <button type="submit" class="btn btn-sm btn-primary" name="updateMovie">
                                                Update
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col text-end">
                                        <form action="inc/deleteMovie.php" method="GET">
                                            <input type="hidden" name="rank" value="' . $movie['rank'] . '">
                                            <button type="submit" name="deleteMovie" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>


</body>

</html>