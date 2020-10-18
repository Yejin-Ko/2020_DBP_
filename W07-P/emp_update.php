1 <?php 
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
17     //print_r($row); 
18 
 
19 ?> 
20 <!DOCTYPE html> 
21 <html> 
22 
 
23 <head> 
24     <meta charset="utf-8"> 
25     <title>직원 관리 시스템</title> 
26 </head> 
27 
 
28 <body> 
29     <h2><a href="index.php">직원 관리 시스템</a> | 직원 정보 수정</h2> 
30 
 
31     <form action="emp_update_process.php" method="POST"> 
32         <label>emp_no:</label> 
33         <input type="text" name="emp_no" value="<?=$row['emp_no']?>" placeholder="emp_no"><br> 
34         <label>birth_date:(0000-00-00)</label> 
35         <input type="text" name="birth_date" value="<?=$row['birth_date']?>" placeholder="birth_date"><br> 
36         <label>first_name:</label> 
37         <input type="text" name="first_name" value="<?=$row['first_name']?>" placeholder="first_name"><br> 
38         <label>last_name:</label> 
39         <input type="text" name="last_name" value="<?=$row['last_name']?>" placeholder="last_name"><br> 
40         <label>gender:(M or F)</label> 
41         <input type="text" name="gender" value="<?=$row['gender']?>" placeholder="gender"><br> 
42         <label>hire_date:(0000-00-00)</label> 
43         <input type="text" name="hire_date" value="<?=$row['hire_date']?>" placeholder="hire_date"><br> 
44         <input type="submit" value="Update"> 
45 
 
46     </form> 
47 
 
48 </body> 
49 
 
50 </html> 
