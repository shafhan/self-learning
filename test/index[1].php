<?php

// function limit_words($string, $word_limit) {
// 	$words = explode(' ', $string);
// 	$return = implode(' ', array_slice($words, 0, $word_limit));
// 	if($return < $string){
// 	       $return .= '...';
//               return $return;
//        } else {
//               echo "Error!";
//        }
// }
// echo limit_words("Halo selamat datang di kampung kami yang sangat indah ini, ok, klo begitu, biasalah", 100);

  if(isset($_POST['upload'])) {
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/" . $file_name;
    // print_r($_FILES);
    copy($file_tem_loc, $file_store);
    

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <label>Uploading files</label>
    <input type="file" name="file">
    <input type="submit" name="upload" value="Upload Image">
  </form>
</body>
</html>