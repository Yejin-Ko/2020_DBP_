1 <?php 
2   $link = mysqli_connect('localhost', 'admin', 'admin', 'employees'); 
3   $query = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 10"; 
4   $result = mysqli_query($link, $query);   
5   $emp_info = ''; 
6   while($row = mysqli_fetch_array($result)) { 
7     $emp_info .= '<tr>'; 
8     $emp_info .= '<td>'.$row['emp_no'].'</td>'; 
9     $emp_info .= '<td>'.$row['birth_date'].'</td>'; 
10     $emp_info .= '<td>'.$row['first_name'].'</td>'; 
11     $emp_info .= '<td>'.$row['last_name'].'</td>'; 
12     $emp_info .= '<td>'.$row['gender'].'</td>'; 
13     $emp_info .= '<td>'.$row['hire_date'].'</td>';     
14     $emp_info .= '<td><a href="emp_update.php?emp_no='.$row['emp_no'].'">update</a></td>'; 
15     $emp_info .= '<td><a href="emp_delete.php?emp_no='.$row['emp_no'].'">delete</a></td>'; 
16     $emp_info .= '</tr>'; 
17   }   
18    
19 ?> 
20 
 
21 <!DOCTYPE html> 
22 <html> 
23 
 
24 <head> 
25     <meta charset="utf-8"> 
26     <title>직원 관리 시스템</title> 
27 </head> 
28 
 
29 <body> 
30     <h2><a href="index.php">직원 관리 시스템</a> | 직원 정보 조회</h2> 
31     <table border="1"> 
32         <tr> 
33             <th>emp_no</th> 
34             <th>birth_date</th> 
35             <th>first_name</th> 
36             <th>last_name</th> 
37             <th>gender</th> 
38             <th>hire_date</th> 
39             <th>update</th> 
40             <th>delete</th> 
41         </tr> 
42         <?= $emp_info ?> 
43 
 
44     </table> 
45 </body> 
46 
 
47 </html> 
