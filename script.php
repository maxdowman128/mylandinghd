<?php

function getTitle() {
    $defaultTitle = 'Viral';
    if (isset($_GET['m'])) {
        return htmlspecialchars($_GET['m']);
    } else {
        return $defaultTitle; 
    }
}

function getImage() {
    $defaultImage = 'picture/default_image.jpg';
    if (isset($_GET['p'])) {
        $imageName = strtolower(htmlspecialchars($_GET['p'])) . '.jpg';
        $imagePath = 'picture/' . $imageName;
        
        if (file_exists($imagePath)) {
            return $imagePath;
        } else {
            return $defaultImage; 
        }
    } else {
        return $defaultImage; 
    }
}

$title = getTitle();
$image = getImage();
?>
