<?php
if(!isset($_POST['submit']))
{
$stu_name=$_POST['stu_name'];
$stu_regno=$_POST['stu_regno'];
$stu_branch=$_POST['stu_branch'];
$stu_gender=$_POST['stu_gender'];
$stu_blood=$_POST['stu_blood'];
$stu_yes=$_POST['stu_yes'];
$stu_contact1=$_POST['stu_contact1'];
$stu_contact2=$_POST['stu_contact2'];
$con=mysqli_connect("localhost","root","","blood_donation");
$sql="INSERT INTO donar_details
(student_name,student_regno,student_branch,student_gender,student_bloodgroup,student_willing,student_contact1,student_contact2)
VALUES ('$stu_name','$stu_regno','$stu_branch','$stu_gender','$stu_blood','$stu_yes','$stu_contact1','$stu_contact2')";
$result=mysqli_query($con,$sql);
if($result)
{
echo "added successfully";
}
else
{
echo "not added..something went wrong";
}
}
?>