<?php $page='main';include '../inc/header_viewer.php'; ?>
<!-- ct  -->
<div id="ct">
    <!-- [D] 아래 주석처리된 버튼 값 상황에 맞게 출력 -->
    <div class="view_section">
        <div class="img"><img src="../im/@tmp/@toon.jpg" width="320" height="1061" alt=""></div>
    </div>
</div>
<!-- //ct -->
<div class="tool_area">
    <div class="tool">
        <div class="tool_lst">
            <!-- [D] 선택된 경우 on 클래스 추가 -->
            <a href="#" class="btn_feed"><span>책장넘김</span></a>

            <div class="paging">
                <div class="page_bar">
                    <div class="bar_section">
                        <span class="bar_gage">
                            <span class="gage" style="width:50%"></span>
                            <span class="control_section"><a href="#" class="control" style="left:50%"></a></span>
                        </span>
                        <span class="page_num"><em>12</em><span class="bar">/</span><span>123</span></span>
                    </div>
                </div>
            </div>

            <div class="btn_area"><a href="#" class="btn_prev"><span>이전</span></a><a href="#" class="btn_next"><span>다음</span></a></div>
        </div>
    </div>
</div>
<div class="btn_tool" style="display:none"><div class="btn_tbox up"><a href="#"><span>툴 열기</span></a></div></div>
<div class="btn_tprev" style="display:none"><a href="#"><span>이전화면으로</span></a></div>
</div>
</body>
</html>
