<html>
<head>
	  <!-- <link rel="stylesheet" type="text/css" href="style.css">  -->
</head>
<body>
<center><h1></h1></center>
<style>
	*{
    margin: 0;
    padding: 0;
}
body{
    font-family: 'Lato', sans-serif;
}

.btn
{
    background-color: white;
    border: none;
    font-size: 17px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 40px;
    width: 150px;
    font-family: 'Montserrat', sans-serif;
    margin-top: 25px;
    border: 3px solid white;
}

.wrapper{
    width: 1170px;
    margin: auto;
}
header{
    background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(https://i.pinimg.com/originals/6f/c9/ed/6fc9eda40deab83951f588fc05a4e719.jpg);
    height: 100vh;
    -webkit-background-size: cover;
    background-size: cover;
    background-position: center center;
    position: relative;
}
.nav-area{
    float: right;
    list-style: none;
    margin-top: 30px;
}
.nav-area li{
    display: inline-block;
}
.nav-area li a {
color: #fff;
text-decoration: none;
padding: 5px 20px;
font-family: poppins;
font-size: 16px;
text-transform: uppercase;
}
.nav-area li a:hover
{
    color:brown;
    /*background: #fff;
    color: #333;*/
}
.logo{
    float: left;
}
.logo img{
    width: 100%;
    padding: 15px 0;
}
.welcome-text{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 20% 30%;
    text-align: center;
}
.welcome-text h1{
    text-align: center;
    color: #fff;
   /* text-transform: uppercase;*/
    font-size: 30px;
}
.welcome-text a{
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    /*text-transform: uppercase;*/
    font-size: 14px;
    margin-top: 20px;
    display: inline-block;
    color: #fff;
}
.welcome-text a:hover{
    background: #fff;
    color: #333;
}

/*resposive*/

@media (max-width:600px){
    .wrapper {
width: 100%;
}
.logo {
    padding: 15px;
float: none;
width: 50%;
text-align: center;
margin: auto;
}
img {
width: ;
}
.nav-area {
float: none;
margin-top: 0;
}
 .nav-area li a {
padding: 5px;
font-size: 11px;
}
.nav-area {
text-align: center;
}
.welcome-text {
width: 100%;
height: auto;
margin: 30% 0;
}
.welcome-text h1 {
font-size: 20px;
}
}

</style>
<header>
    <div class="wrapper">
        <div class="logo"><br>
            <h1 style="color:white;"><span style="color:brown;">C</span><i>ode</i><span style="color:brown;"> C</span><i>oliseum</i></h1>
           <!--  <img src="https://i.postimg.cc/GpdP362Q/logo.png" alt=""> -->
        </div>
<ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<!-- <li><a href="#">Portfolio</a></li> -->
<li><a href="#">Contact</a></li>
</ul>
</div>
<div class="welcome-text">
    <form action="index.php" method="post" name="login-page">
   <center> 
    <div style="color:white;">
    <h1> WELCOME TO <span style="color:brown;">C</span><i>ode</i><span style="color:brown;">C</span><i>oliseum</i></h1><br>
    <h2> LEARN • PRACTICE • COMPETE </h2><br>
    <h2> Talk is Cheap. Show me the Code. </h2><br>
    <button id="btn" class="btn"><b><span style="color:brown;"> SIGN IN </span></b></button>
   </form>  
</div>
   </center> 
</div>
</header>
</body>
</html>