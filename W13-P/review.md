# 이번주에 배운 내용
톰캣을 설치하고 이클립스에서 톰캣 서버를 설정했다. 

이클립스에 오라클DB를 연동했다. 

오라클DB와 JSP를 연동했다. 

JSP에 대해서 배웠다.

JSP로 직원 정보 조회, 직원 정보 추가를 했다.

DB연결이 정보 조회와 추가에 반복 사용되어 패키지로 만들어서 중복을 제거했다.


# 새로 배운 내용
JSP는 Java Server Page로 HTML 내부에 java 코드를 입력해, 웹 서버에서 동적으로 웹 브라우저를 관리하는 언어이다.

PHP에서는 <$= $>로 썼는데 JSP는 <%= %>로 사용한다.

패키지는 고유한 이름으로 만들어야 한다. 보통 도메인 주소를 거꾸로 쓴다.


# 문제가 발생하거나 고민한 내용
이클립스에서 서버를 찾는데 Apache 폴더가 없었다. <br>
https://qastack.kr/programming/2000078/apache-tomcat-not-showing-in-eclipse-server-runtime-environments <br>
여기에서 하라는 대로 했더니 잘 Apache 폴더가 나와서 서버 연결을 할 수 있었다.

이클립스에서 오라클DB로 연결을 하려 했지만 계속 ping failed가 떴다. 
SQL Developer에 들어가서 똑같이 설정했는데도 ping failed가 떴다.
HR 비밀번호가 잘못된 탓이었는데 sql plus system으로 들어가서 ALTER 명령어를 사용해 비밀번호를 바꿔주니 잘 됐다.


## 과제 링크
``` 

```

\+
``` 

```
\-
```

```
!
```
프로그램 설치하는 게 두려워졌다...
```
