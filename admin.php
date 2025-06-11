<?php
// admin.php

// Define the path to the JSON file
$jsonFilePath = 'trip1.json';

// Function to read existing data from JSON file
function readJsonFile($filePath) {
    if (file_exists($filePath)) {
        $data = file_get_contents($filePath);
        $decodedData = json_decode($data, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $decodedData;
        }
    }
    return []; // Return an empty array if file doesn't exist or JSON is invalid
}

// Function to write data to JSON file
function writeJsonFile($filePath, $data) {
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filePath, $jsonData);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $packageName = $_POST['package_name'];
    $packagePrice = $_POST['package_price'];
    $packageDuration = $_POST['package_duration'];
    $packageTrip = $_POST['package_trip'];
    $packageDays = (int)$_POST['package_days'];
    $packageInclusions = explode(",", $_POST['package_inclusions']);
    $packageExclusions = explode(",", $_POST['package_exclusions']);
    $packageImages = explode(",", $_POST['package_images']);
    
    // Prepare the new package data
    $newPackage = [
        "package_name" => $packageName,
        "price" => (float)$packagePrice,
        "duration" => $packageDuration,
        "trip" => $packageTrip,
        "noofdays" => $packageDays,
        "inclusions" => array_map('trim', $packageInclusions), // Trim whitespace
        "exclusions" => array_map('trim', $packageExclusions), // Trim whitespace
        "images" => array_map('trim', $packageImages), // Trim whitespace
    ];

    // Add days dynamically
    for ($i = 1; $i <= $packageDays; $i++) {
        $newPackage["day$i"] = [
            "title" => $_POST["day{$i}_title"] ?? null,
            "activities" => $_POST["day{$i}_activities"] ?? null
        ];
    }

    // Read existing packages
    $packages = readJsonFile($jsonFilePath);

    // Append new package to the array
    $packages[] = $newPackage; // Append as a new entry

    // Write updated packages back to JSON file
    writeJsonFile($jsonFilePath, $packages);

    echo "<p class='success'>New package added successfully.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Package</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"], button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover, button:hover {
            background-color: #3e8e41;
        }

        .success {
            color: #4CAF50;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
    <script>
        let dayCount = 2; // Start from day 2 since day 1 is already there

        function addDay() {
            const dayContainer = document.getElementById('daysContainer');
            const newDay = document.createElement('div');
            newDay.innerHTML = `
                <h3>Day ${dayCount}</h3>
                <label for="day${dayCount}_title">Day ${dayCount} Title:</label><br>
                <input type="text" id="day${dayCount}_title" name="day${dayCount}_title "><br>
                <label for="day${dayCount}_activities">Day ${dayCount} Activities:</label><br>
                <textarea id="day${dayCount}_activities" name="day${dayCount}_activities"></textarea><br>
            `;
            dayContainer.appendChild(newDay);
            dayCount++;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Add New Package</h1>
        <form method="post">
            <label for="package_name">Package Name:</label><br>
            <input type="text" id="package_name" name="package_name"><br>
            <label for="package_price">Package Price:</label><br>
            <input type="number" id="package_price" name="package_price"><br>
            <label for="package_duration">Package Duration:</label><br>
            <input type="text" id="package_duration" name="package_duration"><br>
            <label for="package_trip">Package Trip:</label><br>
            <input type="text" id="package_trip" name="package_trip"><br>
            <label for="package_days">Number of Days:</label><br>
            <input type="number" id="package_days" name="package_days"><br>
            <label for="package_inclusions">Package Inclusions:</label><br>
            <input type="text" id="package_inclusions" name="package_inclusions"><br>
            <label for="package_exclusions">Package Exclusions:</label><br>
            <input type="text" id="package_exclusions" name="package_exclusions"><br>
            <label for="package_images">Package Images:</label><br>
            <input type="text" id="package_images" name="package_images"><br>

            <div id="daysContainer">
                <h3>Day 1</h3>
                <label for="day1_title">Day 1 Title:</label><br>
                <input type="text" id="day1_title" name="day1_title"><br>
                <label for="day1_activities">Day 1 Activities:</label><br>
                <textarea id="day1_activities" name="day1_activities"></textarea><br>
            </div>

            <button type="button" onclick="addDay()">Add Day</button>

            <input type="submit" value="Add Package">
        </form>
    </div>
</body>
</html>