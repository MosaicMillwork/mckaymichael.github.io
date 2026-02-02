<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery &middot; Michael McKay</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>

<body>
    <?php include_once "components/header.php"; ?>
    <div class="wrapper">

        <main class="gallery">
            <?php
            // Set the path to the directory containing the images
            $directory = 'assets/images/gallery';

            // Scan the directory for image files (you can specify extensions like jpg, jpeg, png, gif)
            $images = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            // Check if images are found
            if (!empty($images)) {
                // Start looping through the images
                foreach ($images as $image) {
                    // Get the image file name (optional: remove the path)
                    $imageName = basename($image);

                    // Generate HTML output for each image inside a div
                    echo '<div class="image-container">';
                    echo '<img src="' . $image . '" alt="' . $imageName . '" class="gallery-item" />';
                    echo '</div>';
                }
            } else {
                echo 'No images found.';
            }
            ?>
        </main>
    </div>
    <script src="assets/js/app.js"></script>
</body>

</html>