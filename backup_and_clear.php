<!-- /backup_and_clear.php -->
<?php
// 获取当前日期
$date = date('Y-m-d');
// 备份文件的路径
$backupFile = __DIR__ . "/backup/attendance_$date.txt";

// 创建备份目录（如果不存在）
if (!file_exists(__DIR__ . '/backup')) {
    mkdir(__DIR__ . '/backup', 0777, true);
}

// 备份当前数据到以日期命名的文件
if (file_exists(__DIR__ . '/attendance.txt')) {
    copy(__DIR__ . '/attendance.txt', $backupFile);
}

// 清空当前记录以便在新的一天继续使用
file_put_contents(__DIR__ . '/attendance.txt', '');
?>
