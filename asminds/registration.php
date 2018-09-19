<!DOCTYPE html>
<html>
	<head>
		<title>EMSLayout</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/jquery/3.3.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
		
		<style>
			body {
			  margin: 0;
			}

			/* Style the header */
			.header {
				background-color: #f1f1f1;
				padding: 20px;
				text-align: center;
			}
			h1{
				color:red;
			}
		
		</style>
		<script>
			
			$(document).ready(function(){
		 $('#contactForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    },
				regexp: {
				regexp: /^[a-z\s]+$/i,
				message: 'Invalid Format'
         }

                }
            }
           
            
             
             
        }
       
    });	
		
		});
		
		
		</script>
	
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top ">
			<div class="navbar-header">
				<h1>ASMINDS EMS</h1>
			</div>
		</nav>
		<br/><br/><br/><br/>
		<div class = "container">
			<!--<form id="temp" action="val.php" data-toggle="validator" role="form" >-->
			<form action="validate.php" id="contactForm" method="POST" data-toggle="validator" role="form" class=" form-horizontal">
			
				<div class="row">
					<h3><div class="p-3 mb-2 bg-primary text-white">Employee Details</div></h3>
					<br></br>
					
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-5">First Name:</div>
							<div class="col-md-5">
								<input type="text" name="fname" id="fname" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Last Name:</div>
							<div class="col-md-5">
								<input type="text" name="lname" id="lname" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Date of Birth:</div>
							<div class="col-md-5">
								<input type="date" name= "dob" id="dob" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Mobile Number:</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Upload Resume:</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Upload Photo:</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="row"><div class="col-md-5">UG Degree</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Year Of PassedOut</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">College Name</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">PG Degree</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Year Of PassedOut</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">College Name</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>							
						</div>
						
					
					</div>
					
					
					
				</div>
				
				<div class="row">
					<h3><div class="p-3 mb-2 bg-primary text-white">Address For Communication</div></h3>
					<br></br>
					
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-5">Address Line 1</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Address Line 2</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">LandMark</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Country</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">State</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">City</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Pincode</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row"><div class="col-md-5">Nationality</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Birth Place</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Native place</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Pancard Availabe</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Permanent Account Number</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>	
							<div class="col-md-5">Aadhaar Card Availabe</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>
							<div class="col-md-5">Aadhaar Card Number</div>
							<div class="col-md-5">
								<input type="text" class="form-control">
							</div>
							<br></br>	
						</div>
					</div>
				</div>
				<div class="row">
					<h3><div class="p-3 mb-2 bg-primary text-white">Details Of Family Members</div></h3>
					<br></br>
					
					<div class="col-md-12">
						<div class="row">
							<table class="table table-bordered">
								<thead>
								  <tr>
									<th>S.No</th>
									<th>Name</th>
									<th>Date Of Birth</th>
									<th>Relationship</th>
									<th>Occupation</th>
									<th>Address</th>
									<th>Contact Number</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td> <input type="text" class="form-control"> </td>
									<td> <input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"></td>
								  </tr>
								  <tr>
									<td> <input type="text" class="form-control"></td>
									<td> <input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
								  </tr>
								   <tr>
									<td> <input type="text" class="form-control"></td>
									<td> <input type="text" class="form-control"></td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
									<td><input type="text" class="form-control"> </td>
								  </tr>
								</tbody>
							</table>	
						</div>
					</div>	
				</div>
				<br/><br/><br/>
				<div class ="row ">
				<input type ="submit" value="SUBMIT" class="col-md-12 btn btn-primary">
				
				</div>
				 <div class="row col-md-12">
								<div class="form-group  col-md-7">
								<div id="messages"></div>
									</div>
									</div>

			</form>
			<br/><br/><br/>
		</div>

	</body>
</html>