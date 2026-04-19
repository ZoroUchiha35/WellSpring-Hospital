<?php
// Simple and fast database connection
$conn = mysqli_connect("localhost", "root", "", "PatientData");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id_number = $_POST['id_number'];
    $gender = $_POST['gender'];
    $diagnosis = $_POST['diagnosis'];
    $drug = isset($_POST['drug']) ? $_POST['drug'] : 'Pending prescription';
    
    $sql = "INSERT INTO patients (first_name, last_name, id_number, gender, diagnosis, drug) 
            VALUES ('$fname', '$lname', '$id_number', '$gender', '$diagnosis', '$drug')";
    
    if (mysqli_query($conn, $sql)) {
        $message = "<div style='background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; margin: 20px 0;'>Patient registered successfully</div>";
    } else {
        $message = "<div style='background: #f8d7da; color: #721c24; padding: 15px; border-radius: 10px; margin: 20px 0;'>Error: " . mysqli_error($conn) . "</div>";
    }
}
// Fetch patients registered to display in table
$patients_sql = "SELECT * FROM patients ORDER BY registration_date DESC LIMIT 10";
$patients_result = mysqli_query($conn, $patients_sql);
?>

<div class="main-section">
    <div style="background: #ffffff; padding: 30px; border-radius: 20px; margin: 30px 0; border: 1px solid #d9e9e4;">
        <h2 style="color: #006d77; border-left: 8px solid #ff9f1c; padding-left: 20px;">Patient Registration Table</h2>
        
        <?php echo $message; ?>
        <div class="table-responsive" style="margin-top: 30px;">
            <table style="width: 100%; border-collapse: collapse; background: white;">
                <thead>
                    <tr style="background-color: #006d77; color: white;">
                        <th style="padding: 12px; border: 1px solid #ff9f1c;">First Name</th>
                        <th style="padding: 12px; border: 1px solid #ff9f1c;">Last Name</th>
                        <th style="padding: 12px; border: 1px solid #ff9f1c;">ID Number</th>
                        <th style="padding: 12px; border: 1px solid #ff9f1c;">Gender</th>
                        <th style="padding: 12px; border: 1px solid #ff9f1c;">Diagnosis</th>
                        <th style="padding: 12px; border: 1px solid #ff9f1c;">Drug</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($patients_result && mysqli_num_rows($patients_result) > 0) {
                        while($row = mysqli_fetch_assoc($patients_result)) {
                            echo "<tr>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['first_name'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['last_name'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['id_number'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . ucfirst($row['gender']) . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['diagnosis'] . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['drug'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' style='padding: 20px; text-align: center;'>No patients registered yet</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div style="max-width: 700px; margin: 0 auto; background: #fafafa; padding: 40px; border-radius: 20px; border: 1px solid #e6d5b8;">
        <h2 style="color: #006d77; text-align: center;">Register Patient</h2>
        <p style="text-align: center; color: #ff9f1c; font-size: 1.1rem;">Fill in the patient details below</p>
        
        <form method="post" action="">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label style="color: #2c1810; font-weight: bold;">First name</label>
                    <input type="text" name="fname" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label style="color: #2c1810; font-weight: bold;">Last name</label>
                    <input type="text" name="lname" class="form-control" required>
                </div>
            </div>
            
            <div class="mb-3">
                <label style="color: #2c1810; font-weight: bold;">ID Number</label>
                <input type="text" name="id_number" class="form-control" required>
            </div>
            
            <div class="mb-3" style="margin-bottom: 15px;">
                <label style="color: #2c1810; font-weight: bold;">Gender</label><br>
                <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female" style="margin-left: 15px;" required> Female
                <input type="radio" name="gender" value="other" style="margin-left: 15px;" required> Other
            </div>
            
            <div class="mb-3">
                <label style="color: #2c1810; font-weight: bold;">Diagnosis</label>
                <textarea name="diagnosis" class="form-control" rows="2" required></textarea>
            </div>
            
            <div class="mb-3">
                <label style="color: #2c1810; font-weight: bold;">Prescribed Drug</label>
                <input type="text" name="drug" class="form-control" placeholder="Enter prescribed medication">
            </div>
            
            <button type="submit" name="submit" style="background-color: #006d77; color: #ffffff; padding: 12px 30px; border: none; border-radius: 30px; font-weight: bold; width: 100%; font-size: 1.1rem; cursor: pointer;">Register Patient</button>
        </form>
    </div>
</div>

<?php mysqli_close($conn); ?>