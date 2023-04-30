<?php
# Draws visual elements for website
echo '<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
body {background-image: linear-gradient(#F9DEC9, #99B2DD); font-family: "Roboto", sans-serif; color: #30323D; text-align: center;}
span { color: #6369D1; }
a { text-decoration: none; color: #6369D1;}
button[name="download_neos"] {background-color: #cb99c5; border-radius: 4px; border: 5px; padding: 10px 12px; box-shadow:0px 4px 0px #AD83A8; display: inline-block; color: white;top: 1px; outline: 0px transparent !important;}
button:active[name="download_neos"] {border-radius: 4px; border: 5px; padding: 10px 12px; box-shadow:0px 2px 2px #BA8CB5; background-color: #BA8CB5; display: inline-block; top: 1px, outline: 0px transparent !important;}
button[name="download_agnos"] {background-color: #ace6df; border-radius: 4px; border: 5px; padding: 10px 12px; box-shadow:0px 4px 0px #80c2ba; display: inline-block; color: #30323D;top: 1px; outline: 0px transparent !important;}
button:active[name="download_agnos"] {border-radius: 4px; border: 5px; padding: 10px 12px; box-shadow:0px 2px 2px #89c7c7; background-color: #89c7c7; display: inline-block; top: 1px, outline: 0px transparent !important;}
</style>
<title>fork installer generator</title>
<link rel="icon" type="image/x-icon" href="' . BASE_DIR . '/favicon.ico">
</head>';
?>
