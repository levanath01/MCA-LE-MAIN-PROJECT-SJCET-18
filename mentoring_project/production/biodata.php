<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>biodata</title>

<style>

	body  {
		background-image: url("img/12.jpg");
		background-repeat: no-repeat;
		background-attachment: fixed;
		color:white;
	}
	td{
		padding:5px;
		/* padding:10px 0px 10px 10px; */
	}
	.div1{
		color:white;
		border-style: solid;
		border-color: red green blue yellow;
	    background-repeat: no-repeat, repeat;
	    background-image: url("img/14.jpg");
	    background-blend-mode: lighten;
   	   
	}
	
	h3{
		color:#894878
		font-variant: small-caps;
	}
	* {
    box-sizing: border-box;
}

input[type=text],select{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=email]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}

input[type=number]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=date]{
	color:black;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;

}
input[type=submit] {
    background-color: #876754;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:200px;
}
input[type=reset] {
    background-color: #876754;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
	width:200px;
}

input[type=submit]:hover {
    background-color: #455654;
}
input[type=reset]:hover {
    background-color: #455654;
}

.
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
	 </style>
</head>

<body>
<form action="date.php" method="post" enctype="multipart/form-data">
		<div class="div1">
		<h3>Personal Details</h3>
			<table cellspacing="5" cellpadding="5" style="color:white;
		padding:20px 0px 10px 40px;">
			<tr>
				<td colspan="2">Name:</td>
				<td><input type="text" name="txtfname"/></td>
				<td><input type="text" name="txtmname"/></td>
				<td><input type="text" name="txtlname"/></td>
			</tr>
			<tr>
				<td>Relation</td>
				<td ><select name="relation">
				<option>Father</option>
				<option>Mother</option>
				<option>Husband</option></select></td>
				<td><input type="text" name="txtrfname"/></td>
				<td><input type="text" name="txtrmname"/></td>
				<td><input type="text" name="txtrlname"/></td>
			</tr>
			<tr>
				<td colspan="2">Sex</td>
				
				<td>Date of Birth</td><td><input type="date" name="dob" placeholder="dd/mm/yyyy"/></td>
				<td>Age</td><td><input type="text" name="txtage"/>ys</td>
			</tr>
			<tr>
				<td colspan="2">Place of Birth</td>
				<td><input type="text" name="txtplaceofbirth"/></td>
				<td>Country of Birth</td>
				<td><select name="country">
					<option>india</option>
					<option>australia</option>
					<option>usa</option>
					<option>uk</option>
					<option>london</option>
					<option>canada</option></select></td>
			</tr>
			<tr>
				<td colspan="2">Educational Qualification</td>
				<td><select name="education">
					<option>PHD</option>
					<option>Mphil</option>
					<option>PostGraduate</option>
					<option>Graduation</option>
					<option>Plus two</option>
					<option>SSLC</option></select></td>
				<td>Blood Group</td>
				<td><select name="blood">
					<option>A+</option>
					<option>B+</option>
					<option>O+</option>
					<option>A-</option>
					<option>B-</option>
					<option>O-</option>
					<option>AB-</option></select></td>
			</tr>
			<tr>
				<td colspan="2">Mobile no:</td>
				<td><input type="number" name="txtmobile"/></td>
				<td>Email</td>
				<td><input type="email" name="txtemail"/></td>
			</tr>
			<tr>
				<td colspan="2">ID proof</td>
				<td>1.Adhaar:</td>
				<td><input type="file" name="file"></td>
				</tr>
			<!--<tr>
				<td></td><td></td>
				<td>2.Voter id:</td>
				<td><input type="file" name="file1"/></td>
			</tr>-->
			<tr>
				<td colspan="2">Identification mark</td>
				<td>1.<input type="text" name="txtidentificationmark1"/></td>
			</tr>
			<tr>
				<td></td><td></td>
				<td>2.<input type="text" name="txtidentificationmark2"/></td>
			</tr>
			</table>
		</div>
		<br>
		<div class="div1">
			<h3>Address Details</h3>
			<table cellspacing="5" cellpadding="5" style="color:white;
		padding:20px 0px 10px 40px;">
			<tr>
				<td>State</td>
				<td><select name="state">
					<option>Kerala</option>
					<option>Tamil Nadu</option>
					<option>Karnataka</option>
					<option>Rajasthan</option>
					<option>Goa</option>
					<option>Delhi</option>
					<option>Mumbai</option>
					<option>Maharastra</option>
					<option>Orissa</option>
					<option>UP</option></select></td>
					<td></td><td></td>
				<td>Address</td>
				<td>Line 1:</td>
				<td><input type="text" name="txtaddress1" /></td>
			<tr>
			
				<td>District</td>
				<td colspan="4"><select name="district">
					<option>Trivandram</option>
					<option>Kollam</option>
					<option>Pathanamthitta</option>
					<option>Alappuzha</option>
					<option>Kottayam</option>
					<option>Ernakulam</option>
					<option>idukki</option>
					<option>palakkadu</option>
					<option>Trissur</option>
					<option>Kozhikodu</option></select></td>
				<td>Line 2:</td>
				<td><input type="text" name="txtaddress2"/></td>	
			</tr>
			<tr>
				<td>Taluk</td>
				<td colspan="4"><input type="text" name="txttaluk"/></td>
				<td>Line 3:</td>
				<td><input type="text" name="txtaddress3"/></td>	
			</tr>
			<tr>
				<td>Village</td>
				<td colspan="4"><input type="text" name="txtvillage"/></td>
				<td>Pincode:</td>
				<td><input type="number" name="txtpincode"/></td>	
			</tr>
			</table>
			
		</div>
		<br>
		<div class="div1">
		<h3>Select class of vehicles</h3>
			<table cellspacing="5" cellpadding="5" style="color:white;
		padding:20px 0px 10px 40px;">
				<tr>
					<td><input type="checkbox" name="cob[]" value="checkmcwog" checked/>Motor cycle without gear(Non Transport)(MCWOG)</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="checklmv"/>LMV-NT(LMV)</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="checklmv3"/>LMV-3 Wheeler NT(3W-NT)</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="checklmvtractor"/>LMV-Tractor-NT(TRACTOR</td>
				</tr>
				<tr>
					<td><input type="checkbox"  name="cob[]" value="checkecart"/>E-CART(eCART)</td>
				</tr>
				<tr>
					<td><input type="checkbox"  name="cob[]" value="checkrickshaw"/>E-RICKSHAW(eRIKSH)</td>
				</tr>
			
			</table>
		</div>
			<table cellspacing="5" cellpadding="5"> 
			<tr>
				<td><input type="submit" name="btnLearners" value="Save"/></td>
				
				<td><input type="reset" name="reset" value="Reset"/></td>
			</tr>
		</table>
	</form>		






</body>
</html>
