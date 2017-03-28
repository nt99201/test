# 작업 환경 개선
- 2016-08-05, 황선수

## 개요
- 필요한 gulp 모듈은 package.json 에 넣어서 버전관리하고 있으므로 npm install 하면 자동설치 가능함.
- node_modules 폴더는 .gitignore 에 포함해놓아 저장소에서는 관리하지 않으니 처음 clone 을 받았으면 npm install 을 해주어야 함.
- Sass는 gulp sass 사용함. Ruby 기반 보다 빠르다고 함. (gulp-sass => <a href="https://github.com/sass/libsass" target="_blank">LibSass</a> => C/C++)
- ${imgUrl.center} => #{$imgUrl-center} 형태로 변경

## 구동
- node.js 설치
- $> npm install
- $> gulp sass:watch

### 참고 : gulp sass output style
- https://web-design-weekly.com/2014/06/15/different-sass-output-styles/

## 개발 CSS 구조
- "css/xml/"에서 관리

## 이미지 경로
- "_variable.scss" 에서 관리

## 마크업 CSS 관리 구조

  1. :file_folder: **scss**
   * ./common/*.scss (공통)
   * ./??/*.scss (각 컴포넌트)
  2. :file_folder: **css**
   * ./build/??/*.css (컴파일 된 CSS 파일)
   * ./*.css (HTML 파일에서 실제로 참조하는 CSS 파일)
   * ./old/??/*.css (기존 CSS 보관, 백업용도)

----

# 부동산

## 1. 유관부서 담당자 / 대응범위

- 기획: 고강진, 연성훈
- 개발: 김형우, 손경성, 조양현, 성현탁, 양은국, 강구현
- 마크업: 주선미, 황선수
- 디자인: 정재진, 임주열

대응범위: IE7+ / chrome
