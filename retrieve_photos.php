<?php
include 'db_connection.php';

$sql = "SELECT * FROM gallery_photos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $photo_id = $row['photo_id']; 
        $title = $row['title'];
        $description = $row['description'];
        $imageURL = $row['image_url'];

        echo '<div class="photo" id="p' . $photo_id . '">'; 
        echo '<img src="' . $imageURL . '" alt="' . $title . '" onclick="openImage(this.src)">';
        echo '<div class="photo-body">';
        echo '<h6 class="photo-title">' . $title . '</h6>';
        echo '<p class="photo-text">' . $description . '</p>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No photos found.";
}

$conn->close();
?>
