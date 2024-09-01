<!-- /admin/submit.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['students']) && isset($_POST['subject'])) {
        $students = $_POST['students']; // 获取选择的学生列表
        $subject = $_POST['subject'];
        $timestamp = date("Y-m-d H:i:s");

        $data = "";
        foreach ($students as $student) {
            $data .= "$student, $subject, $timestamp\n";
        }

        // 将数据追加到文件中
        file_put_contents('../attendance.txt', $data, FILE_APPEND);

        // 重定向回管理页面
        header("Location: /admin");
        exit();
    } else {
        echo "请选择学生和科目。";
    }
}
?>
