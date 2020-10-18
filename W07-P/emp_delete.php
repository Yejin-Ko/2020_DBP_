<?php 
2     $link = mysqli_connect('localhost', 'admin', 'admin', 'employees'); 
3      
4     if(isset($_GET['emp_no'])){ 
5         $filtered_id = mysqli_real_escape_string($link, $_GET['emp_no']); 
6     } else { 
7         $filtered_id = mysqli_real_escape_string($link, $_POST['emp_no']);         
8     } 
9      
10     $query = " 
11         SELECT *  
12         FROM employees  
13         WHERE emp_no='{$filtered_id}' 
14     ";     
15     $result = mysqli_query($link, $query); 
16     $row = mysqli_fetch_array($result); 
17 
 
18 ?> 
19 <!DOCTYPE html> 
20 <html> 
21 
 
22 <head> 
23     <meta charset="utf-8"> 
24     <title>직원 관리 시스템</title> 
25 </head> 
26 
 
27 <body> 
28     <h2><a href="index.php">직원 관리 시스템</a> | 직원 정보 삭제</h2> 
29 
 
30     <form action="emp_delete_process.php" method="POST"> 
31         <label>emp_no:</label> 
32         <input type="text" name="emp_no" value="<?=$row['emp_no']?>" placeholder="emp_no" readonly><br> 
33         <label>birth_date:(0000-00-00)</label> 
34         <input type="text" name="birth_date" value="<?=$row['birth_date']?>" placeholder="birth_date" readonly><br> 
35         <label>first_name:</label> 
36         <input type="text" name="first_name" value="<?=$row['first_name']?>" placeholder="first_name" readonly><br> 
37         <label>last_name:</label> 
38         <input type="text" name="last_name" value="<?=$row['last_name']?>" placeholder="last_name" readonly><br> 
39         <label>gender:(M or F)</label> 
40         <input type="text" name="gender" value="<?=$row['gender']?>" placeholder="gender" readonly><br> 
41         <label>hire_date:(0000-00-00)</label> 
42         <input type="text" name="hire_date" value="<?=$row['hire_date']?>" placeholder="hire_date" readonly><br> 
43         <input type="submit" value="Delete"> 
44 
 
45     </form> 
46 
 
47 </body> 
48 
 
49 </html> 
