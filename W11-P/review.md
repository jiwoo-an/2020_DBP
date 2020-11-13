# 이번주에 배운 내용
직원 정보를 수정하고, 삭제하고, 추가하는 걸 함수로 만들었다.
수정, 삭제, 추가에 공통적으로 DB 연결과 닫기가 있어서 함수로 만들었다.

# 새로 배운 내용
데이터베이스를 수정하고, commit을 하면 rollback이 되지 않는다. 오라클 데이터베이스는 시간 단위로 데이터베이스를 백업하기 때문에 다시 원래의 데이터베이스르 얻을 수 있다.

Statement vs PreparedStatement
Statement SQL을 실행할 때마다 분석. '가 있으면 "" 필요. 정적SQL문 처리.
PreparedStatement 한 번 분석되면 재사용할 수 있음. 미리 컴파일되기 때문에 수행 속도 빠름. 동적쿼리를 처리할 수 있음.

rownum은 행의 번호를 나타낸다. 
select * from (select * from countries order by rownum DESC) where rownum = 1
위와 같은 SQL문을 사용하면 마지막 행의 정보를 보여준다.

# 문제가 발생하거나 고민한 내용
countries 데이터베이스를 사용해 우리나라를 추가하려고 했다. 출력했는데 짐바브웨밖에 나오지 않았다.
employees를 사용했을 때는 employee_id가 있어서 마지막에 추가할 수 있었는데 countries는 employee_id 같은 것이 없어 KR이 정렬되어 중간에 들어갔다. 계속 마지막을 출력하니 ZW인 짐바브웨밖에 나오지 않는 것이었다.
우리나라 추가를 포기하고 그냥 ZZ를 넣어서 마지막행에 들어가게 했다.

## 과제 링크
https://youtu.be/49foeOyZ16g

\+
``` 
중복되는 부분을 함수로 만들어서 깔끔해졌다.
```
\-
```
딱히 없다.
```
!
```
이클립스보다 인텔리제이의 자동완성이 더 편하다.
```
