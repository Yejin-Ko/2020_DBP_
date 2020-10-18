1<!DOCTYPE html> 
2 <html> 
3 
 
4 <head> 
5     <meta charset="utf-8"> 
6     <title>직원 관리 시스템</title> 
7 </head> 
8  
9 <body> 
10     <h2><a href="index.php">직원 관리 시스템</a> | 신규 직원 등록</h2> 
11  
12     <form action="emp_insert_process.php" method="POST"> 
13         <label>emp_no:</label> 
14         <input type="text" name="emp_no" placeholder="emp_no"><br> 
15         <label>birth_date:(0000-00-00)</label> 
16         <input type="text" name="birth_date" placeholder="birth_date"><br> 
17         <label>first_name:</label> 
18         <input type="text" name="first_name" placeholder="first_name"><br> 
19         <label>last_name:</label> 
20         <input type="text" name="last_name" placeholder="last_name"><br> 
21         <label>gender:(M or F)</label> 
22         <input type="text" name="gender" placeholder="gender"><br> 
23         <label>hire_date:(0000-00-00)</label> 
24         <input type="text" name="hire_date" placeholder="hire_date"><br> 
25         <input type="submit" value="Create"> 
26  
27     </form> 
28  
29 </body> 
30  
31 </html> 
