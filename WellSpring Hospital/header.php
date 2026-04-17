<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WellSpring Hospital</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<style>
		body { font-family: 'Georgia', 'Times New Roman', serif; background-color: #f5f1e6; }
	</style>
</head>
<body>

<div class="header">
	<div class="row">
		<div class="col-md-3"><img src="images/logo.png" alt="WellSpring Hospital"></div>
		<div class="col-md-8">WellSpring Hospital</div>
	</div>
</div>

<div class="navbar-section">
	<div class="row">
		<div class="col-md-12">
            <ul>
                <li><a href="index.php">Home</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropbtn">Departments</a>
                    <div class="dropdown-content">
                        <a href="departments.php?dept=emergency">Emergency Med</a>
                        <a href="departments.php?dept=cardiology">Cardiology</a>
                        <a href="departments.php?dept=pediatrics">Pediatrics</a>
                        <a href="departments.php?dept=surgery">General Surgery</a>
                    </div>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropbtn">Services Offered</a>
                    <div class="dropdown-content">
                        <a href="services.php?service=dental">Dental Care</a>
                        <a href="services.php?service=maternity">Maternity Serv.</a>
                        <a href="services.php?service=nutrition">Nutrition & Dietetics</a>
                    </div>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropbtn">Careers</a>
                    <div class="dropdown-content">
                        <a href="careers.php?position=doctor">Medical Doctors</a>
                        <a href="careers.php?position=nurse">Nurses</a>
                        <a href="careers.php?position=support">Support Staff</a>
                    </div>
                </li>
                
                <li><a href="malaria_registration.php">Malaria Research</a></li>
            </ul>
        </div>
	</div>
</div>
