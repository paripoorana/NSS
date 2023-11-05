<?PHP include("header.html")
?>
<head>
<style media="screen">
.main
{
width: 1280px;
height: 375px;
display: flex;
justify-content: center;
align-items: center;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.profile-card{
position: relative;
font-family: sans-serif;
width: 220px;
height: 220px;
background: floralwhite;
padding: 30px;
border-radius: 50%;
box-shadow: 0 0 22px #3336;
transition: .6s;
margin: 0 25px;
}
.profile-card:hover{
border-radius: 10px;
height: 260px;
}
.profile-card .img{
position: relative;
width: 100%;
height: 100%;
transition: .6s;
z-index: 99;
}
.profile-card:hover .img{
transform: translateY(-60px);
}
.img img{
height:200px;
width: 80px;
border-radius: 50%;
box-shadow: 0 0 22px #3336;
transition: .6s;
}
.profile-card:hover img{
border-radius: 10px;
}
.caption{
text-align: center;
transform: translateY(-80px);
opacity: 0;
transition: .6s;
}
.profile-card:hover .caption{
opacity: 1;
}
.caption h3{
font-size: 21px;
font-family: sans-serif;
}
.caption p{
font-size: 20px;
color: #0c52a1;
font-family: sans-serif;
margin: 2px 0 9px 0;
}
.div
{
text-align:center;
}
.main2{
width: 1280px;
height: 300px;
display: flex;
justify-content: center;
align-items: center;
background-image:url("img/background.webp");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
}
.profile-card2{
position: relative;
font-family: sans-serif;
width: 220px;
height: 240px;
background: floralwhite;
padding: 10px;
border-radius: 20%;
box-shadow: 0 0 22px #3336;
transition: .6s;
margin: 0 25px;
}
.profile-card2:hover{
border-radius: 10px;
height: 200px;
}
.profile-card .img{
position: relative;
width: 100%;
height: 100%;
transition: .6s;
z-index: 99;
}
.profile-card2:hover .img{
transform: translateY(-60px);
}
.img img{
width: 100%;
border-radius: 25%;
box-shadow: 0 0 22px #3336;
transition: .6s;
}
.profile-card2:hover img{
border-radius: 10px;
}
.caption{
text-align: center;
transform: translateY(-80px);
opacity: 0;
transition: .6s;
}
.profile-card2:hover .caption{
opacity: 1;
}
.caption h3{
font-size: 21px;
font-family: sans-serif;
}
.caption p{
font-size: 14px;
color: black;
font-family: sans-serif;
margin: 2px 0 9px 0;
}
</style>
</head>
<body>
<div class="main">
<div class="profile-card">
<div class="img">
<img src="img/Mr.M.Chandrakumar Peter.jpg">
</div>
<div class="caption">
<p>Dr.Chandrakumar Peter, prof./SE</p>
<p>Coordinator</p>
</div>
</div>
</div>
<div class="div">
<h2>PROGRAMME OFFICERS</h2>
<div class="main2">
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br><br>
<bold><p>Ms.R.Ramiya, AP/ECE</p>
<p>ECE,English,Mathematics</p></bold>          
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br><br>
<bold><p>Mr.A.Mohamed Ismail, AP/Mech</p>
<p>Aerospace,Mechanical,BCA</p></bold>                           
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br><br>
<bold><p>Mr.P.Balarathinam, AP/Commerce</p>
<p>Commerce</p></bold>          
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br>
<bold><p>Dr.C.Anusuya (@) Priya, AP(SS)/Education</p>
<p>Education,physics,chemistry and commerce</p></bold>          
</div>
</div>
</div>
<div class="main2">
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br><br>
<bold><p>Ms.R.Latha, AP/ARCH</p>
<p>Arch,B.Sc.,(CS)</p></bold>         
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br><br>
<bold><p>Mr.T.Bhagyaraj, AP/Physics</p>
<p>Civil,Biotech,EEE</p></bold>              
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br>
<bold><p>Mr.K.Panneer Selvam, AP/Management studies</p>
<p>BBA</p></bold>                  
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br><br>
<bold><p>Mr.A.Vasanth, AP/SE</p>
<p>Software Engineering</p></bold>                  
</div>
</div>
</div>
<div class="main2">
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br>
<bold><p>Ms.K.Anitha, AP/CSE</p>
<p>Computer Science and Engineering</p></bold>                          
</div>
</div>
<div class="profile-card2">
<div class="img">
<img src="img/profile.webp">
</div>
<div class="caption"><br>
<bold><p>Mr.P.Karthik, AP/CSA</p>
<p>Computer Science and Applications</p></bold>                                           
</div>
</div>
</div>
</body>
<?PHP include("footer.html") 
?>
