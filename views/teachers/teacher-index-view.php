<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?> - Teachers</title>
</head>
<body>
    <h1>Teachers</h1>
    <ul>
    <?php foreach($data['teachers'] as $teacher): ?>
        <li>
            <a href="<?php echo URLROOT; ?>/teachers/show/<?php echo $teacher->id; ?>">
                <?php echo $teacher->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
