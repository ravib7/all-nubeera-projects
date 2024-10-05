<?php

if (isset($_POST['submit']) && isset($_FILES['image'])) {
    include "Components/core/connection.php";
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error    = $_FILES['image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: image_slide-index.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'Components/uploads/'. $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert new image into Database
                $sql = "INSERT INTO pslide (image_url) VALUES ('$new_img_name')";
                mysqli_query($conn, $sql);

                header("Location: view.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: image_slide-index.php?error=$em");
            }
        }
    } else {
        $em = "Unknown error occurred!";
        header("Location: image_slide-index.php?error=$em");
    }
} else {
    header("Location: image_slide-index.php");
}

?>
