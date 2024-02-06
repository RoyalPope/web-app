<?php

$filename = 'hellotxt.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, 'r');

    // Check if the file was opened successfully
    if ($file) {
        // Read the file until the end
        while (!feof($file)) {
            // Output each line
            echo fgets($file);
        }

        // Close the file
        fclose($file);
    } else {
        echo "Error opening the file.";
    }
} else {
    echo "File $filename does not exist.";
}

?>
