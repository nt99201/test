# 작업 환경 개선
- 2016-07-15, 황선수

## 개요
- 필요한 gulp 모듈은 package.json 에 넣어서 버전관리하고 있으므로 npm install 하면 자동설치 가능함.
- node_modules 폴더는 .gitignore 에 포함해놓아 저장소에서는 관리하지 않으니 처음 clone 을 받았으면 npm install 을 해주어야 함.
- Sass는 기존대로 gulp sass 사용함. Ruby 기반 보다 빠르다고 함. (gulp-sass => <a href="https://github.com/sass/libsass" target="_blank">LibSass</a> => C/C++)

## 구동
- node.js 설치
- $> npm install
- $> gulp sass:watch

## 이미지 경로
- scss/common/_variable.scss 에서 관리

----

# 부동산

부동산은 현재 홈, 매물, 분양, 뉴스, MY 이렇게 다섯개의 메뉴가 존재하며
홈, 매물은 개편 되었습니다
나머지 분양, 뉴스, MY는 예정된 개편일정은 없는 상태입니다.

## 1. 유관부서 담당자 / 대응범위

- 기획: 고강진, 박영은, 연성훈
- 개발: 김형우, 손경성, 조양현, 성현탁, 양은국, 강구현
- 마크업: 주선미, 황선수
- 디자인: 최인영, 정재진

대응범위는 모바일 - iOS8+ / Android4+, PC - ie7+ / chrome

## 2. 작업 환경 / 저장소

부동산은 sass를 사용합니다.
변수와 믹스인들은 common폴더의 variable.scss / mixin.scss 에 있으며, sprite 이미지들도 mixin에 포함되어 있습니다.

컴파일은 gulp로 세팅되어 있습니다.
gulp 셋팅방법은 <a href="http://wiki.navercorp.com/pages/viewpage.action?pageId=317689163" target="_blank">위키문서</a>를 참고해주세요.

모바일저장소는 리뉴얼 되기 전과 후 두가지가 있습니다.

모바일 (http://m.land.naver.com/)
- 부동산 저장소[홈][매물] : http://gitlab2.uit.nhncorp.com/land/m.land.git
- 부동산 저장소[분양][뉴스][MY] : http://gitlab2.uit.nhncorp.com/land/m.land.old.git
- 기존 svn저장소 : http://dev.ui.naver.com/svnview/m.land/

PC (http://land.naver.com/)
- 부동산 저장소 : http://gitlab2.uit.nhncorp.com/land/land.git
- 기존 svn저장소 : http://dev.ui.naver.com/svnview/land/

부동산 관리센터 (http://landad.naver.com/)
- 저장소 : http://gitlab2.uit.nhncorp.com/land/landad.git
- 기존 svn저장소 : http://dev.ui.naver.com/svnview/landad/

이슈관리
- 부동산은 BTS에서 이슈관리를 하고 있습니다.
- http://bts1.navercorp.com/nhnbts/browse/NEWLAND/?selectedTab=com.atlassian.jira.jira-projects-plugin:summary-panel


## 3. 마크업 구조

현재 개편진행중이며, 홈과 매물은 개편이 완료된 상태입니다.
홈(테마매물홈) - main.scss,main_land.scss
매물 - basic.scss,basic_port.scss,basic_land.scss

### 분기

css에서 가장 중요한 부분중에 하나는 부동산은 landscape와 portrait로 분기됩니다
대부분의 스타일은 basic.scss과 main.scss에 들어가 있고, 분기 되어야 하는 부분만 _port.scss,_land.scss에 들어가 있습니다
참고로, 곧 패드도 대응할 예정이라 현재의 분기를 유지하기는 힘들것 같고, 보통의 방법대로 미디어쿼리를 사용해서 분기해야 할것 같습니다..;;

### 리스트

특별히 주의 하실 부분이 리스트인데요
리스트페이지(list_page.html)와 지도위에 사용되는(list_map.html)두가지가 있습니다
같은 리스트를 사용하는데 UI가 좀 다른 부분에 대해서는 감싸는 클래스를 달리하여 css에 차이를 두었습니다.

```html
<div class="pdt_map"> --> 지도에 사용되는 리스트(매물:pdt_lst, 단지:pdt_lst.aprt_blck, 중개사:pdt_lst.estate_agent)
	<div class="pdt_lst aprt_blck estate_agent">

<div class="pdt_page"> --> 리스트 페이지에 사용되는 리스트(매물:pdt_lst, 단지:pdt_lst.aprt_blck, 중개사:pdt_lst.estate_agent)
	<div class="pdt_lst aprt_blck estate_agent">

```

리스트가 UI가 비슷하다보니 매물, 단지, 중개사 세군대에서 쓰이고 있습니다
클래스에 따라 UI가 변경되므로 위의 클래스를 잘 확인 하시고, 리스트를 수정하실때는 다른 리스트에는 영향이 없는지 한번씩 확인해 주세요


## 5. 개발공유

개발 공유는 view와 diff 두가지만 해주시면 됩니다
개발자분들이 css diff가 많은 경우는 통으로 반영하시고, 적으면 일일히 반영하시는 경우도 있습니다.
