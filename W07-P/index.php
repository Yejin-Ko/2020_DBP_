1 <!DOCTYPE html> 
2 <html> 
3 
 
4 <head> 
5     <meta charset="utf-8"> 
6     <title> 직원 관리 시스템 </title> 
7 </head> 
8  
9 <body> 
10     <h1> 직원 관리 시스템 </h1> 
11     <a href="emp_select.php">(1) 직원 정보 조회</a><br> 
12     <a href="emp_insert.php">(2) 신규 직원 등록</a><br> 
13     <form action="emp_update.php" method="POST"> 
14         (3) 직원 정보 수정: 
15         <input type="text" name="emp_no" placeholder="emp_no"> 
16         <input type="submit" value="Search"> 
17     </form> 
18     <form action="emp_delete.php" method="POST"> 
19         (4) 직원 정보 삭제: 
20         <input type="text" name="emp_no" placeholder="emp_no"> 
21         <input type="submit" value="Delete"> 
22     </form> 
23      
24 </body> 
25  
26 </html> 
