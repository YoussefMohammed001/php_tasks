<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>multi Files</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="myimages[]" id="" multiple >
    <button>upload</button>
  </form>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $all_Errors = [];
    $file_Count = count($_FILES['myimages']['name']);
    $allowed_ext = ['jpg' , 'word','pdf'];
    for($i = 0 ; $i < $file_Count  ; $i++) {
        $explod = explode('.', $_FILES['myimages']['name'][$i]);
        $endOf = end($explod); 
        $file_ext = strtolower($endOf);
        $fileName = uniqid() . $_FILES['myimages']['name'][$i];
        $tmpPath = $_FILES['myimages']['tmp_name'][$i];
        if($_FILES['myimages']['error'][$i] == 4) {
            $all_Errors['noFile'] = '<div> please choose File </div>';
        } else {
            if($_FILES['myimages']['size'][$i] > 2097152) {
                $all_Errors['fileSize'] = '<div> plz choose File less than 2 miga </div>';
            } else {
                if(! in_array($file_ext, $allowed_ext)) {
                    $all_Errors['fileExt'] = '<div> plz choose File is word , pdf , jpg </div>';
                } else {
                    move_uploaded_file($tmpPath, $_SERVER['DOCUMENT_ROOT'] . '/php_tasks/task6/upload/' . $fileName);
                }
            }
        }
    }
}

if(isset($all_Errors) && !empty($all_Errors)) {
    foreach ($all_Errors as $value) {
        echo $value ;
    }
}



?>