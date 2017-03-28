nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.revision.js 2012. 04. 26
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.util.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 댓글에서 사용하는 유틸리티성 함수들
	 */
	Comment.Util = {
		/**
		 * @description 문자열을 trim 하여 반환한다.
		 * @param {String}	sStr	문자
		 * @return {String}
		 */
		trim : function(sStr) {
			var re = /^\s+|\s+$/g;
			return sStr.replace(re, '');
		},

		/**
		 * @description 날짜스트링을 포맷에 맞게 변경하여 반환한다.
		 * @param {String}	sDate	날짜스트링
		 * @param {String}	sDateFormat 날짜포맷
		 * @return {String}
		 */
		dateFormat : function(sDate, sDateFormat) {
			var aDatetime = sDate.split(/\+/);
			aDatetime = aDatetime[0].split(/T/);
			if (aDatetime.length > 1) {
				var ymd = aDatetime[0].split(/-/);
				var his = aDatetime[1].split(/:/);
				var year = ymd[0];
				var month = ymd[1];
				var dayOfMonth = ymd[2];

				var time = his[0];
				var minute = his[1];
				var second = his[2].split(/\./);
				var milli = second[1];
				second = second[0];

				year = Number(year);
				month = Number(month) - 1;
				var day = Number(dayOfMonth);
				time = Number(time);
				minute = Number(minute);
				second = Number(second);

				var oDate = J.$Date(year, month, day, time, minute, second, milli);
				return oDate.format(sDateFormat);
			} else {
				return aDatetime[0];
			}
		},

		setNumberFormat: function(sText) {
			sText = sText.toString();
			var sReturn = "";
			var nDot = 0;
			var nLastPosition = sText.length;
			for (var i = nLastPosition; i >= 0; i--) {
				var sChar = sText.charAt(i);
				if (i > nLastPosition) {
					sReturn = sChar + sReturn;
					continue;
				}
				if (/[0-9]/.test(sChar)) {
					if (nDot >= 3) {
						sReturn = ',' + sReturn;
						nDot = 0;
					}
					nDot++;
					sReturn = sChar + sReturn;
				}
			}
			return sReturn;
		},
		
		/**
		 * @description 텍스트에 멀티라인허용유무에 따라 변경하여 반환한다.
		 * @param	{String}	sText	텍스트
		 * @param	{Boolean}	bEnableMultiLine	멀티라인 허용유무
		 * @param	{String}
		 */
		multiLine: function(sText, bEnableMultiLine){
			sText = sText.split(/\r/).join('');
			if (bEnableMultiLine) {
				sText = sText.split(/\n/).join('<br/>');
			}
			else {
				sText = sText.split(/\n/).join(' ');
			}
			return sText;
		},

		/**
		 * @description 맨위로 올라가기 (주소창 숨기는 효과)
		 */
		scrollTop : function() {
			window.scrollTo(0, 1);
		},

		/**
		 * @description 게시중단댓글인지의 불리언 값을 반환한다.
		 * @param	{Number}	nStatus	상태코드
		 * @return	{Boolean}
		 */
		isInterruptedComment : function(nStatus) {
			return nStatus >= 7 && nStatus <= 9;
		},

		/**
		 * @description 캐리지리턴 문자열를 제외한 두 텍스트가 같은지에 대한 불리언 값을 반환한다.
		 * @param	{String}	sParamText1	비교대상문자
		 * @param	{String}	sParamText2 비교대상문자
		 * @return {String}
		 */
		compareTextWithoutRetuneChar : function(sParamText1, sParamText2){
			var sText1 = sParamText1;
			var sText2 = sParamText2;

			sText1 = sText1.replace(/\r/g, "");
			sText1 = sText1.replace(/\n/g, "");

			sText2 = sText2.replace(/\r/g, "");
			sText2 = sText2.replace(/\n/g, "");

			if(sText1 == sText2){
				return true;
			}

			return false;
		},

		/**
		 * @description 내용 Validation 처리
		 * @param	{String}	sContents	내용
		 * @param	{Number)	nMin	최소글자수
		 * @param	{Number}	sMax	최대글자수
		 * @param	{String}	sEmptyError	빈문자일때의 에러메시지
		 * @param	{String}	sMinError	최소글자수보다 적을때의 에러메시지
		 * @param	{String}	sMaxError	최대글자수보다 많을때의 에러메시지
		 * @return	{Boolean}
		 */
		validation: function(sContents, nMin, sMax, sEmptyError, sMinError, sMaxError){
			sContents = J.$S(sContents).trim().$value();

			if (sEmptyError && sContents.length === 0) {
				alert(sEmptyError);
				return false;
			}

			if (sMinError && sContents.length < nMin) {
				alert(J.$Template(sMinError).process({
					'min': escape(nMin.toString())
				}));
				return false;
			}

			if (sMaxError && sContents.length > sMax) {
				alert(J.$Template(sMaxError).process({
					'max': escape(sMax.toString())
				}));
				return false;
			}
			return true;
		},

		isFunctionalKey : function(nKeyCode) {
			if ( nKeyCode == null) {
				return false;
			}

			switch (nKeyCode) {
				case 8 : // backspace
				case 18 : // alt
				case 17 : // ctrl
				case 37 : // left
				case 38 : // up
				case 39 : // right
				case 40 : // down
				case 33 : // pageup
				case 34 : // pagedown
				case 46 : // delete
				case 16 : // shift
				case 35 : // end
				case 36 : // home
				case 45 : // insert
				case 20 : // capslock
				case 27 : // esc
					return true;
			}

			return false;
		},

		/**
		 * @description 페이지 이동
		 * @param	{String}	sUrl	url
		 * @param	{HashTable}	htParams	파라미터(key, value)
		 */
		movePage : function(sUrl, htParams) {
			sUrl = this.removeParamsInUrl(sUrl, htParams);
			var sQueryString = this.makeQueryString(htParams);

			if (sUrl.indexOf('?') > -1) {
				sUrl += '&' + sQueryString;
			} else {
				sUrl += '?' + sQueryString;
			}

			this.redirect(sUrl);
		},

		/**
		 * @description 페이지 리다이렉트
		 * @param	{String}	sUrl	url
		 */
		redirect : function(sUrl) {
			if (!sUrl) { return; }
			window.location.href = sUrl;
		},

		/**
		 * @description url 에서 파라미터를 제거한다.
		 * @param	{String}	sUrl	url
		 * @param	{HashTable}	htParams	제거할파라미터
		 * @param	{String}	url
		 */
		removeParamsInUrl : function(sUrl, htParams) {
			if (htParams) {
				for (var sParam in htParams) {
					sUrl =  sUrl.replace(new RegExp("\\b" + sParam + "=[^&#]*", "g"), "");
				}
				sUrl = sUrl.replace("&&", "&").replace("?&", "?").replace("&#", "#").replace(/(.*)[&?]$/, "$1");
			}

			return sUrl;
		},

		/**
		 * @description url 쿼리 스트링을 생성한다.
		 * @param	{HashTable}	htParams	파라미터
		 * @return	{String}	url쿼리스트링
		 */
		makeQueryString : function(htParams) {
			var aParam = [],
				sValue = '';

			if (htParams) {
				for (var sParam in htParams) {
					sValue = htParams[sParam];

					if (!sValue) { continue; }
					aParam.push(sParam + "=" + encodeURIComponent(htParams[sParam]));
				}
			}

			return aParam.join('&');
		},

		/**
		 * @description 이벤트 버블링으로 처리할 경우, 상위 엘리먼트에 하이라이트 되는 문제 회피 (안드로이드에서)
		 * - 진도 2.0.1 에는 $Element 에 들어가 있지만, 진도 1.5.3 에는 없는 기능으로 추가해줌
		 */
		preventTapHighlightForJindoNotSupported : function() {
			//탭 하이라이트 기능이 이미 있다면
			if (typeof J.$Element.prototype.preventTapHighlight === "function") {
				return;
			}(function () {
				if (J.$Agent().navigator().msafari) {
					var sClassName = 'no_tap_highlight' + new Date().getTime();
					var elStyleTag = document.createElement('style');
					var elHTML = document.getElementsByTagName('html')[0];

					elStyleTag.type = "text/css";

					elHTML.insertBefore(elStyleTag, elHTML.firstChild);
					var oSheet = elStyleTag.sheet || elStyleTag.styleSheet;

					oSheet.insertRule('.' + sClassName + ' { -webkit-tap-highlight-color: rgba(0,0,0,0); }', 0);
					oSheet.insertRule('.' + sClassName + ' * { -webkit-tap-highlight-color: rgba(0,0,0,.25); }', 0);

					J.$Element.prototype.preventTapHighlight = function(bFlag) {
						return this[bFlag ? 'addClass' : 'removeClass'](sClassName);
					};
				} else {
					J.$Element.prototype.preventTapHighlight = function(bFlag) { return this; };
				}
            })();
		},

		/**
		 * @description 진도 2.0.1에는 있으나 1.5.3에 없는 $A.set 선언
		 */
		arraySetJindoNotSupported : function() {
			if ( typeof J.$Element.prototype.set === "function") {
				return;
			}(function () {
				J.$A.prototype.set = function(nIndex,vValue){
					this._array[nIndex] = vValue;
					return this;
				};
			})();
		},

		popUp: function(url, name, width, height){
			var popup = window.open(url, name, 'width=' + width + ',height=' + height + ',status=no,left=0,top=0');
			if(popup) {
				popup.focus();
				return popup;
			}
		}
	};

})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};
nhn.comment.mobile.Util = nhn.comment.mobile.Util || {};

(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @fileOverview
	 * 엘리먼트에 추가 정보를 설정하고 값을 얻는 함수
	 */
	Util.DomData = {
		/**
		 * 엘리먼트에 클래스명과 추가정보를 설정하는 메서드
		 *
		 * - nhn.comment.mobile.Util.DomData.setClass(elDiv, 'hello', [ 1, 2, 3 ]) 이라고 사용하면
		 *   elDiv 의 클래스명은 'hello(1,2,3)' 가 된다.
		 *
		 * - 이 상태에서 nhn.comment.mobile.Util.DomData.set(elDiv, 'world', [ 'foo' ]) 이라고 사용하면
		 *   elDiv 의 클래스명은 'hello(1,2,3) world(foo)' 가 된다.
		 *
		 * - 이 상태에서 nhn.comment.mobile.Util.DomData.set(elDiv, 'naver') 이라고 사용하면
		 *   elDiv 의 클래스명은 'hello(1,2,3) world(foo) naver' 가 된다.
		 *
		 * @param {HTMLElement} elEl : 클래스명을 변경할 엘리먼트
		 * @param {String} sKey : 클래스명
		 * @param {Array} aVars : 클래스명에 추가적으로 넣을 값
		 *
		 * @return {HTMLElement} 클래스명이 변경된 엘리먼트
		 */
		set : function(elEl, sKey, aVars) {

			if (this.get(elEl, sKey)) {
				this.remove(elEl, sKey);
			}

			elEl.className += (elEl.className ? ' ' : '') + sKey + (aVars instanceof Array ? '(' + this._encode(aVars).join(',') + ')' : '');
			return elEl;

		},

		_encode : function(sStr) {

			if (!sStr) return sStr;

			if (sStr instanceof Array) {

				var aRet = [];
				for (var i = 0, nLen = sStr.length; i < nLen; i++) {
					aRet.push(arguments.callee(sStr[i]));
				}

				return aRet;

			}

			return String(sStr).replace(/(["',\(\)\\])/g, function(_, sChar) {

				switch (sChar) {
				case ',': sChar = '.'; break;
				case '(': sChar = '['; break;
				case ')': sChar = ']'; break;
				}

				return '\\' + sChar;

			});

		},

		/*
		 * nhn.comment.mobile.Util.DomData.set(document.body, 'foo', [ 'hello', 'wor,ld', '(kkk)' ]);
		 * nhn.comment.mobile.Util.DomData.get(document.body,'foo')
		 */

		_decode : function(sStr) {

			if (!sStr) return sStr;

			if (sStr instanceof Array) {

				var aRet = [];
				for (var i = 0, nLen = sStr.length; i < nLen; i++) {
					aRet.push(arguments.callee(sStr[i]));
				}

				return aRet;

			}

			return String(sStr).replace(/\\(["'\.\[\]\\])/g, function(_, sChar) {

				switch (sChar) {
				case '.': sChar = ','; break;
				case '[': sChar = '('; break;
				case ']': sChar = ')'; break;
				}

				return sChar;

			});

		},

		/**
		 * 엘리먼트에 지정된 클래스명의 추가정보를 얻어오는 메서드
		 *
		 * - elDiv 의 클래스명이 'hello(1,2,3)' 인 상태에서
		 *   nhn.comment.mobile.Util.DomData.get(elDiv, 'hello') 이라고 사용하면
		 *   반환되는 값은 [ '1', '2', '3' ] 이다.
		 *
		 * - elDiv 의 클래스명이 'hello(1,2,3) world' 인 상태에서
		 *   nhn.comment.mobile.Util.DomData.get(elDiv, 'world') 이라고 사용하면
		 *   반환되는 값은 [ ] 이다.
		 *
		 * - elDiv 의 클래스명이 'hello(1,2,3) world' 인 상태에서
		 *   nhn.comment.mobile.Util.DomData.get(elDiv, 'noexist') 이라고 사용하면
		 *   반환되는 값은 null 이다.
		 *
		 * @param {HTMLElement} elEl : 클래스명 정보를 얻어올 엘리먼트
		 * @param {String} sKey : 클래스명
		 *
		 * @return {Array} 해당 클래스명이 존재하지 않으면 null 이 리턴된다
		 */
		get : function(elEl, sKey) {
			var oRegExp = this._getRegExp(sKey);
			var elResult = this._checkElement(elEl, oRegExp);

			if (elResult) {
				return (this.last() || "").split(',');
			}

			return null;

		},

		/**
		 * 엘리먼트에 지정된 클래스명을 삭제하는 메서드
		 *
		 * - elDiv 의 클래스명이 'hello(1,2,3) world' 인 상태에서
		 *   nhn.comment.mobile.Util.DomData.remove(elDiv, 'hello') 이라고 사용하면
		 *   elDiv 의 클래스명은 'world' 가 된다.
		 *
		 * - elDiv 의 클래스명이 'hello(1,2,3) world' 인 상태에서
		 *   nhn.comment.mobile.Util.DomData.remove(elDiv, 'world') 이라고 사용하면
		 *   elDiv 의 클래스명은 'hello(1,2,3)' 가 된다.
		 *
		 * @param {HTMLElement} elEl : 클래스명을 삭제할 엘리먼트
		 * @param {String} sKey : 클래스명
		 *
		 * @return {HTMLElement} 클래스명이 삭제된 엘리먼트
		 */
		remove : function(elEl, sKey) {

			var oRegExp = this._getRegExp(sKey);
			elEl.className = elEl.className.replace(oRegExp, '$4').replace(/(^\s+|\s+$)/g, '');

			return elEl;

		},

		/**
		 * 마지막으로 얻은 클래스 내부의 값을 가지고 있던걸 반환
		 *
		 * @return {String} 값
		 */
		last : function() {
			return this._lastValue;
		},

		/**
		 * 자신을 포함하여 부모 엘리먼트로부터 특정한 클래스명이 존재하는지 탐색하여 그 엘리먼트를 반환한다
		 *
		 * @param {HTMLElement} elEl : 탐색을 시작할 엘리먼트
		 * @param {String} sKey : 클래스명
		 *
		 * @return {HTMLElement} 찾아낸 엘리먼트 (찾지 못했으면 null 반환)
		 */
		getParent : function(elEl, sKey, aVars) {

			var oRegExp = this._getRegExp(sKey, aVars);
			var elRet;

			var bHasClass = false;
			try { bHasClass = 'className' in elEl; } catch(e) {};

			for (; elEl && bHasClass; elEl = elEl.parentNode) {

				if (elRet = this._checkElement(elEl, oRegExp)) {
					return elRet;
				}

			}

			return null;

		},

		/**
		 * 자신을 제외하고 자식 엘리먼트로부터 특정한 클래스명이 존재하는지 탐색하여 그 엘리먼트를 반환한다
		 *
		 * @param {HTMLElement} elEl : 탐색을 시작할 엘리먼트
		 * @param {String} sKey : 클래스명
		 *
		 * @return {HTMLElement} 찾아낸 엘리먼트 (찾지 못했으면 null 반환)
		 */
		getChild : function(elEl, sKey, aVars) {

			if (elEl === document && typeof aVars === 'undefined') {

				this._gatherCollection();

				var elRet = this._oCollection[sKey];
				if (elRet && this._isInHTML(elRet)) {
					return elRet;
				}

				return J.$$.getSingle('div.' + sKey) || J.$$.getSingle('.' + sKey);

			}

			var oRegExp = this._getRegExp(sKey, aVars);

			var aChilds = elEl.getElementsByTagName('*');
			for (var i = 0, elChild; elChild = aChilds[i]; i++) {
				if (elRet = this._checkElement(elChild, oRegExp)) {
					return elRet;
				}
			}

			return null;

		},

		/**
		 * 자신을 제외하고 자식 엘리먼트로부터 특정한 클래스명이 존재하는지 탐색하여 그 모든 엘리먼트를 반환한다
		 *
		 * @param {HTMLElement} elEl : 탐색을 시작할 엘리먼트
		 * @param {String} sKey : 클래스명
		 *
		 * @return {Array} 찾아낸 엘리먼트
		 */
		getChildAll : function(elEl, sKey, aVars) {

			var aRet = [];
			var sTagName = '*';

			if (/^([a-z0-9]+)\./.test(sKey)) {
				sTagName = RegExp.$1;
				sKey = sKey.replace(/^([a-z0-9]+)\./, '');
			}

			var oRegExp = this._getRegExp(sKey, aVars);
			var elRet;

			var aChilds = elEl.getElementsByTagName(sTagName);
			for (var i = 0, elChild; elChild = aChilds[i]; i++) {
				if (elRet = this._checkElement(elChild, oRegExp)) {
					aRet.push(elRet);
				}
			}

			return aRet;

		},

		_getRegExp : function(sKey, aVars) {

			if (aVars) {
				var sEscapedKey = sKey + ('(' + this._encode(aVars).join(',') + ')').replace(/([\/\(\)\[\]\+\.\*\?\|\{\}\\])/g, '\\$1');
				return new RegExp('(^|\\s+)' + sEscapedKey + '(\\s+|$)', 'i');
			}

			return new RegExp('(^|\\s+)' + sKey + '(\\(([^\)]*)\\))?(\\s+|$)', 'i');
		},

		_checkElement : function(elEl, oRegExp) {

			if (oRegExp.test(elEl.className)) {
				this._lastValue = this._decode(RegExp.$3);
				return elEl;
			}

			return null;

		},

		_gatherCollection : function() {

			if (this._oCollection) {
				return;
			}

			var oCollection = {};

			var aEls = document.getElementsByTagName('*');
			var rReg = /(^|\b)_(\w+)(?=\(|\b|$)/g;

			for (var i = 0, elEl; elEl = aEls[i]; i++) {

				var aResult = elEl.className.match(rReg);
				if (aResult) {

					for (var j = 0, nLen = aResult.length; j < nLen; j++) {
						if (!oCollection[aResult[j]]) {
							oCollection[aResult[j]] = elEl;
						}
					}

				}

			}

			this._oCollection = oCollection;

		},

		_isInHTML : function(elEl) {

			do {

				if (elEl === document.body) {
					return true;
				}

			} while(elEl = elEl.parentNode);

			return false;

		}

	};
})();

nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};
nhn.comment.mobile.Util = nhn.comment.mobile.Util || {};

(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/*
	 * @class nhn.comment.mobile.Bubbler
	 * 버블링을 사용한 이벤트 바인딩을 구현하는 클래스
	 */
	Util.Bubbler = J.$Class( {

		/**
		 * @constructor
		 *
		 * @param {HTMLElement} elEl 어느 엘리먼트를 통해 이벤트를 잡아낼지 지정
		 */
		$init : function(elEl) {

			this._el = elEl;

			this._eventTypes = {};
			this._fpEventHandler = J.$Fn(this._eventHandler, this);

		},
		/**
		 * 이벤트 핸들러 등록
		 *
		 * @param {String} sEvent 이벤트 종류 및 클래스명
		 * @param {Function} fpHandler 이벤트 핸들러
		 */
		attach : function(sEvent, fpHandler) {

			// 객체 형태로 인자를 지정했을때는 루프를 돌아 모두 등록시킨다
			if (typeof sEvent == 'object') {

				var fp = arguments.callee;

				J.$H(sEvent).forEach( function(f, k) {
					fp.call(this, k, f);
				}, this);

				return this;
			}

			//모바일 사파리지원기능
			if (J.$Agent().navigator().msafari) {
				sEvent = sEvent.replace(/:mousedown$/, ':touchstart').replace(/:mousemove$/, ':touchmove').replace(/:mouseup$/, ':touchend');
			}


			// 이벤트명과 클래스명을 잘라냄
			var aParsed = sEvent.split(':');

			var sClassName = aParsed[0];
			var sType = aParsed[1].toLowerCase();
			var sNot = /^!/.test(sClassName) ? 'T' : 'F';

			sClassName = sClassName.replace(/^!/, '');

			// mouseenter 와 mouseleave 이벤트는 mouseover, mouseout 이벤트를 통해 구현해야 함
			var sRealType = sType;

			if (sRealType == 'mouseenter')
				sRealType = 'mouseover';
			else if (sRealType == 'mouseleave')
				sRealType = 'mouseout';

			// 이벤트 바인딩이 안되어 있으면
			if (!(sType in this._eventTypes)) {
				this._eventTypes[sType] = J.$H();
				this._fpEventHandler.attach(this._el, sRealType);
			}

			var whClassNames = this._eventTypes[sType];

			// 해당 클래스가 등록되어 있지 않으면
			if (!whClassNames.hasKey(sClassName)) {
				whClassNames.$(sClassName, { 'T' : J.$A(), 'F' : J.$A() });
			}

			// 핸들러 추가
			whClassNames.$(sClassName)[sNot].push(fpHandler);

			return this;

		},

		/**
		 * 이벤트 핸들러 등록 해제
		 *
		 * @param {String} sEvent 이벤트 종류 및 클래스명
		 * @param {Function} fpHandler 이벤트 핸들러
		 */
		detach : function(sEvent, fpHandler) {

			// 객체 형태로 인자를 지정했을때는 루프를 돌아 모두 등록 해제시킨다
			if (typeof sEvent == 'object') {
				var fp = arguments.callee;
				J.$H(sEvent).forEach( function(f, k) {
					fp.call(this, k, f);
				}, this);

				return this;
			}
			//모바일 사파리지원기능
			if (J.$Agent().navigator().msafari) {
				sEvent = sEvent.replace(/:mousedown$/, ':touchstart').replace(/:mousemove$/, ':touchmove').replace(/:mouseup$/, ':touchend');
			}

			// 이벤트명과 클래스명을 잘라냄
			var aParsed = sEvent.split(':');

			var sClassName = aParsed[0];
			var sType = aParsed[1].toLowerCase();
			var sNot = /^!/.test(sClassName) ? 'T' : 'F';

			sClassName = sClassName.replace(/^!/, '');

			var whClassNames = this._eventTypes[sType];
			var waHandlers = whClassNames.$(sClassName)[sNot];

			// 핸들러 목록에서 제거
			if (waHandlers) {

				var nIndexOf = waHandlers.indexOf(fpHandler);
				if (nIndexOf != -1)
					waHandlers.splice(nIndexOf, 1);

			}

		},

		/**
		 * 등록한 이벤트가 발생했을때 호출되는 메서드
		 *
		 * @param {$Event} oEvent 이벤트 객체
		 */
		_eventHandler : function(oEvent) {

			var sType = oEvent.type.toLowerCase();
			var sAltType = null;

			// mouseover, mouseout 이벤트인 경우 mouseenter, mouseleave 에 대한 처리를 해야함
			if (sType == 'mouseover')
				sAltType = 'mouseenter';
			else if (sType == 'mouseout')
				sAltType = 'mouseleave';

			if (sAltType) {
				this._launchEventHandlers(oEvent, this._eventTypes[sAltType], true);
			}

			this._launchEventHandlers(oEvent, this._eventTypes[sType]);

			oEvent = null;

		},

		_launchEventHandlers : function(oEvent, whClassNames, bAltType) {

			if (!whClassNames) {
				return;
			}

			var elSrc = oEvent.element;
			var elRelSrc = oEvent.relatedElement;

			// 해당 이벤트가 등록된 클래스를 루프돔
			whClassNames.forEach( function(oHandlers, sClassName) {

				var waHandlers = oHandlers['F'];
				var waNotHandlers = oHandlers['T'];

				// 이벤트가 발생한 엘리먼트가 해당 클래스명을 가졌는지 검사
				var elTar = Util.DomData.getParent(elSrc, sClassName);
				if (!elTar) {
					waNotHandlers.forEach( function(fpHandler) { fpHandler(oEvent); });
					J.$H.Continue();
				}

				// mouseenter, mouseleave 이벤트에 대한 판단을 해야하는 경우
				if (bAltType) {
					var elRelTar = Util.DomData.getParent(elRelSrc, sClassName);

					// 대상 안에서 mouseover, mouseout 이 발생한거면 무시
					if (elTar === elRelTar) {
						waNotHandlers.forEach( function(fpHandler) { fpHandler(oEvent); });
						J.$H.Continue();
					}
				}

				var aArgs = Util.DomData.get(elTar, sClassName);

				// 등록된 이벤트 핸들러 호출
				waHandlers.forEach( function(fpHandler) {
					fpHandler(oEvent, elTar, aArgs);
				});

				elTar = null;

			}, this);

		}

	});
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.config.js 2012. 03. 19
*/

(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	* @description 댓글 설정관련 클래스
	*/
	Comment.Config = J.$Class({
		/** @lends nhn.comment.mobile.Config.prototype */

		message : {},

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @param {HashTable} htUserOption 옵션 (생략가능)
		 * @extends jindo.Component
		 */
		$init : function(htOptions) {
			this.instance = {};

			this._initDefaultConfig();
			this._initConvertOption();

			if (typeof htOptions == 'object') {
				this.option(htOptions);
			}

			//이벤트 버블링 사용할 경우 상위 엘리먼트에 하이라이트가 되는 경우가 있어
			//하이라이트 되는 것을 막기 위해 (진도 1.5.3 에 구현되지 않아 추가해줌)
			Util.preventTapHighlightForJindoNotSupported();

			// 진도 1.5.3에 구현되지 않은 $A.set() 선언(있으면 skip)
			Util.arraySetJindoNotSupported();
		},

		/**
		 * @description 디폴트 옵션을 설정한다.
		 */
		_initDefaultConfig : function() {
			this.option('servicePath', 'comments');
			this.option('isLogin', false);	//로그인 유무
			this.option('objectUrl', '' + document.location);
			this.option('certUrl', 'https://nid.naver.com/user/mobile_rncheck.nhn?todo=start');
			this.option('loginUrl', 'https://nid.naver.com/nidlogin.login?svctype=262144');
			this.option('browser', J.$Agent().navigator().getName());

			//proxy에 지정해준 json 연결주소.
			var serviceAddress = document.location.protocol + '//';
			serviceAddress += document.location.host + '/';
			serviceAddress += this.option('servicePath') + '/';
			this.option('serviceAddress', serviceAddress);

			this.option('categoryId', 'default');	// 카테고리를 지정하지 않은 경우, 작성되는 댓글의 기본 카테고리명
			this.option('viewCategoryId', undefined);	// 카테고리를 지정하지 않은 경우, 리스팅하는 댓글들의 카테고리명. undefined 인 경우, 모든 카테고리를 리스팅

			this.option('method', 'post');	//ajax call
			this.option('pageSize', 25);	//한 페이지에 보일 개수
			this.option('pageNo', 1);
			this.option('isRedirectAfterDelete', false);	//삭제 후에 redirect 여부

			this.option('formation', ['count', 'write', 'sort', 'bestList', 'list', 'listFooter', 'page']);	//UI 순서
			this.option('commands', []);	//동작버튼 - 삭제와 신고버튼은 comment 영역에 포함됨
			this.option('isHideWriteForm', false);	//글쓰기 폼 숨김처리
			this.option('maximumCommentLength', 500);	// 글 입력 최대 문자열 개수
			this.option('enableMultiLine', false);	//멀티 라인 입력 허용 유무
			this.option('useEscapeHtml',true);	//HTML표현식을 태그로써 동작하지 않게 할 지를 설정

			this.option('myNickName', '');	//내 게시물일일때 닉네임 변경
			this.option('dateFormat', 'Y-m-d H:i');	//코멘트 날짜 포맷

			this.option('urlList', {});		// URL list
			
			this.option('booleans', {});
			this.option('comment', []);
			this.option('convention', {});
			this.option('initialized', false);
			this.option('pagingParameterName', 'page');		// 공통댓글용 페이지 파라미터명(적용되는 서비스와 충돌시 이를 바꿔서 적용하도록 Guide)
			this.option('hidePageAreaIfOnlyOnePageExist', true);	// 첫페이지만 존재하는 경우 페이징 영역을 hide 시킬지 여부
			this.option('maxDepth', 2);

			var htDeviceInfo = J.m.getDeviceInfo();
			
			this.option('useMoreContent', false );
			if ( htDeviceInfo.iphone || htDeviceInfo.ipad) { // IOs 계열인지 여부
				this.option('useMoreContent', true );
			}

			this.option('errorHandlers', {});
			
			this.option('isBlackMode', false);
			this.option('listType', 'u_comment_v2'); // 리스트 타입 v1, v2 선택 ( v1 은 서비스 내 댓글 목록형 )
			this.option('writeLinkUrl', '#'); // 서비스 댓글 쓰기 URL 링크
			this.option('innerSvcListSize', '3'); //서비스 내 댓글 목록형 댓글 노출 갯수
			this.option('innerSvcListSort', 'newest'); //서비스 내 댓글 목록형 정렬 기준
			this.option('useInnerSvcShowReply', true); //요약목록의 일반댓글의 답글 표시여부
			this.option('isSimpleList', false); // 요약목록의 답글, 공감/비공감 영역 표시여부
			this.option('useRecommendArea', false); // 추천영역(베스트댓글) 사용여부
			this.option('replyPageSize', 10); // 답글리스트 목록수 설정
			this.option('useRecommendBtnLevel', 2); // 답글버튼 레벨(2인 경우 부모글에만 답글을 달 수 있다)
			this.option('listAsync', false); // 리스트 ajax 호출시 동기 비동기 설정 
			this.option('useFocus', true); // 리스트의 이전/다음 버튼 클릭시 focus여부 
			this.option('landingCommentNo', null); // null이 아닌경우 해당 댓글번호가 있는 곳으로 landing
			this.option({'elements' : {
				body : '#comment_module',
				focusTarget : 'comment_focus',
				countArea : '.__comment_info',
				count : '.__comment_count',
				writeboxRoot : '.__comment_writebox_root_area',
				writebox : '.__comment_writebox',
				textarea : 'textarea',
				writeButton : '.__comment_write_btn',
				list : '.__comment_list',
				paginate : '.__comment_page_area',
				pagemore : '.__comment_page_more',
				pagenavigation : '.__comment_page_navigation',
				commandArea : '.__comment_command',
				bestCommentList : '.__best_comment_list'
			}});

			this.option({'css' : {
				commentItem : '__comment_item',
				commendDel : '__comment_del_btn',
				commendReport : '__comment_report_btn',
				textarea : '__comment_textarea',
				writeButton : '__comment_write_btn',
				replyItem : '__reply_item',
				noList : '__comment_no_list',
				writePrompt : '__comment_write_prompt',
				replyButton : '__comment_reply_form_btn',
				replyItemBest : '__reply_item_best',
				replyButtonBest : '__comment_reply_form_btn_best',
				replyCloseButton : '__comment_reply_close_btn',
				replyList : '__comment_reply_List',
				replyCloseBtnArea : '__comment_reply_close_btn_area',
				userRecommendYn : '__comment_user_recommend_yn',
				replyListPaging : '__comment_reply_list_paging',
				replyPrevButton : '__comment_reply_prev_btn',
				replyNextButton : '__comment_reply_next_btn',
				replyPageInfo : '__comment_reply_page',
				parentCommentNo : '__parent_comment_no'
			}});

			this.option({'templates' : {
				countArea : '<div class="u_comment_top __comment_info"></div>',
				countSimple : 
					'<div class="u_section">' +
						'<h2 class="c_fnt">댓글 <span class="u_count __comment_count">{=count}</span></h2>' + 
						'<a class="u_btn_refresh c_line c_bak __comment_refresh_btn" href="#">새로고침</a>' + 
						'<a class="u_btn_write c_line c_bak c_fnt __comment_writebox_view" href="#">댓글쓰기</a>' +
					'</div>',					
				rootWriteBoxArea : '<div class="u_comment_writebox __comment_writebox_root_area"></div>',
				replyWriteBoxArea : '<div class="u_comment_writebox __reply_item{if isUserRecommend}_best{/if}({=commentNo})" style="display:none;"></div>',
				writeBox :
					'<form action="">'+
					'<fieldset class="u_comment_write __comment_writebox">'+
					'<legend class="u_hc">댓글입력</legend>'+
					'<div class="u_writebox c_line">'+
					'<span class="u_write_text"><textarea id="upload_txt" rows="3" cols="30" class="__comment_textarea({=commentNo}) __comment_user_recommend_yn({if isUserRecommend}Y{else}N{/if})"></textarea></span>'+
					'<span class="u_data __comment_write_prompt({=commentNo})">{=writePrompt}</span>'+
					'</div>'+
					'{=socialCommentArea}'+
					'<span class="u_btn_upload"><input type="submit" title="등록" value="등록" class="u_btn_w c_fnt __comment_write_btn"></span>'+
					'</fieldset>'+
					'{if isUserRecommend}'+
					'<a href="#" class="u_btn_more __comment_reply_close_btn_area({=commentNo})">'+
						'<span class="u_btn_wrap">'+							
						'<span class="u_btm_txt open">답글접기</span>'+
						'</span>'+
					'</a>'+
					'{/if}'+
					'</form>',
				
				replyWriterArea : '<span class="u_comment_reply_writer u_comment_reply_writer{=replyLevel} __reply_writer">{=myNickName}</span>',
				replyBox :
					'<div class="u_comment_write u_comment_reply_area u_comment_reply_area{=replyLevel} __reply_item({=commentNo})">' +
						'<form action="#" method="post">' +
						'<fieldset>' +
						'<legend class="u_hc">댓글입력</legend>' +
						'<div>' +
							'<label class="u_hc" for="upload_txt{=commentNo}">댓글</label>' +
							'<span class="u_comment_input">' +
								'<textarea id="upload_txt{=commentNo}" class="u_comment_upload __comment_textarea({=commentNo})" rows="5" cols="30"></textarea>' +
							'</span>' +
							'<input class="u_comment_reply_ulbtn __comment_write_btn" type="button" value="등록">' +
						'</div>' +
						'{=socialCommentArea}'+
						'<p class="u_comment_promt __comment_write_prompt({=commentNo})">{=writePrompt}</p>' +
						'</fieldset>' +
						'</form>' +
					'</div>',
				writePrompt : '<em>{=inputCommentLength}</em> / {=maximumCommentLength}',
				bestList : '<ul class="u_comment_lst __best_comment_list"></ul>',
				list : '<ul class="u_comment_lst __comment_list"></ul>',
				noList : '<div class="u_comment_none">' +
							'<p>댓글이 없습니다.<br>첫번째 댓글을 남겨주세요.</p>' +							
						'</div>',

				comment :
					'<li class="u_comment_depth{if isUserRecommend} best{/if} __comment_item({=commentNo}) {if replyLevel > 1}u_comment_depth{=replyLevel}{/if}">' +
						'{if replyLevel > 1}<span class="u_depth">└</span>{/if}' +
						'<div class="u_comment_info">' +
						'<em class="u_name">{=writerNickName} <span class="u_id">({=writerId})</span></em> {=registeredDate}'+
						'{if !isMine} <span class="u_bar">|</span> <a href="#" class="u_report __comment_report_btn">신고</a></div>{/if}'+
						'{if isMine}<a href="#" class="u_btn_del __comment_del_btn __parent_comment_no({=parentCommentNo})">댓글삭제</a></div>{/if}' + 
						'<p class="u_comment_text u_comment_txt{=replyLevel}">{if isUserRecommend}<span class="u_recomm">공감댓글</span> {/if}{=contents}</p>'+
						'<div class="u_comment_reply __comment_reply">' +
						
						'<div class="u_comment_btns">'+
						'{if maxDepth > replyLevel}'+
							'{if isUserRecommend}' +
								'<a href="#" class="u_btn c_fnt c_line bt_arw close __comment_reply_form_btn_best({=commentNo})" ><span>답글</span> <b>{if replyCount != null}{=replyCount}{else}0{/if}</b></a>'+
							'{else}'+
								'<a href="#" class="u_btn c_fnt c_line __comment_reply_form_btn({=commentNo})" >답글</a>'+
							'{/if}' +
						'{/if}'+
						'{=socialCommentArea}'+
						'{=recommendDiscommendArea}'+
						'</div>'+
						'<ul class="u_comment_reply_list __comment_reply_List({=commentNo})" style="display:none;"></ul>'+
						'<div class="u_comment_reply_list_paging __comment_reply_list_paging({=commentNo})" style="display:none;">'+
						'<a href="#" class="u_rpg_pre __comment_reply_prev_btn" title="이전">이전 답글</a>'+
						'<a href="#" class="u_rpg_next __comment_reply_next_btn" title="다음">다음 답글</a>'+
						'</div>'+
						'</div>'+
					'</li>',
				deleteComment :					
					'<li class="u_comment_depth __comment_item({=commentNo}) {if replyLevel > 1}u_comment_depth{=replyLevel}{/if}">' +
						'{if replyLevel > 1}<span class="u_depth">└</span>{/if}' +
						'<div class="u_comment_del">{if replyLevel > 1}답글{/if}{if replyLevel < 2}댓글{/if}이 삭제되었습니다.'+
						'</div>' +
					'</li>',
                   
				blockComment :					
					'<li class="u_comment_depth __comment_item({=commentNo}) {if replyLevel > 1}u_comment_depth{=replyLevel}{/if}">' +
						'{if replyLevel > 1}<span class="u_depth">└</span>{/if}' +
						'<div class="u_comment_del">'+
						'{if status == 7 }'+
						'본 게시물은 저작권법 제103조에 의거하여 저작권자의 요청으로 임시 게시중단 되었습니다.'+
						'{elseif status == 8 || status == 9}'+
						'본 게시물은 정보통신망이용촉진및정보보호등에 관한 법률 제44조의2를 준수하기 위해 다른 이용자의 요청으로 임시 게시중단 되었습니다.'+
						'{/if}'+
						'</div>' +
					'</li>',
				emptyComment :
					'<li class="u_comment_lst u_empty_comment_lst __comment_item(empty)" style="display:none;">' +
						'<div>' +
							'<p class="u_comment_txt u_emtpy_comment_txt" style="word-break:break-all;line-break: all;word-wrap:break-word;">' +
							'. . .'+
							'</p>' +
						'</div>' +
					'</li>',
				reportForm :
					'<form id="commentReportForm" method="GET" target="_parent">' +
					'<input type="hidden" name="itemSvcCd" id="itemSvcCd" value="CBM"/>' +
					'<input type="hidden" name="itemType" id="itemType" value="CMNT"/>' +
					'<input type="hidden" name="itemVirtualSvcCd" id="itemVirtualSvcCd" value=""/>' +
					'<input type="hidden" name="itemId" id="itemId" value=""/>' +
					'<input type="hidden" name="itemTitle" id="itemTitle" value=""/>' +
					'<input type="hidden" name="itemCateId" id="itemCateId" class="itemCateId0" value=""/>' +
					'<input type="hidden" name="itemCateName" id="itemCateName" class="itemCateName0" value=""/>' +
					'<input type="hidden" name="itemCateLevel" id="itemCateLevel" class="itemCateLevel0" value=""/>' +
					'<input type="hidden" name="itemWriterId" id="itemWriterId" value=""/>' +
					'<input type="hidden" name="itemEncyptWriterId" id="itemEncyptWriterId" value=""/>' +
					'<input type="hidden" name="itemWriterNick" id="itemWriterNick"/>' +
					'<input type="hidden" name="itemDt" id="itemDt" value=""/>' +
					'<input type="hidden" name="m" id="m" value="rprtMobileFrm"/>' +
					'<input type="hidden" name="retUrl" id="retUrl" value=""/>' +
					'<input type="submit" style="display:none;"/>' +
					'</form>',
				pageArea :
					'<div class="__comment_page_area"></div>' ,
				pageMore :
				    '<div class="u_pg __comment_page_more">' +
				    	'<a href="#" class="u_pg_btn __comment_more_button">'+
				    		'<span class="u_pg_wrap">'+
				    			'<span class="u_pg_area">'+
				    				'<span class="u_pg_lod __comment_more_loading" style="display:none;">'+
				    					'<span class="u_pg_lodic">로딩중..</span>'+
				    				'</span>'+
				    				'<span class="u_pg_txt">'+
				    				'<span><span class="__comment_more_moreCnt"></span>개 더보기</span><br/>'+
				    					'<span class="u_pg_cnt"><span class="__comment_more_current"></span> / <span class="u_pg_total __comment_more_total"></span></span>' +
				    				'</span>' +
				    			'</span>' +
				    		'</span>' +
				    	'</a>' +
				    	'<span class="u_pg_btn __comment_more_last" style="display:none;">' +
				    		'<span class="u_pg_wrap">' +
				    			'<span class="u_pg_area">' +
				    				'<span class="u_pg_txt">'+
				    					'<span class="u_pg_cnt"><span class="__comment_more_current"></span> / <span class="u_pg_total __comment_more_total"></span></span>'+
				    				'</span>'+
				    			'</span>'+
				    		'</span>'+
				    	'</span>'+
				    	'<a href="#" class="u_pg_top __comment_more_top">맨위로</a>'+
				    '</div>',
				pageNavigation :
					'<div class="u_pg2 __comment_page_navigation">' +
					 	'<a href="#" class="u_pg2_btn u_pg2_prev __comment_page_prev"><span class="">이전</span></a>' +
					 	'<span class="u_pg2_btn u_pg2_prev __comment_page_prev-off"><span class="">이전</span></span>' +
					 	'<em class="u_pg2_pg __comment_page_info">1-10 <span class="u_pg2_total">/ </span></em>' +
					 	'<a href="#" class="u_pg2_btn u_pg2_next __comment_page_next"><span class="">다음</span></a>' +
					 	'<span class="u_pg2_btn u_pg2_next  __comment_page_next-off"><span class="">다음</span></span>' +
					 '</div>',
				pageInfoTemplate :
					'{=STARTINDEX}-{=ENDINDEX}<span class="u_pg2_total"> / {=ITEMCOUT}</span>',
				replyPageInfo : '<span class="u_comment_reply_page __comment_reply_page"><em><span>현재페이지 </span>{=curPage}<span>페이지</span></em> / <span>전체페이지 </span>{=totalPage}<span>페이지</span></span>'
			}});
		},

		/**
		 * @description 옵션을 사용하기 편하게 변경해 준다.
		 */
		_initConvertOption : function() {
			//boolean 값으로 바꿔줄값
			var booleans = this.option('booleans');
			booleans.isMine = true;
			booleans.isAdmin = true;
			booleans.isReply = true;
			booleans.isDeleted = true;
			booleans.isVisible = true;
			booleans.isAuthor = true;
			booleans.isAuthorComment = true;
			booleans.isUserRecommend = true;
			booleans.isAuthorRecommend = true;
			booleans.isRecommendArea = true;
			booleans.isMobile = true;

			//json으로 전송되어온 변수중 사용할 변수는 여기에 추가시킨다.
			var comment = this.option('comment');
			comment.push('parentCommentNo');
			comment.push('commentNo');
			comment.push('writerNickName');
			comment.push('writerId');
			comment.push('writerIp');
			comment.push('maskedWriterId');
			comment.push('isMine');
			comment.push('isAdmin');
			comment.push('contents');
			comment.push('registeredDate');
			comment.push('modifiedDate');
			comment.push('replyLevel');
			comment.push('isReply');
			comment.push('isDeleted');
			comment.push('isVisible');
			comment.push('writerProfileUrl');
			comment.push('writerProfileType');
			comment.push('isMe2DayPosted');
			comment.push('upCount');
			comment.push('downCount');
			comment.push('isUserRecommend');
			comment.push('isAuthorRecommend');
			comment.push('isRecommendArea');
			comment.push('isAuthor');
			comment.push('isAuthorComment');
			comment.push('replyCount');
			comment.push('objectScore');
			comment.push('status');
			comment.push('isMobile');
			comment.push('personacon');
			comment.push('categoryId');
			comment.push('ticket');

			var convention = this.option('convention');
			convention = {
				parentCommentNo : 'parent_comment_no',
				commentNo : 'comment_no',
				groupNo : 'group_no',
				writerNickName : 'writer_nickname',
				writerId : 'writer_id',
				encodedWriterId : 'enc_writer_id',
				maskedWriterId : 'masked_writer_id',
				writerIp : 'writer_ip',
				registeredDate : 'registered_ymdt',
				modifiedDate : 'modified_ymdt',
				replyLevel : 'reply_level',
				typeCode : 'comment_type_code',
				isMine : 'is_mine',
				isAdmin : 'is_admin',
				isReply : 'is_reply',
				isDeleted : 'deleted_yn',
				isVisible : 'visible_yn',
				isMe2DayPosted : 'is_me2day_posted',
				ticket : 'ticket',
				objectId : 'object_id',
				objectUrl : 'object_url',
				replyCount : 'reply_count',
				writerProfileUrl : 'writer_profile_url',
				writerProfileType : 'writer_profile_type',
				upCount : 'up_count',
				downCount : 'down_count',
				isUserRecommend : 'user_recommend_yn',
				isAuthorRecommend : 'author_recommend_yn',
				isRecommendArea : 'is_recommend_area',
				isAuthor : 'is_author',
				isAuthorComment : 'is_author_comment',
				objectScore : 'object_score',
				status : 'status',
				isMobile : 'mobile_yn',
				personacon : 'personacon',
				categoryId : 'category_id'
			};

			this.option('convention', convention);
		},

		/**
		 * @description 엘리먼트 접근자를 반환하거나 옵션에 저장한다.
		 * @param	{Object}	oName		엘리먼트접근이름
		 * @param	{String}	sElement	엘리먼트접근값(클래스명,타입,아이디)
		 * @return	{String|Object|null}
		 */
		element : function(oName, sElement) {
			var htElements = this.option('elements');

			if (typeof htElements == 'undefined' || htElements === null) {
				htElements = {};
				this.option('elements', htElements);
			}

			if (typeof oName == 'object') {
				for(var sKey in oName) {
					htElements[sKey] = oName[sKey];
				}
			} else if (typeof oName == 'string') {
				if (typeof sElement == 'string') {
					htElements[oName] = sElement;
				} else {
					return htElements[oName];
				}
			} else {
				return null;
			}
		},

		/**
		 * @description 템플릿을 반환하거나 옵션에 저장한다.
		 * @param	{Object}	oName		템플릿접근이름
		 * @param	{String}	sElement	템플릿
		 * @return	{jindo.$Template|Object|null}
		 */
		template : function(oName, sTemplate) {
			var htTemplates = this.option('templates');

			if (typeof htTemplates == 'undefined' || htTemplates === null) {
				htTemplates = {};
				this.option('templates', htTemplates);
			}

			if (typeof oName == 'object') {
				for(var sKey in oName) {
					htTemplates[sKey] = oName[sKey];
				}
			} else if (typeof oName == 'string') {
				if (typeof sTemplate == 'string') {
					htTemplates[oName] = sTemplate;
				} else {
					return J.$Template(htTemplates[oName]);
				}
			} else {
				return null;
			}
		},

		/**
		 * @description 클래스를 반환하거나 옵션에 저장한다.
		 * @param	{Object}	oName		클래스접근이름
		 * @param	{String}	sStyle		클래스명
		 * @return	{String|Object|null}
		 */
		css : function(oName, sStyle) {
			var htStyles = this.option('css');

			if (typeof htStyles == 'undefined' || htStyles === null) {
				htStyles = {};
				this.option('css', htStyles);
			}

			if (typeof oName == 'object') {
				for(var sKey in oName) {
					htStyles[sKey] = oName[sKey];
				}
			} else if (typeof oName == 'string') {
				if (typeof sStyle == 'string') {
					htStyles[oName] = sStyle;
				} else {
					return htStyles[oName];
				}
			} else {
				return null;
			}
		},

		/**
		 * @description 메시지를 재정의 한다.
		 * @param	{String}	sName		메시지명
		 * @param	{String}	sMessage	메시지내용
		 */
		message : function(oName, sMessage) {
			var htMessage = this.message;

			if (typeof oName == 'object') {
				for(var sKey in oName) {
					htMessage[sKey] = oName[sKey];
				}
			} else if (typeof oName == 'string') {
				if (typeof sMessage == 'string') {
					htMessage[oName] = sMessage;
				}
			}
		},
		
		/**
		 * @description 서버에서 설정 값을 가져와서 config에 세팅한다.
		 */
		setTicketConfig : function() {
			var htParams = {
				ticket : this.option('ticket')
			};
			
			this.instance.ajax.call({
				operation : 'ticketConfig',
				onSuccess : J.$Fn(function(oResponse) {
					this.option('social', oResponse.social);
				}, this).bind(),
				param : htParams
			});
		},
		
		getUrlList : function() {
			var whtUrlList = J.$H(this.option('urlList'));
	    	if (whtUrlList.length() == 0) {
	    		this.instance.ajax.call({
	    			operation : 'urlList',
	    			onSuccess : J.$Fn(function(oResponse) {
	    				this.option('urlList', oResponse.url_list);
	    			}, this).bind(),
	    			param : {}
	    		});
	    	}
	    	
	    	return this.option('urlList');
		}
	}).extend(J.Component);


	Comment.Config.prototype.message.UNAVAILABLE_OPERATION = '요청한 동작을 수행할 수 없습니다.';
	Comment.Config.prototype.message.ALREADY_REPORT = '이미 신고된 글입니다.';
	Comment.Config.prototype.message.REPORT_COMPLETE = "신고 완료 처리 되었습니다.";
	Comment.Config.prototype.message.NOT_LOGIN = '로그인이 필요한 서비스 입니다.\n로그인 하시겠습니까?';
	Comment.Config.prototype.message.EXCEED_MAX_LENGTH = '최대 {=max}자까지 입력할 수 있습니다.';
	Comment.Config.prototype.message.NO_CONTENTS = '내용을 입력해주세요.';
	Comment.Config.prototype.message.DELETE_CONFIRM = '정말 삭제하시겠습니까?';
	Comment.Config.prototype.message.CREATE_ERROR_PWORD_BLOCK = '작성하신 내용에 금칙어가 포함되어 있습니다. [{=pwords}]';
	Comment.Config.prototype.message.CREATE_ERROR_PWORD_ABUSING = '작성하신 내용에 사용이 제한된 문구가 포함되어 일시적으로 등록이 제한됩니다.';
	Comment.Config.prototype.message.DEFAULT_TEXT = '주제와 무관한 댓글, 악플은 삭제될 수 있습니다.';
	Comment.Config.prototype.message.NOT_AUTHENTICATED = '정보통신망법에 따라 게시판에 글 작성 시 실명확인이 필요합니다.\n실명확인을 하시겠습니까?';

	nhn.comment.config = new Comment.Config();

})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};


/**
* @(#)nhn.comment.mobile.ajax.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 댓글에서 ajax 호출과 응답 처리 클래스
	 */
	Comment.Ajax = J.$Class({
		/** @lends nhn.comment.mobile.Ajax.prototype */

		message : {},

		_htDefaultErrors : {},
		error : {
			create : {}
		},

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this.option('handlers', {});
			this.option('list', 'list_comment.nhn');
			this.option('moreList', 'list_next_comment.nhn');
			this.option('create', 'set_comment.nhn');
			this.option('delete', 'delete_comment.nhn');
			this.option('isReport', 'isreported_comment.nhn');
			this.option('report', 'report_comment.nhn');
			this.option('isLogin', 'is_logged_in.nhn');
			this.option('vote', 'vote_comment.nhn');
			this.option('checkAuth', 'is_authenticated_name.nhn');
			this.option('snsAuthStatus', 'get_sns_auth_status.nhn');	// SNS 연동 인증 상태 조회 API
			this.option('ticketConfig', 'get_ticket_config.nhn');		// 티켓 설정 조회 API
			this.option('urlList', 'get_url_list.nhn');	// URL list 조회 API
			this.option('replyList', 'list_reply_comment.nhn'); // reply list 조회 API

			this.indexInstance = Comment.Ajax.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * errorHandler 초기화.
		 */
		initErrorHandler : function() {
			//댓글 등록시 로그인상태가 아니면 아래 Error Code(403101) 리턴, 실명 미인증시면 Error Code(301) 리턴
			// 기본 errorHandler
			this.setErrorHandlers({
				'403101' : J.$Fn(this._handleNotLoginError, this).bind(),
				'301' : J.$Fn(this._handleNotAuthError, this).bind()
			});

			// 사용자가 customizing한 handler가 있을 경우, 해당 handler 등록
			this.setErrorHandlers(this.config.option('errorHandlers'));
		},

		/**
		 * @description 파라미터를 반환한다.
		 * @return	{HashTable}	파라미터
		 */
		getCommonParams : function() {
			var htParams = {};

			htParams.ticket = this.config.option('ticket');
			htParams.object_id = this.config.option('objectId');
			htParams._ts = (new Date().getTime());

			//lkey는 보안키. config에 use_secure_key 가 true라면 lkey가 없으면 결과값을 반환하지 않는다.
			if (typeof this.config.option('lkey') != 'undefined') {
				htParams.lkey = this.config.option('lkey');
			}

			if (typeof this.config.option('viewCategoryId') != 'undefined') {
				htParams.view_category_id = this.config.option('viewCategoryId');
			}

			if (typeof this.config.option('categoryId') != 'undefined') {
				htParams.category_id = this.config.option('categoryId');
			}

			return htParams;
		},

		/**
		 * @description 리스트용 파라미터를 반환한다.
		 * @return	{HashTable}	파라미터
		 */
		getListParams : function() {
			var htParams = this.getCommonParams();
			htParams.page_size = this.config.option('pageSize');
			return htParams;
		},

		/**
		 * @description 처리동작에 맞는 ajax 호출 url 을 반환한다.
		 * @return	{String}	url
		 */
		getUrl : function(sOperation) {
			var sUrl = this.config.option('serviceAddress') + this.option(sOperation);
			return sUrl;
		},

		/**
		 * @description ajax 를 호출한다.
		 * @param	{HashTable}	url & 파라미터
		 */
		call : function(htOptions) {
			var handler = this.option('handlers');
			delete handler[htOptions.operation];
			handler[htOptions.operation] = htOptions.onSuccess;

			var sUrl = this.getUrl(htOptions.operation);
			var req = J.$Ajax(sUrl, {
				method : this.config.option('method') || 'post',
				async : htOptions.async ? htOptions.async : false,
				onload : J.$Fn(this._onSuccess, this).bind(htOptions.operation, htOptions.param),
				onerror : J.$Fn(this._onError, this).bind(htOptions.errorMessage)
			});
			req.request(htOptions.param);
		},

		callSync : function(operation, param) {
			var sUrl = this.getUrl(operation);
			var context = { success:undefined, response:undefined };
			var req = J.$Ajax(sUrl, {
				method : this.config.option('method') || 'post',
				async : false,
				onload : J.$Fn(this._onSuccessSync, this).bind(context),
				onerror : J.$Fn(this._onErrorSync, this).bind(context)
			});
			req.request(param);
			// 연결 성공여부
			if(context.success) {
				// 응답의 에러코드 확인
				var errorCode = this._errorHandler(context.response, this.error[operation]);
				if(errorCode == 0) {
					// 성공적인 응답인 경우, json 응답결과의 객체를 반환한다.
					return context.response;
				}
			}
		},

		_onSuccessSync : function(context, response) {
			context.success = true;
			context.response = response.json();
		},

		_onErrorSync : function(context, response) {
			context.success = false;
		},

		/**
		 * @description 응답 성공시 callback 함수를 호출한다.
		 */
		_onSuccess : function(sType, htParams, oResult) {
			var oMessage = oResult.json();

			if (this._errorHandler(oMessage, this.error[sType]) === 0) {
				var fn = this.option('handlers')[sType];
				fn(oMessage, htParams);
			}
		},

		/**
		 * @description 응답 에러시 에러코드에 맞는 메시지를 alert 으로 출력한다.
		 */
		_onError : function(oMessage, oResult) {
			if(typeof oMessage != 'undefined'){
				alert(oMessage);
			}
		},

		/**
		 * @description 응답은 성공했으나, 에러코드가 반환될 경우, 해당하는 에러 메시지를 alert 으로 출력한다.
		 */
		_errorHandler : function(message, errorhandler) {
			if (!message.error) {
				return -1;
			}

			var error = message.error;

			if ( !error.no || error.no == '0') {
				return Number(error.no);
			}

			if (error.no == '-1') {
				alert(this.config.message.UNAVAILABLE_OPERATION);
				return Number(error.no);
			}

			if (errorhandler && errorhandler[error.no]) {
				var fnTemp = J.$Fn(errorhandler[error.no], this).bind();
				fnTemp(message);
			} else {
				if (this._htDefaultErrors && this._htDefaultErrors[error.no]) {
					this._htDefaultErrors[error.no](message, this);
				} else {
					alert(error.message);
				}
			}

			return Number(error.no);
		},

		/**
		 * AJax결과에 대한 error handler 등록
		 */
		setErrorHandlers : function(htHandlers) {
			if ( typeof htHandlers != 'object') {
				return;
			}

			for ( var sKey in htHandlers) {
				this._htDefaultErrors[sKey] = htHandlers[sKey];
			}
		},

		//댓글 등록시 로그인상태가 아니면 아래 Error Code(403101) 리턴, 실명 미인증시면 Error Code(301) 리턴
		//재 로그인이 필요하므로 기존 로그인 여부 플래그 false 지정후 로그인필요 컨펌 노출
		_handleNotLoginError : function(oResult, oThis) {
			oThis.config.option('isLogin', false);
			oThis.config.instance.auth.redirectLogin();
		},

		_handleNotAuthError : function(oResult, oThis) {
			oThis.config.option('isAuth', false);
			oThis.config.instance.auth.redirectAuth();
		}

	}).extend(J.Component);

	nhn.comment.ajax = new Comment.Ajax();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.commentItem.js 2012. 03. 19
*/
(function() {

	var J = window.nhn.comment.mobile.jindo || jindo,
	    Comment = nhn.comment.mobile,
	    Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 댓글 아이템을 생성하는 클래스 (listArea Class 에서 댓글 개수만큼 commentItem 인스턴스를 생성해서 dom 에 append 하는 구조임)
	 */
	Comment.CommentItem = J.$Class({
		/** @lends nhn.comment.mobile.CommentItem.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @param	{HashTable}	htOptions	댓글생성시필요한 옵션들
		 * @extends jindo.Component
		 */
		$init : function(htOptions) {
			this.indexInstance = htOptions.indexInstance;
			this.config = Comment.Config.getInstance()[this.indexInstance];

			var _values = this.config.option('comment');
			var _convention = this.config.option('convention');
			var _booleans = this.config.option('booleans');

			//옵션에 저장되어있는 키값으로,
			//받아온 htOption에 대입시켜 값을 옵션에 넣는다.
			for ( var i =0 ; i < _values.length ; i++){
				var key = _convention[_values[i]];

				if (typeof key == 'undefined') {
					key = _values[i];
				}

				var value = htOptions[key];

				if (_booleans[_values[i]]) {
					value = (value == 'Y');
				}
				if (key == 'reply_count') {
					value = Util.setNumberFormat(value == null ? 0 : value);
					
				}
				this.option(_values[i], value);
			}

			this.option('maxDepth', this.config.option('maxDepth'));

			// 설정객체를 통째로 넣는다
			this.option('config', this.config);
		},

		/**
		 * @description 댓글을 생성한다.
		 * @param	{jindo.$Element}	welParent	부모엘리먼트
		 */
		createItem : function(welParent, nPreSiblingCommentNo) {
			var sTplComment = null;

			if (this.option('isDeleted')) {
				sTplComment = this.config.template('deleteComment');
			} else {
				//삭제된것은 아니지만 게시중단댓글일 경우는 삭제는 가능하지만 댓글 내용은 게시중단에 알맞게 보여준다.
				if(Util.isInterruptedComment(this.option('status'))){
					sTplComment = this.config.template('blockComment');
				} else {
					sTplComment = this.config.template('comment');
				}
			}

			// 소셜댓글
			this.option('socialCommentArea', this._createSocialCommentAreaHtml());
			
			// 추천비추천
			this.option('recommendDiscommendArea', this._createRecommendDiscommendAreaHtml());
			
			var sComment = sTplComment.process(this.option());
			var welComment = J.$Element(sComment);

			// 이전 commentNo가 0이면 가장 앞에 추가
			if ( nPreSiblingCommentNo == 0) {
				var welCommentBody = this.config.instance.core.getBody();
				var welBestList = J.$Element(welCommentBody.query(this.config.element('bestCommentList')));
				if (welBestList == null || welBestList.query('.first') == null) {
					var welCommentList = J.$Element(welCommentBody.query(this.config.element('list')));
					if(!!welCommentList.query('.first')){
						welCommentList.query('.first').removeClass('first');
					}
					welComment.addClass('first');
				} else {
					welComment.addClass('best');
				}
				welParent.prepend(welComment);
			} else  {
				var welPreSiblingLi = J.$Element(this.config.instance.listarea.getElCommentLiTag(nPreSiblingCommentNo));
				welPreSiblingLi.after(welComment);
			}

			this._populateCommand(welComment);
			this._createReplyWriteBox(welComment);
		},
		
		/**
		 * @description 베스트댓글을 생성한다.
		 * @param	{jindo.$Element}	welParent	부모엘리먼트
		 */
		createBestItem : function(welParent, nPreSiblingCommentNo, isReply) {
			var sTplComment = null;

			if (this.option('isDeleted')) {
				sTplComment = this.config.template('deleteComment');
			} else {
				//삭제된것은 아니지만 게시중단댓글일 경우는 삭제는 가능하지만 댓글 내용은 게시중단에 알맞게 보여준다.
				if(Util.isInterruptedComment(this.option('status'))){
					sTplComment = this.config.template('blockComment');
				} else {
					sTplComment = this.config.template('comment');
				}
			}

			// 소셜댓글
			this.option('socialCommentArea', this._createSocialCommentAreaHtml());
			
			// 추천비추천
			this.option('recommendDiscommendArea', this._createRecommendDiscommendAreaHtml());
			
			var sComment = sTplComment.process(this.option());
			var welComment = J.$Element(sComment);

			// 이전 commentNo가 0이면 가장 앞에 추가
			if ( nPreSiblingCommentNo == 0) {
				if(!isReply) {
					welComment.addClass('first');
				}
				welParent.prepend(welComment);
				if(isReply){
					welComment.attr('tabindex', '-1');
					welComment.$value().focus();
					// focus영역표시를 없애기 위해 다시 blur시킨다
					welComment.$value().blur();
					welComment.attr('tabindex', null);
				}
			} else  {
				var welPreSiblingLi = J.$Element(this.config.instance.bestlistarea.getElCommentLiTag(nPreSiblingCommentNo));
				welPreSiblingLi.after(welComment);
			}

			this._populateCommand(welComment);
			this._createReplyWriteBox(welComment);
		},
		
		/**
		 * @description 소셜댓글 영역 HTML 생성
		 * @returns {String} 소셜댓글 영역 HTML
		 */
		_createSocialCommentAreaHtml : function() {
			// 소셜댓글 인스턴스가 있는지 체크
			if (!Comment.SocialCommentArea || !this.config.option('isLogin')) {
				return '';
			}
			
			// 있으면 소셜댓글 영역 HTML 가져와서 반환
			this.config.instance.socialCommentArea = Comment.SocialCommentArea.getInstance()[this.indexInstance];
			return this.config.instance.socialCommentArea.createListAreaHtml(this.option());
		},
		
		/**
		 * @description 추천비추천 영역 HTML 생성
		 * @returns {String} 추천비추천 영역 HTML
		 */
		_createRecommendDiscommendAreaHtml : function() {
			// 추천비추천 인스턴스가 있는지 체크
			if (!Comment.RecommendDiscommendArea) {
				return '';
			}
			
			// 있으면 추천비추천 영역 HTML 가져와서 반환
			this.config.instance.recommendDiscommendArea = Comment.RecommendDiscommendArea.getInstance()[this.indexInstance];
			
			var sHtml = '<div class="u_comment_recomm __comment_recomm">' + this.config.instance.recommendDiscommendArea.createListAreaHtml(this.option()) + '</div>';
			return sHtml;
		},

		/**
		 * Command영역 생성
		 */
		_populateCommand : function(welComment) {
			if ( welComment == null) return;
			var welCommandArea = J.$Element(welComment.query(this.config.element('commandArea')));

			if ( welCommandArea == null ) return;
			var sCommandText = this._createCommand();

			if ( sCommandText == null) return;
			welCommandArea.appendHTML(sCommandText);
		},

		/**
		 * 답글 영역 생성
		 */
		_createReplyWriteBox : function(welComment) {
			this.option('isLogin', this.config.option('isLogin'));
			this.option('maximumCommentLength', this.config.option('maximumCommentLength'));

			this.config.instance.writearea.createReplyArea(welComment, this.option());
		},

		/**
		 * @description 댓글을 상태에 맞는 코맨드를 생성한다.
		 */
		_createCommand : function() {
			var aCommands = this.config.option('commands');
			var sOperation = '',
				sText = '',
				aCommandText = [];

			for ( var i = 0; i < aCommands.length; i++) {
				sText = '';
				sOperation = aCommands[i];

				//만약 삭제된 댓글이라면 커맨드를 만들지 않는다.
				if(this.option('isDeleted')){
					continue;
				}

				//만약 게시중단된 댓글이라면 삭제명령만 통과시킨다.
				if (Util.isInterruptedComment(this.option('status')) && !(sOperation === 'delete')) {
					continue;
				}

				// deleteCommand, reportCommand 존재.
				sText = this.config.template(sOperation + 'Command').process(this.option());

				//만약 권한등의 이유로 표시 안되는 명령이 있다면, 다음 명령으로 넘어간다.
				if(sText == "") {
					continue;
				}
				aCommandText.push(sText);
			}

			return aCommandText.join('');
		},

		getCommentNo : function() {
			return this.option('commentNo');
		},

		getReplyLevel : function() {
			return this.option('replyLevel');
		},

		getRegisteredDate : function() {
			return this.option('registeredDate');
		},

		isDeleted : function() {
			return this.option('isDeleted') == true;
		}
	}).extend(J.Component);
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.command.js 2012. 03. 19
*/

(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 댓글 리스트에서의 명령어 처리(삭제 등)
	 */
	Comment.Command = J.$Class({
		/** @lends nhn.comment.mobile.Command.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this.indexInstance = Comment.Command.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * 댓글을 삭제한다.
		 * @param	{jindo.$Event}	oEvent	이벤트객체
		 * @param	{HTMLElement}	elItem	엘리먼트
		 */
		deleteComment : function(oEvent, elItem) {
			oEvent.stop();

			var deleteConfirmMessage = this.config.message.DELETE_CONFIRM;

			if(!confirm(deleteConfirmMessage)){
				return false;
			}

			var htParams = this.config.instance.ajax.getListParams();
			htParams.comment_no = this.getCommentNo(elItem);
			htParams.page_no = this.config.instance.pagearea.getPageNo();
			htParams.best_yn = J.$Element(elItem).attr('best_yn');
			htParams.sort = this.config.option('currentSortOption');
			
			this.config.instance.ajax.call( {
				operation : 'delete',
				onSuccess : J.$Fn(this._onDeleteComment, this).bind(),
				param : htParams
			});
		},

		/**
		 * 댓글을 삭제한다.
		 * @param	{jindo.$Event}	oEvent	이벤트객체
		 * @param	{HTMLElement}	elItem	엘리먼트
		 */
		deleteBestReplyComment : function(oEvent, elItem) {
			oEvent.stop();
			var parentCommentNo = Util.DomData.get(elItem, this.config.css('parentCommentNo'))[0];
			if(parentCommentNo == 0 || parentCommentNo == null) {
				J.$Element(elItem).attr('best_yn','Y');
				this.deleteComment(oEvent, elItem);
				return;
			}
			var deleteConfirmMessage = this.config.message.DELETE_CONFIRM;

			if(!confirm(deleteConfirmMessage)){
				return false;
			}

			var htParams = this.config.instance.ajax.getListParams();
			htParams.comment_no = this.getCommentNo(elItem);
			htParams.page_no = this.config.instance.pagearea.getPageNo();
			htParams.parent_comment_no = parentCommentNo;
			
			this.config.instance.ajax.call( {
				operation : 'delete',
				onSuccess : J.$Fn(this._onDeleteBestReplyComment, this).bind(),
				param : htParams
			});
		},
		
		//덧글 신고
		reportComment : function(oEvent, elItem) {
			oEvent.stop();

			var params = {};
			params.ticket = this.config.option('ticket');
			params.object_id = this.config.option('objectId');
			params.comment_no = this.getCommentNo(elItem);

			//해당 신고가 이미 접수된것인지 알아본다.
			var response = this.config.instance.ajax.callSync('isReport', params);
			if(response) {
				if (response.reported_yn === 0) {
					// 공통신고팝업으로 redirect 하는 페이지의 URL과 파라미터를 생성한다.
					var url = document.location.protocol + '//' + document.location.host + '/' + 'comments' + '/' + 'get_report_information.nhn';
					if (params.ticket == '' || params.commentNo == '-1') {
						alert(commonMessage.openFail);
					}
					J.$Ajax(url, {
						async: false,
						onload: this.redirectCommonReport
					}).request({
						comment_no: params.comment_no,
						ticket: params.ticket,
						object_id: params.object_id,
						is_mobile: params.is_mobile,
						retUrl: params.retUrl
					});
				} else {
					// 이미 신고된 경우 중복신고 alert 창을 띄운다.
					alert(this.config.message.ALREADY_REPORT);
				}
			}
		},
		// 공통 덧글 신고 창으로 이동
		redirectCommonReport : function(result) {
			var message = result.json();
			var categoryList = message.category;

			var report = J.$Form('commentReportForm');
			report.$value().action = message.srp_url;
			report.value('itemVirtualSvcCd', message.virtual_service_code);
			report.value('itemId', message.content_id);
			report.value('itemTitle', message.contents);

			var categoryId = "";
			var categoryIds = new Array();
			var categoryNames = new Array();
			var categoryLevels = new Array();
			for(var index in categoryList){
				var category = categoryList[index];
				if(categoryId.length > 0){
					categoryId += ";";
				}
				categoryId += category.category_id;
				categoryIds.push(categoryId);
				categoryNames.push(category.category_name);
				categoryLevels.push(category.category_level);
			}
			report.value('itemCateId', categoryIds);
			report.value('itemCateName', categoryNames);
			report.value('itemCateLevel', categoryLevels);

			report.value('itemWriterId', message.masked_writer_id);
			report.value('itemEncyptWriterId', unescape(message.writer_id));
			report.value('itemWriterNick', message.writer_nickname);
			report.value('itemDt', message.registered_ymdt);
			report.value('retUrl', encodeURIComponent(window.location.href));

			report.submit();
		},
		
		/**
		 * 댓글의 번호를 반환한다.
		 * @param	{HTMLElement}	elItem	엘리먼트
		 * @return	{String}	댓글번호
		 */
		getCommentNo : function(elItem) {
			var sItemClass = this.config.css('commentItem');
			var elParent = Util.DomData.getParent(elItem, sItemClass);
			Util.DomData.get(elParent, sItemClass);

			return Util.DomData.last();
		},

		/**
		 * 댓글 삭제 후 처리
		 */
		_onDeleteComment : function(oResponse, htParams) {
			this.config.instance.sortListArea.resetArea();
			if (this.config.option('useMoreContent') && !this.config.option('isRedirectAfterDelete') && htParams.best_yn != "Y") {
				this.config.instance.listarea.deleteCommentForIos(htParams.comment_no);
			} else if ( !this.config.option('isRedirectAfterDelete')) {
				this.config.instance.listarea.refreshWithTheResult(oResponse);
			} else {
				var htParam = {};
				htParam[this.config.option('pagingParameterName') ] = this.config.option('pageNo');
				Util.movePage(this.config.option('objectUrl') , htParam);
			}
			
			var oResult = {};
			oResult.commentNo = htParams.comment_no;
			oResult.totalCount = this.config.instance.pagearea.getTotalCount();
			
			this._processAfterDelete(oResult);
		},
		

		/**
		 * 댓글 삭제 후 처리
		 */
		_onDeleteBestReplyComment : function(oResponse, htParams) {
			this.config.instance.bestlistarea.callReplyList(htParams.parent_comment_no, 1);
		},

		_processAfterDelete : function(oResult) {
			this.config.fireEvent('afterDelete', {
				'result': oResult
			});
		},

		toggleReplyForm : function(oEvent, elItem) {
			oEvent.stop();

			var sCommentNo = this.getCommentNo(elItem);
			
			var welReplyForm = J.$Element(Util.DomData.getChild(this.config.instance.listarea.getAreaElement().$value(), this.config.css('replyItem'), [sCommentNo ]));

			if ( !this.config.instance.listarea.toggleTargetAreaDependsOnLoginAndAuth(welReplyForm) ) {
				return;
			}
			this.config.instance.listarea.toogleReplyBtn(J.$Element(elItem));
		},
		
		/**
		 * 베스트답글 버튼 처리
		 */
		toggleReplyFormBest : function(oEvent, elItem) {
			oEvent.stop();
			var sCommentNo = this.getCommentNo(elItem);

			this.config.instance.bestlistarea.toogleReplyBtnBest(sCommentNo);
		},

		/**
		 * 베스트답글 버튼 처리 하단
		 */
		toggleReplyFormBestBottom : function(oEvent, elItem) {
			oEvent.stop();
			var sCommentNo = this.getCommentNo(elItem);
			this.config.instance.bestlistarea.toogleReplyBtnBest(sCommentNo);
			var welBtn = this.config.instance.bestlistarea._getAreaChildElement('replyButtonBest', sCommentNo);
			welBtn.$value().focus();
		}
	}).extend(J.Component);

	nhn.comment.command = new Comment.Command();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.countArea.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 카운트영역을 처리하는 클래스
	 */
	Comment.CountArea = J.$Class({
		/** @lends nhn.comment.mobile.CountArea.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._welArea = null;

			this.indexInstance = Comment.CountArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * @description 카운트영역을 생성한다.
		 * @return {jindo.$Element}
		 */
		createArea : function() {
			this._welArea = J.$Element(this.config.template('countArea').process());
			return this._welArea;
		},

		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this.update(0);
			this._createBubbler();
		},

		/**
		 * @description 카운트영역을 반환한다.
		 * @return {jindo.$Element}
		 */
		getAreaElement : function() {
			return this._welArea;
		},

		/**
		 * @description 카운트영역을 업데이트한다.
		 */
		update : function(nTotalCount) {
			var elCount = null;

			this.getAreaElement().empty();

			elCount = this.config.template('countSimple').process({count : nTotalCount});
			this.getAreaElement().append(elCount);
		},

		/**
		 * @description 이벤트를 할당한다.
		 */
		_createBubbler : function() {
			this._oBubbler = new Util.Bubbler(this.getAreaElement().$value()).attach({
				'__comment_writebox_view:click' : J.$Fn(this._onClickWriteboxView, this).bind(),
				'__comment_refresh_btn:click' : J.$Fn(this._onClickRefreshButton, this).bind()
				
			});

			this.getAreaElement().preventTapHighlight(true);
		},

		/**
		 * @description 글쓰기 페이지 이동 버튼
		 * @param	{jindo.$Event}	oEvent	이벤트객체
		 */
		_onClickWriteboxView : function(oEvent) {
			oEvent.stop();
			
			top.location = this.config.option('writeLinkUrl');
		},
		_onClickRefreshButton : function(oEvent) {
			oEvent.stop();
			
			this.config.instance.listarea.refresh();
		}
	}).extend(J.Component);

	nhn.comment.countarea = new Comment.CountArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.writeArea.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 글쓰기 영역을  처리하는 클래스
	 */
	Comment.WriteArea = J.$Class({
		/** @lends nhn.comment.mobile.WriteArea.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._whtWriteArea = J.$H({});

			this._welArea = null;
			this._welTextarea = null;

			this.indexInstance = Comment.WriteArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * @description 글쓰기 영역을 생성한다.
		 * @return {jindo.$Element}
		 */
		createArea : function() {
			this._welArea = J.$Element(this.config.template('rootWriteBoxArea').process());
			return this._welArea;
		},

		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this._createWriteBox();
			this._createBubbler(this._welArea, this._welTextarea);
		},

		/**
		 * 답글 영역 생성
		 */
		createReplyArea : function(welComment, htOptions) {
			if ( welComment == null || htOptions == null ) {
				return;
			}
			
			var welReply = welComment.query('.__comment_reply');
			
			if ( welReply == null ) {
				return;
			}

			var sReplyWriteArea = this.config.template('replyWriteBoxArea').process(htOptions);
			var welReplyWriteArea = J.$Element(sReplyWriteArea);

			// 답글 작성자 영역
			//var sReplyWriterArea = this._createReplyWriterAreaHtml(htOptions.replyLevel);
			//welReplyWriteArea.append(J.$Element(sReplyWriterArea));

			// 답글쓰기창 영역
			htOptions.writePrompt = this._createWritePromptHtml(0);
			htOptions.socialCommentArea = this._createSocialCommentAreaHtml(false);
			var sWriteBox = this.config.template('writeBox').process(htOptions);
			welReplyWriteArea.append(J.$Element(sWriteBox));
			welReply.append(welReplyWriteArea);

			// 기본문구 적용
			var welTargetTextarea = J.$Element(Util.DomData.getChild(welReplyWriteArea.$value(), this.config.css('textarea')));
			welTargetTextarea.text(this.config.message.DEFAULT_TEXT);

			// 이벤트 설정
			this._createBubbler(welReplyWriteArea, welTargetTextarea);
		},

		/**
		 * 답글 작성자 영역 생성
		 */
		_createReplyWriterAreaHtml : function(sReplyLevel) {
			var htParam = {};
			htParam.replyLevel = sReplyLevel;
			htParam.myNickName = this.config.option('myNickName');
			return this.config.template('replyWriterArea').process(htParam);
		},

		/**
		 * 댓글, 답글 쓰기창 입력 문자 카운트 영역 생성
		 */
		_createWritePromptHtml : function(sLength) {
			return this.config.template('writePrompt').process({
				"maximumCommentLength" : this.config.option('maximumCommentLength'),
				"inputCommentLength" : sLength
			});
		},

		/**
		 * 해당 comment에 대한 댓글, 답글 쓰기창 입력 문자 카운트 업데이트
		 */
		_updatePromptArea : function(sTargetCommentNo, bestYn, sLength) {
			var elTargetPrompt = null;
			if(bestYn == "Y") {
				elTargetPrompt = Util.DomData.getChild(this.config.instance.bestlistarea.getAreaElement().$value(), this.config.css('writePrompt'), [sTargetCommentNo]);
			} else {
				elTargetPrompt = Util.DomData.getChild(this.config.instance.core.getBody().$value(), this.config.css('writePrompt'), [sTargetCommentNo]);
			}
			
			if ( elTargetPrompt == null) {
				return;
			}

			var sWritePrompt = this._createWritePromptHtml(sLength);

			J.$Element(elTargetPrompt).html(sWritePrompt);
		},

		/**
		 * @description 글쓰기영역을 반환한다.
		 * @return {jindo.$Element}
		 */
		getAreaElement : function() {
			return this._welArea;
		},

		/**
		 * @description 글쓰기영역을 보여준다.
		 */
		show : function() {
			this._welArea.show();
		},

		/**
		 * @description 글쓰기 창에 포커스
		 */
		focus : function(sTargetCommentNo, bestYn) {
			this._getTargetTextarea(sTargetCommentNo, bestYn).$value().focus();
		},

		/**
		 * @description 글쓰기 창에 포커스아웃
		 */
		blur : function(sTargetCommentNo, bestYn) {
			this._getTargetTextarea(sTargetCommentNo, bestYn).$value().blur();
		},

		/**
		 * @description 소셜댓글 영역 HTML 생성
		 * @param bRoot {Boolean} 최상위 댓글 여부(댓글:true, 답글:false)
		 * @returns {String} 소셜댓글 영역 HTML
		 */
		_createSocialCommentAreaHtml : function(bRoot) {
			// 소셜댓글 인스턴스가 있는지 체크
			if (!Comment.SocialCommentArea ) {
				return '';
			}
			
			// 있으면 소셜댓글 영역 HTML 가져와서 반환
			this.config.instance.socialCommentArea = Comment.SocialCommentArea.getInstance()[this.indexInstance];
			
			return this.config.instance.socialCommentArea.createWriteBoxAreaHtml(bRoot);
		},

		/**
		 * @description 소셜댓글 이벤트 바인딩 호출
		 * @param elTargetArea {Element} 이벤트 바인딩할 영역
		 */
		_createSocialCommentBubbler : function(elTargetArea) {
			// 소셜댓글 인스턴스가 없으면 패스
			if (!Comment.SocialCommentArea ) {
				return;
			}
			
			// 소셜댓글에 이벤트 바인딩
			this.config.instance.socialCommentArea = Comment.SocialCommentArea.getInstance()[this.indexInstance];
			if (this.config.instance.socialCommentArea) {
				this.config.instance.socialCommentArea.createWriteBoxBubbler(elTargetArea.query(this.config.element('socialCommentWriteBoxArea')));
			}
		},
		
		/**
		 * @description 소셜댓글 체크박스 파라미터 처리
		 * @param welForm {WrappingElement} 글쓰기 폼
		 * @param oParam {HashTable} 파라미터 해시 테이블
		 * @returns {HashTable} oParam 받은 파라미터 다시 반환
		 */
		_getSocialCommentParams : function(welForm, oParam) {
			// 소셜댓글 인스턴스가 없으면 패스
			if (!Comment.SocialCommentArea ) {
				return oParam;
			}
			
			// 소셜댓글에 이벤트 바인딩
			this.config.instance.socialCommentArea = Comment.SocialCommentArea.getInstance()[this.indexInstance];
			if (this.config.instance.socialCommentArea) {
				return this.config.instance.socialCommentArea.getParams(welForm, oParam);
			}
			
			return oParam;
		},
		
		/**
		 * @description 글쓰기 폼을 생성한다.
		 */
		_createWriteBox : function() {
			var sWritePrompt = this._createWritePromptHtml(0);
			var sSocialComment = this._createSocialCommentAreaHtml(true);
			var sWriteBox = this.config.template('writeBox').process({
				"isLogin" : this.config.option('isLogin'),
				"writePrompt" : sWritePrompt,
				"socialCommentArea" : sSocialComment,
				"commentNo" : 0
			});
			var welWriteBox = J.$Element(sWriteBox);
			this._welArea.append(welWriteBox);

			this._welTextarea = J.$Element(welWriteBox.query(this.config.element('textarea')));
			this._welTextarea.text(this.config.message.DEFAULT_TEXT);

			if (this.config.option('isHideWriteForm')) {
				this._welArea.hide();
			} else {
				this._welArea.show();
			}
		},

		/**
		 * @description 이벤트를 바인딩한다.
		 */
		_createBubbler : function(welTargetWriteArea, welTargetTextArea) {
			this._oBubbler = new Util.Bubbler(welTargetWriteArea.$value()).attach({
				'__comment_textarea:keydown' : J.$Fn(this._onKeyDownWriteBox, this).bind(),
				'__comment_write_btn:click' : J.$Fn(this._onClickWriteBtn, this).bind(),
				'__comment_textarea:click' : J.$Fn(this._onClickWriteBox, this).bind()				
			});

			J.$Fn(this._onBlurWriteBox, this).attach(welTargetTextArea.$value(), 'blur');
			J.$Fn(this._onFocusWriteBox, this).attach(welTargetTextArea.$value(), 'focus');

			welTargetWriteArea.preventTapHighlight(true);
			
			this._createSocialCommentBubbler(welTargetWriteArea);	// 소셜댓글 이벤트 바인딩
		},

		/**
		 * bind된 function release
		 */
		releaseBubbler : function(sCommentNo) {
			var elTargetTextArea = Util.DomData.getChild(this.config.instance.listarea.getAreaElement().$value(), this.config.css('textarea'), [sCommentNo]);
			
			if ( elTargetTextArea == null ) { // n차 댓글이 없는 경우는 return
				return;
			}

			J.$Fn(this._onBlurWriteBox, this).detach(elTargetTextArea, 'blur');
			J.$Fn(this._onFocusWriteBox, this).detach(elTargetTextArea, 'focus');
		},

		/**
		 * @description 포커스 이벤트 발생시
		 * @param	{jindo.$Event} oEvent 이벤트 객체
		 */
		_onFocusWriteBox : function(oEvent) {		
			
			this._afterFocus(oEvent);
		},

		/**
		 * @description 포커스 이벤트 발생시
		 * 				//크롬, 모바일 브라우저에서 confirm 창에서 취소를 눌러도
		 * 				textarea 에 focus 가 가서 무한루프가 돌아서 blur 로 회피함
		 * @param	{jindo.$Event} oEvent 이벤트 객체
		 */
		_afterFocus : function(oEvent) {
			// for cross-browsing
			var welTextarea = J.$Element(oEvent.$value().target);
			if ( welTextarea == null) {
				welTextarea = J.$Element(oEvent.element);
			}

			this._hideDefaultText(welTextarea);
		},

		/**
		 * @description 포커스 이벤트 발생시
		 * @param	{jindo.$Event} oEvent 이벤트 객체
		 */
		_onBlurWriteBox : function(oEvent) {
			// for cross-browsing
			var welTextarea = J.$Element(oEvent.$value().target);
			if ( welTextarea == null) {
				welTextarea = J.$Element(oEvent.element);
			}

			this._showDefaultText(welTextarea);
		},

		/**
		 * @description 키다운이벤트 발생시
		 * @param	{jindo.$Event} oEvent 이벤트 객체
		 */
		_onKeyDownWriteBox : function(oEvent) {
			// 기기 별로 textarea에 값을 입력후 이벤트 발생하기도 하고, 입력전에 발생하기도 하여
			// 약간의 delay설정(모두 입력후 발생하도록)
			if (!this.config.instance.auth.redirectLogin()) {
				return;
			}
			
			setTimeout(J.$Fn(this._doAfterKeyDownEvent, this).bind(oEvent), 10);
		},
		
		/**
		 * @description 클릭이벤트 발생시
		 * @param	{jindo.$Event} oEvent 이벤트 객체
		 */
		_onClickWriteBox : function(oEvent) {
			if (!this.config.instance.auth.redirectLogin()) {
				var sTargetCommentNo = Util.DomData.get(oEvent.element, this.config.css('textarea'))[0];
				var bestYn = Util.DomData.get(oEvent.element, this.config.css('userRecommendYn'))[0];
				this.blur(sTargetCommentNo, bestYn);
				return;	
			}
		},

		_doAfterKeyDownEvent : function(oEvent) {
			// for cross-browsing
			var elTarget = oEvent.$value().target;
			if ( elTarget == null) {
				elTarget = oEvent.element;
			}

			var sTargetCommentNo = Util.DomData.get(elTarget, this.config.css('textarea'))[0];
			var bestYn = Util.DomData.get(elTarget, this.config.css('userRecommendYn'))[0];
			if ( Util.isFunctionalKey(oEvent.key().keyCode) ) {
				var welTextArea = this._getTargetTextarea(sTargetCommentNo, bestYn);
				this._whtWriteArea.$(sTargetCommentNo, welTextArea.text());
				this._updatePromptArea(sTargetCommentNo, bestYn, J.$S(welTextArea.text()).trim().$value().length);

				return;
			}

			this._detectOverMaxLength(sTargetCommentNo, bestYn);
		},

		/**
		 * @description 글쓰기 버튼 클릭시
		 * @param	{jindo.$Event} oEvent 이벤트 객체
		 */
		_onClickWriteBtn : function(oEvent) {
			oEvent.stop();

			if (!this.config.instance.auth.redirectLogin()) {
				return;
			}
			if (!this.config.instance.auth.redirectAuth()) {
				return;
			}

			var welForm = J.$Element(oEvent.element).parent(function(v){  
	            return v.tag == 'form';
	        })[0];
			var elTextArea = Util.DomData.getChild(welForm.$value(), this.config.css('textarea'));

			var welTextarea = J.$Element(elTextArea);

			var sTargetCommentNo = Util.DomData.get(elTextArea, this.config.css('textarea'))[0];
			var sText = Util.trim(welTextarea.text());

			if (sText == this.config.message.DEFAULT_TEXT) {
				sText = '';
			}

			var bestYn = Util.DomData.get(elTextArea, this.config.css('userRecommendYn'))[0];
			if(!Util.validation(
					sText,
					1,
					this.config.option('maximumCommentLength'),
					this.config.message.NO_CONTENTS,
					false,
					this.config.message.EXCEED_MAX_LENGTH)){
				this.focus(sTargetCommentNo, bestYn);
				return;
			}

			//덧글이 입력되지 않았으면 에러
			if (sText.length === 0 || Util.compareTextWithoutRetuneChar(sText,this.config.message.DEFAULT_TEXT)) {
				alert(this.config.message.NO_CONTENTS);
				this.focus(sTargetCommentNo, bestYn);
				return;
			}

			//Fixed By qpitlove 글을 작성하기전에 외부에서 추가 파라미터를 설정할수 있도록 oParam 추가함
			var oParam = {};
			oParam.parent_comment_no = sTargetCommentNo;
			// 베스트 댓글의 답글인 경우 저장후 답글리스트 영역만 재정의 되기위한 flag로 사용
			oParam.user_recommend_yn = bestYn;
			oParam = this._getSocialCommentParams(welForm, oParam);	// 소셜댓글 파라미터 처리

			this._requestWrite(sText, oParam);
		},

		/**
		 * @description 글쓰기를 요청한다.
		 * @param	{String} sText 입력글
		 * @param	{Object} oParam 파라미터로 전달될 추가 파라미터
		 */
		_requestWrite : function(sText, oParam) {
			var htParams = this.config.instance.ajax.getCommonParams();
			htParams.page_size = this.config.option('pageSize');
			htParams.object_url = this.config.option('objectUrl');
			htParams.contents = sText;
			htParams.mobile_yn = 'Y';

			for(var prop in oParam){
				htParams[prop] = oParam[prop];
			}

			if ( !this._processBeforeWrite(htParams) ) {
				return;
			}

			this.config.instance.ajax.call( {
				operation : 'create',
				onSuccess : J.$Fn((htParams.user_recommend_yn == "Y" ? this._onWriteBestReply : this._onWrite), this).bind(),
				errorMessage : this.config.message.UNAVAILABLE_OPERATION,
				param : htParams
			});
		},

		/**
		 * @description 글쓰기를 완료하면 페이지 새로고침을 한다.
		 */
		_onWrite : function(oResponse, htParams) {
			this.config.option('currentSortOption','newest');
			this.config.instance.sortListArea.resetArea();
			this._initTargetWriteArea(htParams.parent_comment_no);

			if ( !this._processAfterWrite(this._extractCreatedCommentFromResponse(oResponse)) ) {
				return;
			}

			if (this.config.option('useMoreContent') ) {
				this._writeForIos(oResponse, htParams);
				return;
			}

			this._writeForAndroid(oResponse, htParams);
		},

		/**
		 * 베스트댓글의 답글저장후 처리
		 */
		_onWriteBestReply : function(oResponse, htParams) {
			this._initTargetWriteAreaBestReply(htParams.parent_comment_no);
			this.config.instance.bestlistarea.callReplyList(htParams.parent_comment_no, 0);
		},

		/**
		 * 글 등록후 해당 영역 초기화
		 */
		_initTargetWriteArea : function(sCommentNo) {
			// 글 등록후 답글창 숨기기
			this._hideTargetReplyForm(sCommentNo);

			// 글 등록후 기본문구로 대체함
			this._getTargetTextarea(sCommentNo, "N").text(this.config.message.DEFAULT_TEXT);

			// 입력 길이 초기화
			this._updatePromptArea(sCommentNo, "N", 0);
		},

		/**
		 * 배스트댓글의 답글 등록후 해당 영역 초기화
		 */
		_initTargetWriteAreaBestReply : function(sCommentNo) {
			// 글 등록후 답글창 숨기기
			//this._hideTargetReplyForm(sCommentNo);

			// 글 등록후 기본문구로 대체함
			this._getTargetTextarea(sCommentNo, "Y").text(this.config.message.DEFAULT_TEXT);

			// 입력 길이 초기화
			this._updatePromptArea(sCommentNo, "Y", 0);
		},

		
		/**
		 * 안드로이드 및 일반 브라우저에서 쓰기 완료후 동작
		 */
		_writeForAndroid : function(oResponse, htParams) {
			this.config.instance.listarea.refreshWithTheResult(oResponse);
		},

		/**
		 * 글작성 전 전처리
		 */
		_processBeforeWrite : function(htParam) {
			return this.config.fireEvent('beforeWrite', {
				'oParam' : htParam
			});
		},

		/**
		 * 글작성후 후처리(리스트 그리기 전)
		 */
		_processAfterWrite : function(htResultComment) {
			return this.config.fireEvent('afterWrite', {
				'oResultComment': htResultComment
			});
		},

		/**
		 * IOs 글쓰기
		 */
		_writeForIos : function(oResponse, htParams) {
			var oRawCreatedComment = this._extractCreatedCommentFromResponse(oResponse);

			oRawCreatedComment = this.config.instance.listarea.preProcessForRawComment(oRawCreatedComment, oResponse.author_yn);
			var oComment = new Comment.CommentItem(oRawCreatedComment);

			var nPreSiblingCommentNo = this.config.instance.commentListModel.findPreSiblingCommentNoOfCreatedComment(oRawCreatedComment.parent_comment_no, oRawCreatedComment.reply_level);
			
			/*
			 * 답글인 경우 기존 답글의 수에따라 자신이 쓴 글이 여러페이지 후에 나올 수도 있다.
			 * 안드로이드는 페이지 이동이므로 상관 없지만 IOs는 더보기가 여러번 호출 되어야 할 수도 있으므로
			 * 현재 페이지에 자신이 쓴 글이 없다면 자신의 글을 추가하지 않는다.
			 */ 
			if( nPreSiblingCommentNo != 'empty'){
				oComment.createItem(this.config.instance.listarea.getAreaElement(), nPreSiblingCommentNo);
				this.config.instance.commentListModel.addComment(oComment, nPreSiblingCommentNo);
			}
			// empty 태그 보여주기
			this.config.instance.listarea.showOrHideEmptyLiTag();

			// Nolist 영역 감추기
			this.config.instance.listarea.showOrHideNoListLiTag();

			// 페이지 및 카운트 영역 update
			this.config.instance.pagearea.update(oResponse.page_no, this.config.instance.pagearea.getTotalCount()+1);
			this.config.instance.countarea.update(this.config.instance.pagearea.getTotalCount());
						
			//답글 버튼 전환
			var welReplyButton = J.$Element(Util.DomData.getChild(this.config.instance.listarea.getAreaElement().$value(), this.config.css('replyButton'), [oRawCreatedComment.parent_comment_no]));
			this.config.instance.listarea.toogleReplyBtn(welReplyButton);
			
		},

		/**
		 * 답글창 숨기기
		 */
		_hideTargetReplyForm : function(sParentCommentNo) {
			if ( sParentCommentNo == null || sParentCommentNo == 0) {
				return;
			}

			var elTargetTextArea = Util.DomData.getChild(this.config.instance.listarea.getAreaElement().$value(), this.config.css('replyItem'), [sParentCommentNo]);

			if ( elTargetTextArea == null) {
				return;
			}

			J.$Element(elTargetTextArea).hide();
			
		},

		/**
		 * Response에서 생성된 comment만 추출
		 */
		_extractCreatedCommentFromResponse : function(oResponse) {
			if ( oResponse  == null || oResponse.comment_list == null || oResponse.create_result == null|| oResponse.create_result.comment_no == null) {
				return null;
			}

			var aCommentList = oResponse.comment_list;
			for (var nIndex in aCommentList ) {
				if ( aCommentList[nIndex].comment_no == oResponse.create_result.comment_no) {
					return aCommentList[nIndex];
				}
			}

			return null;
		},

		/**
		 * @description 입력된 글자가 허용된 글자를 넘는지 체크한다.
		 */
		_detectOverMaxLength : function(sTargetCommentNo, bestYn) {
			var wel = this._getTargetTextarea(sTargetCommentNo, bestYn);

			var sText = wel.text();

			var sResult = Util.validation(
					sText,
					1,
					this.config.option('maximumCommentLength'),
					false,
					false,
					this.config.message.EXCEED_MAX_LENGTH);

			if ( sResult) {
				this._whtWriteArea.$(sTargetCommentNo, sText);
				this._updatePromptArea(sTargetCommentNo, bestYn, sText.trim().length);
				return;
			}

			//결과값이 올바르지 않으면 전의 값을 삽입하고, 올바르면 이전값을 저장해놓는다.
			var sPrevText = this._whtWriteArea.$(sTargetCommentNo);
			wel.text(sPrevText == null ? '' : sPrevText);
		},

		_getTargetTextarea : function(sTargetCommentNo, bestYn) {
			if ( sTargetCommentNo == 0 ) {
				return this._welTextarea;
			}
			
			if (bestYn == "Y") {
				return J.$Element(Util.DomData.getChild(this.config.instance.bestlistarea.getAreaElement().$value(), this.config.css('textarea'), [sTargetCommentNo]));
			} else {
				return J.$Element(Util.DomData.getChild(this.config.instance.listarea.getAreaElement().$value(), this.config.css('textarea'), [sTargetCommentNo]));
			}
		},

		/**
		 * @description 디폴트 문자열을 보여준다.
		 */
		_showDefaultText : function(welTextarea) {
			var sText = welTextarea.text();

			if (Util.trim(sText) == '') {
				welTextarea.text(this.config.message.DEFAULT_TEXT);
			}
		},

		/**
		 * @description 디폴트 문자열을 숨겨준다.
		 */
		_hideDefaultText : function(welTextarea) {
			var sText = welTextarea.text();

			if (Util.compareTextWithoutRetuneChar(sText, this.config.message.DEFAULT_TEXT)) {
				welTextarea.text('');
			}
		}
	}).extend(J.Component);

	nhn.comment.writearea = new Comment.WriteArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.BestListArea.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 베스트목록영역을 처리하는 클래스
	 */
	Comment.BestListArea = J.$Class({
		/** @lends nhn.comment.mobile.BestListArea.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._welArea = null;

			this.indexInstance = Comment.BestListArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			this._oResult = null;
		},

		/**
		 * @description 목록영역을 생성한다.
		 * @return {jindo.$Element}
		 */
		createArea : function() {
			//var sNoListLiTag = this.config.template('noList').process();
			//var sEmptyComment = this.config.template('emptyComment').process();
			this._welArea = J.$Element(this.config.template('bestList').process());
			if(this.config.option('useSortList') != true && this.config.option('useRecommendArea') == true) {
				this._welArea.attr('id',this.config.element('focusTarget'));
			}
			return this._welArea;
		},

		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this._createBubbler();
		},

		/**
		 * @description 목록영역을 반환한다.
		 * @return {jindo.$Element}
		 */
		getAreaElement : function() {
			return this._welArea;
		},

		/**
		 * @description 이벤트를 바인딩한다.
		 */
		_createBubbler : function() {
			this._oBubbler = new Util.Bubbler(this.getAreaElement().$value()).attach({
				'__comment_del_btn:click' : J.$Fn(this.config.instance.command.deleteBestReplyComment, this.config.instance.command).bind(),
				'__comment_report_btn:click' : J.$Fn(this.config.instance.command.reportComment, this.config.instance.command).bind(),
				'__comment_reply_form_btn_best:click' : J.$Fn(this.config.instance.command.toggleReplyFormBest, this.config.instance.command).bind(),
				'__comment_reply_close_btn_area:click' : J.$Fn(this.config.instance.command.toggleReplyFormBestBottom, this.config.instance.command).bind(),
				'__comment_reply_prev_btn:click' : J.$Fn(this.movePrevReplyList, this).bind(),
				'__comment_reply_next_btn:click' : J.$Fn(this.moveNextReplyList, this).bind()
			});

			this.getAreaElement().preventTapHighlight(true);
			
			this._createRecommendDiscommendBubbler(this.getAreaElement());	// 추천비추천 이벤트 바인딩
		},

		/**
		 * @description 베스트 목록 영역을 다 지운다.
		 */
		empty : function() {
			this.getAreaElement().empty();
		},

		/**
		 * @description 목록을 보여준다.
		 * @param	{Object}	oResult				결과
		 */
		showBestList : function(oResult) {
			
			if ( oResult == null || oResult.comment_list == null || oResult.total_count == null || oResult.page_no == null) {
				return;
			}

			// list에 추가전 마지막 commentNo 기억
			//var sLastCommentNo = this.config.instance.commentListModel.getBaseLastCommentNo();
			this._addBestComment(oResult.recommended_list, oResult.author_yn);
			this._oResult = oResult;
		},

		/**
		 * @description 베스트 댓글리스트 추가 
		 */
		_addBestComment : function(htCommentList, sAuthorYn) {
			if ( htCommentList == null) {
				return;
			}

			var oRawComment = null,	oComment = null;
			var nLastCommentNo = 0;
			for ( var nIndex = 0 ; nIndex < htCommentList.length ; nIndex++) {
				oRawComment = this.preProcessForRawComment(htCommentList[nIndex], sAuthorYn);
				oComment = new Comment.CommentItem(oRawComment);
				oComment.createBestItem(this.getAreaElement(), nLastCommentNo, false);
				nLastCommentNo = htCommentList[nIndex].comment_no;
			}
		},

		/**
		 * 해당 sCommentNo에 해당하는 comment element를 반환.
		 */
		getElCommentLiTag : function(sCommentNo) {
			if ( sCommentNo == null) {
				return null;
			}

			return Util.DomData.getChild(this.getAreaElement().$value(), this.config.css('commentItem'), [sCommentNo]);
		},

		/**
		 * @description	댓글 아이템 전처리
		 * @param	{HashTable}	htComment	댓글 아이템
		 */
		preProcessForRawComment : function(htComment, sAuthorYn) {
			if ( htComment.done_preprocessing) {
				return htComment;
			}

			htComment.registered_ymdt = Comment.Util.dateFormat(htComment.registered_ymdt, this.config.option('dateFormat'));
			htComment.modified_ymdt = Comment.Util.dateFormat(htComment.modified_ymdt, this.config.option('dateFormat'));

			if (this.config.option('useEscapeHtml')){
				// remove <!-- Not Allowed Tag Filtered -->
				htComment.contents = htComment.contents.replace('<!-- Not Allowed Tag Filtered -->', '');
				// unescape & escape HTML
				htComment.contents = J.$S(htComment.contents).unescapeHTML().escapeHTML().$value();
			}

			htComment.contents = Comment.Util.multiLine(htComment.contents, this.config.option('enableMultiLine'));
			htComment.indexInstance = this.indexInstance;
			htComment.is_author = sAuthorYn;
			htComment.done_preprocessing = true;

			return htComment;
		},

		/**
		 * @description 특정 답글의 요소를 가져온다.
		 * @param css옵션에 정의된 class
		 * @param 댓글번호
		 */
		_getAreaChildElement : function (cssOption, sCommentNo) {
			return J.$Element(Util.DomData.getChild(this.getAreaElement().$value(), this.config.css(cssOption), [sCommentNo]));
		},
		
		 /**
		 * @description 베스트 댓글에 대한 답글버튼 처리
		 * @param 답글번호
		 */
		toogleReplyBtnBest : function(sCommentNo) {	
			var welBtn = this._getAreaChildElement('replyButtonBest', sCommentNo);
			var replyList = this._getAreaChildElement('replyList', sCommentNo);

			if ( welBtn == null || replyList == null) {
				return;
			}
			
			welBtn.toggleClass('open');
			welBtn.toggleClass('close');
			
			if (welBtn.hasClass('open')) {
				this.callReplyList(sCommentNo, 1);
			} else {
				var welReplyForm = J.$Element(Util.DomData.getChild(this.getAreaElement().$value(), this.config.css('replyItemBest'), [sCommentNo ]));
				welReplyForm.hide();
				welBtn.query('span').text('답글');
				welBtn.query('b').text(Util.setNumberFormat(welBtn.attr('replyCount')));
				replyList.hide();
				this._getAreaChildElement('replyListPaging', sCommentNo).hide(); // 페이징
			}
		},
		
		/**
		 * @description 서버API 에 답글리스트 목록을 요청한다.
		 * @param	{String}	sCommentNo	부모답글번호
		 * @param	{Number}	pageNo	페이지번호
		 */
		callReplyList : function(sCommentNo, pageNo){
			var htParams = this.config.instance.ajax.getListParams();

			htParams.page_size = this.config.option('replyPageSize');
			htParams.parent_comment_no = sCommentNo;
			if(pageNo > 0){
				htParams.page_no = pageNo;
			}
			
			this.config.instance.ajax.call( {
				operation : 'replyList',
				onSuccess : J.$Fn(this.displayReplyList, this).bind(),
				param : htParams
			});
		},
		
		/**
		 * @description 답글리스트 호출후 callback
		 */
		displayReplyList : function(oResult){
			if ( oResult == null || oResult.reply_lists[0] == null) {
				return;
			}

			var sParentCommentNo = oResult.reply_lists[0].parent_comment_no;
			var replyList = oResult.reply_lists[0].reply_list;
			if ( replyList == null ) {
				return;
			}
			this._openReplyListBest(sParentCommentNo, oResult.reply_lists[0].reply_count);
			this._getAreaChildElement('replyList', sParentCommentNo).empty();
			this._addReplyCommentToBest(sParentCommentNo, replyList, oResult.author_yn);

			this.displayReplyListPaging(oResult.reply_lists[0]); // 페이징

		},

		/**
		 * @description 베스트 댓글의 답글리스트 추가
		 * @param {String} 부모의 답글번호
		 * @param {HashTableList} 답글리스트
		 * @param {String} 권한여부
		 */
		_addReplyCommentToBest : function(sParentCommentNo, htCommentList, sAuthorYn) {
			if ( htCommentList == null) {
				return;
			}

			var oRawComment = null,	oComment = null;
			var nLastCommentNo = 0;
			for ( var nIndex = 0 ; nIndex < htCommentList.length ; nIndex++) {
				oRawComment = this.preProcessForRawComment(htCommentList[nIndex], sAuthorYn);
				oComment = new Comment.CommentItem(oRawComment);

				 var replyList = J.$Element(Util.DomData.getChild(this.getAreaElement().$value(), this.config.css('replyList'), [sParentCommentNo]));

				oComment.createBestItem(replyList, nLastCommentNo, true);
				nLastCommentNo = htCommentList[nIndex].comment_no;
			}
		},

		 /**
		 * @description 베스트 댓글에 대한 답글 open시 답글리스트 호출후 처리
		 * @param 답글번호
		 * @param 답글수
		 */
		_openReplyListBest : function(sCommentNo, sCount) {
			var welBtn = this._getAreaChildElement('replyButtonBest', sCommentNo);
			if ( welBtn == null ) {
				return;
			}
			
			var replyList = this._getAreaChildElement('replyList', sCommentNo);
			if ( replyList == null ) {
				return;
			}			

			var welReplyForm = J.$Element(Util.DomData.getChild(this.getAreaElement().$value(), this.config.css('replyItemBest'), [sCommentNo ]));
			welReplyForm.show('block');
			welBtn.attr('replyCount', sCount);
			if( sCount == 0 ) {
				replyList.hide();
				welBtn.query('span').text('답글취소');
				welBtn.query('b').text('');
				this._getAreaChildElement('replyCloseBtnArea', sCommentNo).hide();
				this._getAreaChildElement('replyListPaging', sCommentNo).hide(); // 페이징
			} else {
				replyList.show("block");
				welBtn.query('span').text('답글');
				welBtn.query('b').text(Util.setNumberFormat(sCount));
				this._getAreaChildElement('replyCloseBtnArea', sCommentNo).show("block");
				this._getAreaChildElement('replyListPaging', sCommentNo).show("block"); // 페이징
			}
		},

		 /**
		 * @description 답글리스트에대한 페이징 영역 표시한다
		 */
		displayReplyListPaging : function(oReplyInfo) {
			var sCommentNo = oReplyInfo.parent_comment_no;
			var sPageNo = oReplyInfo.page_no;
			
			var pagingArea = this._getAreaChildElement('replyListPaging', sCommentNo);

			var welPrevBtn = J.$Element(Util.DomData.getChild(pagingArea.$value(), this.config.css('replyPrevButton')));

			welPrevBtn.attr('parent_comment_no', sCommentNo);
			welPrevBtn.attr('page_no', sPageNo);
			if( oReplyInfo.is_have_prev_page == "Y" ) {
				welPrevBtn.removeClass('u_rpg_dim');
				welPrevBtn.attr('href','#');
			} else {
				welPrevBtn.addClass('u_rpg_dim');
				welPrevBtn.attr('href',null);
			}

			var welPageInfo = J.$Element(Util.DomData.getChild(pagingArea.$value(), this.config.css('replyPageInfo')));
			if ( welPageInfo != null) {
				pagingArea.remove(welPageInfo);
			}
			
			var totalPage = Math.ceil(Number(oReplyInfo.reply_count)/Number(oReplyInfo.page_size));
			welPageInfo = J.$Element(this.config.template('replyPageInfo').process({curPage : sPageNo, totalPage : totalPage}));
			
			welPrevBtn.after(welPageInfo);

			var welNextBtn = J.$Element(Util.DomData.getChild(pagingArea.$value(), this.config.css('replyNextButton')));

			welNextBtn.attr('parent_comment_no', sCommentNo);
			welNextBtn.attr('page_no', sPageNo);
			welNextBtn.attr('total_page', totalPage);
			if( oReplyInfo.is_have_next_page == 'Y' ) {
				welNextBtn.removeClass('u_rpg_dim');
				welNextBtn.attr('href','#');
			} else {
				welNextBtn.addClass('u_rpg_dim');
				welNextBtn.attr('href',null);
			}
		},
		
		 /**
		 * @description 답글리스트의 이전페이지 이동
		 */
		movePrevReplyList : function(oEvent) {
			oEvent.stop();
			if( Number(J.$Element(oEvent.element).attr('page_no')) == 1) {
				return;
			}
			this.callReplyList(J.$Element(oEvent.element).attr('parent_comment_no'), Number(J.$Element(oEvent.element).attr('page_no')) - 1);
		},
		
		 /**
		 * @description 답글리스트의 다음페이지 이동
		 */
		moveNextReplyList : function(oEvent) {
			if( J.$Element(oEvent.element).attr('page_no') == J.$Element(oEvent.element).attr('total_page')) {
				return;
			}
			oEvent.stop();
			this.callReplyList(J.$Element(oEvent.element).attr('parent_comment_no'), Number(J.$Element(oEvent.element).attr('page_no')) + 1);
		},
		
		/**
		 * @description 추천비추천 이벤트 바인딩 호출
		 * @param elTargetArea {Element} 이벤트 바인딩할 영역
		 */
		_createRecommendDiscommendBubbler : function(elTargetArea) {
			
			// 추천비추천 인스턴스가 없으면 패스
			if (!Comment.RecommendDiscommendArea ) {
				return;
			}
			
			// 추천비추천 버튼에 이벤트 바인딩
			this.config.instance.recommendDiscommendArea = Comment.RecommendDiscommendArea.getInstance()[this.indexInstance];
			if (this.config.instance.recommendDiscommendArea) {
				this.config.instance.recommendDiscommendArea.createListBubbler(elTargetArea);
			}
		}
		
	}).extend(J.Component);

	nhn.comment.bestlistarea = new Comment.BestListArea();

})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.listArea.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 목록영역을 처리하는 클래스
	 */
	Comment.ListArea = J.$Class({
		/** @lends nhn.comment.mobile.ListArea.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._welArea = null;

			this.indexInstance = Comment.ListArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			this._oResult = null;
		},

		/**
		 * @description 목록영역을 생성한다.
		 * @return {jindo.$Element}
		 */
		createArea : function() {
			//var sNoListLiTag = this.config.template('noList').process();
			//var sEmptyComment = this.config.template('emptyComment').process();
			this._welArea = J.$Element(this.config.template('list').process());
			if( !(this.config.option('useSortList') == true || this.config.option('useRecommendArea') == true) ) {
				this._welArea.attr('id',this.config.element('focusTarget'));
			}
			return this._welArea;
		},
		
		
		createEmptyArea : function() {
			this._welNoListArea = J.$Element(this.config.template('noList').process());

			return this._welNoListArea;
		},

		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this._createBubbler();
		},

		/**
		 * @description 목록영역을 반환한다.
		 * @return {jindo.$Element}
		 */
		getAreaElement : function() {
			return this._welArea;
		},

		/**
		 * @description 이벤트를 바인딩한다.
		 */
		_createBubbler : function() {
			this._oBubbler = new Util.Bubbler(this.getAreaElement().$value()).attach({
				'__comment_del_btn:click' : J.$Fn(this.config.instance.command.deleteComment, this.config.instance.command).bind(),
				'__comment_report_btn:click' : J.$Fn(this.config.instance.command.reportComment, this.config.instance.command).bind(),
				'__comment_reply_form_btn:click' : J.$Fn(this.config.instance.command.toggleReplyForm, this.config.instance.command).bind()
			});

			this.getAreaElement().preventTapHighlight(true);
			
			this._createRecommendDiscommendBubbler(this.getAreaElement());	// 추천비추천 이벤트 바인딩
		},

		/**
		 * @description 서버API 에 목록을 요청한다.
		 * - pc 용 공통댓글과 동일하게 했는데, 페이지만 필요할 경우 인자를 빼면됨
		 * @param	{String}	sType	타입
		 * @param	{Number}	nNo		넘버
		 */
		requestList : function(sType, nNo, async) {
			var htParams = this.config.instance.ajax.getListParams();

			//page.no가 오면 page로 이동한다.
			if (sType == 'page') {
				htParams.page_no = nNo;
			}
			
			if ( this.config.option('currentSortOption') ) {
				htParams.sort = this.config.option('currentSortOption');
			}

			if ( this.config.option('listType') == 'u_comment_v1') { // 리스트 1 타입의 경우 ( 서비스 내 삽입 ) 특수 처리
				// summary형식이라도 답글도 보여줄 수 있도록 수정
				if( this.config.option('useInnerSvcShowReply') == false){
					htParams.depth = 1;
				}
				htParams.page_size = this.config.option('innerSvcListSize');
				htParams.sort = this.config.option('innerSvcListSort');
			}

			// landing page기능 추가
			if (this.config.option('landingCommentNo') != null) {
				htParams.comment_no = this.config.option('landingCommentNo');
				htParams.up_to_date_yn = "Y";
				this.config.option('landingCommentNo',null);
			}
			
			var listAsync = false;
			if (typeof async == 'boolean'){
				listAsync = async;
			} else {
				if (typeof this.config.option('listAsync') == 'boolean'){
					listAsync = this.config.option('listAsync');	
				}
			}

			this.config.instance.ajax.call({
				operation : 'list',
				async : listAsync,
				onSuccess : J.$Fn(this.showList, this).bind(),
				param : htParams
			});
		},

		/**
		 * @description 목록 영역을 다 지운다. (필요 없는 듯)
		 */
		empty : function() {
			this.getAreaElement().empty();
			this.config.instance.commentListModel.reset();
			this.config.instance.pagearea.reset();
			
		},

		/**
		 * @description 페이지 새로고침한다.
		 */
		refresh : function(async) {
			this.empty();
			this.requestList('page', 1, async);
			this.config.instance.sortListArea.resetArea();
		},

		/**
		 * 새로 고침 없이, 특정 액션후 해당 액션 결과 result를 이용해 페이지를 다시 구성
		 */
		refreshWithTheResult : function(oResult) {
			this.empty();
			this.showList(oResult);
		},

		/**
		 * @description 목록을 보여준다.
		 * @param	{Object}	oResult				결과
		 */
		showList : function(oResult) {
			if ( oResult == null || oResult.comment_list == null || oResult.total_count == null || oResult.page_no == null) {
				return;
			}

			this._processBeforeShowList(oResult);

			// BEST댓글 사용시에만
			if(this.config.option('useRecommendArea')){
				//IOS에서 moreList를 호출한 경우는 베스트를 초기화하지 않는다. 
				if(!(this.config.option('useMoreContent') && oResult.more_yn == "Y")) {
					this.config.instance.bestlistarea.empty();
				}

				//android의 1페이지 혹은 IOS의 첫 페이지에서만 베스트를 보여준다.
				if(oResult.page_no == 1 && oResult.more_yn != "Y") {
					this.config.instance.bestlistarea.showBestList(oResult);
				}
			}
			
			// list에 추가전 마지막 commentNo 기억
			var sLastCommentNo = this.config.instance.commentListModel.getBaseLastCommentNo();

			this._addCommentToBaseAndRemoveBottom(oResult);
			this.showOrHideEmptyLiTag();
			this.showOrHideNoListLiTag();

			if ( this.config.option('useRecommendArea') == true && this.config.option('listType') == 'u_comment_v1') {
				var listCount = oResult.comment_list.length + oResult.recommended_list.length;
				
				if( listCount > 0) {
					this._welNoListArea.hide();
					this._welArea.show();
				}
			}

			//페이지네이션 영역(삭제가 가능한지 여부 파악시 마지막페이지인지 여부가 필요)
			// 더보기시 데이터가 넘어오지 않는 경우(페이지 접근시에는 다음 페이지 데이터가 있었으나, 동시간에 다른 브라우저에서 삭제하여 더보기시 값이 없는 케이스 고려)
			if ( this.config.option('useMoreContent') && (oResult.comment_list == null || oResult.comment_list.length < this.config.option('pageSize'))) {
				this.config.instance.pagearea.makeLastPage();
			}

			/**
			 * 기존 보여지는 영역의 마지막 comment에 대해서 삭제가 가능하면 삭제 진행.
			 *
			 *  comment List에서 마지막 페이지가 아닌 경우, 마지막 comment삭제시 다음 페이지에서
			 * 해당 페이지의 답글이 있을 가능성이 있어, 삭제된 댓글로 노출!!
			 *
			 * 이후 더보기시 해당 댓글 삭제(view에서 제거)가 가능하면 삭제 진행작업.
			 */
			this._removeAndReturnTheCount(sLastCommentNo);

			//페이지네이션 영역(위 commentProcess에서 보여지는 count값 변경 가능성 존재)
			this.config.instance.pagearea.update(oResult.page_no, oResult.total_count, true);

			//카운트업데이트
			this.config.instance.countarea.update(this.config.instance.pagearea.getTotalCount());
			
			//list v1 에서 사용하는 하단 Count 영역 업데이트
			this.config.instance.listFooterArea.update(this.config.instance.pagearea.getTotalCount());

			this._processAfterShowList(oResult);
			this._oResult = oResult;
		},

		/**
		 * BaseCommentList에 추가 및 IOS인 경우, BottomCommentList에 있는 경우 삭제
		 */
		_addCommentToBaseAndRemoveBottom : function(oResult) {
			var htCommentList = oResult.comment_list;
			var sAuthorYn = oResult.author_yn;
			
			if ( htCommentList == null) {
				return;
			}

			var oRawComment = null,	oComment = null;
			
			if ( this.config.option('useRecommendArea') == true && this.config.option('listType') == 'u_comment_v1') {
				var moreCount = Number(this.config.option('innerSvcListSize')) - oResult.recommended_list.length;
				var moreCountTemp = 0;
				for ( var nIndex = 0 ; nIndex < htCommentList.length ; nIndex++) {
					if( moreCount <= moreCountTemp){
						break;
					}
					if ( this._notExistBestComment(htCommentList[nIndex].comment_no, htCommentList[nIndex].parent_comment_no, oResult.recommended_list) ) {
						oRawComment = this.preProcessForRawComment(htCommentList[nIndex], sAuthorYn);
						oComment = new Comment.CommentItem(oRawComment);
						this._removeBottomCommentWhenListing(oComment.getCommentNo());

						var nLastCommentNo = this.config.instance.commentListModel.getBaseLastCommentNo();
						oComment.createItem(this.getAreaElement(), nLastCommentNo);
						this.config.instance.commentListModel.addComment(oComment);
						moreCountTemp++;
					}
				}
			} else {
				for ( var nIndex = 0 ; nIndex < htCommentList.length ; nIndex++) {				
					oRawComment = this.preProcessForRawComment(htCommentList[nIndex], sAuthorYn);
					oComment = new Comment.CommentItem(oRawComment);
					this._removeBottomCommentWhenListing(oComment.getCommentNo());

					var nLastCommentNo = this.config.instance.commentListModel.getBaseLastCommentNo();
					oComment.createItem(this.getAreaElement(), nLastCommentNo);
					this.config.instance.commentListModel.addComment(oComment);
				}				
			}

		},

		/**
		 * 해당 댓글이 베스트댓글 리스트에 존재하는지 여부
		 */		
		_notExistBestComment : function (sCommentNo, sParentCommentNo, sRecommendedList) {
			var rtrnVal = true;
			for (var idx in sRecommendedList) {
				if (sCommentNo == sRecommendedList[idx].comment_no || sParentCommentNo == sRecommendedList[idx].comment_no) {
					rtrnVal = false;
					break;
				}
			}
			return rtrnVal;
		},
		
		/**
		 * 더보기시 추가로 작성된 영역(하단 ... 이후)에 해당 comment가 있으면 삭제.
		 */
		_removeBottomCommentWhenListing : function(sCommentNo) {
			if ( !this.config.option('useMoreContent') || !this.config.instance.commentListModel.isExistInBottomCommentList(sCommentNo)) {
				return;
			}

			this.config.instance.commentListModel.removeComment(sCommentNo);
			this._removeElCommentLiTag(sCommentNo);
		},

		/**
		 * 해당 sCommentNo에 해당하는 comment element를 반환.
		 */
		getElCommentLiTag : function(sCommentNo) {
			if ( sCommentNo == null) {
				return null;
			}

			return Util.DomData.getChild(this.getAreaElement().$value(), this.config.css('commentItem'), [sCommentNo]);
		},

		/**
		 * 해당 sCommentNo에 해당하는 comment element를 삭제.
		 */
		_removeElCommentLiTag : function(sCommentNo) {
			this.config.instance.writearea.releaseBubbler(sCommentNo);

			var elItem = this.getElCommentLiTag(sCommentNo);
			this.getAreaElement().remove(elItem);
		},

		/**
		 * 목록 가져오기 전처리
		 */
		_processBeforeShowList : function(oResult) {
			//custom화를 위하여(ex:롤링) list전에 함수를 호출
			this.config.fireEvent('beforeList', {
				'result': oResult
			});
		},

		/**
		 * 목록 가져온후 후처리
		 */
		_processAfterShowList : function(oResult) {
			//custom화를 위하여(ex:롤링) list후에 함수를 호출
			this.config.fireEvent('afterList', {
				'result': oResult
			});
		},

		/**
		 * bottomComment 개수에 따라 emptyLi 태그 노출 결정
		 */
		showOrHideEmptyLiTag : function() {
//			if ( !this.config.option('useMoreContent') ) {
//				return;
//			}
//
//			var elEmptyLiTag = this.getElCommentLiTag('empty');
//
//			if ( elEmptyLiTag == null) {
//				return;
//			}
//
//			var welEmptyLiTag = J.$Element(elEmptyLiTag);
//
//			if ( this.config.instance.commentListModel.isEmptyBottomComment()) {
//				welEmptyLiTag.hide();
//				return;
//			}
//
//			welEmptyLiTag.show();
		},

		/**
		 * BaseComment 개수에 따라 No List 영역을 보여주거나 감추기
		 */
		showOrHideNoListLiTag : function() {

			if ( this.config.instance.commentListModel.isEmptyBaseComment()) {
				this._welNoListArea.show();
				this._welArea.hide();
				return;
			}

			this._welNoListArea.hide();
			this._welArea.show();
			
		},

		/**
		 * @description	IOS 일 경우, 삭제한 댓글만 dom 에서 제거해주는 처리
		 * @param	{Number}	nCommentNo	댓글 번호
		 */
		deleteCommentForIos : function(nCommentNo) {
			if (nCommentNo == null) return;

			// 해당 comment에 isDeleted Mark
			this.config.instance.commentListModel.markTargetCommentDeleted(nCommentNo);

			// 삭제(view에서 제거) 불가하면 삭제된 댓글로 노출
			if (!this.config.instance.commentListModel.canRemoveTargetComment(nCommentNo) ) {
				this._makeDeletedComment(nCommentNo);

				return;
			}

			// 실제 삭제(view에서 제거)가 가능하면 삭제.
			var nRemovedCommentCount = this._removeAndReturnTheCount(nCommentNo);
			this.showOrHideEmptyLiTag();
			this.showOrHideNoListLiTag();

			this.config.instance.pagearea.update(this.config.instance.pagearea.getPageNo(), this.config.instance.pagearea.getTotalCount() - nRemovedCommentCount);
			this.config.instance.countarea.update(this.config.instance.pagearea.getTotalCount());
		},

		/**
		 * 삭제된 comment로 상태 및 view 변경
		 */
		_makeDeletedComment : function(nCommentNo) {
			var oDeletedCommentInfo = this.config.instance.commentListModel.getCommentInfoFromBaseAndBottom(nCommentNo);

			if ( oDeletedCommentInfo == null) {
				return;
			}

			var oRawDeletedComment = this._preProcessForDeleteComment(oDeletedCommentInfo);
			var oDeletedComment = new Comment.CommentItem(oRawDeletedComment);

			var elItem = this.getElCommentLiTag(nCommentNo);
			if (elItem  == null) return;

			// 기존 comment는 삭제하고, '삭제된 댓글'을 신규 생성
			J.$Element(elItem).hide();
			oDeletedComment.createItem(this.getAreaElement(), nCommentNo);

			this.getAreaElement().remove(elItem);
		},

		/**
		 * 삭제된 comment에 대한 기본 정보 생성.
		 */
		_preProcessForDeleteComment : function(oDeletedCommentInfo) {
			var oRawDeletedComment = {};
			oRawDeletedComment.indexInstance = this.indexInstance;
			oRawDeletedComment.writer_id = '********';
			oRawDeletedComment.writer_nickname = '';
			oRawDeletedComment.comment_no = oDeletedCommentInfo.commentNo;
			oRawDeletedComment.registered_ymdt = oDeletedCommentInfo.registeredDate;
			oRawDeletedComment.reply_level = oDeletedCommentInfo.replyLevel;
			oRawDeletedComment.deleted_yn = 'Y';

			return oRawDeletedComment;
		},

		/**
		 * 특정 comment가 삭제가 가능하면 삭제, 이후 이전 comment도 삭제가 가능한지 체크하여
		 * 연속적으로 삭제.
		 */
		_removeAndReturnTheCount : function(nCommentNo) {
			var nCount = 0;

			if ( !this.config.option('useMoreContent') ) {
				return nCount;
			}

			while ( this.config.instance.commentListModel.canRemoveTargetComment(nCommentNo)) {
				var htPreSiblingComment = this.config.instance.commentListModel.getPreSiblingCommentInfo(nCommentNo);
				this.config.instance.commentListModel.removeComment(nCommentNo);

				this._removeElCommentLiTag(nCommentNo);
				nCount++;

				if ( htPreSiblingComment == null ) {
					break;
				}

				nCommentNo = htPreSiblingComment.commentNo;
			}

			return nCount;
		},

		/**
		 * @description	댓글 아이템 전처리
		 * @param	{HashTable}	htComment	댓글 아이템
		 */
		preProcessForRawComment : function(htComment, sAuthorYn) {
			if ( htComment.done_preprocessing) {
				return htComment;
			}

			htComment.registered_ymdt = Comment.Util.dateFormat(htComment.registered_ymdt, this.config.option('dateFormat'));
			htComment.modified_ymdt = Comment.Util.dateFormat(htComment.modified_ymdt, this.config.option('dateFormat'));

			if (this.config.option('useEscapeHtml')){
				// remove <!-- Not Allowed Tag Filtered -->
				htComment.contents = htComment.contents.replace('<!-- Not Allowed Tag Filtered -->', '');
				// unescape & escape HTML
				htComment.contents = J.$S(htComment.contents).unescapeHTML().escapeHTML().$value();
			}

			htComment.contents = Comment.Util.multiLine(htComment.contents, this.config.option('enableMultiLine'));
			htComment.indexInstance = this.indexInstance;
			htComment.is_author = sAuthorYn;
			htComment.done_preprocessing = true;

			return htComment;
		},

		/**
		 * 로그인 및 실명인증 권한에 따른 쓰기창 toggle 처리
		 */
		toggleTargetAreaDependsOnLoginAndAuth : function(welTarget) {
			if ( welTarget == null) {
				return false;
			}

			if (!this.config.instance.auth.redirectLogin()) {
				return false;
			}

			if (!this.config.instance.auth.redirectAuth()) {
				return false;
			}

			welTarget.toggle();
			
			return true;
		},
		
		toogleReplyBtn : function(welBtn) {	
			if ( welBtn == null ) {
				return;
			}
			var text = welBtn.text();
			
			if ( text == '답글') {
				welBtn.text('답글취소');
			} else {
				welBtn.text('답글');
			}			
		},
		
		/**
		 * @description 추천비추천 이벤트 바인딩 호출
		 * @param elTargetArea {Element} 이벤트 바인딩할 영역
		 */
		_createRecommendDiscommendBubbler : function(elTargetArea) {
			
			// 추천비추천 인스턴스가 없으면 패스
			if (!Comment.RecommendDiscommendArea ) {
				return;
			}
			
			// 추천비추천 버튼에 이벤트 바인딩
			this.config.instance.recommendDiscommendArea = Comment.RecommendDiscommendArea.getInstance()[this.indexInstance];
			if (this.config.instance.recommendDiscommendArea) {
				this.config.instance.recommendDiscommendArea.createListBubbler(elTargetArea);
			}
		},
		
		setFocusList : function () {
			if( this.config.option('useFocus') == true) {
				window.scrollTo(0, J.$Element(this.config.element('focusTarget')).offset().top);
			}
		}
		
	}).extend(J.Component);

	nhn.comment.listarea = new Comment.ListArea();

})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.commonPageArea.js 2012. 04. 27
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 공통(아이폰, 안드로이드) 페이지 영역을 처리하는 클래스
	 */
	Comment.CommonPageArea = J.$Class({
		$init : function() {
			this._welArea = null;
			this._nPageNo = 1;
			this._nTotalCount = 0;

			this.indexInstance = Comment.PageArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * @description 목록영역을 반환한다.
		 * @return {jindo.$Element}
		 */
		getAreaElement : function() {
			return this._welArea;
		},

		/**
		 * @description 페이지영역을 보여준다.
		 */
		show : function() {
			this._welArea.show();
		},

		/**
		 * @description 페이지영역을 숨겨준다.
		 */
		hide : function() {
			this._welArea.hide();
		},

		/**
		 * @description 서비스로부터 전달된 flag 및 전체 페이지 개수에 따라서
		 * 페이지 영역을 숨길지 여부
		 */
		isNeedToHidePageArea : function(nTotalCount) {
			// 서비스에서 초기 controller옵셜 설정시 전달
			if ( !this.config.option('hidePageAreaIfOnlyOnePageExist')) {
				return false;
			}

			if ( this.config.option('pageSize') < nTotalCount  ) {
				return false;
			}

			return true;
		},

		setPageNo : function(nPageNo) {
			if ( nPageNo == null) {
				return;
			}

			this._nPageNo = nPageNo;
		},

		getPageNo : function() {
			return this._nPageNo;
		},

		setTotalCount : function(nTotalCount) {
			this._nTotalCount = nTotalCount;
		},

		getTotalCount : function() {
			return this._nTotalCount;
		}
	}).extend(J.Component);
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.pageArea.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 페이지 영역을 처리하는 클래스
	 */
	Comment.PageArea = J.$Class({
		/** @lends nhn.comment.mobile.PageArea.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends nhn.comment.mobile.CommonPageArea
		 * @require	jindo.m.PageNavigation
		 */
		$init : function() {
			this._oPageNavigation = null;
		},

		/**
		 * @description 페이지영역을 생성한다.
		 * @return {jindo.$Element}
		 */
		createArea : function() {
			this._welArea = J.$Element(this.config.template('pageArea').process());
			return this._welArea;
		},

		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this._wel = J.$Element(this.config.template('pageNavigation').process());
			this._welArea.append(this._wel);
			this._initComponent();
			this.hide();
		},

		/**
		 * @description 페이지영역의 정보를 업데이트 해준다.
		 * @param	{Object}	oResult
		 */
		update : function(nPageNo, nTotalCount, bNeedInfoUpdate) {
			this.setPageNo(nPageNo);
			this.setTotalCount(nTotalCount);

			// Jindo Mobile component의 버그로 전체 카운트가 0인 경우, page 연산에 오류가 있어, 1로 전달.
			this._oPageNavigation.reset((nTotalCount == 0 ? 1 : nTotalCount ));
//			this._oPageNavigation.reset(nTotalCount);
			this._oPageNavigation.movePageTo(nPageNo, false);

			this._oPageNavigation.updateInfo();

			if ( this.isNeedToHidePageArea(nTotalCount)) {
				this.hide();
				return;
			}

			this.show();
		},

		/**
		 * @description 페이지네비게이션 컴포넌트를 생성한다.
		 */
		_initComponent : function() {
			var self = this;

			this._oPageNavigation = new J.m.PageNavigation(this._wel.$value(), {
				sClassPrefix : '__comment_page_',
				nItemPerPage : this.config.option('pageSize'),
				sInfoTemplate : this.config.template('pageInfoTemplate')._str
			}).attach({
				'beforeMove' : function(oCustomEvt) {
					oCustomEvt.stop();
					self.hide();
					self.config.instance.listarea.empty();
					self.config.instance.listarea.requestList('page', oCustomEvt.nPage, false);
					self.config.instance.listarea.setFocusList();
				}
			});
		},

		isLastPage : function() {
			return (this.config.option('pageSize') * this._nPageNo ) >= this._nTotalCount;
		},
		
		reset : function() {
			
		}
	}).extend(Comment.CommonPageArea);

	nhn.comment.pagearea = new Comment.PageArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.currentCountChangeableMoreContentButton.js 2012. 04. 13
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 더보기 버튼을 처리하는 클래스(
	 */
	Comment.CurrentCountChangeableMoreContentButton = J.$Class({
		/** @lends nhn.comment.mobile.CurrentCountChangeableMoreContentButton.prototype */

		/**
		 * 현재 페이지
		 */
		_nCurrentPage : 1,

		$init : function(config, el, htUserOption) {
			this.config = config;
			// jindo.m.CorePagination init - start
			this.option({
				nItem : 10,
				nItemPerPage : 10,
				nPage : 1,
				bActivateOnload : true
			});
			this.option(htUserOption || {});
			this._nCurrentPage = this.option('nPage');
			// jindo.m.CorePagination init - end

			// jindo.m.MoreContentButton init - start
			this.option({
				sClassPrefix : 'more_',
				nTotalItem : 10, //실제 아이템 개수
				nShowMaxItem : 10, //최대 더보기 하여 보여줄 개수
				nItemPerPage : 10,
				nPage : 1,
				bActivateOnload : true,
				htAjax : {}
			});

			this.option(htUserOption || {});
			this.option('nItem', this.option('nShowMaxItem'));

			this._initVar();
			this._setWrapperElement(el);

			if(this.option("bActivateOnload")) {
				this.activate();
				this._nCurrentPage = this.option('nPage');
			}
			// jindo.m.MoreContentButton init - end

			this._nBaseCommentCount = 0;
			this._bLastPage = false;
		},

		// jindo.m.CorePagination function 시작
		getItemCount : function(){
			return this.option('nItem');
		},

		getItemPerPage : function(){
			return this.option('nItemPerPage');
		},

		/**
		 * 현재 페이지를 리턴한다.
		 * @return {Number} 현재 페이지
		 */
		getCurrentPage : function(){
			return this._nCurrentPage;
		},

		/**
		 * 전체 아이템 개수를 설정한다.
		 * @param {Number} n 아이템 개수
		 */
		setItemCount : function(n){
			this.option('nItem', n);
		},

		/**
		 * 한페이지당 아이템 개수를 설정한다
		 * @param {Number} n 한 페이지당 아이템 개수
		 */
		setItemPerPage : function(n){
			this.option('nItemPerPage',n);
		},

		/**
		 * 현재 페이지의 다음 페이지로 이동한다.
		 */
		nextPageTo : function(){
			var nPage = this._nCurrentPage +1;
			this.movePageTo(nPage);
		},

		/**
		 * 현재 페이지의 다음 페이지로 이동한다.
		 */
		previousPageTo : function(){
			var nPage = this._nCurrentPage-1;
			this.movePageTo(nPage);
		},

		/**
		 * 전체 페이지 수를 리턴한다.
		 * @return {Number}
		 */
		getTotalPages : function(){
			var nTotal = this.option('nItem'),
				nCount = this.option('nItemPerPage');

			if(!nCount){
				return null;
			}

			return Math.ceil(nTotal/nCount);
		},

		/**
		 * 이전 페이지가 있는지 리턴한다.
		 * @return {Boolean}
		 */
		hasPreviousPage : function(){
			return (this.getCurrentPage() > 1);
		},

		/**
		 * n 페이지의 아이템들의 start, end 인덱스를 리턴한다.
		 * @param {Number} n
		 * @return {HashTable}
		 * @example
	var htIndex = oCorePagination.getPageIntemIndex(2);
	htIndex.nStart //2페이지의 아이템의 시작 인덱스
	htIndex.nEnd //2페이지의 아이템의 끝 인덱스
		 */
		getPageItemIndex : function(nPage){
			nPage = this._convertToAvailPage(nPage);

			var nTotal = this.option('nItem'),
				nCount = this.option('nItemPerPage'),
				start, end;

			if(!nPage || !nCount){
				return null;
			}

			start = (nPage-1) * nCount;
			end = Math.min(start+ nCount, nTotal)-1;

			return {
				nStart :  start,
				nEnd : end
			};
		},

		/**
		 * n번째 아이템이 몇번째 페이지인지 구한다.
		 * @param {Number} n
		 * @return {Number}
		 */
		getPageOfItem : function(n){
			return Math.ceil(n / this.getItemPerPage());
		},

		_convertToAvailPage : function(nPage){
			var nLastPage = this.getTotalPages();

			nPage = Math.max(nPage, 1);
			nPage = Math.min(nPage, nLastPage);

			return nPage;
		},

		// jindo.m.CorePagination function 끝


		// jindo.m.MoreContentButton function 시작
		/**
		 * @description jindo.m.MoreContentButton 에서 사용하는 모든 인스턴스 변수를 초기화한다.
		 */
		_initVar: function() {
			//this._nCurrentPage = this.option('nPage');
			var _htDefalutAjax = {
				sApi : null,
				htAjaxOption : {
					type: 'xhr'
				},
				htQuery : {},
				sStart : 'start',
				sDisplay : 'display'
			};

			var htAjax = this.option('htAjax');

			if(!htAjax){
				this.option('htAjax', _htDefalutAjax);
				return;
			}

			for(var p in _htDefalutAjax){
				if(typeof htAjax[p] == 'undefined'){
					htAjax[p] = _htDefalutAjax[p];
				}
			}

			//ajax option
			for(var p in _htDefalutAjax.htAjaxOption){
				if(typeof htAjax.htAjaxOption[p] == 'undefined'){
					htAjax.htAjaxOption[p] = _htDefalutAjax.htAjaxOption[p];
				}
			}

			//query string option
			for(var p in _htDefalutAjax.htQuery){
				if(typeof htAjax.htQuery[p]== 'undefined'){
					htAjax.htQuery[p] = _htDefalutAjax.htQuery[p];
				}
			}

			if(!!htAjax.sApi){
				//htAjax.htAjaxOption.onload = this._onAjaxResponse;
				this.oAjax = new J.$Ajax(htAjax.sApi, htAjax.htAjaxOption);
			}
		},

		/**
		 * @description jindo.m.MoreContentButton 에서 사용하는 모든 엘리먼트의 참조를 가져온다.
		 */
		_setWrapperElement: function(el) {
			this._htWElement = {};
			el = J.$(el);

			var sClass = '.'+ this.option('sClassPrefix');
			this._htWElement.elBase = J.$Element(el);

			this._htWElement.elMoreButton = J.$Element(J.$$.getSingle(sClass+'button',el));
			this._htWElement.elTop = J.$Element(J.$$.getSingle(sClass+'top',el));
			this._htWElement.elLoading = J.$Element(J.$$.getSingle(sClass+'loading',el));
			this._htWElement.elMoreCnt = J.$Element(J.$$.getSingle(sClass+'moreCnt', el)); //
			this._htWElement.elTotal = J.$Element(J.$$.getSingle(sClass+'total',el));
			this._htWElement.elCurrent = J.$Element(J.$$.getSingle(sClass+'current', el));
			this._htWElement.elLast = J.$Element(J.$$.getSingle(sClass+'last', el));
			if(!!this._htWElement.elLast){
				this._htWElement.elLastTotal = J.$Element(J.$$.getSingle(sClass+'total', this._htWElement.elLast.$value()));
				this._htWElement.elLastCurrent = J.$Element(J.$$.getSingle(sClass+'current', this._htWElement.elLast.$value()));
			}
		},

		_onClickMore : function(oEvent){
			oEvent.stop(J.$Event.CANCEL_DEFAULT);
			if(this.hasNextPage()){
				this.more();
			}
		},

		_onClickTop : function(oEvent){
			oEvent.stop(J.$Event.CANCEL_DEFAULT);

			this.fireEvent('goTop',{
				element : oEvent.element
			});
		},

		more : function(bFireEvent){
			if (typeof bFireEvent == "undefined") {
				bFireEvent = true;
			}

			var nPage = this._nCurrentPage +1;

			var nBeforePage = this.getCurrentPage();
			if(bFireEvent){
				if(!this.fireEvent('beforeMore',{
					nPage : nPage,
					nCurrentPage : nBeforePage
				})){
					return;
				}
			}

			this.showLoadingImg();

			if(!!this.option('htAjax').sApi){
				this._callAjax(nPage,true, bFireEvent);
			}else{
				this._move(nPage);
				var htIndex = this.getPageItemIndex(nPage);

				if(bFireEvent){
					this.fireEvent('more',{
						nPage : nPage,
						nStartIndex : htIndex.nStart,
						nEndIndex : htIndex.nEnd
					});
				}

				this.updateInfo();
			}
		},

		/**
		 * nPage 페이지로 이동한다.
		 * @param {Number} nPage
		 * @param {Boolean} 커스텀 이벤트 발생 여부
		 * @description
		 */
		movePageTo : function(nPage, bFireEvent){
			if (typeof bFireEvent == "undefined") {
				bFireEvent = true;
			}

			var nBeforePage = this.getCurrentPage();
			if(bFireEvent){
				if(!this.fireEvent('beforeMovePage',{
					nPage : nPage,
					nCurrentPage : nBeforePage
				})){
					return;
				}
			}

			this.showLoadingImg();

			if(!!this.option('htAjax').sApi){
				this._callAjax(nPage, false ,bFireEvent);
			}else{
				this._move(nPage);
				var htIndex = this.getPageItemIndex(nPage);

				if(bFireEvent){
					this.fireEvent('movePage',{
						nPage : nPage,
						nBeforePage : nBeforePage,
						nStartIndex : 0,
						nEndIndex : htIndex.nEnd
					});
				}
				this.updateInfo();
			}
		},

		_move : function(nPage){
			var n = this._convertToAvailPage(nPage);
			if(n != this._nCurrentPage){
				this._nCurrentPage = n;
			}
		},

		_callAjax : function(nPage, bMore ,bFireEvent){
			var self = this;
			this.oAjax.option('onload', null);

			this.oAjax.option('onload', function(res){
				self._onAjaxResponse(res, nPage, bMore, bFireEvent);
			});
			
			var htQuery = this._getQueryString(nPage, bMore);
			
			if (htQuery.sort != 'best' && htQuery.comment_no != "0") {
				this.oAjax.request(htQuery);
			}
		},

		_onAjaxResponse : function(oResponse, nPage, bMore, bFireEvent){
			if(bFireEvent){
				this._move(nPage);
				var sEvent = bMore? 'more' : 'movePage';

				var htIndex = this.getPageItemIndex(nPage);

				this.fireEvent(sEvent,{
					oResponse : oResponse,
					nPage : nPage,
					nStartIndex : bMore? htIndex.nStart : 0,
					nEndIndex : htIndex.nEnd
				});
			}

			this.updateInfo();
		},

		/**
		 * @return {Number}
		 * @description  더보기 할 전체 아이템 개수를 구한다.
		 */
		getShowMaxItem : function(){
			return this.option('nShowMaxItem');
		},

		_setNumberFormat: function(sText) {
			sText = sText.toString();
			var sReturn = "";
			var nDot = 0;
			var nLastPosition = sText.length;
			for (var i = nLastPosition; i >= 0; i--) {
				var sChar = sText.charAt(i);
				if (i > nLastPosition) {
					sReturn = sChar + sReturn;
					continue;
				}
				if (/[0-9]/.test(sChar)) {
					if (nDot >= 3) {
						sReturn = ',' + sReturn;
						nDot = 0;
					}
					nDot++;
					sReturn = sChar + sReturn;
				}
			}
			return sReturn;
		},

		/**
		 * @description 로딩이미지를 보여준다
		 */
		showLoadingImg : function(){
			if(!!this._htWElement.elLoading){
				this._htWElement.elLoading.show();
			}
		},

		/**
		 * @description 로딩이미지를 감춘다
		 */
		hideLoadingImg : function(){
			if(!!this._htWElement.elLoading){
				this._htWElement.elLoading.hide();
			}
		},

		/**
		 * @param {Number} nShowMaxItem 더보기할 아이템의 개수가 바뀌었을 경우 설정해준다.
		 * @description 1페이지로 더보기를 다시 그린다. 커스텀이벤트는 발생하지 않는다.
		 */
		reset : function(nShowMaxItem){
			if (typeof nShowMaxItem == "undefined") {
				nShowMaxItem = this.option('nShowMaxItem');
			}

			this.setShowMaxItem(nShowMaxItem);
			this.movePageTo(1, false);
			
			this._bLastPage = false;
		},

		/**
		 * @return {Number}
		 * @description 전체 아이템 개수를 구한다.
		 */
		getTotalItem : function(){
			return this.option('nTotalItem');
		},

		/**
		 * @param {Number} n
		 * @description 전체 아이템 개수를 n으로 설정한다.
		 */
		setTotalItem : function(n){
			this.option('nTotalItem', n);
		},

		/**
		 * @param {Number} n
		 * @description 더보기할 전체 아이템 개수를 n으로 설정한다.
		 */
		setShowMaxItem : function(n){
			this.option('nShowMaxItem', n);
			this.option('nItem', n);
		},

		/**
		 * @description jindo.m.MoreContentButton 컴포넌트를 활성화한다.
		 * activate 실행시 호출됨
		 */
		_onActivate : function() {
			this._attachEvent();
		},

		/**
		 * @description jindo.m.MoreContentButton 컴포넌트를 비활성화한다.
		 * deactivate 실행시 호출됨
		 */
		_onDeactivate : function() {
			this._detachEvent();
		},

		/**
		 * @description jindo.m.MoreContentButton 에서 사용하는 모든 이벤트를 바인드한다.
		 */
		_attachEvent : function() {
			this._htEvent = {};
			if(!!this._htWElement.elMoreButton){
				this._htEvent["click_More"] = {
					ref : J.$Fn(this._onClickMore, this).attach(this._htWElement.elMoreButton, 'click'),
					el : this._htWElement.elMoreButton.$value()
				};
			}
			if(!!this._htWElement.elTop){
				this._htEvent["click_Top"] = {
					ref : J.$Fn(this._onClickTop, this).attach(this._htWElement.elTop, 'click'),
					el : this._htWElement.elTop.$value()
				};
			}
		},

		/**
		 * @description jindo.m.MoreContentButton 에서 사용하는 모든 이벤트를 해제한다.
		 */
		_detachEvent : function() {
			for(var p in this._htEvent) {
				var htTargetEvent = this._htEvent[p];
				htTargetEvent.ref.detach(htTargetEvent.el, p.substring(0, p.indexOf("_")));
			}

			this._htEvent = null;
		},

		/**
		 * @description jindo.$Ajax Header 값을 설정한다.
		 * http://jindo.nhncorp.com/docs/jindo/archive/Jindo2-latest/ko/symbols/%24Ajax.html#header 참조
		 */
		header : function(vName, vValue) {
			if(this.oAjax) {
				return this.oAjax.header(vName, vValue);
			}
		},

		/**
		 * @description  jindo.m.MoreContentButton 에서 사용하는 모든 객체를 release 시킨다.
		 */
		destroy: function() {
			this._detachEvent();

			for(var p in this._htWElement) {
				this._htWElement[p] = null;
			}
			this._htWElement = null;
		},
		// jindo.m.MoreContentButton function 끝


/**
 * 윗 부분은 기존 jindo_mobile_component를 그대로 가져온 부분(extend하여 사용하는데 각 서비스의 jindo mobile component가 업데이트 되거나 커스터마이징된 경우 js오류 발생가능성이 있어,
 * 위에 두고 필요한 부분만 아래에서 수정하여 컨트롤하도록 함.
 */

		/**
		 * 기존 jindo MoreContentButton의 기능중 ajax 호출하는 queryString가져오는 부분 override
		 */
		_getQueryString : function(nPage, bMore){
			if(typeof bMore === 'undefined'){
				bMore = true;
			}
			var htQuery = this.option('htAjax').htQuery || {};

			htQuery[this.option('htAjax').sDisplay] = this.getItemPerPage();
			htQuery['sort'] = this.config.option('currentSortOption');
			return htQuery;
		},

		/**
		 * @description 더보기 영역을 현재 페이지에 맞게 정보들을 설정한다.
		 */
		updateInfo : function(){
			// 더보기시 값이 없는 경우 setLastPage로 설정
			if( this._bLastPage || this._nBaseCommentCount >= this.option('nTotalItem')){
				this._bLastPage = true;
				this.setTotalItem(this._nBaseCommentCount );
			}else{
				this._bLastPage = false;
			}
		},

		/**
		 * 페이지 네비게이션뷰 갱신
		 */
		updateView : function() {
			this.hideLoadingImg();

			if( this._bLastPage ){
				this._htWElement.elBase.addClass('u_pg_end');
				if(!!this._htWElement.elMoreButton){
					this._htWElement.elMoreButton.hide();
				}
				if(!!this._htWElement.elLast){
					this._htWElement.elLast.show('block');
				}
			}else{
				this._htWElement.elBase.removeClass('u_pg_end');
				if(!!this._htWElement.elMoreButton){
					this._htWElement.elMoreButton.show('block');
				}
				if(!!this._htWElement.elLast){
					this._htWElement.elLast.hide();
				}
			}

			if(!!this._htWElement.elCurrent){
				this._htWElement.elCurrent.text(this._nBaseCommentCount);
			}

			if(typeof this._htWElement.elLastCurrent != 'undefined'){
				this._htWElement.elLastCurrent.text(this._setNumberFormat(this._nBaseCommentCount));
			}

			if(!!this._htWElement.elTotal){
				this._htWElement.elTotal.text(this._setNumberFormat(this.option('nTotalItem')));
			}
			if(typeof this._htWElement.elLastTotal != 'undefined'){
				this._htWElement.elLastTotal.text(this._setNumberFormat(this.option('nTotalItem')));
			}

			if(!!this._htWElement.elMoreCnt){
				var nMoreCount = Math.min(this.getItemPerPage(), this.option('nTotalItem') - this._nBaseCommentCount);
				this._htWElement.elMoreCnt.text(this._setNumberFormat(nMoreCount));
			}
		},

		/**
		 * 마지막 페이지 인지 여부.
		 */
		isLastPage : function() {
			return this._bLastPage;
		},

		makeLastPage : function() {
			this._bLastPage = true;
		},

		/**
		 * 기존 jindo MoreContentButton의 기능들중 다음페이지 존재여부 판단하는 로직 override
		 * 아래 method는 반드시 존재해야함.
		 */
		hasNextPage : function(){
			return this._nBaseCommentCount < this.option('nTotalItem');
		},

		setBaseCommentCount : function(nCount) {
			this._nBaseCommentCount = nCount;
		}

	}).extend(J.UIComponent);
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.moreContentArea.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 더보기 영역을 처리하는 클래스
	 */
	Comment.MoreContentArea = J.$Class({
		/** @lends nhn.comment.mobile.MoreContentArea.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends nhn.comment.mobile.CommonPageArea
		 * @require	jindo.m.MoreContentButton
		 */
		$init : function() {
			this._wel = null;
			this._oMoreContent = null;
			this._bInitComponent = false;
		},

		/**
		 * @description 더보기 영역을 생성한다.
		 * @return {jindo.$Element}
		 */
		createArea : function() {
			this._welArea = J.$Element(this.config.template('pageArea').process());
			return this._welArea;
		},

		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this._wel= J.$Element(this.config.template('pageMore').process());
			this._welArea.append(this._wel);
			this._initComponent();

			this.hide();
		},

		/**
		 * @description 더보기영역을 위한 정보를 업데이트 해준다.
		 */
		update : function(nPageNo, nTotalCount, bNeedInfoUpdate) {
			this.setPageNo(nPageNo);

			var htParams = this.config.instance.ajax.getListParams();
			htParams['comment_no'] = this.config.instance.commentListModel.getBaseLastCommentNo();

			this._oMoreContent.option('htAjax').htQuery = htParams;
			this._oMoreContent.setTotalItem(nTotalCount);
			this._oMoreContent.setShowMaxItem(nTotalCount);
			this._oMoreContent.setItemCount(nTotalCount);
			this._oMoreContent.setBaseCommentCount(this.config.instance.commentListModel.getBaseCommentCount());

			// 리스트를 가져오는 경우만 update
			if ( bNeedInfoUpdate) {
				this._oMoreContent.updateInfo();
			}

			this._oMoreContent.updateView();

			if ( this.isNeedToHidePageArea(nTotalCount) ) {
				this.hide();
				return;
			}

			this.show();
		},

		/**
		 * 전체 카운트 가져오기
		 */
		getTotalCount : function() {
			if ( this._oMoreContent.getTotalItem() == null) {
				return 0;
			}

			return this._oMoreContent.getTotalItem();
		},

		/**
		 * @description	더보기 컴포넌트를 생성한다.
		 */
		_initComponent : function() {
			var self = this;
			var htPatams = this.config.instance.ajax.getListParams();

			this._oMoreContent = new Comment.CurrentCountChangeableMoreContentButton(this.config, this._wel.$value(),{
				sClassPrefix : '__comment_more_',
	            nItemPerPage : this.config.option('pageSize'), 		//페이지당 더보기 할 건수
	            htAjax : {
	                sApi : this.config.instance.ajax.getUrl('moreList'), //ajax 호출 api
	                sDisplay : 'page_size',
	                htQuery : htPatams
	            },
	            nTotalItem : 1,
	            nShowMaxItem :1

	        }).attach({
	        	'goTop' : function() {
	        		Util.scrollTop();
	        	},
	        	'more' : function(oCustomEvent) {
	        		self._afterMore(oCustomEvent.oResponse);
	        	}
	        });
		},

		/**
		 * @description	더보기 이후, 목록 데이타를 보여준다.
		 */
		_afterMore : function(oResponse) {
			oResponse = oResponse.json();
			oResponse.more_yn = "Y";
			this.config.instance.listarea.showList(oResponse);
		},

		/**
		 * 페이지 영역을 숨길필요가 있는지 여부
		 */
		isNeedToHidePageArea : function(nTotalCount) {
			// 서비스에서 초기 controller옵셜 설정시 전달
			if ( !this.config.option('hidePageAreaIfOnlyOnePageExist')) {
				return false;
			}

			if ( !this._isFirstPageWasLastPage()  ) {
				return false;
			}

			return true;
		},

		/**
		 * 최초 로딩시 마지막 페이지 였는지 여부
		 */
		_isFirstPageWasLastPage : function() {
			if ( this._bFirstPageWasLastPage != null) {
				return this._bFirstPageWasLastPage;
			}

			this._bFirstPageWasLastPage = this.isLastPage();

			return this._bFirstPageWasLastPage;
		},

		/**
		 * 마지막 페이지 인지 여부
		 */
		isLastPage : function() {
			return this._oMoreContent.isLastPage();
		},

		/**
		 * 마지막 페이지로 만들기(더보기시 페이지 열때에는 있었던 다음페이지
		 * 댓글이 다른 사용자에 의해 삭제된 경우, 더이상 컨텐츠가 없기 때문에 이를 위한 설정)
		 */
		makeLastPage : function() {
			this._oMoreContent.makeLastPage();
		},
		
		reset : function() {
			this._oMoreContent.reset();
		}
	}).extend(Comment.CommonPageArea);

	nhn.comment.morecontentarea = new Comment.MoreContentArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.auth.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 인증처리 클래스
	 */
	Comment.Auth = J.$Class({
		/** @lends nhn.comment.mobile.Auth.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this.indexInstance = Comment.Auth.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * @description 로그인여부를 체크한다.
		 */
		checkLogin : function() {
			var htParams = {};
			htParams.ticket = this.config.option('ticket');

			this.config.instance.ajax.call( {
				operation : 'isLogin',
				async : false,
				onSuccess : J.$Fn(this._onCheckLogin, this).bind(),
				param : htParams
			});
		},

		/**
		 * @description 로그인 페이지로 리다이렉트
		 */
		redirectLogin : function() {
			if (this._isLoginNow()) {
				return true;
			}

			if (confirm(this.config.message.NOT_LOGIN)) {
				var loginUrl = this.config.option('loginUrl') || 'https://nid.naver.com/nidlogin.login';

				top.location = loginUrl + '&url=' + encodeURIComponent(this.config.option('objectUrl'));
			}

			return false;
		},

		/**
		 * 현재 로그인 상태인지 여부 체크..
		 *
		 * 브라우저 다른 탭에서 로그인했을 가능성이 있어, 로그아웃상태인 경우에는 한번더 로그인했는지 여부를
		 * 서버에 질의.
		 */
		_isLoginNow : function() {
			if (this.config.option("isLogin")) {
				return true;
			}

			this.checkLogin();

			return this.config.option("isLogin");
		},

		/**
		 * @description 비실명 인증 여부를 체크한다.
		 */
		checkAuth : function() {
			if (this.config.option('isAuth') !== undefined) {
				return;
			}
			var htParams = {};
			htParams.ticket = this.config.option('ticket');

			this.config.instance.ajax.call({
				operation : 'checkAuth',
				async : false,
				onSuccess : J.$Fn(this._onCheckAuth, this).bind(),
				param : htParams
			});
		},

		/**
		 * @description 비실명 인증 페이지로 리다이렉트
		 */
		redirectAuth : function() {
			if (this.config.option("isAuth")) {
				return true;
			}

			if (confirm(this.config.message.NOT_AUTHENTICATED)) {
				var certUrl = this.config.option('certUrl') || 'https://nid.naver.com/user/mobile_rncheck.nhn?todo=start';
				var rurl = this.config.option('certRurl') || this.config.option('objectUrl');
				var surl = this.config.option('certSurl') || this.config.option('objectUrl');
				var svc = this.config.option('certSvc') || "";

				top.location = certUrl + '&rurl=' + encodeURIComponent(rurl) + '&surl=' + encodeURIComponent(surl) + '&svc=' + svc;
			} else {
				this.checkAuth();
			}

			return false;
		},

		/**
		 * @description 비실명 체크 후, 값을 저장해 놓는다.
		 * @param	{Object}	oResult	결과값
		 */
		_onCheckAuth : function(oResult) {
			this.config.option('isAuth', oResult.is_authenticated_name == 'Y');
		},

		/**
		 * @description 로그인체크 후, 값을 저장해 놓는다.
		 * @param	{Object}	oResult	결과값
		 */
		_onCheckLogin : function(oResult) {
			if(oResult.is_logged_in == 'Y'){
				this.config.option('isLogin', true);
			}
		}
	}).extend(J.Component);

	nhn.comment.auth = new Comment.Auth();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.core.js 2012. 03. 19
*/

(function() {
	document.domain = 'naver.com';

	var J = window.nhn.comment.mobile.jindo || jindo,
	    Comment = nhn.comment.mobile;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	* @description 댓글 모듈 (초기화처리)
	*/
	Comment.Core = J.$Class({
		/** @lends nhn.comment.mobile.Core.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this.indexInstance = Comment.Core.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			this._welBody = null;
		},

		/**
		 * @description 댓글을 초기화한다.
		 */
		initialize : function() {
			this._saveInstanceInConfig();
			this._doAfterInstanceCreated();
			this._createArea();

			this.option('initialized', true);
			this.config.fireEvent('initialized');
		},

		/**
		 * 해당 댓글 메인body에 해당하는 태그 리턴
		 */
		getBody : function() {
			return this._welBody;
		},

		/**
		 * instance 생성후에 수행되어야 하는 job 수행.
		 */
		_doAfterInstanceCreated : function() {
			this.config.instance.ajax.initErrorHandler();
			
			// 서버에 설정된 값을 가져와서 세팅
			this.config.setTicketConfig();
			this.config.getUrlList();
		},

		/**
		 * @description 필요한 인스턴스를 생성하여 저장한다.
		 */
		_saveInstanceInConfig :function(){
			var htDeviceInfo = J.m.getDeviceInfo();

			this.config.instance.core = Comment.Core.getInstance()[this.indexInstance];
			this.config.instance.ajax = Comment.Ajax.getInstance()[this.indexInstance];
			this.config.instance.command = Comment.Command.getInstance()[this.indexInstance];
			this.config.instance.countarea = Comment.CountArea.getInstance()[this.indexInstance];
			this.config.instance.writearea = Comment.WriteArea.getInstance()[this.indexInstance];
			this.config.instance.bestlistarea = Comment.BestListArea.getInstance()[this.indexInstance];
			this.config.instance.listarea = Comment.ListArea.getInstance()[this.indexInstance];
			this.config.instance.auth = Comment.Auth.getInstance()[this.indexInstance];
			this.config.instance.commentListModel = Comment.CommentListModel.getInstance()[this.indexInstance];
			this.config.instance.sortListArea = Comment.SortListArea.getInstance()[this.indexInstance];
			this.config.instance.listFooterArea = Comment.ListFooterArea.getInstance()[this.indexInstance];

			if (this.config.option('useMoreContent')) {
				this.config.instance.pagearea = Comment.MoreContentArea.getInstance()[this.indexInstance];
			} else {
				this.config.instance.pagearea = Comment.PageArea.getInstance()[this.indexInstance];
			}
		},

		/**
		 * @description 사용자가 정의한 포맷 순서에 맞게 영역을 생성한다.
		 */
		_createArea : function() {
			var isHasList = false;
			this._welBody = J.$Element(J.$$.getSingle(this.config.element('body')));
			
			this._welBody.addClass(this.config.option('listType'));
			
			if ( this.config.option('isBlackMode') ) {
				this._welBody.addClass('c_black');		
			}

			if ( this.config.option('listType') == 'u_comment_v1' && this.config.option('isSimpleList') ) {
				this._welBody.addClass('u_comment_hc');
			}
			
			var aFormation = this.config.option('formation');
			var sFormation;

			var htAreaElement = {
				count : this.config.instance.countarea,
				bestList : this.config.instance.bestlistarea,
				list : this.config.instance.listarea,
				page : this.config.instance.pagearea,
				write : this.config.instance.writearea,
				listFooter : this.config.instance.listFooterArea,
				sort : this.config.instance.sortListArea,
			};

			for ( var i = 0, nLen = aFormation.length; i < nLen; i++) {
				sFormation = aFormation[i];

				if (sFormation == 'list') {
					isHasList = true;					
					this._welBody.append(this.config.instance.listarea.createEmptyArea()); // Empty Div 영역도 List 상단에 만들어 둔다.
				}

				this._welBody.append(htAreaElement[sFormation].createArea());
				htAreaElement[sFormation].afterCreateArea();
				
			}

			//댓글 리스팅
			if (isHasList) {
				this.config.instance.listarea.requestList('page', this.config.option('pageNo'), false);
			}

			this._welBody.append(J.$Element(this.config.template('reportForm').process()));
		}
	}).extend(J.Component);

	nhn.comment.core = new Comment.Core();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.controller.js 2012. 03. 19
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	* @description 댓글 모듈 생성 컨트롤러
	* 댓글의 옵션 설정과 모듈 생성은 Controller 를 통해서만 하도록 한다.
	*/
	Comment.Controller = J.$Class({
		/** @lends nhn.comment.mobile.Controller.prototype */

		_sTarget : null,
		_htOptions : null,
		_htTemplates : null,
		_htMessage : null,

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._htTemplates = {};
			this._htMessage = {};
			this._htOptions = {};
		},

		/**
		 * @description 댓글 코어을 생성한다.
		 * @param	{String}	sTarget	타겟엘리먼트접근자 (필수)
		 * @param	{String}	sTicket	티켓아이디 (필수)
		 * @param	{String}	sObjectId	오브젝트아이디 (필수)
		 * @param	{String}	sCategoryId	카데고리아이디 (생략가능)
		 */
		create : function(sTarget, sTicket, sObjectId, sCategoryId) {
			if(!sTarget || !(J.$$.getSingle(sTarget))) {
				throw TypeError('Invalid target element selector argument.');
			}
			if(!sTicket) {
				throw TypeError('Invalid ticket argument.');
			}
			if(!sObjectId) {
				throw TypeError('Invalid objectId argument.');
			}

			// 가장 최근에 생성된 댓글 코어 인스턴스 선택
			var oInstances = Comment.Core.getInstance();
			var oCore = oInstances[oInstances.length - 1];

			if (oCore.initialized) {
				var oConfIns = new Comment.Config();
				var oAuthIns = new Comment.Auth();
				var oAjaxIns = new Comment.Ajax();
				var oCoreIns = new Comment.Core();
				var oCountAreaIns = new Comment.CountArea();
				var oWriteAreaIns = new Comment.WriteArea();
				var oBestListAreaIns = new Comment.BestListArea();
				var oListAreaIns = new Comment.ListArea();
				var oPageAreaIns = new Comment.PageArea();
				var oMoreContentAreaIns = new Comment.MoreContentArea();
				var oCommandIns = new Comment.Command();
				var oCommentListModelIns = new Comment.CommentListModel();
				if (Comment.SocialCommentArea) {
					var oSocialCommentArea = new Comment.SocialCommentArea();
				}
				if (Comment.RecommendDiscommendArea) {
					var oRecommendDiscommendArea = new Comment.RecommendDiscommendArea();
				}
				var oSortListArea = new Comment.SortListArea();
				var oListFooterArea = new Comment.ListFooterArea();

				// 새로운 인스턴스들을 생성하고 최신의 core 인스턴스를 얻어온다.
				oCore = oInstances[oInstances.length - 1];
			}

			//설정 재적용
			this.resetConfig(oCore);

			// 댓글 ticket, objectId, categoryId 설정
			oCore.config.option('ticket', sTicket);
			oCore.config.option('objectId', sObjectId);
			if(sCategoryId) {
				oCore.config.option('categoryId', sCategoryId);
				oCore.config.option('viewCategoryId', sCategoryId);
			}

			// 댓글이 표시될 영역 설정
			oCore.config.element('body',sTarget);
			oCore.initialized = true;

			// 댓글 인스턴스 반환
			return oCore;
		},

		/**
		 * @description 댓글 코어를 초기화한다.
		 */
		initialize : function(oCore) {
			// 댓글 초기화
			oCore.initialize();
		},

		/**
		 * @description 커스텀 이벤트 핸들러를 등록한다.
		 * @param	{HashTable}	htEventHandler	이벤트핸들러
		 */
		addEventHandler : function(oCore, htEventHandler) {
			if (oCore && oCore.initialized) {
				oCore.config.attach(htEventHandler);
			}
		},

		/**
		 * @description 옵션을 설정한다.
		 * @param	{Object}	oOption	옵션명 혹은 오브젝트
		 * @param	{Object}	oValue	값
		 */
		setOptions : function(oOption, oValue)
		{
			if (typeof oOption == 'object') {
				for (var sKey in oOption) {
					this._htOptions[sKey] = oOption[sKey];
				}
			} else if (typeof oOption == 'string' && oValue) {
				this._htOptions[oOption] = oValue;
			}
		},


		/**
		 * @description 옵션을 설정한다.
		 * @param	{Object}	oOption	옵션명 혹은 오브젝트
		 * @param	{Object}	oValue	값
		 */
		setTemplates : function(oTemplate, oValue) {
			if (typeof oTemplate == 'object') {
				for (var sKey in oTemplate) {
					this._htTemplates[sKey] = oTemplate[sKey];
				}
			} else if (typeof oTemplate == 'string' && oValue) {
				this._htTemplates[oTemplate] = oValue;
			}
		},


		/**
		 * @description 옵션을 설정한다.
		 * @param	{Object}	oOption	옵션명 혹은 오브젝트
		 * @param	{String}	sValue	값
		 */
		setMessages : function(oMessage, sValue) {
			if (typeof oMessage == 'object') {
				for (var sKey in oMessage) {
					this._htMessage[sKey] = oMessage[sKey];
				}
			} else if (typeof oMessage == 'string' && sValue) {
				this._htMessage[oMessage] = sValue;
			}
		},

		/**
		 * @description	인스턴스들에 변경된 설정과 템플릿을 적용한다.
		 * oCoreInstance 를 넘기지 않은 경우, 모든 인스턴스에 설정을 갱신한다.
		 *
		 * @param	{nhn.comment.mobile.Core}	oCoreInstance	코어인스턴스
		 */
		resetConfig : function(oCore) {
			var aInstances;
			if(oCore && oCore.name == 'nhn.comment.mobile.Core') {
				aInstances = [oCore];
			} else {
				aInstances = Comment.Core.getInstance();
			}

			for(var i = 0; i < aInstances.length; i++) {
				var oInstance = aInstances[i];
				// 사용자 설정 적용
				oInstance.config.option(this._htOptions);

				// 사용자 템플릿 적용
				oInstance.config.template(this._htTemplates);

				// 사용자 메시지 적용
				oInstance.config.message(this._htMessage);
			}
		}
	}).extend(J.Component);
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
* @(#)nhn.comment.mobile.commentListModel.js 2012. 04. 27
*/
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = nhn.comment.mobile.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';

	/**
	 * @description 댓글 관련 model
	 */
	Comment.CommentListModel = J.$Class({
		/** @lends nhn.comment.mobile.commentListModel.prototype */

		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this.reset();
			this.indexInstance = Comment.CommentListModel.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
		},

		/**
		 * 타겟 리스트에서 해당 commentNo를 갖는 comment의 index 반환
		 */
		_getCommentIndex : function(waCommentList, sCommentNo) {
			var nIndex = null;

			if ( waCommentList == null || sCommentNo == null) {
				return null;
			}

			waCommentList.forEach(
				function(oEach, index, array) {
					if ( oEach.commentNo == sCommentNo) {
						nIndex = index;
						J.$A.Break();
					}
				}
			)

			return nIndex;
		},

		/**
		 * commentNo에 해당하는 comment 삭제 marking
		 */
		markTargetCommentDeleted : function(sCommentNo) {
			var waTargetCommentList = this._findTargetCommentList(sCommentNo);
			var nIndex = this._getCommentIndex(waTargetCommentList, sCommentNo);
			var htCommentInfo = waTargetCommentList.get(nIndex);

			htCommentInfo.isDeleted = true;
			waTargetCommentList.set(nIndex, htCommentInfo);
		},

		/**
		 * 해당 commentNo가 있는 commentList 가져오기
		 */
		_findTargetCommentList : function(sCommentNo) {
			if (this._isExistInBaseCommentList(sCommentNo)) {
				return this._waBaseCommentList;
			}

			return this._waBottomCommentList;
		},

		/**
		 * 기본적인 commentInfo 생성
		 */
		_generateCommentInfo : function(oComment) {
			var htCommentInfo = {};
			htCommentInfo.commentNo = oComment.getCommentNo();
			htCommentInfo.replyLevel = oComment.getReplyLevel();
			htCommentInfo.registeredDate = oComment.getRegisteredDate();
			htCommentInfo.isDeleted = oComment.isDeleted();

			return htCommentInfo;
		},

		/**
		 * Baselist에 추가할수 있는지 여부
		 */
		_isPossibleToAddBaseCommentList : function(nParentCommentNo) {
			// 1레벨 댓글이면 가능
			if ( nParentCommentNo == 0) {
				return true;
			}

			// 마지막 페이지면 가능
			if ( this.config.instance.pagearea.isLastPage() ) {
				return true;
			}

			// 부모comment가 baselist에 있고, 부모 comment이후 comment들이 모두 부모의 자손들이 아니면 가능
			if ( this._isExistInBaseCommentList(nParentCommentNo) && !this._isHighReplyLevelOnlyExistAfterComment(nParentCommentNo)) {
				return true;
			}

			return false;
		},

		/**
		 * 해당 comment 이후의 comment들이 모두 해당 comment의 자손들인지 여부
		 */
		_isHighReplyLevelOnlyExistAfterComment : function(sCommentNo) {
			var htCommentInfo = this._getBaseCommentInfo(sCommentNo);

			var waSlicedListAfterTargetComment = this._getSlicedListAfterCommentNo(this._waBaseCommentList, sCommentNo);

			if ( waSlicedListAfterTargetComment == null) {
				return true;
			}

			var bOnlyHighLevelCommentExist = true;

			waSlicedListAfterTargetComment.forEach(
				function(oEach, index, array) {
					if ( oEach.replyLevel <= htCommentInfo.replyLevel ) {
						bOnlyHighLevelCommentExist = false;
						J.$A.Break();
					}
				}
			);

			return bOnlyHighLevelCommentExist;
		},

		/**
		 * 특정 commentNo 이후의 comment리스트들을 반환
		 */
		_getSlicedListAfterCommentNo : function(waCommentList, sCommentNo) {
			var nIndex = this._getCommentIndex(waCommentList, sCommentNo);

			if ( nIndex == null) {
				return null;
			}

			return waCommentList.slice(nIndex + 1, waCommentList.length());
		},

		/**
		 * 생성된 comment가 위치할 바로앞 형제 node의 commentNo를 반환
		 */
		findPreSiblingCommentNoOfCreatedComment : function(nParentCommentNo, nReplyLevel) {
			var waTargetCommentList = this._waBaseCommentList;
			var sPreSiblingCommentNo = 0;

			if ( !this._isPossibleToAddBaseCommentList(nParentCommentNo)) {
				waTargetCommentList = this._waBottomCommentList;

				if ( this._isExistInBaseCommentList(nParentCommentNo) ) {
					nParentCommentNo = 'empty';
				}
			}

			var nIndex = this._getCommentIndex(waTargetCommentList, nParentCommentNo);

			if ( nIndex == null) {
				return 0;
			}

			var htParentCommentInfo = this.getCommentInfoFromBaseAndBottom(nParentCommentNo);
			var waSlicedListAfterTargetComment = this._getSlicedListAfterCommentNo(waTargetCommentList, nParentCommentNo);
			var sPreSiblingCommentNo = nParentCommentNo;

			// replyLevel이 같거나 크면 저장.
			waSlicedListAfterTargetComment.forEach(
				function(oEach, index, array) {
					if ( oEach.replyLevel < nReplyLevel ) {
						J.$A.Break();
					}

					sPreSiblingCommentNo = oEach.commentNo;
				}
			);

			return sPreSiblingCommentNo;
		},

		/**
		 * BottomComment가 비어있는지 여부
		 */
		isEmptyBottomComment : function() {
			if ( this._waBottomCommentList.length() == 1) {
				return true;
			}

			return false;
		},

		/**
		 * BaseComment가 비어있는지 여부
		 */
		isEmptyBaseComment : function() {
			if ( this._waBaseCommentList.length() > 0) {
				return false;
			}

			return true;
		},

		/**
		 * nPreSiblingCommentNo 뒤에 oComment 추가
		 */
		addComment : function(oComment, nPreSiblingCommentNo) {
			if ( oComment == null) {
				return;
			}

			var htCommentInfo = this._generateCommentInfo(oComment);

			// 이전 commentNo가 없으면 제일 뒤에 추가
			if ( nPreSiblingCommentNo == null) {
				this._waBaseCommentList.push(htCommentInfo);
				return;
			}

			// 이전 commentNo가 0이면 가장앞에 추가(1단계 레벨임)
			if ( nPreSiblingCommentNo == 0 ) {
				this._waBaseCommentList.unshift(htCommentInfo);
				return;
			}

			this._createListWithCommentInserted(htCommentInfo, nPreSiblingCommentNo);
		},

		/**
		 * 알맞은 list를 찾아서, 해당 commentInfo를 nPreSiblingCommentNo 뒤에 추가
		 */
		_createListWithCommentInserted : function(htCommentInfo, nPreSiblingCommentNo) {
			var waTargetCommentList = this._findTargetCommentList(nPreSiblingCommentNo);
			var nPreSiblingCommentIndex = this._getCommentIndex(waTargetCommentList, nPreSiblingCommentNo) + 1;

			var waNewCommentList = J.$A([]);
			waNewCommentList = waTargetCommentList.slice(0, nPreSiblingCommentIndex);
			waNewCommentList.push(htCommentInfo);

			waTargetCommentList.slice(nPreSiblingCommentIndex, waTargetCommentList.length()).forEach(
				function(oEach, index, array) {
					waNewCommentList.push(oEach);
				}
			);

			if (this._isExistInBaseCommentList(nPreSiblingCommentNo)) {
				this._waBaseCommentList = waNewCommentList;
				return;
			}

			this._waBottomCommentList = waNewCommentList;
		},

		/**
		 * baseList의 마지막 comment인지 여부
		 */
		_isLastBaseCommentNo : function(sCommentNo) {
			return this.getBaseLastCommentNo() == sCommentNo;
		},

		/**
		 * baseList의 마지막 comment fetch
		 */
		_getBaseLastComment : function() {
			if ( this._waBaseCommentList.length() == 0) {
				return null;
			}

			return this._waBaseCommentList.get(this._waBaseCommentList.length()-1);
		},

		/**
		 * baseList의 마지막 commentNo fetch
		 */
		getBaseLastCommentNo : function() {
			var htLastComment = this._getBaseLastComment();

			if ( htLastComment == null) {
				return 0;
			}

			return htLastComment.commentNo;
		},

		/**
		 * commentNo에 해당하는 comment 삭제
		 */
		removeComment : function(sCommentNo) {
			if ( sCommentNo == null) {
				return;
			}

			var nIndex = null;

			this._waBaseCommentList = this._getListWithoutTargetComment(this._waBaseCommentList, sCommentNo);
			this._waBottomCommentList = this._getListWithoutTargetComment(this._waBottomCommentList, sCommentNo);
		},

		/**
		 * 특정 list에서 targetComment 제외후 리턴
		 */
		_getListWithoutTargetComment : function(waCommentList, sCommentNo) {
			return waCommentList.filter(
				function(oEach, index, array) {
					if ( oEach.commentNo == sCommentNo) {
						return false;
					}

					return true;
				}
			);
		},

		/**
		 * 기본 정보 reset
		 */
		reset : function() {
			this._waBaseCommentList = J.$A([]);
			this._waBottomCommentList = J.$A([]);

			var htComment = {};
			htComment.commentNo = 'empty';
			htComment.replyLevel = 1;
			htComment.isDeleted = false;

			this._waBottomCommentList.push(htComment);
		},

		/**
		 * BaseList에서 sCommentNo에 해당하는 commentInfo 반환
		 */
		_getBaseCommentInfo : function(sCommentNo) {
			var oComment = null;

			var nIndex = this._getCommentIndex(this._waBaseCommentList, sCommentNo);

			if ( nIndex == null) {
				return null;
			}

			return this._waBaseCommentList.get(nIndex);
		},

		// 해당 commentNo에 해당하는 comment가 BaseCommentList에 있는지?
		_isExistInBaseCommentList : function(sCommentNo) {
			if ( sCommentNo == null || this._getBaseCommentInfo(sCommentNo) == null) {
				return false;
			}

			return true;
		},

		/**
		 * 해당 commentNo에 해당하는 comment가 BottomList에 있는지 여부
		 */
		isExistInBottomCommentList : function(sCommentNo) {
			if ( sCommentNo == null) {
				return false;
			}

			var bExist = false;

			this._waBottomCommentList.forEach(
				function(oEach, index, array) {
					if ( oEach.commentNo == sCommentNo) {
						bExist = true;
						J.$A.Break();
					}
				}
			)

			return bExist;
		},

		/**
		 * BaseList 또는 BottomList에서 CommentNo에 해당하는 commentInfo 반환
		 */
		getCommentInfoFromBaseAndBottom : function(sCommentNo) {
			var oComment = this._getBaseCommentInfo(sCommentNo);

			if ( oComment != null) {
				return oComment;
			}

			this._waBottomCommentList.forEach(
				function(each, index, array) {
					if ( each.commentNo == sCommentNo) {
						oComment = each;
						J.$A.Break();
					}
				}
			);

			return oComment;
		},

		/**
		 * commentNo에 해당하는 comment를 삭제(view에서 제거)할수 있는지 여부
		 */
		canRemoveTargetComment : function(sCommentNo) {
			var htComment = this.getCommentInfoFromBaseAndBottom(sCommentNo);
			var htNextComment = this._getNextSiblingCommentInfo(sCommentNo);

			// 해당 댓글 정보가 없거나, 삭제상태가 아니면 불가
			if ( htComment == null || !htComment.isDeleted ) {
				return false;
			}

			// maxDepth 보다 작고
			// 마지막 페이지가 아닌데, 보이는 영역 마지막 comment이면 삭제 불가
			// 다음 페이지에서 해당 comment의 답글 존재 가능성이 있기 때문.
			if ( htComment.replyLevel < this.config.option('maxDepth') && !this.config.instance.pagearea.isLastPage() && this._isLastBaseCommentNo(sCommentNo)) {
				return false;
			}

			// 해당 comment에 답글이 안달려있으면 삭제 가능
			if ( htNextComment != null && htNextComment.replyLevel > htComment.replyLevel ) {
				return false;
			}

			return true;
		},

		/**
		 * commentNo이전에 위치한 commentInfo를 반환
		 */
		getPreSiblingCommentInfo : function(sCommentNo) {
			var waTargetCommentList = this._findTargetCommentList(sCommentNo);
			var nIndex = this._getCommentIndex(waTargetCommentList, sCommentNo);

			if ( nIndex == null) {
				return null;
			}

			return waTargetCommentList.get(nIndex - 1);
		},

		/**
		 * commentNo 이후에 위치한 commentInfo를 반환
		 */
		_getNextSiblingCommentInfo : function(sCommentNo) {
			var waTargetCommentList = this._findTargetCommentList(sCommentNo);
			var nIndex = this._getCommentIndex(waTargetCommentList, sCommentNo);

			if ( nIndex == null) {
				return null;
			}

			return waTargetCommentList.get(nIndex + 1);
		},

		/**
		 * BaseCommentList의 개수를 반환
		 */
		getBaseCommentCount : function() {
			return this._waBaseCommentList.length();
		},

		/**
		 * BottomList의 가장하단에 연속하여 삭제 마크된 comment 수를 반환
		 * 전체 카운트 계산시 고려.
		 */
		findBottomSequentialDeletedCommentCountFromBase : function() {
			var nCount = 0;

			for (var nIndex = this._waBaseCommentList.length() ; nIndex > 0 ; nIndex--) {
				var htCommentInfo = this._waBaseCommentList.get(nIndex-1);
				if ( !htCommentInfo.isDeleted ) {
					break;
				}

				nCount++;
			}

			return nCount;
		}
	}).extend(J.Component);

	nhn.comment.commentListModel = new Comment.CommentListModel();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
 * @(#)nhn.comment.mobile.socialCommentArea.js 2012. 11. 05
 */
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';
	
	/**
	 * @description 소셜댓글 영역을 처리하는 클래스 
	 */
	Comment.SocialCommentArea = J.$Class({
		/** @lends nhn.comment.mobile.SocialCommentArea.prototype */
		
		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._welArea = null;
			
			this.indexInstance = Comment.SocialCommentArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			
			this._initConfig();
		},
		
		/**
		 * @description 소셜댓글 설정 초기화
		 */
		_initConfig : function() {
			this.config.element({
				socialCommentWriteBoxArea : '.__comment_sns'
			});
			
			this.config.template({
				socialCommentWriteBoxArea :				
					'<div class="u_socail __comment_sns">'+
						'<span class="u_socail_ch"><input type="checkbox" name="check1" id="me2day_{=level}" value="미투데이 동시 등록하기" class="chb _me2day {if !isMe2day}disabled{/if} __comment_sns_checkbox()"><label for="me2day_{=level}" class="lbl_me2 c_line c_bak">미투데이 동시 등록하기</label></span>'+
						'<span class="u_socail_ch"><input type="checkbox" name="check2" id="facebook_{=level}" value="페이스북 동시 등록하기" class="chb _facebook {if !isFacebook}disabled{/if} __comment_sns_checkbox()"><label for="facebook_{=level}" class="lbl_facebook c_line c_bak">페이스북 동시 등록하기</label></span>'+
						'<span class="u_socail_ch"><input type="checkbox" name="check3" id="twitter_{=level}" value="트위터 동시 등록하기" class="chb _twitter {if !isTwitter}disabled{/if} __comment_sns_checkbox()"><label for="twitter_{=level}" class="lbl_twitter c_line c_bak">트위터 동시 등록하기</label></span>'+
						//'<span class="u_socail_ch"><input type="checkbox" name="check4" id="yozm_{=level}" value="다음 요즘 동시 등록하기" class="chb _yozm {if !isYozm}disabled{/if} __comment_sns_checkbox()"><label for="yozm_{=level}" class="lbl_yozm c_line c_bak">다음 요즘 동시 등록하기</label></span>'+ // 20130621
						'<span class="u_set"><a href="#" class="u_setting c_line c_bak __comment_sns_config()">SNS 설정</a></span>'+
					'</div>',

				socialCommentListArea :
					'{if \'true\'== isMe2day}<a href="{js jindo.$S((=config.option(\'urlList\').social.redirectSns)).format((=ticket),(=commentNo),\'ME2DAY\')}" {if !isSocialLinkOpen}onclick="return false;"{/if} target="_blank"><span class="ico_socail ico_me2">미투데이 동시 등록</span></a>{/if}' +
					'{if \'true\'== isFacebook}<a href="{js jindo.$S((=config.option(\'urlList\').social.redirectSns)).format((=ticket),(=commentNo),\'FACEBOOK\')}" {if !isSocialLinkOpen}onclick="return false;"{/if} target="_blank"><span class="ico_socail ico_facebook">페이스북 동시 등록</span></a>{/if}' + 
					'{if \'true\'== isTwitter}<a href="{js jindo.$S((=config.option(\'urlList\').social.redirectSns)).format((=ticket),(=commentNo),\'TWITTER\')}" {if !isSocialLinkOpen}onclick="return false;"{/if} target="_blank"><span class="ico_socail twitter">트위터 동시 등록</span></a>{/if}' +
					'{if \'true\'== isYozm}<a href="{js jindo.$S((=config.option(\'urlList\').social.redirectSns)).format((=ticket),(=commentNo),\'YOZM\')}" {if !isSocialLinkOpen}onclick="return false;"{/if} target="_blank"><span class="ico_socail ico_yozm">다음 요즘  동시 등록</span></a>{/if}'
					
			});
			
			this.config.option('nidManageSocialAuthUrl', 'https://nid.naver.com/mobile/user/help/externalAuth.nhn?&menu=nid4'); // 내정보 외부연동 관리 URL
			this.config.option('socialAuthUrl', 'http://nid.naver.com/oauth/idLink.nhn?');	// socialProvider 연동 URL
			this.config.option('useSocialComment', false);	// 소셜댓글 사용여부
			this.config.option('snsAuthStatus', {});		// 소셜댓글 연동 상태
			this.config.option('social', {					// 소셜댓글 nConfig 설정
				active : false,
				link_open : false,
				reply_active : false
			});
			
			var comment = this.config.option('comment');
			comment.push('isMe2day');
			comment.push('isFacebook');
			comment.push('isTwitter');
			comment.push('isYozm');
			comment.push('isSocialLinkOpen');
			this.config.option('comment', comment);
			
			var convention = this.config.option('convention');
			convention.isMe2day = 'is_me2day';
			convention.isFacebook = 'is_facebook';
			convention.isTwitter = 'is_twitter';
			convention.isYozm = 'is_yozm';
			this.config.option('convention', convention);
			
			// 소셜 인증 후 처리하는 함수 attach
			this.config.attach('afterSocialAuth', J.$Fn(this._changeSnsCheckBoxIcon, this).bind());
		},
		
		/**
		 * 소셜 인증 후 처리
		 * 
		 * @param {Hash Table} oOption 
		 */
		_changeSnsCheckBoxIcon : function(oOption) {
			var sSnsName = oOption.sns;
			// 체크박스와 label 가져와서
			var elCheckboxList = J.$$('.__comment_sns input._' + sSnsName);
			
			for ( var i = 0; i < elCheckboxList.length; ++i ) {
				var welCheckbox = J.$Element(elCheckboxList[i]);
				var welLabel = welCheckbox.next();
				welCheckbox.removeClass('disabled');
				welCheckbox.attr('checked','checked');// 체크 처리하고
				welLabel.removeClass('off');	// 아이콘 변경			
				welLabel.addClass('on');
			}			
		},
		
		/**
		 * @description 쓰기 영역에 소셜댓글 영역 HTML 생성
		 * @param bRoot {Boolean} 최상위 댓글 여부(댓글:true, 답글:false)
		 * @returns {String} 소셜댓글 영역 HTML
		 */
		createWriteBoxAreaHtml : function(bRoot) {
			var htSocialConfig = this.config.option('social');
			var bActive = bRoot ? htSocialConfig['active'] : htSocialConfig['reply_active'];	// 댓글/답글 레벨에 따라 소셜댓글 활성 여부를 체크
			// 사용 설정 안됐으면 그냥 반환
			if (!this.config.option('useSocialComment') || !bActive) {				
				return '';
			}
			
			// 소셜댓글 사용하면 HTML 생성해서 반환
					
			if ( !this.config.option('isLogin') ) {
				htSocialComment = new J.$H( { isMe2day:false, isFacebook:false, isTwitter:false, isYozm:false});
				htSocialComment.level = bRoot ? 1 : 2;
				return this.config.template('socialCommentWriteBoxArea').process(htSocialComment.$value());
			} else {
				var htSocialComment = this._getSnsAuthStatus();
				htSocialComment.level = bRoot ? 1 : 2;
				return this.config.template('socialCommentWriteBoxArea').process(htSocialComment);
				
			}
			
		},
		
		/**
		 * @description 댓글 목록 영역에 소셜댓글 아이콘 영역 HTML 생성
		 * @param htOption {HashTable} 댓글 데이터
		 * @returns {String} 소셜댓글 아이콘 영역 HTML
		 */
		createListAreaHtml : function(htOption) {
			var htSocialConfig = this.config.option('social');
			if (this.config.option('useSocialComment') && htSocialConfig['active']
					&& htOption.isMine && (htOption.isMe2day || htOption.isFacebook || htOption.isTwitter || htOption.isYozm)) {
				
				// 답글일 경우, 답글에 소셜댓글 활성화 여부 체크
				if (htOption.replyLevel > 1 && !htSocialConfig['reply_active']) {
					return '';
				}
				
				htOption.isSocialLinkOpen = htSocialConfig['link_open'];
				return this.config.template('socialCommentListArea').process(htOption);
			}
			
			return '';
		},
		
		/**
		 * @description 쓰기 영역에 이벤트 바인딩
		 * @param welTargetSnsArea {WrappingElement} 이벤트 바인딩할 소셜댓글 영역 element
		 */
		createWriteBoxBubbler : function(welTargetSnsArea) {
			if ( welTargetSnsArea == null ) {
				return;
			}
			
			this._oWriteBoxBubbler = new Util.Bubbler(welTargetSnsArea.$value()).attach({
				'__comment_sns_checkbox:click' : J.$Fn(this._onClickSnsCheckBox, this).bind(),
				'__comment_sns_config:click' : J.$Fn(this._onClickSnsConfigBtn, this).bind()
			});

			welTargetSnsArea.preventTapHighlight(true);
		},
		
		/**
		 * @description 소셜댓글 체크박스 체크 상태를 받은 파라미터에 붙여서 반환한다.
		 * @param welForm {WrappingElement} 글쓰기 폼
		 * @param htParam {HashTable} 파라미터 해시 테이블
		 * @returns {HashTable} htParam 받은 파라미터 다시 반환
		 */
		getParams : function(welForm, htParam) {
			if (this.config.option('useSocialComment')) {
				var welCheckboxArea = welForm.query(this.config.element('socialCommentWriteBoxArea'));
				if (welCheckboxArea) {
					// 체크된 SNS를 가져와서 파라미터에 넣는다.
					if (welCheckboxArea.query('input._me2day')) {
						htParam.add_post_me2day = welCheckboxArea.query('input._me2day').attr('checked') ? 'Y' : 'N';
					}
					if (welCheckboxArea.query('input._facebook')) {
						htParam.add_post_facebook = welCheckboxArea.query('input._facebook').attr('checked') ? 'Y' : 'N';
					}
					if (welCheckboxArea.query('input._twitter')) {
						htParam.add_post_twitter = welCheckboxArea.query('input._twitter').attr('checked') ? 'Y' : 'N';
					}
					if (welCheckboxArea.query('input._yozm')) {
						htParam.add_post_yozm = welCheckboxArea.query('input._yozm').attr('checked') ? 'Y' : 'N';
					}
				}
			}
			
			return htParam;
		},
		
		/**
		 * @description SNS 체크박스 클릭
		 * @param oEvent {WrappingEvent} 이벤트 객체
		 */
		_onClickSnsCheckBox : function(oEvent) {
			// 로그인 안했으면 로그인 창 띄우고 끝
			if (!this.config.option('isLogin')) {
				this.config.instance.auth.redirectLogin();
				
				oEvent.stop();
				return;
			}
			
			// 체크박스의 label로 지정된 SNS 아이콘
			var welInput = J.$Element(oEvent.element);
			var welLabel = J.$Element(welInput.next());
			
			if (welInput.tag.toLowerCase() == 'label') {
				welLabel = welInput;
				welInput = J.$Element(welInput.prev());
			}
			
			// 연동 안돼있으면 인증 팝업 띄우기			
			if (welInput.hasClass('disabled')) {
				var sSnsName = welLabel.attr('for').match(/(\w+)_\d+/)[1];	// id패턴 : SNS이름_숫자
				if (sSnsName == 'me2day') {
					// 미투데이는 인증 팝업을 제공하지 않음
					alert('미투데이 아이디 인증이 필요합니다.');
					oEvent.stopDefault();
					return;
				}
				
				//var sSvcUrlTpl = this.config.option('urlList')['social']['afterSocialAuth'];	// 인증 후처리용 URL
				//var sSvcUrl = sSvcUrlTpl.replace(/{SOCIAL_PROVIDER}/, sSnsName);
				var whtParams = J.$H({
					servicekey : 'COMMON_COMMENT',
					type : sSnsName,
					viewtype : 2,
					svcurl : this.config.option('objectUrl')
				});
				
				//네이버앱에서 팝업이 동작하지않아서 페이지 이동으로 변경
				location.href = this.config.option('socialAuthUrl') + whtParams.toQueryString();				
				
				oEvent.stopDefault();
				return;
			}
			
			if ( welLabel.hasClass('on') ) {
				welLabel.removeClass('on');
			} else {
				welLabel.addClass('on');
			}
			
			//oEvent.stopDefault();
		},
		
		/**
		 * @description 설정 링크에 회원쪽 페이지 호출 이벤트 처리
		 * @param oEvent {WrappingEvent} 이벤트 객체
		 */
		_onClickSnsConfigBtn : function(oEvent) {			
			// 로그인 안했으면 로그인 창 띄우고 끝
			if (!this.config.option('isLogin')) {
				this.config.instance.auth.redirectLogin();
				
				oEvent.stop();
				return;
			}
			
			Util.popUp(this.config.option('nidManageSocialAuthUrl'), 'socialComment');
			oEvent.stopDefault();
		},
		
		/**
		 * @description 서버에서 SNS 인증 상태 확인
		 * @returns {HashTable} SNS 인증 상태
		 */
		_getSnsAuthStatus : function() {
			var whtSocialComment = J.$H(this.config.option('snsAuthStatus'));
	    	if (whtSocialComment.length() == 0) {
	    		var htParams = {
    				ticket : this.config.option('ticket')
	    		};
	    			    		
	    		this.config.instance.ajax.call( {
	    			operation : 'snsAuthStatus',
	    			async : false,
	    			onSuccess : J.$Fn(function(oResponse){
	    				var oResult = oResponse['sns_auth_status'];
	    				if (oResult instanceof Array) {
	    					oResult = {};
	    				}
	    				this.config.option('snsAuthStatus', oResult);
	    			}, this).bind(),
	    			param : htParams
	    		});
	    	}
	    	
	    	return this.config.option('snsAuthStatus');
		}

	}).extend(J.Component);
	
	nhn.comment.socialCommentArea = new Comment.SocialCommentArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
 * @(#)nhn.comment.mobile.recommendDiscommendArea.js 2012. 11. 05
 */
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';
	
	/**
	 * @description 공감비공감 영역을 처리하는 클래스 
	 */
	Comment.RecommendDiscommendArea = J.$Class({
		/** @lends nhn.comment.mobile.RecommendDiscommendArea.prototype */
		
		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._welArea = null;
			
			this.indexInstance = Comment.RecommendDiscommendArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			
			this._initConfig();
		},
		
		/**
		 * @description 공감 비공감 설정 초기화
		 */
		_initConfig : function() {
			this.config.element({
				recommendDiscommendBtnArea : '.__comment_recomm'
			});
			
			this.config.template({
				recommendCommand : '<a href="#" title="공감" class="__comment_rec" commentNo="{=commentNo}"><span class="u_hc">공감</span> <em>{=upCount}</em></a>',
				discommendCommand : '<a href="#" title="비공감" class="__comment_disc" commentNo="{=commentNo}"><span class="u_hc">비공감</span> <em>{=downCount}</em></a>'
					
			});
			
			this.config.option('useRecommendBtn', 0);	// 공감비공감 사용여부 0: 사용안함, 1: 공감만 사용, 2: 공감/비공감 사용
			
		},
		
		/**
		 * @description 댓글 목록 영역에 공감비공감 아이콘 영역 HTML 생성
		 * @param htOption {HashTable} 댓글 데이터
		 * @returns {String} 공감비공감 아이콘 영역 HTML
		 */
		createListAreaHtml : function(htOption) {
			if (htOption.replyLevel > this.config.option('useRecommendBtnLevel')) {
				return '';
			}
			
			var sHtml = this.config.template('recommendCommand').process(htOption);
			
			if (this.config.option('useRecommendBtn') == 0) {
				return '';
			}
			
			if (this.config.option('useRecommendBtn') > 1) {
				
				return this.config.template('recommendCommand').process(htOption) + this.config.template('discommendCommand').process(htOption);
			}
			
			return sHtml;
		},
		
		/**
		 * @description 리스트 영역에 이벤트 바인딩
		 * @param welTargetRecommendArea {WrappingElement} 이벤트 바인딩할 공감비공감 영역 element
		 */
		createListBubbler : function(welTargetRecommendArea) {
			if ( welTargetRecommendArea == null ) {
				return;
			}
					
			J.$Element(welTargetRecommendArea.$value()).delegate(
					"click", 
					".__comment_rec",
					J.$Fn(this._recommendCommand, this).bind()
			);
			
			J.$Element(welTargetRecommendArea.$value()).delegate(
					"click", 
					".__comment_disc",
					J.$Fn(this._discommendCommand, this).bind()
			);

			welTargetRecommendArea.preventTapHighlight(true);
		},
		
		//덧글 공감
		_recommendCommand : function(e) {
			e.stopDefault();
			this.vote('recommend', e.element);
		},
		
		//덧글 비공감
		_discommendCommand : function(e) {	
			e.stopDefault();
			this.vote('discommend', e.element);
		},
		
		//유저공감반영
		vote : function(operation, elClickedBtn) {
			var params = {};
			params.ticket = this.config.option('ticket');
			params.object_id = this.config.option('objectId');
			params.comment_no = J.$Element(elClickedBtn).attr("commentNo");
			if(operation == 'recommend'){
				params.recommend_up_yn = 'Y';
			}else{
				params.recommend_up_yn = 'N';
			}
			
			this.config.instance.ajax.call( {
				operation : 'vote',
				onSuccess : J.$Fn(this._processVote, this).bind(elClickedBtn),
				param : params
			});
			
		},
		
		//공감, 비공감 하고 나서 처리해야하는 부분.
		_processVote : function(elClickedBtn, result) {
			// 숫자 업데이트
			var wElClickedBtn = J.$Element(J.$$.getSingle("em", elClickedBtn));
			var count = Number(wElClickedBtn.text());
			
			wElClickedBtn.text(count + 1);
		}

	}).extend(J.Component);
	
	nhn.comment.recommendDiscommendArea = new Comment.RecommendDiscommendArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
 * @(#)nhn.comment.mobile.sortListArea.js 2012. 12. 05
 */
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';
	
	/**
	 * @description 리스트 정렬 영역을 처리하는 클래스 
	 */
	Comment.SortListArea = J.$Class({
		/** @lends nhn.comment.mobile.SortListArea.prototype */
		
		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			this._htSortTypeNameList = J.$H( { newest:'최신순', oldest:'등록순' , recommend:'공감순'} );
			
			this.indexInstance = Comment.SortListArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			
			this._initConfig();
		},
		
		/**
		 * @description 리스트 정렬 영역 초기화
		 */
		_initConfig : function() {
			
			this._welSortAreaRoot = null;
			this.config.element({
				sortArea : '.__sort_area'
			});
			
			this.config.template({
				sortAreaRoot : '<div class="u_sort __sort_area"></div>',
				sortRadioButtonRoot : '<div class="u_sr"></div>',
				sortRadioButtonItem : '<a href="#" class="__sortList" id="{=sortId}">'+
									  '<input type="radio" name="radio" class="u_rio __sortListRadio({=sortId})" value="{=sortName}" id="{=sortId}" {if checked}checked="checked"{/if}>'+
									  '<label for="radio1" id="{=sortId}">{=sortName}</label></a>',
				sortSelectBoxRoot : '<select class="u_sl __sortList"></select>',
				sortSelectBoxItem : '<option value="{=sortId}" {if selected}selected="selected"{/if} >{=sortName}</option>'
			});
			
			this.config.option('useSortList', true); 			
			this.config.option('sortListUiType', 'radio'); 
			this.config.option('currentSortOption', 'newest' ); //해당 정렬 옵션을 기본으로 설정한다
			this.config.option('sortOptionList', ['newest', 'oldest']); //정렬 옵션 LIST {"newest", "oldest", "recommend", "highscore", "lowscore"}
	
		},
		
			
		/**
		 * @description 리스트 정렬 영역 생성
		 * @param 
		 * @returns 
		 */
		createArea : function() {
			
			this._welSortAreaRoot = J.$Element(this.config.template('sortAreaRoot').process());
			
			if ( !this.config.option('useSortList') ) {
				return this._welSortAreaRoot;
			}
			this._welSortAreaRoot.attr('id',this.config.element('focusTarget'));
			
			var sortOptionList = this.config.option('sortOptionList');
			
			if (this.config.option('sortListUiType') == 'select' ) {
				
				var welSortSelectRoot = J.$Element(this.config.template('sortSelectBoxRoot').process());
				
				for ( var i = 0; i < sortOptionList.length; ++i ) {
					var welSelectItem = J.$Element(this.config.template('sortSelectBoxItem').process({ sortId : sortOptionList[i], sortName : this._htSortTypeNameList.$(sortOptionList[i]), selected : this.config.option('currentSortOption') == sortOptionList[i] }));
					welSortSelectRoot.append(welSelectItem);
				}
				
				this._welSortAreaRoot.append(welSortSelectRoot);
				
			} else {					
				var welSortRadioButtonRoot = J.$Element(this.config.template('sortRadioButtonRoot').process());
				
				for ( var i = 0; i < sortOptionList.length; ++i ) {
					var welRadioButton = J.$Element(this.config.template('sortRadioButtonItem').process({ sortId : sortOptionList[i], sortName : this._htSortTypeNameList.$(sortOptionList[i]), checked : this.config.option('currentSortOption') == sortOptionList[i] }));
					welSortRadioButtonRoot.append(welRadioButton);
				}
				this._welSortAreaRoot.append(welSortRadioButtonRoot);	
			}
			
			return this._welSortAreaRoot;
		}, 
		
		/**
		 * @description 리스트 정렬 영역 갱신
		 * @param 
		 * @returns 
		 */
		resetArea : function() {
			if ( !this.config.option('useSortList') ) {
				return;
			}

			var welSortAreaRoot = this.getAreaElement();
			if( welSortAreaRoot == null) {
				return;
			}
			
			var sortOptionList = this.config.option('sortOptionList');
			
			if (this.config.option('sortListUiType') == 'select' ) {
				
				var welSortSelectRoot = J.$Element(this.config.template('sortSelectBoxRoot').process());
				
				for ( var i = 0; i < sortOptionList.length; ++i ) {
					var welSelectItem = J.$Element(this.config.template('sortSelectBoxItem').process({ sortId : sortOptionList[i], sortName : this._htSortTypeNameList.$(sortOptionList[i]), selected : this.config.option('currentSortOption') == sortOptionList[i] }));
					welSortSelectRoot.append(welSelectItem);
				}
				welSortAreaRoot.empty();
				welSortAreaRoot.append(welSortSelectRoot);
				
			} else {					
				var welSortRadioButtonRoot = J.$Element(this.config.template('sortRadioButtonRoot').process());
				
				for ( var i = 0; i < sortOptionList.length; ++i ) {
					var welRadioButton = J.$Element(this.config.template('sortRadioButtonItem').process({ sortId : sortOptionList[i], sortName : this._htSortTypeNameList.$(sortOptionList[i]), checked : this.config.option('currentSortOption') == sortOptionList[i] }));
					welSortRadioButtonRoot.append(welRadioButton);
				}
				welSortAreaRoot.empty();
				welSortAreaRoot.append(welSortRadioButtonRoot);	
			}
		}, 
		
		/**
		 * @description 이벤트를 바인딩한다.
		 */
		_createBubbler : function() {
			if (this.config.option('sortListUiType') == 'select' ) {
				this._oBubbler = new Util.Bubbler(this.getAreaElement().$value()).attach({
					'__sortList:change' : J.$Fn(this._onClickSelectSort, this).bind()
				});
			
			}else{			
			
				this._oBubbler = new Util.Bubbler(this.getAreaElement().$value()).attach({
					'__sortList:click' : J.$Fn(this._onClickRadioSort, this).bind()
				});
			}

			this.getAreaElement().preventTapHighlight(true);
		},
		
		getAreaElement : function() {
			return this._welSortAreaRoot;
		},
		
		/**
		 * @description 영역 생성 후..
		 */
		afterCreateArea : function() {
			this._createBubbler();
		},
		
		_onClickRadioSort : function(oEvent) {
			oEvent.stopDefault();
			var sortId = J.$Element(oEvent.element).attr('id');
			this.config.option('currentSortOption', sortId );
			this.config.instance.listarea.refresh(false);
			this.config.instance.listarea.setFocusList();
		},
		
		_onClickSelectSort : function(oEvent) {
			
			this.config.option('currentSortOption', oEvent.element.value );
			this.config.instance.listarea.refresh();
		}

		
	

	}).extend(J.Component);
	
	nhn.comment.sortListArea = new Comment.SortListArea();
})();
nhn = (typeof nhn !== "undefined") ? nhn : {};
nhn.comment = nhn.comment || {};
nhn.comment.mobile = nhn.comment.mobile || {};

/**
 * @(#)nhn.comment.mobile.listFooterArea.js 2012. 12. 05
 */
(function() {
	var J = window.nhn.comment.mobile.jindo || jindo,
		Comment = nhn.comment.mobile,
		Util = Comment.Util;

	nhn.comment.mobile.NAME = 'nhn.comment.mobile';
	nhn.comment.mobile.VERSION = '1.0.0.${svn.revision}';
	
	/**
	 * @description Listv1 타입에서 리스트 하단의 영역을 관리하는 클래스
	 */
	Comment.ListFooterArea = J.$Class({
		/** @lends nhn.comment.mobile.ListFooterArea.prototype */
		
		/**
		 * @description 초기화 함수
		 * @constructs
		 * @class
		 * @extends jindo.Component
		 */
		$init : function() {
			
			this.indexInstance = Comment.ListFooterArea.getInstance().length - 1;
			this.config = Comment.Config.getInstance()[this.indexInstance];
			
			this._initConfig();
		},
		
		/**
		 * @description 리스트 하단 영역 초기화
		 */
		_initConfig : function() {
			
			this.config.template({
				commentListFooterRoot :
					'<div class="u_comment_lst_count"></div>',
				commentListLink :
					'<a href="{=url}" ><span class="c_fnt"><em> {=count} </em> 개 댓글 전체보기</span></a>'
			});
			
			this.config.option('viewAllLinkUrl', "#");
	
		},
		
			
		/**
		 * @description 리스트 하단 영역 생성
		 * @param 
		 * @returns 
		 */
		createArea : function() {
			
			this.welRoot = J.$Element(this.config.template('commentListFooterRoot').process());
			
			return this.welRoot;
		},
		
		update : function(nTotalCount) {
			if ( this.welRoot == null ) {
				return;
			}
			var welLinkArea = J.$Element(this.config.template('commentListLink').process({ url : this.config.option('viewAllLinkUrl'), count : nTotalCount }));
			
			this.welRoot.empty();
			if ( nTotalCount > 0 ) {
				this.welRoot.append(welLinkArea);
			}
		},
		
		afterCreateArea : function() {
			
		}
		
	

	}).extend(J.Component);
	
	nhn.comment.listFooterArea = new Comment.ListFooterArea();
})();
