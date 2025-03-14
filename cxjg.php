<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>考试成绩</title>
    <style>
        body {
            background: white;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: SimSun, serif;
        }

        .result {
            color: #cc0000;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            line-height: 1.2;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST['num']);
        $result = $num >= 60 ? '恭喜您通过考试' : '很遗憾，您没有通过考试！';
        echo '<div class="result">'.$result.'</div>';
    }
    ?>
</body>
</html>