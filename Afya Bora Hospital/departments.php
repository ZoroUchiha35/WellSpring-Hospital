<?php
include "header.php";

// Get department parameter from URL
$dept = $_GET['dept'] ?? 'emergency';

// Used data array for departments to switch easily using the URL parameter
$departments = [
    'emergency' => [
        'name' => 'Emergency Medicine',
        'desc' => 'Our Emergency Department operates 24/7 with highly trained emergency physicians and nurses ready to handle any medical emergency. We have state-of-the-art resuscitation rooms, trauma bays, and rapid diagnostic capabilities.',
        'img' => 'https://i.pinimg.com/736x/58/fb/74/58fb74182c96d70ecd70d2ebaad251ea.jpg'
    ],

    'cardiology' => [
        'name' => 'Cardiology',
        'desc' => 'The Cardiology Department offers comprehensive heart care including diagnostics, treatment, and rehabilitation. We have modern ECG machines, echocardiography, and a dedicated cardiac care unit.',
        'img' => 'https://i.pinimg.com/736x/d1/88/20/d18820ba0feb71b00497f3df7b3f945c.jpg'
    ],

    'pediatrics' => [
        'name' => 'Pediatrics',
        'desc' => 'Our Pediatrics department is specially designed to provide gentle and effective healthcare for children from birth to adolescence. We have child-friendly facilities and specialized pediatricians.',
        'img' => 'https://i.pinimg.com/736x/83/6f/a8/836fa8beb21acda3b41d4117da15c2f0.jpg'
    ],

    'surgery' => [
        'name' => 'General Surgery',
        'desc' => 'Our Surgical Department is equipped with modern operating theaters and minimally invasive surgical equipment. We perform a wide range of surgeries with emphasis on patient safety and quick recovery.',
        'img' => 'https://i.pinimg.com/1200x/7f/34/5a/7f345a54f1f56654a0b883b8007a54d6.jpg'
    ]
];
// Set emergency to default if department not found
$deptData = $departments[$dept] ?? $departments['emergency'];
?>

<div class="main-section">
    <div style="background: #ffffff; padding: 30px;">

        <div class="row mb-4">
            <div class="col-md-12">
                <h1 style="color: #006d77; border-left: 8px solid #ff9f1c; padding-left: 20px;">
                    <?php echo $deptData['name']; ?> Department
                </h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $deptData['img']; ?>"  style="width:100%; border-radius: 15px;">
            </div>
            <div class="col-md-6">
                <p style="font-size: 1.2rem; line-height: 1.8; color: #1e3a3a;">
                    <?php echo $deptData['desc']; ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>