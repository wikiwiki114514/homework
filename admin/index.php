<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作业管理</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 1rem;
            display: block;
            margin-bottom: 10px;
        }

        select, input[type="checkbox"] {
            margin-bottom: 10px;
        }

        .checkbox-group {
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .checkbox-group label {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>作业管理</h1>
    <form method="post" action="submit.php">
        <label for="student">选择学生:</label>
        <div class="checkbox-group" id="student">
            <!-- 使用复选框允许选择多个学生 -->
            <label><input type="checkbox" name="students[]" value="01XXX"> 01XXX</label>
            <label><input type="checkbox" name="students[]" value="02YYY"> 02YYY</label>
            
        </div>
        
        <label for="subject">选择科目:</label>
        <select name="subject" id="subject">
            <option value="语文">语文</option>
            <option value="数学">数学</option>
            <option value="英语">英语</option>
            <option value="物理">物理</option>
            <option value="化学">化学</option>
            <option value="生物">生物</option>
            <option value="历史">历史</option>
            <option value="地理">地理</option>
            <option value="政治">政治</option>
        </select>
        
        <button type="submit">提交</button>
    </form>
    <form method="post" action="clear.php">
        <button type="submit" style="background-color: #dc3545;">清空数据</button>
    </form>
</body>
</html>
