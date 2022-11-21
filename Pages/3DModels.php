<?php
require "../classes/PHP/storage-inc.php";

$loader = new StorageLoader();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cube - Models</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="../CSS/Responsive.css">
</head>
<body>
<div>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="../index.php"> <img class="logo" width="75px" src="https://i.imgur.com/OX4gs9X.png" alt="LOGO"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="upload.page.php"><button class="btn btn-secondary me-2" type="button">Upload</button> </a>
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<div>
    <?php
    require_once '../classes/PHP/database-connection.php';

    $db = new databaseConnect();

    ?>
    <div>
        <?php
        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        $r = 1;
        /** @var Model $model */
        foreach ($loader->getData() as $model){
            if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
            $rowCount++;
            $sql = "SELECT * FROM `models`";
            $query = $db->connect()->prepare($sql);
            $g= $query->fetchAll();

            $r++;
             ?>

            <div class="align-items-center col-md-<?php echo $bootstrapColWidth; ?>">
                <div class="thumbnail">
                    <h3> <?php ; echo $model->getName()?></h3>
                    <img width="150px" src="https://img-new.cgtrader.com/items/810577/f0f5780708/mh-60r-danish-seahawk-navy-helicopter-3d-model-obj-3ds-fbx-c4d-blend-dae.png">
                    <p><?php echo $model->getDesc(); ?></p>
                </div>
                <button type="submit" class="btn btn-info" name="edit">Edit</button>
                <form action="../classes/PHP/store-test.php?id=" method="post">
                    <button type="submit" class="btn btn-danger" id="delete" name="delete_model" value="">Delete</button>
                </form>
            </div>

            <?php
            if($rowCount % $numOfCols == 0) { ?> </div>
            <?php } }
        ?>
    </div>
</div>
</body>
</html>