<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sitekey = $_POST['sitekey'];
    $siteurl = $_POST['siteurl'];

    // Call the Solve API (Replace with actual API)
    $response = solve_hcaptcha($sitekey, $siteurl);
    
    // Redirect back with result
    header("Location: index.html?result=" . urlencode($response));
    exit();
}

function solve_hcaptcha($sitekey, $siteurl) {
    // Simulate a solved captcha (Replace with actual solving logic)
    return "Solved hCaptcha for Site Key: " . $sitekey . " on " . $siteurl;
}
?>
