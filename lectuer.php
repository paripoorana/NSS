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
<img src="img/spl.jpg" width="400" height="250">
<div class="timeline-content">
<span><h2>NSS special lecture</h2><br>
<p><b>Date:</b> 31/08/2022<br>
<b>Venue:</b> Archimedes hall,PMIST<br> 
<b>No. of Participant:</b> 1 programme officreand 100 Students & Volunteers  <br><br>
<div class="doc"> 
<a href="doc/22-nss special lectuer-31-8-23.pdf">Click here for further info</a> <i class="fa fa-hand-o-left" style="font-size:24px"></i>
</div>      
</p></span>
</div>
</div>

</div>
</body>
<?php include("footer.html")
?>
