<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英语A级成绩录入</title>
    <style>
        body {
            background: white;
            display: grid;
            place-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        form {
            width: min(90%, 400px);
            text-align: center;
        }

        .title {
            color: #c00;
            font-size: 1.5rem;
            margin-bottom: 1.5em;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            margin-bottom: 2em;
            box-sizing: border-box;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 30px;
            border: none;
            background: #f0f0f0;
            color: #333;
            cursor: pointer;
            border-radius: 3px;
            transition: background 0.2s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background: #e0e0e0;
        }
    </style>
</head>
<body>
    <form method="post" action="cxjg.php">
        <div class="title">请输入您英语A级考试成绩</div>
        <input type="text" name="num" placeholder="请输入成绩">
        <div class="button-group">
            <input type="submit" value="提交">
            <input type="reset" value="重写">
        </div>
    </form>
</body>
</html>