<?php include "header.php"; ?>

<div class="main-section">

    <!-- Hero Section -->
    <div class="hero-section" align="center" style="background: linear-gradient(rgba(0,109,119,0.6), rgba(0,109,119,0.4)), url('images/about.png'); background-size: cover; background-position: center; padding: 100px ; border-radius: 20px; margin-bottom: 30px;">
        <div class="hero-text" style="background: rgba(255, 255, 255, 0.9); padding: 15px; max-width: 900px; border-radius: 20px; border: 3px solid #ff9f1c;">
            <h1 style="color: #006d77; font-size: 2.8rem; margin-bottom: 15px;">Welcome to WellSpring Hospital</h1>
            <p style="font-size: 1.2rem; color: #ff9f1c; margin-bottom: 5px;">Your Health, Our Priority</p>
        </div>
    </div>

    <!-- Hospital Statistics Bar -->
    <div align="center">
        <div style="margin: 30px auto; background: #006d77; max-width: 1100px; padding: 30px 20px; border-radius: 55px; color: white; display: inline-block; width: 100%;">
            <div class="row" style="text-align: center;">
                <div class="col-md-3">
                    <h2 style="color: #ff9f1c; font-size: 2.5rem; margin: 0;">15+</h2>
                    <p style="margin: 5px 0 0;">Years of Excellence</p>
                </div>
                <div class="col-md-3">
                    <h2 style="color: #ff9f1c; font-size: 2.5rem; margin: 0;">50+</h2>
                    <p style="margin: 5px 0 0;">Specialist Doctors</p>
                </div>
                <div class="col-md-3">
                    <h2 style="color: #ff9f1c; font-size: 2.5rem; margin: 0;">200+</h2>
                    <p style="margin: 5px 0 0;">Hospital Beds</p>
                </div>
                <div class="col-md-3">
                    <h2 style="color: #ff9f1c; font-size: 2.5rem; margin: 0;">10,000+</h2>
                    <p style="margin: 5px 0 0;">Happy Patients</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="row" style="background: #ffffff; padding: 40px; border-radius: 20px; margin: 30px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <div class="col-md-6">
            <h2 style="color: #006d77; border-left: 8px solid #ff9f1c; padding-left: 20px;">About WellSpring Hospital</h2>
            <p style="font-size: 1.2rem; line-height: 1.8; color: #1e3a3a; margin-top: 20px;">
                WellSpring Hospital was founded in 2022 to address the growing need for accessible, 
                high-quality healthcare services in the rapidly expanding region. Our history is rooted 
                in a commitment to community well-being and a vision for healthier future.
            </p>
            <p style="font-size: 1.1rem; color: #555; margin-top: 15px;">
                We combine compassionate care with modern medical technology to provide comprehensive 
                healthcare services for you and your family.
            </p>
        </div>
        <div class="col-md-6">
            <img src="images/about.png" 
                 alt="Modern Hospital Interior" style="width:100%; border-radius: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
        </div>
    </div>

    <!-- Our Specialties / Departments Quick Links -->
    <div class="row" style="background: #ffffff; padding: 40px; border-radius: 20px; margin: 30px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
        <div style="margin: 40px 0;" id="departments">
            <i style="padding-left: 50px;">
            <h2 style="color: #006d77; border-left: 8px solid #ff9f1c; padding-left: 10px; margin-bottom: 30px;">Our Specialties</h2>
            </i>
            <div class="row text-center">
                <div class="col-md-3">
                    <a href="departments.php?dept=emergency" style="text-decoration: none;">
                        <div style="padding: 25px 15px; background: white; border-radius: 15px; border: 1px solid #e0e0e0; transition: transform 0.3s;">
                            <h3 style="color: #006d77;">🚨 Emergency</h3>
                            <p style="color: #666;">24/7 Emergency & Trauma Care</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="departments.php?dept=cardiology" style="text-decoration: none;">
                        <div style="padding: 25px 15px; background: white; border-radius: 15px; border: 1px solid #e0e0e0;">
                            <h3 style="color: #006d77;">❤️ Cardiology</h3>
                            <p style="color: #666;">Advanced Heart Care Unit</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="departments.php?dept=pediatrics" style="text-decoration: none;">
                        <div style="padding: 25px 15px; background: white; border-radius: 15px; border: 1px solid #e0e0e0;">
                            <h3 style="color: #006d77;">👶 Pediatrics</h3>
                            <p style="color: #666;">Child-Friendly Healthcare</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="departments.php?dept=surgery" style="text-decoration: none;">
                        <div style="padding: 25px 15px; background: white; border-radius: 15px; border: 1px solid #e0e0e0;">
                            <h3 style="color: #006d77;">🔬 Surgery</h3>
                            <p style="color: #666;">Modern Operating Theaters</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features / Why Choose Us -->
    <div class="row text-center" style="margin: 50px 0; background: #fdfdfd; padding: 40px 20px; border-radius: 20px;">
        <div class="col-md-12">
            <h2 style="color: #006d77; margin-bottom: 30px;">Why Choose WellSpring Hospital</h2>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="padding: 25px;">
                <h3 style="color: #ff9f1c;">Compassionate Care</h3>
                <p>Patient-centered approach to healing and wellness with dignity and respect.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="padding: 25px;">
                <h3 style="color: #ff9f1c;">Modern Facilities</h3>
                <p>Latest medical equipment, comfortable wards, and advanced diagnostic tools.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card" style="padding: 25px;">
                <h3 style="color: #ff9f1c;">Fast Emergency Response</h3>
                <p>24/7 ambulance service and dedicated emergency team ready to help.</p>
            </div>
        </div>
    </div>

</div>

<?php include "registration.php"; ?>

<?php include "footer.php"; ?>