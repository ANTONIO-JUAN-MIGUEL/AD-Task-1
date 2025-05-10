<?php
// DECLARATIONS
$pageTitle = "Boxing Basics";
$basicPunches = [
    "Jab" => ["A quick, straight punch thrown with the lead hand, often used to set up other punches (left hand if orthodox, right hand if southpaw)", "jab.jpg"],
    "Straight" => ["A powerful punch thrown with the rear hand. The punch is not just an arm movement, but involves the rotation of the hips, core, and shoulders to generate power. (right hand if orthodox, left hand if southpaw)", "straight.jpg"],
    "Hook" => ["A semi-circular punch thrown with either hand. It is punch delivered in a horizontal arc, typically aimed at the jaw or body. It's characterized by a bent elbow and rotation of the torso, which helps generate force.", "hook.jpg"],
    "Uppercut" => ["A vertical punch thrown upward with either hand. It usually targets the chin or upper abdomen. It's a power punch in boxing, often used in close-quarters combat. The uppercut is thrown with a bent arm, moving upwards from a low starting position.", "uppercut.jpg"]
];
$stances = [
    "Orthodox" => ["Right-handed stance (left foot forward)", "orthodox.jpg"],
    "Southpaw" => ["Left-handed stance (right foot forward)", "southpaw.jpg"],
    "Square" => ["Feet parallel to each other, facing the opponent completely (Example of this stance are Mike Tyson, Floyd Patterson, Connor Benn).", "square.jpg"]
];
$fightingStyle = "Slugger/Brawler Style";
$styleDescription = "focuses and relies on power punches and constant forward movement without all that fancy footwork";
$styleImage = "slugger-style.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Madman's Boxing</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include '../components/index.php'; ?>
    
    <div class="main-container">
        <h1><?php echo $pageTitle; ?></h1>
        
        <div class="section">
            <h2>Basic Punches</h2>
            <div class="card-container">
                <?php foreach($basicPunches as $name => $data): ?>
                    <div class="card">
                        <img src="../assets/img/<?php echo $data[1]; ?>" alt="<?php echo $name; ?>">
                        <div class="card-content">
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $data[0]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="section">
            <h2>Fighting Style</h2>
            <div class="featured-card">
                <img src="../assets/img/<?php echo $styleImage; ?>" alt="<?php echo $fightingStyle; ?>">
                <div class="featured-content">
                    <h3>Madman's Style: <?php echo $fightingStyle; ?></h3>
                    <p><?php echo $styleDescription; ?></p>
                </div>
            </div>
        </div>
        
        <div class="section">
            <h2>Stances</h2>
            <div class="card-container">
                <?php foreach($stances as $name => $data): ?>
                    <div class="card">
                        <img src="../assets/img/<?php echo $data[1]; ?>" alt="<?php echo $name; ?>">
                        <div class="card-content">
                            <h3><?php echo $name; ?></h3>
                            <p><?php echo $data[0]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <div class="back-button">
            <a href="../index.php">Back to Home</a>
        </div>
    </div>
</body>
</html>