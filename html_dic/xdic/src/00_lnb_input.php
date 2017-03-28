<div role="search" class="top_search_box">
    <form method="get" action="#">
        <fieldset class="sc">
            <legend class="hc">검색</legend>
            <!-- [D] 특수알파벳 기능 제공하지 않는 사전 -> class명 : sc2 -->
            <!-- [D] 특수알파벳 기능 제공하는 사전 -> class명 : sc2_v2 -->
            <div class="sc2_v2">
						<span class="sc_box">
						    <input id="ac_input" type="text" name="query" title="검색어 입력" value="amigo" maxlength="50" class="keyword it">
						</span>
                <button type="submit" title="검색" class="sbt"></button>
                <!-- [D] 특수알파벳 버튼 활성화시 on클래스 추가 및 style="display:block"으로 수정 -->
                <button type="button" title="특수알파벳" class="sbt5"></button>
                <!-- [D] 내용 입력시 style="display:block"으로 수정 -->
                <button type="button" title="입력 내용 삭제" id="clear_input_top" class="sbt3" style="display:block"></button>
            </div>
        </fieldset>
    </form>
    <!-- [D] 입력기 : <div class="write_lstw type">
             특수알파벳 입력기 : <div class="write_lstw">
    -->
    <!-- 20150119 특수알파벳 입력기 작업 -->
    <!-- [D] 해당 언어에 해당하는 문자 입력기 class명 다르게 넣기! (중요) -->
    <!-- [D] 독일어/알바니아어 문자 입력기 -> write_lstw_sp v1-->
    <!-- [D] 스페인어 문자 입력기 -> write_lstw_sp v2 -->
    <!-- [D] 프랑스어/라틴어/포르투갈어 문자 입력기 -> write_lstw_sp v3 -->
    <div class="write_lstw_sp v1" style="display:none">
        <ul>
            <!-- [D] 가장 마지막 li에 class last_lst추가 ex) <li class="editor_lst last_lst">-->
            <!-- [D] 버튼 클릭시 활성화 -> a태그에 on클래스 추가 ex) class="edit_lk on"> -->
            <li class="editor_lst"><a href="#" class="edit_lk">é</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">í</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">ú</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">ç</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ä</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ö</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ß</a></li>
            <li class="editor_lst last_lst"><a href="#" class="edit_lk">ü</a></li>
        </ul>
    </div>

    <!-- [D] 스페인어 문자 입력기 -> write_lstw_v2 -->
    <div class="write_lstw_sp v2" style="display:none">
        <ul>
            <!-- [D] 가장 마지막 li에 class last_lst추가 ex) <li class="editor_lst last_lst">-->
            <!-- [D] 버튼 클릭시 활성화 -> a태그에 on클래스 추가 ex) class="edit_lk on"> -->
            <li class="editor_lst"><a href="#" class="edit_lk">á</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">é</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">í</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ó</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ú</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">ü</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">ñ</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">á</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">é</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">í</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ó</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ú</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ü</a></li>
            <li class="editor_lst last_lst"><a href="#" class="edit_lk">ñ</a></li>
        </ul>
    </div>

    <!-- [D] 프랑스어/라틴어/포르투갈어 문자 입력기 -> write_lstw_v3 -->
    <div class="write_lstw_sp v3" style="display:none">
        <ul>
            <!-- [D] 가장 마지막 li에 class last_lst추가 ex) <li class="editor_lst last_lst">-->
            <!-- [D] 버튼 클릭시 활성화 -> a태그에 on클래스 추가 ex) class="edit_lk on"> -->
            <li class="editor_lst"><a href="#" class="edit_lk">ç</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">ã</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">á</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">â</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">à</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ó</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ô</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">õ</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">é</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ê</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">í</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ú</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ü</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ì</a></li>
            <li class="editor_lst last_lst"><a href="#" class="edit_lk">è</a></li>
        </ul>
    </div>

    <!-- [D] + 문자 입력기 -> write_lstw_v4 -->
    <div class="write_lstw_sp v4" style="display:none">
        <ul>
            <!-- [D] 가장 마지막 li에 class last_lst추가 ex) <li class="editor_lst last_lst">-->
            <!-- [D] 버튼 클릭시 활성화 -> a태그에 on클래스 추가 ex) class="edit_lk on"> -->
            <li class="editor_lst"><a href="#" class="edit_lk">ç</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">ã</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">á</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">â</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk on">à</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ó</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ô</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">õ</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">é</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ê</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">í</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ú</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ü</a></li>
            <li class="editor_lst"><a href="#" class="edit_lk">ì</a></li>
            <li class="editor_lst last_lst"><a href="#" class="edit_lk">è</a></li>
        </ul>
    </div>

    <!-- 자동완성 -->
    <div class="write_lstw3" style="width:100%;display:none;">
        <ul style="display:block;">
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>acer<em class="col8">독수리,협박하는 사람,사기꾼,매가오리</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>aber<em class="col8">나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>erir<em class="col8">구역,지역,아르,네모진 작은 화단</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="writef_em">á</em>acer<em class="col8">독수리,협박하는 사람,사기꾼,매가오리</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>aber<em class="col8">나무,수목,인쇄기의 회전 굴대 윗부분에 있는</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>erir<em class="col8">구역,지역,아르,네모진 작은 화단</em></a></li>
        </ul>
        <div class="global_option">
            <ul>
                <li>
                    <a href="#" style="display: none;">자동완성 켜기</a>
                    <a href="#" style="display: block;">자동완성 끄기</a>
                </li>
            </ul>
            <a href="#" class="btn_close">닫기</a>
        </div>
    </div>

    <!--  자동완성 끈 상태 -->
    <div class="write_lstw3" style="width: 100%; display:none; ">
        <ul style="display: none; ">
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>acer<em class="col8">독수리,협박하는 사람,사기꾼,매가오리</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>aber<em class="col8">나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는나무,수목,인쇄기의 회전 굴대 윗부분에 있는</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>erir<em class="col8">구역,지역,아르,네모진 작은 화단</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>acer<em class="col8">독수리,협박하는 사람,사기꾼,매가오리</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>aber<em class="col8">나무,수목,인쇄기의 회전 굴대 윗부분에 있는</em></a></li>
            <li class="write_lst"><a href="#" class="write_lk"><em class="write_em">á</em>erir<em class="col8">구역,지역,아르,네모진 작은 화단</em></a></li>
        </ul>
        <div class="global_option">
            <ul>
                <li>
                    <a href="#" style="display: block;">자동완성 켜기</a>
                    <a href="#" style="display: none;">자동완성 끄기</a>
                </li>
            </ul>
            <a href="#" class="btn_close">닫기</a>
        </div>
    </div>
    <!-- //특수 알파벳 입력기 -->

    <!-- 내가 찾은 단어 -->
    <div class="write_lstw3" style="width:100%;display:none;">
        <ul style="display:block;">
            <li class="write_lst"><a href="#" class="write_lk">comer</a></li>
            <li class="write_lst"><a href="#" class="write_lk">haber paño de que cortar</a></li>
            <li class="write_lst"><a href="#" class="write_lk">señor</a></li>
            <li class="write_lst"><a href="#" class="write_lk">사랑</a></li>
            <li class="write_lst"><a href="#" class="write_lk">haber</a></li>
            <li class="write_lst"><a href="#" class="write_lk">sol</a></li>
        </ul>
        <div class="global_option">
            <ul>
                <li>
                    <a href="#" style="display: block;">기록삭제</a>
                </li>
                <li>
                    <a href="#" style="display: none;">내가 찾은 단어 켜기</a>
                    <a href="#" style="display: block;">내가 찾은 단어 끄기</a>
                </li>
            </ul>
            <a href="#" class="btn_close">닫기</a>
        </div>
    </div>
    <!-- 내가 찾은 단어 -->
    <div class="write_lstw3" style="width: 100%; display:none;">
        <ul style="display: none; ">
            <li class="write_lst"><a href="#" class="write_lk">comer</a></li>
            <li class="write_lst"><a href="#" class="write_lk">haber paño de que cortar</a></li>
            <li class="write_lst"><a href="#" class="write_lk">señor</a></li>
            <li class="write_lst"><a href="#" class="write_lk">사랑</a></li>
            <li class="write_lst"><a href="#" class="write_lk">haber</a></li>
            <li class="write_lst"><a href="#" class="write_lk">sol</a></li>
        </ul>
        <div class="global_option">
            <ul>
                <li>
                    <a href="#" style="display: none;">기록삭제</a>
                </li>
                <li>
                    <a href="#" style="display: block;">내가 찾은 단어 켜기</a>
                    <a href="#" style="display: none;">내가 찾은 단어 끄기</a>
                </li>
            </ul>
            <a href="#" class="btn_close">닫기</a>
        </div>
    </div>
    <!-- //내가 찾은 단어 -->
</div>
</div>