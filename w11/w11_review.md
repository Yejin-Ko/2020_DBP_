## 새로 배운 내용

###  Oracle Transaction
- 트랜잭션 : DB의 상태를 변환시키는 하나의 논리적 기능을 수행하기 위한 작업의 단위
- 4가지 특성을 가진다. (원자성, 일관성, 독립성, 지속성)
- 활동 active -> 부분완료 partially committed -> 완료 committed
- 활동 active -> 실패 failed -> 철회 aborted


###  JDBC-SQL 쿼리 전송 인터페이스

- Statement
createStatement()로 객체를 만들고, executeQuery()로 실행한다.

- PreparedStatement
String var = “abc”;
PreparedStatement pstm = conn.prepareStatement(“select * from T wherer a = ?”); 
ResultSet rs = pstm.executeQuery();

### DB 접속 이후 자원 반납

 -  select, update, insert, delete 할 때 마다 db 연결하고 종료해서, 자원을 반납하자
 -  Connection, Statement, ResultSet 객체를 사용한 뒤 close() 메소드를 호출해서 자원을 반납하기
 -  반납하지 않으면 DB서버가 해당 SQL문의 결과를 계속 저장하고 있어야 하므로 메모리 낭비가 발생한다.
 
##  회고

(+)  자바를 배운적이 없어 뭔가 더 복잡하고 어렵게 느껴지지만 따라가고 변경해가며 조금은 흥미를 느꼈다.


(-)  자바도 어렵고 sql도 어렵고 난리가 나버렸다. 기말과제가 너무나 걱정이다.


(!)  그래도 따라해보면서 다 이해는 못해도 조금은 이해가 되는 부분도 있어서 좋았다.

## 동작링크

-  https://youtu.be/avgiE6-SffE

