# 이번주에 배운 내용


# 새로 배운 내용
noSQL은 SQL보다 확장성, 성능, 속도면에서 더 좋다. 

MongoDB는 document기반 데이터베이스이다. 테이블형태가 아니라 key: value의 형태로 나타낸다.



* [ ]를 이용해 두 개 이상의 value값을 입력할 수 있다.
``` 
groups:["Korea", "Seoul"]
```


* 데이터 생성
``` 
하나 입력: db.컬렉션명.insertOne()
여러 항목 입력: db.컬렉션명.insertMany()
``` 


* 데이터 조회
``` 
전체 조회: db.컬렉션명.find()
항목 조회: db.myCollection.find({x:1})
id 안보이게 조회: db.myCollection.find({x:1}, {_id:false})
``` 


* 커서를 사용해 데이터에 접근할 수 있다.
```
커서 생성: var cursor = db.컬렉션명.find()
커서 이동: cursor.next()
다음 도큐먼트가 있는지 확인: cursor.hasNext()
  true면 존재 false면 없음.
``` 


* 데이터를 배열로 이용
``` 
db.컬렉션명.find().toArray()
``` 


*데이터 수정
``` 
한 개만 수정: db.컬렉션명.replaceOne()
여러 개 수정: db.컬렉션명.replaceMany()
데이터 없을 때 새로 추가: {upsert: true}
데이터 업데이트: db.컬렉션명.updateMany()
db.myCollection.updateMany({x:6}, {$set:{"y.$[e]": 17}}, {arrayFilters:[{e:7}]})
``` 


* 데이터삭제
``` 
하나 삭제: db.컬렉션명.deleteOne()
ex)db.myCollection.deleteOne(x:4)
전체 삭제: db.컬렉션명.deleteMany({})
``` 


# 문제가 발생하거나 고민한 내용



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

```
