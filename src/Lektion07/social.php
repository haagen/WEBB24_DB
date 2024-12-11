<?php
    require('../database.php');

    if(isset($_POST['name']) && isset($_POST['body'])) {

        $sql = "INSERT INTO Posts (name, body) VALUE ( ";
	    $sql .= "'" . $_POST['name'] . "', ' " . $_POST['body'] . "')";

        echo $sql;

        $res = $conn->query($sql);

    }   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grit Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Grit Social</h1>
            </div>
        </div>
        <form method="POST" action="social.php">
        <div class="row">
            <div class="col">                
               <div class="mb-3">
                    <label for="name" class="form-label">Ditt namn</label>
                    <input type="text" class="form-control" id="name" placeholder="Sture Student"  name="name">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Ditt meddelande</label>
                    <textarea class="form-control" id="body" rows="3" name="body"></textarea>
                </div>                
            </div>
            <input type="submit" value="Posta" class="btn btn-primary">
        </div>
        </form>
        <div class="row">
            <!-- Innehåll / Posts -->
            <?php
                $sql = "SELECT id, name, body FROM Posts ORDER BY ";
                $sql .= "id DESC LIMIT 10";

                $result = $conn->query($sql); 
                
                while($row = $result->fetch_assoc()) {
            ?>
                <div class="col col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                            <p class="card-text"><?= $row['body'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>

        </div>
    </div>
    
</body>
</html>