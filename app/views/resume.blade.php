@extends('layouts.master')
  <link rel="stylesheet" href="../css/timeline.css">
  <style>
      .navbar-default {
        background-color: #3F44A6;
         font-family: 'Corben', Georgia, Times, serif;
        font-size: 16px;
        line-height: 30px;
      }

      .navbar-brand{
        background-color: #3F44A6;
         font-family: 'Corben', Georgia, Times, serif;
        font-size: 16px;
        line-height: 30px;
      }
  </style> 

@section('content')
<ul class='timeline'>
    <li class="year">2014 - Current</li>
    <li class='event offset-first'>
      <img src = "../img/Codeup.jpg">
    </li>
    <li class='event' href="#">
      CodeUp is <b>an intensive programming bootcamp of 9 weeks</b>. Where I'm learning how to develop web apps using <b>LAMP Stack</b> and Javascript.
    </li>
    <li class="event">
      <a href="http://www.codeup.com/" title="Codeup Website">
       Codeup Website <img class='no-box centered' src="../img/codeupwebsite.jpg" alt="Codeup's Website">
      </a>
    </li>
    <li class="event">
        <b>Skills: </b> <br>HTML and CSS, <br>PHP, <br>Javascript, <br>JSON <br>Twitter Bootstrap <br>and JQuery. 
        <img class='no-box centered' src="../img/lamp.jpg" alt="Lamp image">
      </a>
    </li>
    <li class='event'>
      I attended Code Across America 2014: <br/>
      <img class='no-box' src="../img/codeacrossamerica.png"/>
      <a href='https://www.youtube.com/watch?v=KVqG1q9Nltk'>Watch the video of the event.</a>
    </li>
    <li class="year">2008 - 2013</li>
  <li class="event offset-first">
    <p><a href='http://utsa.edu/ucat/cob/bbais.html'>University of Texas at San Antonio</a></p>
    <img class='centered no-box' src="../img/utsa.jpg" alt="Utsa Image">
  </li>
  <li class="event">
    <p><br><b>Relevant Coursework in B.B.A Information Systems Management: </b> <br>Database Management, <br>Application development with Visual Basic, <br>Systems Analysis and Design, <br>Project Management, <br>Introduction to Telecommunications, <br>Intermediate Object-Oriented Programming with Java. <br><b>Relevant Coursework in B.B.A Infrastructure Assurance: </b> <br> Operating Systems, <br>Network Security <br>Information Assurance and Security, <br>and Intrusion Detection and Incident Response.  </p>
  </li> 
  <li class="event">
    <img class='centered no-box' src="../img/diploma.jpg" alt="Diploma image">
  </li> 
   <li class="event">
    <img class='centered no-box' src="../img/graduated.jpg" alt="Graduation image">
  </li> 
</ul>
    
@stop

  