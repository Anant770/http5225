<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <?php
            function getUsers(){
              $url = "users.json";
              $data = file_get_contents($url);
              //echo gettype($data);
              return json_decode($data, true);
            }
            $users = getUsers();
            if(!empty($users)){
              for($i = 0; $i < count($users); $i++){
                echo
                '<div class="col-md-3">
                    <div class="card" style="">
                        <div class="card-body">
                            <h5 class="card-title">' . $users[$i]['name'] . '</h5>
                            <h5 class="card-title">' . $users[$i]['username'] . '</h5>
                            <p class="card-text">' . $users[$i]['email'] . '</p>
                            <p class="card-text">' . $users[$i]['phone'] . '</p>
                            <p class="card-text">' . $users[$i]['address']['city'] . '</p>
                        </div>
                    </div>
                </div>';
              }
            }
            
        ?>
    </div>
</div>
</body>
</html>