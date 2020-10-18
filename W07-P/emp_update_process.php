
 Open this file in GitHub Desktop  You must be signed in to make or propose changes  You must be signed in to make or propose changes 


1 <?php 
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
12         UPDATE employees 
13         SET 
14             birth_date = '{$filtered['birth_date']}', 
15             first_name = '{$filtered['first_name']}', 
16             last_name = '{$filtered['last_name']}', 
17             gender = '{$filtered['gender']}', 
18             hire_date = '{$filtered['hire_date']}' 
19         WHERE 
20             emp_no = '{$filtered['emp_no']}' 
21     "; 
22 //print_r($query); 
23 $result = mysqli_query($link, $query); 
24 if ($result == false) { 
25     echo '수정하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.'; 
26     error_log(mysqli_error($link)); 
27 } else { 
28     echo '성공하였습니다. <a href="index.php">돌아가기</a>'; 
29 } 
