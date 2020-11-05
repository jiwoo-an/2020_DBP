# 이번주에 배운 내용
이번 주는 오라클, SQL Developer, 자바, 이클립스를 설치하고 오라클과 자바를 연동시켰다. 

# 새로 배운 내용
SQL Developer의 워크시트를 사용하면 수정과 복사 붙여넣기가 편하다고 한다.

'EXEC DBMS_XDB.SETLISTENERLOCALACCESS(FALSE);'를 이용하면 외부에서 원격 접속이 가능하다.

자바와 오라클 연결하기 위해 JDBC(Java Database Connectivity)를 이용한다.
데이터베이스마다 사용되는 SQL 구문이 다를 수 있는데 JDBC가 알아서 수정해준다.


# 문제가 발생하거나 고민한 내용
오라클 11g를 설치할 때 리스너 포트가 1521이 아니라 1522였다. 1521로 바꾸려고 했는데 1521은 이미 사용 중인 포트라고 떴다.
자바에서 오라클을 접속하기 위해 강의자료 19페이지에 있는 것을 작성했다. Connection Failed가 떴다. 
'String url = "jdbc:oracle:thin:@localhost:1521:xe";' 여기서 포트 번호를 1522로 바꿔줘야 했다. 그것도 모르고 다 삭제하고 다시 깔았다...
'String url = "jdbc:oracle:thin:@localhost:1522:xe";'로 수정하니 잘 작동됐다. 앞으로 복사 붙여넣기 할 때 잘 확인해야겠다.

\+
``` 

```
\-
```
딱히 없다. 
```
!
```

```
