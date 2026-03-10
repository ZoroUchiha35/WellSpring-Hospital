<?php
include "header.php";

$conn = mysqli_connect("localhost", "root", "", "PatientData");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if(isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $phone_number = $_POST['phone_number'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {
        $sql = "INSERT INTO malaria_registration (first_name, second_name, phone_number, gender, age, password) 
                VALUES ('$first_name', '$second_name', '$phone_number', '$gender', '$age', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            $message = "<p style='color: green; background: #d4edda; padding: 15px; border-radius: 5px;'>Member registered successfully.</p>";
        } else {
            $message = "<p style='color: red; background: #f8d7da; padding: 15px; border-radius: 5px;'>Error: " . mysqli_error($conn) . "</p>";
        }
    } else {
        $message = "<p style='color: red; background: #f8d7da; padding: 15px; border-radius: 5px;'>Password does not match</p>";
    }
}
?>
<br><br>
<div style="max-width: 700px; margin: 0 auto; background: #fafafa; padding: 40px; border-radius: 20px; border: 1px solid #e6d5b8;">
    <h2 style="color: #006d77; text-align: center;">Causes Of Malaria Registration Form</h2><br>

    <?php echo $message; ?>
        <form method="post" action="">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label style="color: #2c1810; font-weight: bold;">First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label style="color: #2c1810; font-weight: bold;">Second Name</label>
                    <input type="text" name="second_name" class="form-control" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label style="color: #2c1810; font-weight: bold;">Phone Number</label>
                <input type="tel" name="phone_number" class="form-control" required>
            </div>
            
            <div class="mb-3" style="margin-bottom: 15px;">
                <label style="color: #2c1810; font-weight: bold;">Gender</label><br>
                <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female" style="margin-left: 15px;" required> Female
                <input type="radio" name="gender" value="other" style="margin-left: 15px;" required> Other
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="color: #2c1810; font-weight: bold;">Age</label>
                <input type="number" name="age" class="form-control" min="18" required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="color: #2c1810; font-weight: bold;">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="color: #2c1810; font-weight: bold;">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
            </div>
            
            <div style="display: flex; gap: 10px; margin-top: 20px;">
                <button type="submit" name="register" style="background: #006d77; color: white; padding: 10px 30px; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                <button type="reset" style="background: #ff9f1c; color: white; padding: 10px 30px; border: none; border-radius: 5px; cursor: pointer;">Reset</button>
            </div>
        </form>
    </div>
<br><br>

<?php 
mysqli_close($conn);
include "footer.php"; 
?>