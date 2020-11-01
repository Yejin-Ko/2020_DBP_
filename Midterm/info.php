<?php   
    $link=mysqli_connect('localhost','admin','admin','employees');

    if(mysqli_connect_error()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo mysqli_connect_error();
        exit();
    }
    $query="
        SELECT  d.dept_no, dp.dept_name, e.first_name, e.emp_no, e.gender FROM employees e 
        INNER JOIN dept_manager d ON e.emp_no=d.emp_no
        INNER JOIN departments dp ON d.dept_no=dp.dept_no
        ORDER BY dept_no
        ";

    $article="";

    $result = mysqli_query($link, $query);
    while($row=mysqli_fetch_array($result)){
        $article .= '</td ><td align="center">';
        $article .= $row['dept_no'];
        $article .= '</td ><td align="center">';
        $article .= $row['dept_name'];
        $article .= '</td ><td align="center">';
        $article .= $row['emp_no'];
        $article .= '</td ><td align="center">';
        $article .= $row['first_name'];
        $article .= '</td ><td align="center">';
        $article .= $row['gender'];
        $article .= '</td></tr>';

    }

    mysqli_free_result($result);
    mysqli_close($link);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 부서별 담당자 정보 </title>
    <style>
        body{
            font-family: Consolas, monospace;
            font-family: 15px;
        }
        table{
            width:100%;
        }
        th,td{
            padding:20px;
            border-bottom: 3px solid #7ebdfe;
        }
    </style>
</head>
<body>
    <h2><a href="index.php"> 직원 정보 조회</a> | 부서별 담당자 정보 </h2>
    <table>
        <tr>
            <th>부서 번호</th>
            <th>부서명</th>
            <th>직원 번호</th>
            <th>담당자 이름</th>
            <th>성별</th>
        </tr>
        <?= $article ?>

    </table>
</body>


</html>
