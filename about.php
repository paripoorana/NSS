<?PHP include("header.html")
?>
<head>
<link rel="stylesheet"type="text/css"href="head.css"/>
<style>
.box
{
width:1250px;
padding:10px;
margin:0;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
color:white;
}
.box1
{
width:1250px;
padding:10px;
margin:0;
background-color:floralwhite;
}
#more {display: none;}
</style>
</head>
<body>
<div class="nss1">
<img src="img/plant.jpeg" height="250px" width="1280px"/>
<div class="box1">
<h2 style="color:midnightblue">National Service Scheme</h2>
<p style="font-family:cursive">National Service Scheme (NSS) was introduced in 1969 with the primary objective of developing the personality and character of the student youth through voluntary community service. ‘Education through Service’ is the purpose of the NSS. The ideological orientation of the NSS is inspired by the ideals of Mahatma Gandhi.</p>
</div>
<br>
<div class="box"> 
<h2 style="color:lightgoldenrodyellow">Objectives of NSS</h2>
<p style="font-family:cursive">NSS aims at developing the following qualities/ competencies among the volunteers:<p>
<p style="font-family:cursive">a) To understand the community in which the NSS volunteers work and to understand themselves concerning their community;<p>
<p style="font-family:cursive">b) To identify the needs and problems of the community and involve themselves in problem-solving exercises;</p>
<span id="dots"></span><span id="more">
<p style="font-family:cursive">c) To develop among themselves a sense of social and civic responsibility;</p>
<p style="font-family:cursive">d) To utilize their knowledge in finding practical solutions to individual and community problems;</p>
<p style="font-family:cursive">e) To gain skills in mobilizing community participation;</p>
<p style="font-family:cursive">f) To acquire leadership qualities and democratic values;</p>
<p style="font-family:cursive">g) To develop the capacity to meet emergencies and natural disasters; and<p>
<p style="font-family:cursive">h) To practice national integration and social harmony.<p>
<p style="font-family:cursive">NSS attempts to establish meaningful linkages between ‘Campus and Community, ‘College and Village’, and ‘Knowledge and Action’.</p>
</span></p>
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
<br>
<div class="box1">
<h2 style="color:midnightblue">Motto</h2>
<p style="font-family:cursive">The motto of National Service Scheme is<strong> "NOT ME BUT YOU"</strong></p>
<p style="font-family:cursive">It reflects the essence of democratic living and upholds the need for selfless service. NSS helps the students develop & an appreciation of other person's points of view and also show consideration towards other living beings. The philosophy of the NSS is a good doctrine in this motto, which underlines the belief that the welfare of an individual is ultimately dependent on the welfare of the society as a whole, and therefore, the NSS volunteers shall strive for the well-being of the society.</p>
</div>
<br>
<div class="box">
<h2 style="color:lightgoldenrodyellow">Benefits</h2>
<p style="font-family:cursive">A NSS volunteer who takes part in the community service programme would either be a college level or a senior secondary level student. Being an active member these student volunteers would have the exposure and experience to be the following:</p>
<p style="font-family:cursive">an accomplished social leader</p>
<p style="font-family:cursive">an efficient administrator</p>
<p style="font-family:cursive">a person who understands human nature</p>
</div>
<br>
<div class="box1">
<h2 style="color:midnightblue">About NSS logo</h2>
<p style="font-family:cursive">The logo for the NSS has been based on the giant Rath Wheel of the world-famous Konark Sun Temple (The Black Pagoda) situated in Orissa, India. The Red & Blue colors contained in the logo motivate the NSS Volunteers to be active & energetic in nation-building social activities. The wheel portrays the cycle of creation, preservation, and release and signifies the movement in life across time and space, The wheel thus stands for continuity as well as change and implies the continuous striving of NSS for social change.</p>
</div>
<br>
<div class="box">
<h2 style="color:lightgoldenrodyellow
">About unit & volunteers</h2>
<p style="font-family:cursive">Number of Units : 10 </p>
<p style="font-family:cursive">Number of Student Volunteers :1000 </p>
</div>
</div>
<div class="nss2">
<marquee direction="left">
<img src="img/join.webp" height="250px" width="1280px"/>
</marquee>
</div>
</body>
<?PHP include("footer.html") 
?>