# 새로 배운 내용


SQL Developer의 워크시트를 사용하면 수정과 복사붙여넣기가 편하다고 한다.

'EXEC DBMS_XDB.SETLISTENERLOCALACCESS(FALSE);'를 이용하면 외부에서 원격 접속이 가능하다.

자바와 오라클 연결하기 위해 JDBC(Java Database Connectivity)를 이용한다.
데이터베이스마다 사용되는 SQL구문이 다를 수 있는데 JDBC가 알아서 수정해준다.


# 문제가 발생하거나 고민한 내용
오라클 11g를 설치할 때 리스너 포트가 1521이 아니라 1522였다. 1521로 바꾸려고 했는데 1521은 이미 사용중인 포트라고 떴다.
자바에서 오라클을 접속하기 위해 강의자료 19페이지에 있는 것을 작성했다. Connection Failed가 떴다. 
java.sql.SQLException: No suitable driver found for jbdc:oracle:thin:@localhost:1522:xe
1522 포트가 문제인 것 같다. 구글에 찾아보니 ojdbc6을 안 넣었다고 하는데 이미 했다. 포트가 잘못된 것 같아서 오라클을 삭제하고 다시 깔았다. 시간이 많이 걸렸다. 그래도 포트 1521은 사용 중이고 

## 링크


\+
``` 
 처음 페이지에 무료, 유료 버튼이 있고, 선택하면 각각 다른 창으로 이동한다. 
 무료는 'WHERE price=0', 유료는 'WHERE price!=0'이다.
```
\-
```
 'ORDER BY rating'으로 평점이 높은 순서대로 보여준다. 
 rating에 5가 넘는 잘못된 값이 들어 있어서 'WHERE rating <= 5'를 이용해 없앴다.
```
!
```
input type을 number로 하고 step=1로 해서 클릭하면 나이가 1씩 커지거나 작아지게 했다.
```
