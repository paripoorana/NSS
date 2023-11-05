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
<img src="img/partition.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Partition Horror Remembrance day</h2><br>
<p><b>Date:</b> 14/08/2022<br>
<b>Venue:</b> Architecture Block - PMIST<br> 
<b>No. of Participant:</b> 100 - Volunteers & Students <br><br>
<div class="doc"> 
<a href="doc/18-Partition day.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div>

<div class="timeline-item">   
<img src="img/youth.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>World Youth Day</h2><br>
<p><b>Date:</b> 12.08.2022<br>
<b>Venue:</b> Indoor,Einstein,Archimedes hall<br>
<b>No. of Participant:</b> 500 volunteers & students<br> 
<b>No. of Beneficiaries:</b> 500 volunteers<br><br>
<div class="doc"> 
<a href="doc/14-youth day.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div>

<div class="timeline-item">   
<img src="img/drug.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Drive Against Drugs</h2><br>
<p><b>Date:</b> 11/08/2022<br>
<b>Venue:</b> Indoor, Einstein hall, Archimedes  hall, various class room-NSS, PMIST<br>
<b>No. of Participant:</b> 500 volunteers & students<br>
<b>No. of Beneficiaries:</b> 500 volunteers<br><br>
<div class="doc"> 
<a href="doc/13-drive against drug.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div>


<span id="dots"></span><span id="more">

<div class="timeline-item">   
<img src="img/yoga.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>International Yoga Day</h2><br>
<p><b>Date:</b> 21-06-2022<br>
<b>Venue:</b> Indoor Stadium - PMIST <br>
<b>No. of Participant:</b> 250 Volunteers <br> 
<b>No. of Beneficiaries:</b> 250 Volunteers <br><br>
<div class="doc"> 
<a href="doc/11-International yoga day.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div><br>

<div class="timeline-item">   
<img src="img/environment.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>World Environmental Day</h2><br>
<p><b>Date:</b> 06.06.2022<br>
<b>Venue:</b> Railway Station,Thanjavur<br>
<b>No. of Participant:</b> 200 volunteers<br> 
<b>No. of Beneficiaries:</b> 1000 students & general public<br><br>
<div class="doc"> 
<a href="doc/10-world environment day.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div><br>

<div class="timeline-item">   
<img src="img/bicycle.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>Bicycle Day Rally</h2><br>
<p><b>Date:</b> 03.06.2022<br>
<b>Venue:</b> Main abuilding,PMIST<br>
<b>No. of Participant:</b> 70 volunteers<br> 
<b>No. of Beneficiaries:</b> 1000 students & general public<br><br>
<div class="doc"> 
<a href="doc/09-bicycle day.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div><br>

<div class="timeline-item">   
<img src="img/earth_photo.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>World Earth day</h2><br>
<p><b>Date:</b> 22.04.2022<br>
<b>Venue:</b> Indoor Stadium,PMIST<br>
<b>No. of Participant:</b> 60 volunteers<br> 
<b>No. of Beneficiaries:</b> 60 volunteers<br><br>
<div class="doc"> 
<a href="doc/08-earth day.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div><br>

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
