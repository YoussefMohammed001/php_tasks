<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>single File</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="myimage" id="">

    <button>upload</button>
  </form>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $all_Errors = [];
    $allowed_ext = ['jpg','png'];
 
        $explod = explode('.', $_FILES['myimage']['name']);
        $endOf = end($explod); 
        $file_ext = strtolower($endOf);
        $fileName = uniqid() . $_FILES['myimage']['name'];
        $tmpPath = $_FILES['myimage']['tmp_name'];
        if($_FILES['myimage']['error'] == 4) {
            $all_Errors['noFile'] = '<div> please choose File </div>';
        } else {
            if($_FILES['myimage']['size'] > 8000000) {
                $all_Errors['fileSize'] = ' plz choose File less than 8 miga ';
            } else {
                if(! in_array($file_ext, $allowed_ext)) {
                    $all_Errors['fileExt'] = 'plz choose File type as png or jpg only';
                } else {
                    move_uploaded_file($tmpPath, $_SERVER['DOCUMENT_ROOT'] . '/php_tasks/task5/upload/' . $fileName);
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