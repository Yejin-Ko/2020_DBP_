<?php 
2 $link = mysqli_connect('localhost', 'admin', 'admin', 'employees'); 
3 $filtered = array( 
4     'emp_no' => mysqli_real_escape_string($link, $_POST['emp_no']), 
5     'birth_date' => mysqli_real_escape_string($link, $_POST['birth_date']), 
6     'first_name' => mysqli_real_escape_string($link, $_POST['first_name']), 
7     'last_name' => mysqli_real_escape_string($link, $_POST['last_name']), 
8     'gender' => mysqli_real_escape_string($link, $_POST['gender']), 
9     'hire_date' => mysqli_real_escape_string($link, $_POST['hire_date']) 
10 ); 
11 $query = " 
12         INSERT INTO employees ( 
13             emp_no, 
14             birth_date, 
15             first_name, 
16             last_name, 
17             gender, 
18             hire_date 
19         ) VALUES ( 
20             '{$filtered['emp_no']}', 
21             '{$filtered['birth_date']}', 
22             '{$filtered['first_name']}', 
23             '{$filtered['last_name']}', 
24             '{$filtered['gender']}', 
25             '{$filtered['hire_date']}'         
26         ) 
27     "; 
28 //print_r($query); 
29 $result = mysqli_query($link, $query); 
30 if ($result == false) { 
31     echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.'; 
32     error_log(mysqli_error($link)); 
33 } else { 
34     echo '성공하였습니다. <a href="emp_insert.php">돌아가기</a>'; 
35 } 
