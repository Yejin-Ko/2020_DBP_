<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 직원 정보 조회 </title>
</head>
<body>
    <h1>직원 정보 조회 시스템</h1>
    <form action="emp_info.php" method="POST">
        ☆ 직원 조회 :
        <input type="text" name="emp_no" placeholder="  직원 번호를 입력하세요">
        <input type="submit" value="검색">
    </form><br>
    <form action="year.php" method="POST">
       ★ 직원 고용 정보 :
        <input type="text" name="emp_no" placeholder="  직원 번호를 입력하세요">
        <input type="submit" value="검색">
    </form><br>
    <a href="info.php">◇ 부서별 담당자 정보</a>
</body>
</html>
