<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>expct</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
.container
{
  display: flex;
  flex-direction: row;
 justify-content: center;
  width: 60wh;
  height:70vh;
  border: 5px solid  rgb(154, 4, 4);
  border-radius: 9px ;
  margin-top: 52px;
}
.flag h1{
  color: rgb(154, 4, 4);
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 40px;
  text-align: center;
}
.buton{
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 50px;
  margin-left: 350px;
  margin-right: 350px;
  display: inline;
}
.button{
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 50px;
  margin-left: 350px;
  margin-right: 350px;
  display: inline;
}
footer{
    height: 14rem;
    margin-top: 9%;
}
footer p{
    line-height:1.3;
    font-size:20px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background-color:rgb(154, 4, 4) ;
    color: white;
    margin-top: 30px;
    text-align: center;
    padding-top: 40px;
    padding-bottom: 40px;
}


body
{
	font-family: "Lato", sans-serif;
}
.sidenav
{
	background: rgb(154, 4, 4);
	height: 100%;
	width: 14%;
	top: 0;
	left: 0;
	z-index: 1;
	overflow-x: hidden;
	padding-top: 20px;
}
.sidenav a
{
	color: #fff;
	padding: 10px 15px 10px 16px;
	text-decoration: none;
	font-size: 25px;
	display: block;
}
.sidenav a:hover
{
	background: rgb(160, 12, 49);
}
h2
{
	padding: 10px 15px 10px 16px;
	color: #fff;
	border-bottom-style: solid;
}
.main
{
	background: rgb(154, 4, 4);
    margin-left: 20%;
    padding: 4px 10px;
    color: #fff;
    display: block;
    margin-top: -35%;
	font-size: 30px;
}

/*Making responsive*/
@media screen and (max-width: 600px)
{
	.sidenav
	{
		padding-top: 15px;
		width: 155px;

	}
	.sidenav a
	{
		padding-left: 20px;
		font-size: 18px;
	}
	.main
	{
		margin-left: 32%;
		font-size: 15px;
	}
	p
	{
		display: inline-block;
	}
}

</style>
<body>
    <Body background="https://img.freepik.com/premium-photo/abstract-white-background-product-display-with-banner-background_655634-81.jpg" style="background-size: cover;">
        <div class="pat">
        <figure class="figure">
          <img src="final.png" class="figure-img img-fluid rounded" alt="Somaiya Trust" style="height: 100px; width:1500px">           
            <figcaption class="figure-caption"></figcaption>
          </figure>
          
<div class="sidenav">
	<h2>Experiment 1</h2>
	<a >Sum Rule
    </a>
	<a href="theory.php">Theory</a>
	<a href="SumRule.php">Simulator</a>
	<a href="numericalssum.php">Numericals</a>
	<a href="sumquiz.php">Quiz</a>
	<a href="">References</a>
	<a href="feedbacksum.php">Feedback</a>
	<a href="exp1dsgt.php">Home </a>
	<a href="home.php">Logout</a>
</div>
<div class="main">
<h2>SUM RULE SIMULATOR</h2>
<p>
	To view Simulator <a href="SumRule.jar">click here</a>
<br><br>

   
System Requirements : Chrome Web Browser and a Java Runtime Environment (JRE)
	<br>
</p>
<h3>Steps to use simulator:</h3>
<p>
    To run the jar file after downloading it from the link provided, save the file in the system.<br>
    Open Command prompt and enter the command: java -jar "path of the java file"
</p>
</div>
<footer>
    <p>
        Department Of Computer Engineering<br>
     2023-24<br>
   Guided by:  Prof. Pradnya Patil, Prof. Aarti Sahitya<br>
 
   Developed by: Saniya Patil, Kinjal Patel, Tanisha Patel, Urja Patel, Meet Nayak, Nikhil Panchal, Prem Panchal, Ravi Panchal</p>
  
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>
</html>
