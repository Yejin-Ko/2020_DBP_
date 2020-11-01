<?php   
    $link=mysqli_connect('localhost','admin','admin','employees');
    mysqli_set_charset($link,"utf8");

    $filtered_id = mysqli_real_escape_string($link, $_POST['emp_no']);
    $query="
        SELECT e.emp_no, e.first_name, e.gender, e.birth_date, dp.dept_name, e.hire_date FROM employees e
        INNER JOIN dept_emp de ON e.emp_no=de.emp_no
        INNER JOIN departments dp ON dp.dept_no=de.dept_no
        WHERE e.emp_no= ".$filtered_id."
        ";
    $result = mysqli_query($link, $query);
    $emp_info='';

    if(mysqli_connect_error()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo mysqli_connect_error();
        exit();
    }

   while($row=mysqli_fetch_array($result)){
        $emp_info .= '<tr>';
        $emp_info .= '<td>'.$row['emp_no'].'</td>';
        $emp_info .= '<td>'.$row['first_name'].'</td>';
        $emp_info .= '<td>'.$row['gender'].'</td>';
        $emp_info .= '<td>'.$row['birth_date'].'</td>';
        $emp_info .= '<td>'.$row['dept_name'].'</td>';
        $emp_info .= '<td>'.$row['hire_date'].'</td>';      
        $emp_info .= '</tr>';
      }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> 직원 정보 </title>
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
    <h2><a href="index.php"> 직원 정보 조회</a> | 직원 정보 </h2>
    <table>
        <tr>
            <th>직원 번호</th>
            <th>이름</th>
            <th>성별</th>
            <th>생일</th>
            <th>부서명</th>
            <th>고용 날짜</th>
        </tr>
        <?= $emp_info ?>

    </table>
</body>


</html>
