<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 1000 movies</title>
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
                <div class="col-md-6">
                    <form action="inc/addMovie.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Movie Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Movie Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="Metascore" class="form-label">Metascore</label>
                            <input type="text" class="form-control" id="Metascore" name="Metascore">
                        </div>
                        <button type="submit" class="btn btn-primary" name="addMovie">Add Movie</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>