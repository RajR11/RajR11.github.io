<?php
if(isset($_POST['submit'])){
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $myfile = file_put_contents('responses.txt', $name.PHP_EOL , FILE_APPEND | LOCK_EX);
    $myfile = file_put_contents('responses.txt', $email.PHP_EOL , FILE_APPEND | LOCK_EX);
    $myfile = file_put_contents('responses.txt', $subject.PHP_EOL , FILE_APPEND | LOCK_EX);
    echo "<script>alert('Feedback submitted Successfully..Thank you for valuable feedback')</script>";
}
?>
<!DOCTYPE>
<html>
<head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width,initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" href="favicon.ico" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/main.js"></script>
  <title>RAJ PRAJAPATI</title>
</head>

<body>
    <header>
	    <h1 id="H">WELCOME</h1>
    </header>
    <div id="main-left">
        <img alt="Getting new image soon" src="profile.jpg" id="profile">
        <div id="small-text">
          <p style="margin-left:30%;margin-top:1%;">Hi, This is RAJ PRAJAPATI</p>
          <p style="margin-left:10%;">Welcome to my Website have a look around to know me</p>
        </div>
        <ul id="buttons" style="margin-left:70px;">
        <li ><a onclick="change(1)" href="#">Know Me<a></li>
        <li ><a onclick="change(2)" href="#">Projects<a></li>
        <li ><a onclick="change(3)" href="#">Skills<a></li>
        <li ><a onclick="change(4)" href="#">Contact<a></li>
        </ul>
        <br><br><br>
    <div >
        <p style="text-align: center;">follow me on Social media:
        <a href="https://www.facebook.com/R11RajPrajapati" target="_blank" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com/r11_raj/" target="_blank" class="fa fa-instagram"></a>
        <a href="https://twitter.com/r11_raj" target="_blank" class="fa fa-twitter"></a>
        <a href="https://github.com/RajR11" target="_blank" class="fa fa-github-square" ></a>
        </p>
    </div>
    <p style="margin-left:35%"><b> &copyRaj Prajapati 2019</b><p>
    </div>
    <div id="main-right">
        <div id="about" style="margin:5%;background-color:rgba(96, 94, 94,0.6);padding:5%;">
            <h3 style="margin-left:45%">About Me</h3><br>
            <p>My name is Raj Prajapati (So easy to guess right!!),I am Computer science student currently in my final year.
              I am code lover and computer systems lover.
              I have compleled my high school from Kendriya Vidyalaya Silvassa.currently I am pursuing my bachelors in engineering from Parul University Vadodara
              in Computer Science and Engineering with current CPI of 9.05 out of 10.<br><br>
              I have been into this field since my 11th grade i.e.from 2014. I am a quick learner and always want to explore new programming languages.
              I was an Erasmus student in 2017 and went to Wroclaw University of Science and Technology for a fully funded semester exchange program known as Erasmus+ Program.
              So far I have travelled across 9 countries in Europe and visited a lot of famous places like Eiffel tower,Camp Nou Stadium in barcelona,Atomium centre brussels etc.Yes I am a traveller and adventure lover.<br><br>

              Currently working as Software Developer Intern at MMSI Technologies Pvt. Ltd. based in Ahmedabad. <br>Want to see my resume? here's a link to it <a href="CV.pdf" target="_blank"><u>Click here to view resume</u></a>.Want to collaborate and contact just go in Contact Me Tab and give a ping.

            </p>
        </div>
    <div id="projects" style="display:none;margin-right:5%;margin-left: 5%;background-color:rgba(96, 94, 94,0.4);">
        <h3 style="margin-left:45%">Projects</h3>
        <br>
        <ul>
            <li><b>Accident Prone Zone Prediction and Accident alert System</b> <img src="IoT.png" style="border-radius:12px;" width="40" height="40"></li>
                <p>It is an embedded systems project curre on which I am working on as my final year project.
                It has Data mining and IoT as its technological domain.It predicts accident prone zones based on past accident data and alerts the user if he/she is near to
                any prone zone.Incase of an accident occured it automatically send a notification about it to emergency services like Ambulance,Police etc. </p>
            <li><b>Talk to Mr.Coder</b> <img src="assistant.png" style="border-radius:12px;" width="40" height="40"></li>
                <p>: It is a google assistant app which is a trivia game which asks questions computer programming and other Computer science concepts.Here's a <a target="_blank" href="https://assistant.google.com/services/a/uid/0000004690b3d155">link to Talk to Mr.Coder app</a>.</p>
            <li><b>Vizible</b><img src="java.png" style="border-radius:12px;" width="40" height="40"></li>
                <p>: An open data initiative for municipal authorities to visualize and account their spent funds.It Also makes everything transparent from system's end.</p>
            <li><b>Appoint me</b> <img src="android.png" style="border-radius:16px;" width="40" height="40"></li>
                <p>: An android app for taking a docter's appointment or calling a docter for emergency.</p>
            <li><b>Bank System</b> <img src="c++.jpeg" style="border-radius:12px;" width="40" height="40"></li>
                <p>: A C++ program for a fully functioning bank management system which includes file handling as well.</p>
        </ul>

    </div>
    <div id="skills" style="display:none;background-color:rgba(96, 94, 94,0.4);">
        <h3 style="margin-left:45%;margin-top:3%;">Skills</h3>
        <div style="margin-left:10%">
            <table style="margin-left:20%;margin-top:5%;font-size: 30px;font: sans-serif">
            <tr>
            <td >  <span id="skill" >&#10070;C</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; C++</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; PHP</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; Vue</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; Python</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; Java</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070;HTML</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; CSS</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; JavaScript</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></td></tr>
            <tr><td><span id="skill">&#10070; R</span></td>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></td></tr>
            <tr><td><span id="skill">&#10070; SQL</span>
            <td class="star"><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></td></tr>
            </table>
        </div>
    </div>
    <div id="contact" style="display:none;margin-left:5%;margin-right: 2%;background-color:rgba(96, 94, 94,0.4);">
        <h3 style="margin-left:45%">Contact Me</h3>
        <div style="margin:5%;align-content:center;">
            <p><i class="fa fa-google" style="font-size:24px;color:red;"></i> prajapatiraj.97@gmail.com</p>
            <p><a id="L" target="_blank" href="https://www.linkedin.com/in/raj-prajapati-b09757125/" class="fa fa-linkedin-square" style="font-size:30px;color:white;"></a><a target="_blank" href="https://www.linkedin.com/in/raj-prajapati-b09757125/">RAJ PRAJAPATI</a></p>
        </div>
        <h3 style="margin-left:5%;">Feedback/Query Form</h3>
        <div class="container">
          <form action="main.php" method="post" enctype="multipart/form-data">
            <label style="color:white">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <br>
            <label style="color:white">Email ID</label>&nbsp&nbsp&nbsp&nbsp
            <input type="email" id="email" name="email" placeholder="Your email address..">
        <br>&nbsp
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px;width:500px;margin-left:9%"></textarea>
        <br>
            <input name="submit" type="submit" value="Submit" style="margin-left:10%;">
          </form>
        </div>
    </div>
    </div>
</body>