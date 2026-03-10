<?php
include "header.php";

// Get service parameter from URL
$service_filter = $_GET['service'] ?? 'all';

$all_services = [
    'dental' => [
        'name' => 'Dental Care',
        'desc' => 'The Dental Care department provides services that help people take care of their teeth and gums. Oral health is very important because healthy teeth help people eat well, speak clearly, and maintain a confident smile. In this department, dentists and dental staff examine patients and treat different types of dental problems.<br><br>
                    Patients can visit the department for regular dental checkups, teeth cleaning, and treatment for cavities or tooth pain. Dentists also perform procedures such as tooth extractions and treatment for gum diseases when necessary. The goal of the dental department is not only to treat dental problems but also to prevent them from happening.',
        'availability' => 'Mon-Fri, 9am-6pm'
    ],
    'maternity' => [
        'name' => 'Maternity Services',
        'desc' => 'The Maternity department provides healthcare services for women during pregnancy, childbirth, and after the baby is born. Pregnancy is an important time in a woman’s life, and proper medical care is necessary to ensure the safety and health of both the mother and the baby. <br><br>
                    In this department, expectant mothers receive regular antenatal checkups where doctors and nurses monitor the progress of the pregnancy. They check the health of the mother and the development of the baby while also providing advice on nutrition, exercise, and general care during pregnancy.',
        'availability' => '24/7'
    ],
    'nutrition' => [
        'name' => 'Nutrition & Dietetics',
        'desc' => 'The Nutrition and Dietetics department helps patients improve their health by guiding them on proper nutrition and healthy eating habits. Good nutrition is very important for the body because it helps people stay strong, recover from illnesses, and maintain a healthy lifestyle. In this department, trained nutritionists and dietitians work with patients to understand their dietary needs and give advice on what foods they should eat. <br><br>
                    Patients who have conditions like diabetes, high blood pressure, or weight problems can receive special diet plans that are made to help manage their health. The nutrition experts also educate patients about balanced diets, portion control, and the importance of eating the right nutrients such as proteins, vitamins, and minerals.',
        'availability' => 'Mon-Fri, 9am-5pm'
    ]
];
// Filter services if specific one requested
if ($service_filter != 'all' && isset($all_services[$service_filter])) {
    $services = [$service_filter => $all_services[$service_filter]];
} else {
    $services = $all_services;
}
?>

<div class="main-section">
    <div style="background: #ffffff; padding: 30px; border-radius: 20px;">

        <?php foreach ($services as $key => $service): ?>
        <div class="row mb-4">
            <div class="col-md-12">
                <h1 style="color: #006d77; border-left: 8px solid #ff9f1c; padding-left: 20px;">
                    <?php echo $service['name']; ?>
                </h1>
                <div class="card-body">
                    <p><?php echo $service['desc']; ?></p>
                    <p class="fas fa-clock" style="font-size: 1.2rem; color: #1e3a3a;">Available: <?php echo $service['availability']; ?></p>
                    <hr>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="row mt-4">
            <div class="col-md-12">
                <h3 style="color: #006d77; margin-bottom: 20px;">Special Health Services</h3>
                
                <div class="table-responsive">
                    <table style="width: 100%; border-collapse: collapse; background: white; border: 1px solid #dee2e6; font-family: Arial, sans-serif;">
                        <thead>
                            <tr style="background-color: #006d77; color: white;">
                                <th style="padding: 12px 15px; text-align: left; border: 1px solid #dee2e6;">Service Name</th>
                                <th style="padding: 12px 15px; text-align: left; border: 1px solid #dee2e6;">Services Included</th>
                                <th style="padding: 12px 15px; text-align: left; border: 1px solid #dee2e6;">Price (KSh)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;"><strong>Basic Health Checkup</strong></td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">Doctor consultation, Blood tests, Urinalysis, ECG</td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">5,000</td>
                            </tr>
                            <tr style="background-color: #f8f9fa;">
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;"><strong>Comprehensive Wellness</strong></td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">Full blood panel, Chest X-ray, Ultrasound, Cardiac assessment</td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">15,000</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;"><strong>Executive Health Package</strong></td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">All Comprehensive tests + CT scan, Stress test, Specialist consultation</td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">35,000</td>
                            </tr>
                            <tr style="background-color: #f8f9fa;">
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;"><strong>Maternity Package</strong></td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">Antenatal care, Delivery, Postnatal care (3 days stay)</td>
                                <td style="padding: 10px 15px; border: 1px solid #dee2e6;">25,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>