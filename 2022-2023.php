<?PHP include("header.html")
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.timeline 
{
display: flex;
flex-direction: column;
gap: 20px;
padding: 20px;
background-color:snowwhite;
}
.timeline-item 
{
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
border: 2px solid #333;
padding: 20px;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.timeline-content 
{
flex: 1;
padding: 20px;
}
.timeline-content h2 
{
margin: 0;
color:floralwhite;
}
.timeline-content p 
{
margin: 0;
color:floralwhite;
}
.timeline-content img 
{
width: 100%;
height: auto;
}
.doc a
{
color:floralwhite;
text-decoration:none;
}
.doc a:hover
{
color:red;
}
.doc i
{
color:red;
}
#more {display: none;}
</style>
</head>
<body>
<div class="timeline">
<div class="timeline-item">   
<img src="img/nss.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Independence day celebration – Flag hosting by individuals</h2><br>
<p><b>Date:</b>14/08/2022<br>
<b>Venue:</b> PMIST and Adopted villages  <br> 
<b>No. of Participant:</b>1 Programme Officers and 10 NSS Volunteers(Unit 6)<br><br>
<div class="doc"> 
<a href="doc/17-Flag distribution 14.08.22.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>
</p></span>
</div>
</div>


<div class="timeline-item">   
<img src="img/flag1.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Distribution of National Flag – for Independence day celebrations</h2><br>
<p><b>Date:</b>13/08/2022<br>
<b>Venue:</b> PMIST and Adopted villages  <br> 
<b>No. of Participant:</b>2 Programme Officers and 15 NSS Volunteers(Unit 6&8)<br><br>
<div class="doc"> 
<a href="doc/16-Flag distribution-13-8-22.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div> 
</p></span>
</div>
</div>


<div class="timeline-item">   
<img src="img/flag2.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Distribution of National Flag – for Independence day celebrations</h2><br>
<p><b>Date:</b>12/08/2022<br>
<b>Venue:</b> PMIST and Adopted villages  <br> 
<b>No. of Participant:</b>2 Programme Officers and 15 NSS Volunteers(Unit 6&8)<br><br>
<div class="doc"> 
<a href="doc/15-Flag distribution-12-8-22.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>  
</p></span>
</div>
</div>

<span id="dots"></span><span id="more">

<div class="timeline-item">   
<img src="img/gramashaba.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Independence Day celebrations – Flag Hosting and attending Gramsabha meeting</h2><br>
<p><b>Date:</b>15/08/2022<br>
<b>Venue:</b> Government High School Achampatty, PMIST Adopted villages Aachampatti and Valappakkudi  <br> 
<b>No. of Participant:</b>2 Programme Officers and 15 NSS Volunteers (Unit 6&8)<br><br>
<div class="doc"> 
<a href="doc/19-Gramasaba meeting- 15.08.22.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div> 
</p></span>
</div>
</div>

</span>
<button onclick="myFunction()" id="myBtn">Read more</button>
<script>
function myFunction() 
{
var dots = document.getElementById("dots");
var moreText = document.getElementById("more");
var btnText = document.getElementById("myBtn");
if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "Read more"; 
moreText.style.display = "none";
}
else
{
dots.style.display = "none";
btnText.innerHTML = "Read less"; 
moreText.style.display = "inline";
}
}
</script>


</div>
</body>
<?php include("footer.html")
?>
