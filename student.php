<?php
if(!isset($_POST['submit']))
{
$stu_name=$_POST['stu_name'];
$stu_regno=$_POST['stu_regno'];
$stu_branch=$_POST['stu_branch'];
$stu_gender=$_POST['stu_gender'];
$academic_year=$_POST['academic_year'];
$stu_email=$_POST['stu_email'];
$stu_contact=$_POST['stu_contact'];
$con=mysqli_connect("localhost","root","","register");
$sql="INSERT INTO student_details
(student_name,student_regno,student_branch,student_gender,academic_year,student_email,student_contact)
VALUES ('$stu_name','$stu_regno','$stu_branch','$stu_gender','$academic_year','$stu_email','$stu_contact')";
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