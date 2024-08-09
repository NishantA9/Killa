<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unexplored Forts of Maharashtra</title>
    <link rel="stylesheet" href="1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>

    /*-------- contact us --------*/
input[type=text], select, textarea {
	width: 100%; /* Full width */
	padding: 12px; /* Some padding */ 
	border: 1px solid #ccc; /* Gray border */
	border-radius: 4px; /* Rounded borders */
	box-sizing: border-box; /* Make sure that padding and width stays in place */
	margin-top: 6px; /* Add a top margin */
	margin-bottom: 16px; /* Bottom margin */
	resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
  }
  h1{
    color: #000000;
    padding-top: 10px;
    font-size: 35px;
}
  /* Style the submit button with a specific background color etc */
  
  button{
	
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	  
  }
  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
	background-color: #45a049;
  }
  
  /* Add a background color and some padding around the form */
  .contact-page {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
  }
</style>



</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="killa.html">killa</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="killa.html">Home</a></li>
        <li><a href="killa.html">Forts</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="as.html">About-Us</a></li>
        <li><a href="loginpage1.php">Account</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <div class="banner1">
    <div class="about">
      <div class="content"><br><br><br><br>
      <div class="title">About Our Blog</div>
        <p><b>Welcome to The Unexplored Forts of Maharashtra. A blog where we are going to give you a Detailed Information about the Forts which are being explored less but are important to know. Providing rich history and it's Cultures, you will get a complete information of the forts which are standing still showing it's glory.
        </b></p>
        <div class="btn">
          <a href="killa.html">Explore Now &#8594;</a>
      </div>
      </div>
      </div>
    </div>

    <div class="banner2">
        <div class="about1">
          <div class="content"><br>
          <div class="title1">About-Us</div>
          <p><b>We always wanted to contribute our work towards the Development of Maharashtra. And As Maharashtra is rich in Culture and it's history stated from many years ago. These forts are one of the part of Maharashtra and it's rich History, Ruled by many rulers and then by Marathas under the Leadership of Chhatrapati Shivaji Maharaj this forts are Important part of Maharashtra and it's history. So We decided to work on this project and help people to know the rich history of our king and their Forts and We hope we haved helped many of you by providing important and usefull Information. Any Feedbacks are welcome and also You can Contact-US below. So keep reading and Keep Blogging. 
             <br><br><br><br> </b></p>

            
          </div>
          </div>
        </div>


 <!-------- contact page -------->
 <div class="container contact-page">
    <div class ="Form">
      <form method="POST" name="myform" onsubmit="return(validator())">
        <h1><center>Contact-US</center></h1>
      <label for name="fname"><b>First Name</b></label>
      <input type="text" name="fname" size="25" value="">
  
      <label for name="lname"><b>Last Name</b></label>
      <input type="text" name="lname" size="25" value="">
  
      <label for name="category" ><b>Category</b></label>
      <select id="category" name="category">
        <option value="Error"><b>Error</b></option>
        <option value="Feedback"><b>Feedback</b></option>
        <option value="Suggestion"><b>Suggestion</b></option>
      </select>
  
      <label for name="subject" >Subject</b></label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <button onclick=validator()>Submit</button>
    </form>
    
  </div>
</div>        
        <!-------- footer -------->

<div class="footer">
    <div class="container1">
    <div class="row">
    <div class="footer-col-1">
    <h3>Having Trouble ?</h3>
    <p><b>Click the About-Us Image for more Info!</b></p>
    <div class="app-logo">
        <a href="#" target="_blank">
            <img src="images\about-us.png"></a>
    </div>
    </div>
    <div class="footer-col-2">
        <a href="killa.html"><img src="logo.png"></a>
    <p><b>Our purpose is to share information</b></P>
    </div>
    <div class="footer-col-3">
    <h3>Useful Links</h3>
    <ul>
    <li><a href="https://www.facebook.com/sahyadripratishthaan/" target="_blank"><p><b>Donate</b></p></a></li>
    <li><a href="https://www.treksandtrails.org/blog/category/forts-of-maharashtra/" target="_blank"><p><b>Blog Post</b></p></a></li>
    <li><a href="https://www.maharashtratourism.gov.in/" target="_blank" ><p><b>MTDC</b></p></a></li>
    <li><a href="as.html" target="_blank"><p><b>Need Help</b></p></a></li>
    </ul>
    </div>
    <div class="footer-col-3">
    <h3>Get More Information</h3>
    <ul>
    <li><a href="https://www.facebook.com/GadKilleSafar" target="_blank"> <p><b>Facebook</b></p> </a> </li>
    <li><a href="blog.php" target="_blank"> <p><b> Blogs </b></p> </a> </li>
    <li><a href="https://www.instagram.com/mi_durg_veda/" target="_blank"> <p><b>Instagram</b></p> </a> </li>
    <li><a href="https://www.youtube.com/channel/UC4BFta04-H7yVIa3045chXA" target="_blank"> <p><b> YouTube </b></p> </a> </li>
    </ul>
    </div>
    </div>
    <hr>
    <p class="copyright"><b>Copyright 2020 - Unexplored Forts</b></p>
    </div>
    </div>

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>
<script type="text/javascript">
    function validator()
    {
    if(document.myform.fname.value=="")
    {
    alert("First-Name cannot be blank");
    document.myform.Name.focus();
    return false;
    }
    else if(document.myform.lname.value=="")
    {
    alert("Last-Name cannot be blank");
    document.myform.Name1.focus();
    return false;
    }
    else if(document.myform.subject.value=="")
    {
    alert("Feedback cannot be blank!");
    document.myFunction.subject.focus();
    return false;
    } 
    else
    {
	<?php
	$connf=mysqli_connect('127.0.0.1','root','','blogbllog');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$category = $_POST['category'];
	$subject = $_POST['subject'];
	$sql = "INSERT INTO feedback(fname,lname,category,subject) VALUES('$fname', '$lname', '$category', '$subject')";
    mysqli_query($connf, $sql);
	?>
    alert("Your Response has been Recorded!");
    return true;
    } 
    }
	window.location.href = 'killa.html';
	document.getElementById("myform").reset();
    </script>
</body>
</html>
