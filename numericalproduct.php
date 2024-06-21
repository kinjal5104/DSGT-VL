<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>expct</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
    function validateValueU() {
      var inputU = document.getElementById("inputU").value;
      var expected = "13"; // Replace with the exact value you want to validate

      if (inputU === expected) {
        alert("Value is valid!");
      } else {
        alert("Value is not valid. ");
      }
    }
    function validateExactValue() {
      var inputValue = document.getElementById("inputValue").value;
      var expectedValue = "20"; // Replace with the exact value you want to validate

      if (inputValue === expectedValue) {
        alert("Answer is correct");
      } else {
        alert("Answer is incorrect ");
      }
    }
    function validateValue() {
      var input = document.getElementById("input").value;
      var expected = "15"; // Replace with the exact value you want to validate

      if (input === expected) {
        alert("Answer is correct");
      } else {
        alert("Answer is incorrect");
      }
    }
    function validateVal() {
      var inputAUB = document.getElementById("inputAUB").value;
      var expected = "545"; // Replace with the exact value you want to validate

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
    margin-top: -550px;
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
  <h2>Experiment 2</h2>
  <a >Product Rule
    </a>
  <a href="productt.php">Theory</a>
  <a href="Productrule.php">Simulator</a>
  <a href="numericalproduct.php">Numericals</a>
  <a href="productquiz.php">Quiz</a>
  <a href="">References</a>
  <a href="feedbackproduct.php">Feedback</a>
  <a href="exp1dsgt.php">Home </a>
  <a href="home.php">Logout</a>
</div>
<div class="main">
<h2>PRACTICALS NUMERICALS</h2>
          <p>
            <h4>Kyle wants to buy coffee and a doughnut. The local doughnut shop has five kinds of doughnuts for sale and sells four varieties of coffee.How many different orders could Kyle make?</h4>
            <form>
              <label for="inputValue">Answer</label>
              <input type="text" id="inputValue" name="inputValue">
              <input type="button" value="Check" onclick="validateExactValue()">
            </form><br><br>
            <form>

           <h4>18 Girls and 15 Boys are going for camping.Among them 10 girls and 5 boys opted for best student award. How manys ways are there to select the best student?</h4>

              <label for="input">Answer</label>
              <input type="text" id="input" name="input">
              <input type="button" value="Validate" onclick="validateValue()">
            </form><br><br>
            <form>
              <h4>The department will award a free laptop to either a CS student or a CS professor. How many different choicess are there if there are 530 students and 15 professors</h4>
              <form>
                <label for="input">Answer</label>
                <input type="text" id="inputAUB" name="inputAUB">
                <input type="button" value="Validate" onclick="validateVal()">
              </form>
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