<?php
$dir = "files/";
$file = $dir . basename($_FILES["filez"]["name"]);
move_uploaded_file($_FILES["filez"]["tmp_name"], $file);

function message(){
    echo "done";
}
message();
// $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

// if ($_FILES["filez"]["size"] < 50000000) {

// if ($fileType != "png" && $fileType != "xls" && $fileType != "docx" && $fileType != "gif" && $fileType != "pptx") {
//     echo "Sorry, only DOCS, PPT, PNG, XLS and GIF files are allowed.";
// }else{
// if (move_uploaded_file($_FILES["filez"]["tmp_name"], $file)) {
//     echo "The file has been uploaded";
// } else {
//     echo "Sorry, there was an error uploading your file.";
// }
// }
// }else{
//     echo "Sorry, your file is too large.";
// }
?>