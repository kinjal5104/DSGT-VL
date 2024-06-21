<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   
main {
  /*  outline: 1px dotted #ccc; */
  width: calc(100% * var(--venn-width-mult));
  margin: 0 auto;
}

:root {
  --venn-width-mult: 0.29;
}

@media print {
  :root {
    --venn-width-mult: 1;
  }
}

/* Defaults for browsers that do not support shape-outside */
@media (min-width: 800px) {
  .Venn::after {
    content: "";
    display: block;
    width: 1px;
    height: 1px;
    clear: both;
  }

  .circle,
  .shape {
    box-sizing: border-box;
    border: 0.1em solid rgba(0, 0, 0, 0.5);
    margin: 0 0.75%;
    padding: 0 1.5em;
    float: left;
    width: 32%;
  }

  .circle.one {
    margin-left: 0;
  }

  .circle.three {
    margin-right: 0;
  }

  .shape {
    width: 30%;
    margin: 1em 1%;
  }

  .shape.onetwo {
    margin-left: 2.5%;
    clear: left;
    border-top-right-radius: 1em;
  }

  .shape.twothree {
    margin-right: 2.5%;
    border-top-left-radius: 1em;
  }

  .shape.onethree {
    margin-top: 3em;
    border-top-right-radius: 1em;
    border-top-left-radius: 1em;
  }

  .shape.onetwothree {
    clear: both;
    width: 40%;
    margin-left: 30%;
    margin-right: 30%;
    border-radius: 1.5em;
  }
}

@supports (shape-outside: polygon(0 0, 0 50%, 50% 50%)) {
  .Venn::after {
    display: none;
  }

  .Venn > div {
    box-sizing: border-box;
    border: 0.1em solid rgba(0, 0, 0, 0.5);
    font-size: calc(2.5vw * var(--venn-width-mult));
    line-height: 1.3;
    overflow: hidden;
  }

  .Venn > .shape {
    font-size: calc(2.25vw * var(--venn-width-mult));
    border: initial;
    width: initial;
    margin: initial;
    padding: initial;
  }

  .Venn > .circle {
    border-radius: 50%;
    width: initial;
    margin: initial;
    padding: initial;
  }

  /* Grid layout  */
  .Venn {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(3, calc(28.8vw * var(--venn-width-mult)));
  }

  .Venn > h2 {
    grid-column-start: 1;
    grid-column-end: 6;
    grid-row-start: 0;
    grid-row-end: 1;
  }

  .Venn > .circle.one {
    /*   outline: .2em solid #f00; */
    grid-column-start: 1;
    grid-column-end: 4;
    grid-row-start: 1;
    grid-row-end: 3;
  }

  .Venn > .circle.two {
    /*   outline: .2em solid #0f0; */
    grid-column-start: 3;
    grid-column-end: 6;
    grid-row-start: 1;
    grid-row-end: 3;
  }

  .Venn > .circle.three {
    /*   outline: .2em solid #00f; */
    grid-column-start: 2;
    grid-column-end: 5;
    grid-row-start: 2;
    grid-row-end: 4;
  }

  .Venn > .shape.onetwo {
    /*   outline: .2em solid #ff0; */
    grid-column-start: 3;
    grid-column-end: 4;
    grid-row-start: 1;
    grid-row-end: 2;
  }

  .Venn > .shape.onethree {
    /*   outline: .2em solid #f0f; */
    grid-column-start: 2;
    grid-column-end: 4;
    grid-row-start: 2;
    grid-row-end: 2;
  }

  .Venn > .shape.twothree {
    /*   outline: .2em solid #0ff; */
    grid-column-start: 3;
    grid-column-end: 5;
    grid-row-start: 2;
    grid-row-end: 2;
  }

  .Venn > .shape.onetwothree {
    /*   outline: .2em solid #fff; */
    grid-column-start: 3;
    grid-column-end: 3;
    grid-row-start: 2;
    grid-row-end: 2;
  }

  /* Text wrap */
  .Venn .circle,
  .Venn .shape {
    text-align: center;
  }
  .Venn .circle span,
  .Venn .shape span {
    box-sizing: border-box;
    float: right;
    /*     border: 1px dotted #00f;
    background-color: rgba(0,0,0,.1); */
  }
  .Venn .circle > span {
    width: calc(58.5vw * var(--venn-width-mult));
    height: calc(58.5vw * var(--venn-width-mult));
  }
  .Venn .shape > span {
    height: calc(29vw * var(--venn-width-mult));
  }
  .Venn .one > span {
    float: left;
    width: 32%;
    shape-margin: 0;
    shape-outside: polygon(
      100% 0%,
      0% 0%,
      0% 100%,
      100% 100%,
      100% 92%,
      76% 88%,
      44% 80%,
      20% 70%,
      10% 60%,
      5% 50%,
      10% 40%,
      20% 30%,
      41% 20%,
      70% 10%,
      100% 5%
    );
  }
  .Venn .one > span + span {
    float: right;
    width: 66%;
    shape-outside: polygon(
      100% 0%,
      40% 0%,
      65% 15%,
      53% 25%,
      47% 35%,
      44% 45%,
      43% 50%,
      31% 55%,
      12% 65%,
      5% 75%,
      0% 85%,
      0% 100%,
      100% 100%
    );
  }
  .Venn .two > span {
    float: left;
    width: 66%;
    shape-margin: 0;
    shape-outside: polygon(
      0% 0%,
      60% 0%,
      35% 15%,
      47% 25%,
      53% 35%,
      56% 45%,
      57% 50%,
      69% 55%,
      88% 65%,
      95% 75%,
      100% 85%,
      100% 100%,
      0% 100%
    );
  }
  .Venn .two > span + span {
    float: right;
    width: 32%;
    shape-outside: polygon(
      0% 0%,
      100% 0%,
      100% 100%,
      0% 100%,
      0% 92%,
      24% 88%,
      56% 80%,
      80% 70%,
      90% 60%,
      95% 50%,
      90% 40%,
      80% 30%,
      59% 20%,
      30% 10%,
      0% 5%
    );
  }
  .Venn .three > span {
    float: left;
    width: 49%;
    shape-margin: 0;
    shape-outside: polygon(
      0% 0%,
      100% 0%,
      100% 40%,
      75% 47%,
      50% 50%,
      2% 50%,
      5% 60%,
      13% 70%,
      27% 80%,
      52% 90%,
      78% 95%,
      100% 97%,
      100% 100%,
      0% 100%
    );
  }
  .Venn .three > span + span {
    float: right;
    shape-outside: polygon(
      100% 0%,
      0% 0%,
      0% 40%,
      25% 47%,
      50% 50%,
      98% 50%,
      95% 60%,
      87% 70%,
      73% 80%,
      48% 90%,
      22% 95%,
      0% 97%,
      0% 100%,
      100% 100%
    );
  }
  .Venn .onetwo > span {
    float: left;
    width: 49%;
    shape-margin: 0;
    shape-outside: polygon(
      0% 0%,
      100% 0%,
      100% 30%,
      72% 40%,
      48% 50%,
      20% 70%,
      10% 85%,
      0% 98%,
      100% 98%,
      100% 100%,
      0% 100%
    );
  }
  .Venn .onetwo > span + span {
    float: right;
    shape-outside: polygon(
      100% 0%,
      0% 0%,
      0% 30%,
      28% 40%,
      52% 50%,
      80% 70%,
      90% 85%,
      100% 98%,
      0% 98%,
      0% 100%,
      100% 100%
    );
  }
  .Venn .onethree > span {
    float: left;
    width: 48%;
    shape-margin: 0;
    shape-outside: polygon(
      0% 0%,
      100% 0%,
      100% 5%,
      70% 20%,
      45% 35%,
      26% 50%,
      10% 75%,
      5% 90%,
      50% 98%,
      100% 95%,
      100% 100%,
      0% 100%
    );
  }
  .Venn .onethree > span + span {
    float: right;
    width: 51%;
    shape-outside: polygon(
      100% 0%,
      0% 0%,
      0% 25%,
      9% 40%,
      20% 55%,
      40% 70%,
      30% 80%,
      0% 90%,
      0% 100%,
      100% 100%
    );
  }
  .Venn .twothree > span {
    float: left;
    width: 51%;
    shape-margin: 0;
    shape-outside: polygon(
      0% 0%,
      100% 0%,
      100% 25%,
      91% 40%,
      80% 55%,
      60% 70%,
      70% 80%,
      100% 90%,
      100% 100%,
      0% 100%
    );
  }
  .Venn .twothree > span + span {
    float: right;
    width: 48%;
    shape-outside: polygon(
      100% 0%,
      0% 0%,
      0% 5%,
      30% 20%,
      55% 35%,
      74% 50%,
      90% 75%,
      95% 90%,
      50% 98%,
      0% 95%,
      0% 100%,
      100% 100%
    );
  }
  .Venn .onetwothree > span {
    float: left;
    width: 49%;
    shape-margin: 0;
    shape-outside: polygon(
      0% 0%,
      10% 15%,
      30% 35%,
      50% 50%,
      95% 70%,
      100% 100%,
      0% 100%
    );
  }
  .Venn .onetwothree > span + span {
    float: right;
    shape-outside: polygon(
      100% 0%,
      90% 15%,
      70% 35%,
      50% 50%,
      5% 70%,
      0% 100%,
      100% 100%
    );
  }
  .Venn .circle h3 {
    margin: 0.5em 0 0 0;
    text-align: center;
  }
  .Venn .circle h3 + * {
    margin-top: 0.2em;
  }
  .Venn .shape h3 {
    clip-path: inset(100%);
    clip: rect(1px, 1px, 1px, 1px);
    height: 1px;
    width: 1px;
    overflow: hidden;
    position: absolute;
    white-space: nowrap;
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
      <p>
        <h4>  Q.Out of 200 students, 50 of them take the course discrete athematics, 140 of them take the course economics and 24 of them take both the courses. Since both courses have scheduled examations for the following day, only students who are not in either one of these courses will be able to go to the party, the night before. Find how many students will be at the party?</h4>
      </p>
      <p>n(U)=200</p>
      <p>n(A)=50</p>
      <p>n(B)=140</p>
      <p>n(A∩B)=24</p>
      <p>n(AUB)=166 <br><br>n(AUB)'=34</p>
<main>
    
<br><br><br><br><br><br>     
    <article class="Venn">
      
      <div class="circle one">
        
        <h1>n(A)</h1>
        <p style="margin-right: 100px; margin-top: 50px;">
            <br>
            <br>
            <b>n(A)=26</b>
          </p>
      </div>
      <div class="circle two">
        <span></span>
        <span></span>
        <h1>n(B)</h1>
        <p style="margin-left: 100px; margin-top: 50px;">
            <br>
            <br>
           <b> n(B)=116</b>
          </p>
      </div>
      
      <div class="shape onetwo">
        <span></span>
        <span></span>
        <h3>One + Two</h3>
        <p style="font-size: 11px;">
            <br><br><br><br><br><br><br>
          <b>n(A∩B)=24</b>
          
        </p>
      </div>
     
    </article>
    <h4>Ans:</h4>
   <p>The number of students who will go to party are 34.</p>
  </main>
</body>
</html>