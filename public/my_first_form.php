<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>My First HTML Form</title>
</head>
	<body>
        <label for="user_login">User Login</label>
		<form method="get" action="/my_first_form.php" id="user_login">
    	<p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="username">
    		</p>
        
    	<p>
	        <label for="password">Password</label>
	        <input id="password" name="password"  type="password" placeholder="password" required>
    	</p>
    	<p>
        	<button> Login</button>
    	</p>
        <input type="text" id="first_name" name="first_name" value="" placeholder="First Name">
		</form>

<label for="compose_email">Compose Email</label>
    <form method="POST" action="/my_first_form.php" id="compose_email">
    <p>
        <label for="addressee">TO:</label>
        <input type="text" id="addressee" name="to">
    </p>    
    <p>
        <label for="addressor">FROM:</label>
        <input type="text" id="addressor" name="from">
    </p>
    <p>
        <label for="subject">SUBJECT:</label>
        <input type="text" id="subject_line" name="subject">
    </p> 
    <p>
        <textarea placeholder="Type your message here."></textarea>
    </p>
    <p>
     <input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
    <label for="mailing_list">Save a copy to my sent folder.</label>
    </p>
    <p>
        <button>Send</button>
    </p>
<label for="multiple_choice">Multiple Choice Test</label> 
    <form method="POST" action="/my_first_form.php" id="multiple_choice">
        <p>Who is the President of the United States?</p>
            <label><input type="radio" name="q1" value="barack obama">Barack Obama</label>
            <label><input type="radio" name="q1" value="george w. bush">George W. Bush</label>
            <label><input type="radio" name="q1" value="bill clintion">Bill Clintion</label>
            <label><input type="radio" name="q1" value="ted cruz">Ted Cruz</label>

         <p>Who is the Governor of Texas?</p> 
            <label><input type="radio" name="q2" value="rick perry">Rick Perry</label>  
            <label><input type="radio" name="q2" value="anne richards">Anne Richards</label>
            <label><input type="radio" name="q2" value="greg abbott">Greg Abbott</label>
            <label><input type="radio" name="q2" value="jerry jones">Jerry Jones</label>

          <p>Which of these are towns in Colorado?</p>
            <label><input type="checkbox" id="ch1" name="twn[]" value="silt">Silt</label>
            <label><input type="checkbox" id="ch2" name="twn[]" value="grand junction">Grand Junction</label> 
            <label><input type="checkbox" id="ch3" name="twn[]" value="new castle">New Castle</label>
            <label><input type="checkbox" id="ch4" name="twn[]" value="cheyenne">Cheyenne</label>
            <label><input type="checkbox" id="ch5" name="twn[]" value="laramie">Laramie</label>
  
            <!-- Add a question that has multiple answers using grouped checkboxes. Try submitting the form to your browser to see how the inputs work.

                When an option is selected, it is added to the "array" that would be used in the backend to log and use the answers.-->
         <p><label for "multi_select">What sports do you like to play?</label></p>
            <select id="multi_select" name="multi_select[]" multiple>
                <option value="baseball">Baseball</option>
                <option value="golf">Golf</option>
                <option value="basketball">Basketball</option>
                <option value="bowling">Bowling</option>
            </select>

         <p><button type="submit">Submit Test</button></p>
      
    </form>
    
<form method="POST" action="/my_first_form.php" id="select_testing">
    <label for="selection">Would you like to join the party?</label>
    <select id="selection" name="selection">
        <option value="1">Yes</option>
        <option value="0" selected>No</option>
    </select>
    <p><p><button type="submit">Submit</button></p></p>

</form>
	</body>

</html>