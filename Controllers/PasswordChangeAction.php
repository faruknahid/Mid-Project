<?php
define("filepath", "data1.txt");



$currentpass = $currentpass = "";
$currentpassErr = $currentpassErr = "";
$flag = false;
$successfulMessage = $errorMessage = "";

$newpass = $confirmnewpass = "";
$newpassErr = $confirmnewpassErr = "";
$flag = false;
$successfulMessage = $errorMessage = "";


if($_SERVER['REQUEST_METHOD'] === "POST") {
$currentpass = $_POST['currentpass'];
$newpass = $_POST['newpass'];
$confirmnewpass = $_POST['confirmnewpass'];



if(empty($currentpass)) {
$currentpassErr = "Field can not be empty";
$flag = true;
}
if(empty($newpass)) {
$newpassErr = "Field can not be empty";
$flag = true;
}
if(empty($confirmnewpass)) {
$confirmnewpassErr = "Field can not be empty";
$flag = true;
}
if(!$flag) {
$fileData = read();



if(empty($fileData)) {
$data[] = array("currentpass" => $currentpass, "newpass" => $newpass, "confirmnewpass" => $confirmnewpass);
}
else {
$data[] = json_decode($fileData);
array_push($data, array("currentpass" => $currentpass, "newpass" => $newpass, "confirmnewpass" => $confirmnewpass));
}



$data_encode = json_encode($data);
write("");
$res = write($data_encode);
if($res) {
$successfulMessage = "Sucessfully saved.";
}
else {
$errorMessage = "Error while saving.";
}
}
}



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}



function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}
?>