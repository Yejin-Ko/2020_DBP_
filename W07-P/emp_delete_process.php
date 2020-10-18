<?php 
2 $link = mysqli_connect('localhost', 'admin', 'admin', 'employees'); 
3 $filtered_id = mysqli_real_escape_string($link, $_POST['emp_no']); 
4 
 
5 $query = " 
6         DELETE FROM employees 
7         WHERE emp_no = '{$filtered_id}'             
8         "; 
9 
 
10 $result = mysqli_query($link, $query); 
11 if ($result == false) { 
12     echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.'; 
13     error_log(mysqli_error($link)); 
14 } else { 
15     echo '성공하였습니다. <a href="index.php">돌아가기</a>'; 
16 } 
