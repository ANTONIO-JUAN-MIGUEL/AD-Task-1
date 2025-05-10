<?php
// DECLARATIONS
$pageTitle = "Boxing Basics";
$basicPunches = [
    "Jab" => "A quick, straight punch thrown with the lead hand (left hand if orthodox, right hand if southpaw)",
    "Straight" => "A powerful punch thrown with the rear hand (right hand if orthodox, left hand if southpaw)",
    "Hook" => "A semi-circular punch thrown with either hand",
    "Uppercut" => "A vertical punch thrown upward with either hand"
];
$stances = [
    "Orthodox" => "Right-handed stance (left foot forward)",
    "Southpaw" => "Left-handed stance (right foot forward)",
    "Square" => "Feet parallel to each other, facing the opponent completely (Example of this stance are Mike Tyson, Floyd Patterson, Connor Benn).",
];
$fightingStyle = "Slugger/Brawler Style";
$styleDescription = "focuses and relies on power punches and <br> <br> constant forward movement without all that fancy footwork";
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
    
    <h1><?php echo $pageTitle; ?></h1>
    
    <h2>Basic Punches</h2>
    <ul>
        <?php 
        // LOOPING through punches
        foreach($basicPunches as $punch => $description) {
            echo "<li><strong>$punch</strong>: $description</li>";
        }
        ?>
    </ul>
    
    <h2>Fighting Style</h2>

    <p style="text-align: center;">Madman's current fighting style is the <strong><?php echo $fightingStyle; ?></strong>, which <?php echo $styleDescription; ?>.</p>
    
    <h2>Stances</h2>
    <ul>
        <?php 
        // CONDITIONAL inside loop
        foreach($stances as $stance => $description) {
            echo "<li>";
            echo "<strong>$stance</strong>: $description";
            if($stance == "Orthodox") {
                echo " (most common stance)";
            }
            echo "</li>";
        }
        ?>
    </ul>
    
    <a href="../index.php">Back to Home</a>
</body>
</html>