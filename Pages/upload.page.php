<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cube - Upload a Model</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="d-grid justify-content-lg-center">
        <form action="../classes/PHP/php-storage/storage-inc.php">
            <div class="mb-3 mt-3">
                <label for="modelName" class="form-label">Model Name</label>
                <input type="modelName" class="form-control" id="modelName" placeholder="Name of your model" name="modelName" required>
            </div>
            <div class="mb-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" id="comment" name="modelText"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="upload">Upload</button>
        </form>
    </div>
</body>
</html>