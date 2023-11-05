<?php

spl_autoload_register(function ($classname) {
    require_once("classes/$classname.php");
});

define("MATHS", "maths");
define("CZECH", "czech");
define("ENGLISH", "english");
define("ENGLISH_2", "english_2");
define("PHYSICS", "physics");
define("DIGITAL_FOTO", "digital_foto");
define("ENTERPRISE_IT", "enterprise_it");
define("PE", "PE");
define("INTERNET_MARKETING", "internet_marketing");
define("COMPUTER_SYSTEMS_AND_NETWORKS", "computer_systems_and_networks");
define("WWW", "WWW");
define("MS_OFFICE", "MS_office");
define("PROGRAMMING_EXERCISES", "programming_exercises");
define("BREAK_HOUR", "break");
define("ALGORITHMS", "algorithms");



$mainSubjectMap = array(
    MATHS => new lesson('Maths', "315", "Blanka Zajacova"),
    CZECH => new lesson('Czech', "315", "Alice Hlozkova"),
    ENGLISH => new lesson('English', "315", "Lucie Ledlova"),
    ENGLISH_2 => new lesson('English', "110", "Hynek Skorepa"),
    PHYSICS => new lesson('Physics', "210", "Blanka Zajacova"),
    DIGITAL_FOTO => new lesson('Digital Foto', "320", "Richard Brun"),
    ENTERPRISE_IT => new lesson('Enterprise IT', "315", "Jan Mottl"),
    PE => new lesson("PE", "TV", "Stepanka novakova"),
    INTERNET_MARKETING => new lesson("Internet Marketing", "315", "Olga Binarova"),
    COMPUTER_SYSTEMS_AND_NETWORKS => new lesson("Computer Systems and Networks", "319", "Zdenek Drvota"),
    WWW => new lesson("WWW", "315", "Libor Bajer"),
    MS_OFFICE => new lesson("MS Office", "315", "Gabriela Votavova"),
    PROGRAMMING_EXERCISES => new lesson("Programming Exercises", "319", "Tomas Pesek"),
    ALGORITHMS => new lesson("Algorithsm and modeling", "315", "Josef Horalek"),
    BREAK_HOUR => new lesson("Break", "", "Break"),
);

$monday = array(
    $mainSubjectMap[DIGITAL_FOTO],
    $mainSubjectMap[DIGITAL_FOTO],
    $mainSubjectMap[CZECH],
    $mainSubjectMap[MATHS],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[PE],
    $mainSubjectMap[PE],
    $mainSubjectMap[ENTERPRISE_IT],
    $mainSubjectMap[ENTERPRISE_IT],
);

$tuesday = array(
    $mainSubjectMap[INTERNET_MARKETING],
    $mainSubjectMap[PHYSICS],
    $mainSubjectMap[ENGLISH_2],
    $mainSubjectMap[ENGLISH],
    $mainSubjectMap[COMPUTER_SYSTEMS_AND_NETWORKS],
    $mainSubjectMap[MATHS],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
);

$wednesday = array(
    $mainSubjectMap[MATHS],
    $mainSubjectMap[ENGLISH],
    $mainSubjectMap[CZECH],
    $mainSubjectMap[CZECH],
    $mainSubjectMap[MS_OFFICE],
    $mainSubjectMap[MS_OFFICE],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[COMPUTER_SYSTEMS_AND_NETWORKS],
    $mainSubjectMap[COMPUTER_SYSTEMS_AND_NETWORKS],
);

$thursday = array(
    $mainSubjectMap[PROGRAMMING_EXERCISES],
    $mainSubjectMap[PROGRAMMING_EXERCISES],
    $mainSubjectMap[PROGRAMMING_EXERCISES],
    $mainSubjectMap[WWW],
    $mainSubjectMap[WWW],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
);

$friday = array(
    $mainSubjectMap[MATHS],
    $mainSubjectMap[PHYSICS],
    $mainSubjectMap[ALGORITHMS],
    $mainSubjectMap[ALGORITHMS],
    $mainSubjectMap[ENGLISH],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
    $mainSubjectMap[BREAK_HOUR],
);

$hours = array(
    "7:50 - 8:35",
    "8:40 - 9:25",
    "9:40 - 10:25",
    "10:30 - 11:15",
    "11:30 - 12:15",
    "12:25 - 13:10",
    "13:25 - 14:10",
    "14:15 - 15:00",
    "15:05 - 15:50",
)

    // foreach ($monday as $subject) {
//     echo $subject->name . "<br>";
// }

    // foreach ($tuesday as $subject) {
//     echo $subject->name . "<br>";
// }

    // foreach ($wednesday as $subject) {
//     echo $subject->name . "<br>";
// }

    // foreach ($thursday as $subject) {
//     echo $subject->name . "<br>";
// }

    // foreach ($friday as $subject) {
//     echo $subject->name . "<br>";
// }

    ?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .day-container {
            display: inline-block;
            margin-right: 10px;
            padding: 20px;
            border: 1px solid #000;
            background-color: #f0f0f0;
        }

        .hour-container {
            display: inline-block;
            margin-right: 10px;
            padding: 20px;
            border: 1px solid #000;
            background-color: #ffffff;
        }

        .lesson-box {
            width: 150px;
            height: 125px;
            border: 1px solid #000;
            text-align: center;
            margin: 5px;
            float: left;
        }

        .hour-box {
            width: 150px;
            height: 100PX;
            border: 1px solid #000;
            text-align: center;
            margin: 5px;
            float: left;
        }
    </style>
</head>

<body>
    <div class="hour-container">
    <div class="hour-box">
            <p><b>MONDAY</b></p>
        </div>
        <?php
        $i = 0;
        foreach ($hours as $hour) {
            $i++;
            echo '<div class="hour-box"><p><b>' . $i . '</b></p><p>' . $hour . '</p></div>';
        }
        ?>
    </div>
    <div class="day-container">
        <div class="lesson-box">
            <p><b>MONDAY</b></p>
        </div>
        <?php
        foreach ($monday as $subject) {
            if ($subject->name == 'Break') {
                echo '<div class="lesson-box" style="background-color: #ffffff;"></div>';
                continue;
            }
            echo '<div class="lesson-box"><p>' . $subject->name . '</p><p>' . $subject->room . '</p><p>' . $subject->teacher . '</p></div>';
        }
        ?>
    </div>

    <div class="day-container">
        <div class="lesson-box">
            <p><b>TUESDAY</b></p>
        </div>
        <?php
        foreach ($tuesday as $subject) {
            if ($subject->name == 'Break') {
                echo '<div class="lesson-box" style="background-color: #ffffff;"></div>';
                continue;
            }
            echo '<div class="lesson-box"><p>' . $subject->name . '</p><p>' . $subject->room . '</p><p>' . $subject->teacher . '</p></div>';
        }
        ?>
    </div>

    <div class="day-container">
        <div class="lesson-box">
            <p><b>WEDNESDAY</b></p>
        </div>
        <?php
        foreach ($wednesday as $subject) {
            if ($subject->name == 'Break') {
                echo '<div class="lesson-box" style="background-color: #ffffff;"></div>';
                continue;
            }
            echo '<div class="lesson-box"><p>' . $subject->name . '</p><p>' . $subject->room . '</p><p>' . $subject->teacher . '</p></div>';
        }
        ?>
    </div>

    <div class="day-container">
        <div class="lesson-box">
            <p><b>THURSDAY</b></p>
        </div>
        <?php
        foreach ($thursday as $subject) {
            if ($subject->name == 'Break') {
                echo '<div class="lesson-box" style="background-color: #ffffff;"></div>';
                continue;
            }
            echo '<div class="lesson-box"><p>' . $subject->name . '</p><p>' . $subject->room . '</p><p>' . $subject->teacher . '</p></div>';
        }
        ?>
    </div>

    <div class="day-container">
        <div class="lesson-box">
            <p><b>FRIDAY</b></p>
        </div>
        <?php
        foreach ($friday as $subject) {
            if ($subject->name == 'Break') {
                echo '<div class="lesson-box" style="background-color: #ffffff;"></div>';
                continue;
            }
            echo '<div class="lesson-box"><p>' . $subject->name . '</p><p>' . $subject->room . '</p><p>' . $subject->teacher . '</p></div>';
        }
        ?>
    </div>
</body>

</html>