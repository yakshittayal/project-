<?php
$title = "Cource Material";
require_once 'includes/header.php' ?>
<style>
    html, body {
        height: 100%;
        margin: 0;
    }
    body {
        display: flex;
        flex-direction: column;
    }
    header {
        height: 60px; 
    }
    .fixed-hr {
        border: 0;
        height: 4px;
        background-color: black;
        position: fixed;
        top: 80px; 
        left: 0;
        width: 100%;
        margin: 0; 
    }
    .content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        flex: 1;
        margin-top: 1px; 
        margin-bottom: 35px;
        color: white;
    }
    .column {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid white;
        border-width: 5px;
        border-radius: 4px;
        backdrop-filter: blur(10px);
    }
    .h1 {
        text-decoration: underline;
    }
    .heading {
        font-size: 40px;
        padding-bottom: 10%;
        text-decoration: underline;
    }
    p {
        font-size: 20px;
    }
    a {
        color: white; 
        text-decoration: none; 
    }
    a:hover {
        text-decoration: underline; 
    }
</style>
<hr class="fixed-hr">
<body>
<div class="content">
    <div class="column">
        <h1 class="heading">Handouts</h1>
        <p><a href="https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Getting_started">Handout1</a></p>
        <p><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps/How_CSS_works">Handout2</a></p>
        <p><a href="https://javascript.info/intro">Handout3</a></p>
        <p><a href="https://flaviocopes.com/javascript-timers">Handout4</a></p>
        <p><a href="https://www.codecademy.com/learn/learn-sql/modules/learn-sql-queries/cheatsheet">Handout5</a></p>
    </div>
    <div class="column">
        <h1 class="heading">Assignments</h1>
        <p><a href="https://courses.cs.washington.edu/courses/cse142/20sp/handouts/02.pdf">Song</a></p>
        <p><a href="https://courses.cs.washington.edu/courses/cse142/20sp/handouts/03.pdf">Rocket ship</a></p>
        <p><a href="https://courses.cs.washington.edu/courses/cse142/20sp/handouts/04.pdf">Cafe wall</a></p>
        <p><a href="https://courses.cs.washington.edu/courses/cse142/20sp/handouts/05.pdf">Admissions</a></p>
        <p><a href="https://courses.cs.washington.edu/courses/cse142/20sp/handouts/06.pdf">Guessing Game</a></p>
    </div>
    <div class="column">
        <h1 class="heading">Solutions</h1>
        <p><a href="https://github.com/ethan1cranky/UW-CSE-142-Homework/blob/master/src/Song.java">Song</a></p>
        <p><a href="https://github.com/ethan1cranky/UW-CSE-142-Homework/blob/master/src/DrawRocket.java">Rocket ship</a></p>
        <p><a href="https://github.com/ethan1cranky/UW-CSE-142-Homework/blob/master/src/CafeWall.java">Cafe wall</a></p>
        <p><a href="https://github.com/ethan1cranky/UW-CSE-142-Homework/blob/master/src/Admit.java">Admissions</a></p>
        <p><a href="https://github.com/ethan1cranky/UW-CSE-142-Homework/blob/master/src/Guess.java">Guessing Game</a></p>
    </div>
</div>
</body>
<?php include 'includes/footer.php';?>