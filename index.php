<?php
// DECLARATIONS
$siteTitle = "Madman's Boxing Basics";
$founderName = "Migz \"Madman\" Antonio";
$record = "5 wins and no losses";
$division = "light heavyweight";
$upcomingMatch = true;
$punchTypes = ["Jab", "Straight", "Hook", "Uppercut"];
$fightingStyle = "Slugger/Brawler Style";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'components/index.php'; ?>
    
    <h1>Welcome to <?php echo $siteTitle; ?>!</h1>
    
    
    
    <p>Here in Madman's Boxing Basics, you will learn the basic punches in boxing: 
    <?php 
    // LOOPING
    foreach($punchTypes as $index => $punch) {
        echo $punch;
        if($index < count($punchTypes) - 1) {
            echo ", ";
        }
    }
    ?>. <br> You will also learn the different stances in boxing. His current fighting style is the <?php echo $fightingStyle; ?>.</p>
    <div class="photo-container">
        <img src="assets/img/Box.jpg" alt="Boxing Basics">
    </div>
    
    <p>Founded by <?php echo $founderName; ?>, an amateur boxer with a record of <?php echo $record; ?> in the <?php echo $division; ?> division. 
    
    <?php 
    // CONDITIONAL
    if($upcomingMatch) {
        echo "He has an upcoming amateur championship title match scheduled this year.";
    } else {
        echo "My next match is currently uncheduled.";
    }
    ?>
    </p>
    
    <a href="page/index.php">Learn More About Boxing Basics</a>
</body>
</html>