<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "scholarship";
 $conn = mysqli_connect($hostName, $userName, $password, $databaseName);
// Check connection
if($conn){
//echo "Connected";
}
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,'scholarship');


if(isset($_POST['signup'])){
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql="INSERT INTO login1(Username,Password,Email) VALUES('$username','$password','$email')";
$result = mysqli_query($conn,$sql);
   
if($result){
//echo "New Record Inserted Successfully";
header("Location: http://localhost/phpscholarship/login1.html");
 
}else{
echo "Error, Record not inserted.";
 }
 }


if(isset($_POST['login'])){

$loginusername = $_POST['loginusername'];
$loginpassword = $_POST['loginpassword'];
//echo $loginusername;
if(empty($loginusername) && empty($loginpassword)){
	echo 'Please enter username and password';
}
else if(empty($loginusername)){
	echo 'Please enter username';
}
else if(empty($loginpassword)){
	echo 'Please enter Password';
}
$query = "select * from login1";
$result = mysqli_query($conn, $query);
$flag=0;
while($row = mysqli_fetch_array($result))
{
    if($row['Username'] == $loginusername && $row['Password']==$loginpassword){
	$flag=1;
	header("Location: http://localhost/phpscholarship/category1.html");
	}
}
if($flag == 0){
echo 'Invalid Username or Password';
}
}



if(isset($_POST['signuplogin'])){
header("Location: http://localhost/phpscholarship/signup1.html");
}


if(isset($_POST['categorysubmit'])){
    if(empty($_POST['myradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['myradio'];
switch($rb){
case "merit":
	header("Location: http://localhost/phpscholarship/category3.html");
	break;
case "disabled":
	header("Location: http://localhost/phpscholarship/category2.html");
	break;
}
}
}


if(isset($_POST['meritsubmit'])){
    if(empty($_POST['radiomerit'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['radiomerit'];
switch($rb){
case "Engineering":
	header("Location: http://localhost/phpscholarship/eng_scholarship.html");
	break;
case "Medical":
	header("Location: http://localhost/phpscholarship/med_scholarship.html");
	break;
case "Law":
	header("Location: http://localhost/phpscholarship/law_scholarship.html");
	break;
}
}
}


if(isset($_POST['engsubmit'])){
    if(empty($_POST['engradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['engradio'];
switch($rb){
case "LIC Golden Jubilee Scholarships":
	header("Location: http://localhost/phpscholarship/lic_eng.html");
	break;
case "NTPC Scholarship Scheme":
	header("Location: http://localhost/phpscholarship/ntpc_eng.html");
	break;
case "VIT University Ignite Scholarship":
	header("Location: http://localhost/phpscholarship/vit_eng.html");
	break;
}
}
}

if(isset($_POST['medsubmit'])){
    if(empty($_POST['medradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['medradio'];
switch($rb){
case "Bharati Scheme for Education":
	header("Location: http://localhost/phpscholarship/bharathi_med.html");
	break;
case "Vahani Scholarship":
	header("Location: http://localhost/phpscholarship/vahani_med.html");
	break;
case "HDFC Educational Crisis Scholarship":
	header("Location: http://localhost/phpscholarship/hdfc_med.html");
	break;
}
}
}



if(isset($_POST['lawsubmit'])){
    if(empty($_POST['lawradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['lawradio'];
switch($rb){
case "GEV Memorial Merit Scholarship":
	header("Location: http://localhost/phpscholarship/gev_law.html");
	break;
case "Aditya Birla Scholarship Programme":
	header("Location: http://localhost/phpscholarship/aditya_law.html");
	break;
case "Central Sector Scheme of Scholarship":
	header("Location: http://localhost/phpscholarship/central_law.html");
	break;
}
}
}

if(isset($_POST['disabledsubmit'])){
    if(empty($_POST['disabledradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['disabledradio'];
switch($rb){
case "Hearing impairment ":
	header("Location: http://localhost/phpscholarship/hearing.html");
	break;
case "Locomotor disability ":
	header("Location: http://localhost/phpscholarship/locomotor.html");
	break;
case "Visual Impairment":
	header("Location: http://localhost/phpscholarship/visual.html");
	break;
case "Speech and Language disability":
	header("Location: http://localhost/phpscholarship/speech.html");
	break;
}
}
}

if(isset($_POST['hearsubmit'])){
    if(empty($_POST['hearradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['hearradio'];
switch($rb){
case "AG Bell College Scholarship Program ":
	header("Location: http://localhost/phpscholarship/agbell_hear.html");
	break;
case "Arkansas Association of the Deaf Scholarship":
	header("Location: http://localhost/phpscholarship/arkanas_hear.html");
	break;
case "Post Matric Scholarship for Students with Disabilities":
	header("Location: http://localhost/phpscholarship/post_hear.html");
	break;

}
}
}


if(isset($_POST['locosubmit'])){
    if(empty($_POST['locoradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['locoradio'];
switch($rb){
case "NHFDC Scholarship":
	header("Location: http://localhost/phpscholarship/nhfdc_loco.html");
	break;
case "Post Matric Scholarship for Students with Disabilities":
	header("Location: http://localhost/phpscholarship/post_loco.html");
	break;
case "AICTE Saksham Scholarship":
	header("Location: http://localhost/phpscholarship/aicte_loco.html");
	break;

}
}
}

if(isset($_POST['visualsubmit'])){
    if(empty($_POST['visualradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['visualradio'];
switch($rb){
case "LATAM International Coursework Scholarship":
	header("Location: http://localhost/phpscholarship/latam_visual.html");
	break;
case "Betty G. Miller Fellowship Award":
	header("Location: http://localhost/phpscholarship/betty_visual.html");
	break;
case "ICMS Professional scholarships in Austraila":
	header("Location: http://localhost/phpscholarship/icms_visual.html");
	break;

}
}
}

if(isset($_POST['speechsubmit'])){
    if(empty($_POST['speechradio'])) {
	echo 'Please select the value.';
    } 
   else {
        $rb = $_POST['speechradio'];
switch($rb){
case "NSP Post Matric Scholarship for Students with Disabilities":
	header("Location: http://localhost/phpscholarship/post_speech.html");
	break;
case "Sir Thomas Naghten Fitzgerald Scholarship":
	header("Location: http://localhost/phpscholarship/thomas_speech.html");
	break;
case "Dean Ritter Foundation Scholarship":
	header("Location: http://localhost/phpscholarship/dean_speech.html");
	break;

}
}
}





mysqli_close($conn); 

?>