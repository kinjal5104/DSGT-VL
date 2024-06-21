<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>expct</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <script>
    
    function validateExactValue() {
      var inputValue = document.getElementById("inputValue").value;
      var expectedValue = "50"; // Replace with the exact value you want to validate

      if (inputValue === expectedValue) {
        alert("Answer is correct");
      } else {
        alert("Answer is incorrect ");
      }
    }
    function validateValue() {
      var input = document.getElementById("input").value;
      var expected = "140"; // Replace with the exact value you want to validate

      if (input === expected) {
        alert("Answer is correct");
      } else {
        alert("Answer is incorrect");
      }
    }
    function validateVal() {
      var inputAUB = document.getElementById("inputAUB").value;
      var expected = "45"; // Replace with the exact value you want to validate

      if (inputAUB === expected) {
        alert("Answer is valid");
      } else {
        alert("Answer is not valid ");
      }
    }
  </script>
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
    margin-top: 19%;
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
    margin-top: -40%;
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
            <img src="Somaiya Full Logo.png" class="figure-img img-fluid rounded" alt="KJSIT" style="height: 100px; width: 600px;">
            <figcaption class="figure-caption"></figcaption>
          </figure>
          
<div class="sidenav">
	<h2>Experiment 3</h2>
	<a >Inclusion & Exclusion Principle
    </a>
	<a href="theoryinclusion.php">Theory</a>
	<a href="valid.php">Simulator</a>
	<a href="numericalinclusion.php">Numericals</a>
	<a href="inclusionquiz.php">Quiz</a>
	<a href="">References</a>
	<a href="feedbackin.php">Feedback</a>
	<a href="exp1dsgt.php">Home </a>
	<a href="home.php">Logout</a>
</div>
<div class="main">
<h2>PRACTICALS NUMERICALS</h2>
<p>
            <h4>In a group of students, 30 study mathematics, 25 study physics, and 15 study both subjects. What is the total number of students in the group, applying the Inclusion-Exclusion Principle?</h4>
            <form>
              <label for="inputValue">Answer</label>
              <input type="text" id="inputValue" name="inputValue">
              <input type="button" value="Check" onclick="validateExactValue()">
            </form><br><br>
            <form>

           <h4>In a town, there are three clubs: Club A, Club B, and Club C. The number of members in Club A is 50, in Club B is 40, and in Club C is 30. Club A and B have 20 members in common, Club A and C have 15 members in common, and Club B and C have 10 members in common. If there are 5 members who are part of all three clubs, find the total number of members in the town.</h4>

              <label for="input">Answer</label>
              <input type="text" id="input" name="input">
              <input type="button" value="Validate" onclick="validateValue()">
            </form><br><br>
            <form>
              <h4>How many students study either French, Spanish, or both if 30 study French, 25 study Spanish, and 10 study both?</h4>
              <form>
                <label for="input">Answer</label>
                <input type="text" id="inputAUB" name="inputAUB">
                <input type="button" value="Validate" onclick="validateVal()">
              </form>
</div>
<footer>
    <p>
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
