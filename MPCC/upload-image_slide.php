<?php
session_start();

if (isset($_POST['submit']) && isset($_FILES['image']) && isset($_POST['text'])) {
    $pdo = new PDO("mysql:host=localhost; dbname=mpcc; charset=utf8", 'root', '');
    include "Components/core/connection.php";

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error    = $_FILES['image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            $_SESSION['error'] = $em;
            echo "<script>window.alert('$em'); window.location.href = 'admin.php';</script>";
            exit;
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                // Retrieve the total number of uploaded images after the insertion
                $sql = "SELECT COUNT(*) FROM pslide";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $totalImages = $stmt->fetchColumn();

                // Check if the maximum limit of 10 images has been reached
                if ($totalImages >= 10) {
                    // Retrieve the ID of the oldest image from the database
                    $sql = "SELECT id FROM pslide ORDER BY id ASC LIMIT 1";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $oldestId = $stmt->fetchColumn();

                    // Retrieve the image URL of the oldest image
                    $sql = "SELECT image_url FROM pslide WHERE id = :oldestId";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':oldestId', $oldestId, PDO::PARAM_INT);
                    $stmt->execute();
                    $oldestImage = $stmt->fetchColumn();

                    // Delete the oldest image from the uploads folder
                    $old_img_path = 'Components/uploads/' . $oldestImage;
                    if (file_exists($old_img_path)) {
                        unlink($old_img_path);
                    }

                    // Delete the oldest image from the database
                    $sql = "DELETE FROM pslide WHERE id = :oldestId";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':oldestId', $oldestId, PDO::PARAM_INT);
                    $stmt->execute();
                }

                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'Components/uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert new image and text into Database
                $text = $_POST['text'];
                $sql = "INSERT INTO pslide (image_url, text) VALUES (:new_img_name, :text)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':new_img_name', $new_img_name, PDO::PARAM_STR);
                $stmt->bindParam(':text', $text, PDO::PARAM_STR);
                $stmt->execute();

                header("Location: upload-image_slide.php");
                exit;
            } else {
                $em = "You can't upload files of this type";
                $_SESSION['error'] = $em;
                echo "<script>window.alert('$em'); window.location.href = 'admin.php';</script>";
                exit;
            }
        }
    } else {
        $em = "Unknown error occurred!";
        $_SESSION['error'] = $em;
        echo "<script>window.alert('$em'); window.location.href = 'admin.php';</script>";
        exit;
    }
} else {
    header("Location: admin.php");
    exit;
}
?>
