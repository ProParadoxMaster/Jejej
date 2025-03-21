<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sitekey = $_POST['sitekey'];
    $siteurl = $_POST['siteurl'];

    // Simulated hCaptcha solving (Replace with real API call)
    $response = solve_hcaptcha($sitekey, $siteurl);
    
    // Redirect back to index.html with result
    header("Location: index.html?result=" . urlencode($response));
    exit();
}

function solve_hcaptcha($sitekey, $siteurl) {
    // Fake response (Replace this with actual solving logic)
    return "Solved hCaptcha for Site Key: " . $sitekey . " on " . $siteurl;
}
?>
