<?php require_once('inc/top.php');?>
</head>

<body>

<div class="container"> <br>
    <h1 class="text-success text-center">Sign Up</h1>
   <br>
    <div class="col-lg-8 m-auto d-block">

        <form class="bg-light" action="inc/signup.includes.php" method="POST">
        
            <div class="form-group">
                <label>Name </label>
                <input type="text" name="name" class="form-control" required id="name" onkeyup="myFunction(this)" autocomplete="off">
                <div id="nameMessage"></div>
			</div>
			
			<div class="form-group">
                <label> Department</label>
                <input type="text" name="dpname" class="form-control" required id="deptname" onkeyup="myFunction(this)" autocomplete="off">
                <div id="deptnameMessage"></div>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" class="form-control" required id="pass" onkeyup="myFunction(this)" autocomplete="off">
                <div id="passMessage"></div>
            </div>
        
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpass" class="form-control" required id="conpass" onkeyup="myFunction(this)"  autocomplete="off">
                <div id="conpassMessage"></div>
            </div>

            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobile" class="form-control" required id="MobileNumber" onkeyup="myFunction(this)" autocomplete="off">
                <div id="mobileMessage"></div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required id="emails" onkeyup="myFunction(this)" autocomplete="off">
                <div id="emailMessage"></div>
            </div>

			<input type="submit" name="submit" value="submit" class="btn btn-success">

        </form>
    </div>
</div>

<script type="text/javascript">
var nameRegex = new RegExp(/^[a-zA-Z. ]*$/);
var deptRegex = new RegExp(/^[a-zA-Z. ]*$/);
var Mobileregx = new RegExp(/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/);
var emailRegex = new RegExp(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/);

function myFunction(obj){
 	var type = obj.id;
 	var pass = document.getElementById('pass').value;
 	var conpass = document.getElementById('conpass').value;

 	if(obj.id == "name"){
 		var name = document.getElementById('name').value;
 		if(nameRegex.test(name)){
 			if(name.length > 0){
 				document.getElementById('nameMessage').innerHTML = "<span class='text-success font-weight-bold'>The name is valid</span>";
 			}
 			else{
 				document.getElementById('nameMessage').innerHTML = "<span class='text-danger font-weight-bold'>Please Enter a valid name</span>";	
 			}	
 		}
 		else{
 			document.getElementById('nameMessage').innerHTML = "<span class='text-danger font-weight-bold'>Please Enter a valid name</span>";
 		}

		 if(obj.id == "deptname"){
 		var name = document.getElementById('deptname').value;
 		if(nameRegex.test(name)){
 			if(name.length > 0){
 				document.getElementById('deptnameMessage').innerHTML = "<span class='text-success font-weight-bold'>The name is valid</span>";
 			}
 			else{
 				document.getElementById('deptnameMessage').innerHTML = "<span class='text-danger font-weight-bold'>Please Enter a valid name</span>";	
 			}	
 		}
 		else{
 			document.getElementById('deptnameMessage').innerHTML = "<span class='text-danger font-weight-bold'>Please Enter a valid name</span>";
 		}
 		
 	}
 	if(obj.id == "pass"){
 		
 		if(pass.length >= 6 ){
 			document.getElementById('passMessage').innerHTML = "<span class='text-success font-weight-bold'>Valid Password</span>";	
 		}
 		else{
 			document.getElementById('passMessage').innerHTML = "<span class='text-danger font-weight-bold'>Password length has to be more than 6</span>";
 		}
 		
 	}
 	if(obj.id == "conpass"){
 		
 		if(pass == conpass ){
 			document.getElementById('conpassMessage').innerHTML = "<span class='text-success font-weight-bold'>Both Passwords Matches</span>";	
 		}
 		else{
 			document.getElementById('conpassMessage').innerHTML = "<span class='text-danger font-weight-bold'>Both Passwords should be same</span>";
 		}
 		
 	}
 	if(obj.id == "MobileNumber"){
 		var mobileno = document.getElementById('MobileNumber').value;
 		if(Mobileregx.test(mobileno)){
 			
 				document.getElementById('mobileMessage').innerHTML = "<span class='text-success font-weight-bold'>The mobile no is valid</span>";
 		}
 		else{
 			document.getElementById('mobileMessage').innerHTML = "<span class='text-danger font-weight-bold'>Please Enter a valid mobile no</span>";
 		}
 		
 	}
 	if(obj.id == "emails"){
 		var emailval = document.getElementById('emails').value;
 		if(emailRegex.test(emailval)){
 			
 				document.getElementById('emailMessage').innerHTML = "<span class='text-success font-weight-bold'>The email is valid</span>";
 		}
 		else{
 			document.getElementById('emailMessage').innerHTML = "<span class='text-danger font-weight-bold'>Please Enter a valid email</span>";
 		}
 		
 	}
    

}

<?php require_once('inc/footer.php');?>