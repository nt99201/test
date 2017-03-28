# 페이지 보기
[http://view.ui.naver.com/dict/xdic/master/00_layout.php](http://view.ui.naver.com/dict/xdic/master/00_layout.php)


# 페이지 정보
* 기본 템플릿 페이지주소&파라미터="파일명"&파라미터="파일명"..으로 구분되어 있음.
* 제3외국어 사전은 모바일과 pc버전이 같이 공용으로 쓰이고 있는 부분이 있고 모두 총

## 파일 및 파라미터 종류

&nbsp;
**[레이아웃]**
* 레이아웃 페이지에서 우측 하단의 버튼으로 mobile, pc, 아랍어의 레이아웃을 확인할 수 있습니다.

| 파라미터 값 | $layoutType |
| :------------ | :------------ |
| mo | 모바일(기본) |
| pc | PC |
| ar | 아랍어 |

&nbsp;
---
&nbsp;
**[Include file]**
* 특수한 레이아웃이나 인덱스를 생성해주는 파일들입니다.
* 모든 레이아웃 종류 확인 URL : [http://view.ui.naver.com/dict/xdic/master/00_layout_input.php](http://view.ui.naver.com/dict/xdic/master/00_layout_input.php)

| Index list file |
| :------------------------ |
| 00_content.pnp | mobile용 index list|
| 00_content_pc.php | pc용 index list|

| header include file |
| :------------------------ |
| 00_header_incl.pnp | mobile용 header|
| 00_header_incl_pc.php | pc용 header|
| 00_header_incl_input.php | mobile 문자입력기 버튼 포함 header |

| lnb include file (모바일에서만 나눠지는 영역으로 헤더와 함께 쓰임) |
| :------------------------ |
| 00_lnb.pnp | 기본형 |
| 00_lnb_input.php | 문자입력기 포함 |
| 00_lnb_ar.php | 아랍구조 기본형 |
| 00_lnb_input_ar.php | 아랍구조 문자입력기 포함 |

| footer include file |
| :------------------------ |
| 00_footer_incl.pnp | mobile용 footer|
| 00_footer_incl_pc.php | pc용 footer|
| 00_footer_incl_ar.php | mobile용 아랍구조 footer|

| gnb include file (상황에 따른 gnb(header+lnb)의 마크업확인용 파일) |
| :------------------------ |
| 01_gnb.pnp | 기본형 |
| 01_gnb_auto.php | 자동완성 |
| 01_gnb_editor2.php | 자동완성 |
| 01_gnb_editor.php | 문자입력기 기본형 |
| 01_gnb_editor_aravia.php | 문자입력기 (아랍어,페르시아어) |
| 01_gnb_editor_hindi.php | 문자입력기 (힌두어) |
| 01_gnb_editor_th.php | 문자입력기 (태국어) |

&nbsp;
---
&nbsp;
**[언어별 사전]**
* [언어 리스트] 00_language.php
* 총 24개의 언어를 쿠키로 국가코드를 저장하여 마크업확인을 할 수 있습니다.
* 각 쿠키에 연결된 국가이름도 헤더타이틀이나 본문에 표현됩니다.

| $lang |  $country |
| :------------ | :------------ |
| id|인도네시아|
| ua|우크라이나|
| uz|우즈베크|
| pt|포르투갈|
| al|알바니아|
| ru|러시아|
| tr|터키|
| ge|그루지아|
| vn|베트남|
| mn |몽골|
| kh |캄보디아|
| la |라틴|
| nl |네덜란드|
| ro |루마니아|
| sw |스와힐리|
| sv |스웨덴|
| ar |아랍|
| it |이탈리아|
| cs |체코|
| th |태국|
| fa |페르시아|
| pl |폴란드|
| hu |헝가리|
| hi |힌디|
