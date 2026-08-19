<!DOCTYPE html>
<?php
$header_text = "Web Development Portfolio";
    $personal_info = "Name: Poe Ei Ei Khaing | Email:poeeieikhaine@gmail.com | Phone: 0991984705 | Address: Yangon";
    $skills_list = "<ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>Git</li>
        </ul>";
        ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My website</h1>
    <div class="header">
        <?php echo $header_text ?>
</div>
<div class="personal-info">
    <?php echo $personal_info ?>
</div>
<div class="skills">
    <php echo$$skills_list ?>
</div>

    
</body>
</html>