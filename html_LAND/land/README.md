# 부동산 PC

## 1. 유관부서 담당자 / 대응범위

- 기획: 고강진, 연성훈
- 개발: 성현탁, 김형우, 손경성, 조양현,양은국, 강구현, 최효석, 최정선, 명노환
- 마크업: 주선미, 황선수
- 디자인: 최인영, 임주열, 강인희

## 2. 대응범위
- IE7+ / chrome

## 3. 이슈관리
http://bts1.navercorp.com/nhnbts/browse/NEWLAND
- 매주 화요일 정기배포

----

# 작업 환경
- 2016-07-28, 황선수
- 2016-09-01, 주선미

## 개요
- 필요한 gulp 모듈은 package.json 에 넣어서 버전관리하고 있으므로 npm install 하면 자동설치 가능함.
- node_modules 폴더는 .gitignore 에 포함해놓아 저장소에서는 관리하지 않으니 처음 clone 을 받았으면 npm install 을 해주어야 함.
- Sass는 gulp sass 사용함. Ruby 기반 보다 빠르다고 함. (gulp-sass => <a href="https://github.com/sass/libsass" target="_blank">LibSass</a> => C/C++)

## 구동
- node.js 설치
- $> npm install
- $> gulp sass:watch
- $> gulp relaese //배포용 이미지 경로 변경 task


## 개발 CSS 구조
- http://gitlab2.uit.nhncorp.com/land/land/raw/master/src/scss/import%EA%B7%9C%EC%B9%99/css.xml
- 마크업에서는 merge 전 개별 파일로 전달


## 마크업 CSS 관리 구조

 ```
├── src(작업용 폴더)
|   ├── css
|   |     ├── include
|   |     └──  **/**.css // html 적용 파일
|   ├── html
|   ├── img
|   ├── scss
|   |     ├── include // 실제 작업 파일
|   |     └──  **/**.scss
|   └── etc
|        └── auction_goodauction.css //경매 상세페이지 CSS 파일 - 외부업체 "굿옥션"에서 관리
|
└── dist(배포용 폴더)
    └──  **/**.css // 개발 전달 파일
 ```




### 참고 : gulp sass output style
- https://web-design-weekly.com/2014/06/15/different-sass-output-styles/