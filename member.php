<?php
if(!isset($_POST['submit']))
{
$stu_name=$_POST['stu_name'];
$stu_regno=$_POST['stu_regno'];
$stu_branch=$_POST['stu_branch'];
$stu_contact=$_POST['stu_contact'];
$stu_suggestion=$_POST['stu_suggestion'];
$con=mysqli_connect("localhost","root","","suggestion");
$sql="INSERT INTO member_details
(student_name,student_regno,student_branch,student_contact,student_suggestion)
VALUES ('$stu_name','$stu_regno','$stu_branch','$stu_contact','$stu_suggestion')";
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