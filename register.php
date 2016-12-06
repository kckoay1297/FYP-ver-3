<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>FCSIT Event Management System Registration</title>
    
    
    <link rel="stylesheet" href="css/register_reset.css">

    
        <link rel="stylesheet" href="css/register_style.css">

    
    
    
  </head>

  <body>
  

    <!-- multistep form -->
 <form action="reg.php" method="post" id="msform" >
  <!-- progressbar -->
  <!--<ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Academic Profiles</li>
    <li>Personal Details</li>
  </ul>-->
  <!-- fieldsets -->
  
  <!-- <fieldset>-->
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Please enter your email and password</h3>
    <input type="email" name="email" placeholder="Email" required/>
    <input type="password" name="pass" placeholder="Password" required/>
    <input type="password" name="cpass" placeholder="Confirm Password" required/>
    <!--<input type="button" name="next" class="next action-button" value="Next" />-->
  <!-- </fieldset>-->
  <!-- <fieldset>-->
    <h2 class="fs-title">Academic Profiles</h2>
    <h3 class="fs-subtitle">Your department and your position</h3>
    <input type="text" name="staffid" placeholder="Staff ID" required/>
    <input type="text" name="designation" placeholder="Designation" required/>
    <input type="text" name="department" placeholder="Department" required/>
    <!--<input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next1" class="next action-button" value="Next" />-->
  <!-- </fieldset>-->
 <!-- <fieldset>-->
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">It is always private and confidential</h3>
    <input type="text" name="firstname" placeholder="First Name" required/>
    <input type="text" name="lastname" placeholder="Last Name" required/>
    <input type="text" name="phone" placeholder="Phone" required/>
    <input type="text" name="icnumber" placeholder="IC Number" required/>
    <!-- <input type="button" name="previous" class="previous action-button" value="Previous" />-->
    
  <!-- </fieldset>-->
  <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </form>
    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="js/register.js"></script>-->

    
    
    
  </body>
</html>
