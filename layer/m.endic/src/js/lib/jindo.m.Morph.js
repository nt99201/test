/*jshint eqeqeq: false, white : false, sub: true, undef: true, evil : true, browser: true, -W099 : true, -W014 : true, -W041 : true, -W083 : true, -W027 : true */

/**
    순차적으로 이루어지는 애니메이션 컴포넌트

    @author hooriza
    @version #__VERSION__#
    
    @class jindo.m.Morph
    @extends jindo.m.Component
    @uses jindo.m.Effect
    @keyword 애니메이션, animation, transition
    @group Component    

	@history 1.14.0 Update Keyframe 객체를 재생목록에 넣을 수 있는 pushKeyframe 메서드 추가
	@history 1.13.0 Bug 애니메이션이 진행되고 있는 도중에 pause 하고 clear 호출 후, 다시 play 할 경우 오류 수정
    @history 1.10.0 Bug bUseTranstion = true일 경우, pause 메소드 버그 수정
    @history 1.10.0 Bug bUseTranstion = true일 경우, 시작점이 반영되지 않는 버그 수정
    @history 1.10.0 Bug bUseTranstion = true일 경우, display = none인 엘리먼트를 css transition으로 변환할때 다음 애니메이션이 진행되지 않는 버그 수정
    
    @history 1.9.0 release 최초 릴리즈
**/
jindo.m.Morph = jindo.$Class({

	/**
		컴포넌트 생성
		@constructor

		@param {Hash} [oOptions] 옵션
			@param {Function} [oOptions.fEffect=jindo.m.Effect.linear] 애니메이션에 사용되는 jindo.m.Effect 의 함수들
			@param {Boolean} [oOptions.bUseTransition=true] CSS Transition 를 사용할지 여부, 사용할꺼면 true, 아니면 false
	**/
	$init : function(oOptions) {

		this.option({
			'fEffect' : jindo.m.Effect.linear,
			'bUseTransition' : true
		}).option(oOptions);

		var oStyle = document.body.style;

		this._bTransitionSupport = (
			'transition' in oStyle ||
			'webkitTransition' in oStyle ||
			'MozTransition' in oStyle ||
			'OTransition' in oStyle ||
			'msTransition' in oStyle
		);

		var oAgent = jindo.$Agent();
		var oOS = oAgent.os();
		var oNavigator = oAgent.navigator();

		this._bHasTransformRenderBug = oOS.ios && parseInt(oOS.version, 10) === 5 && oNavigator.msafari;

		this._aQueue = [];
		this._aIngItem = null;

		this._oTimer = null;
		this._bPlaying = null;
		this._nPtr = 0;
		this._nPausePassed = 0;
		this._aRepeat = [];

		this._sTransitionEnd = (
			('webkitTransition' in oStyle && 'webkitTransitionEnd') ||
			('transition' in oStyle && 'transitionend') ||
			('MozTransition' in oStyle && 'transitionend') ||
			('OTransition' in oStyle && 'oTransitionEnd') ||
			('msTransition' in oStyle && 'MSTransitionEnd')
		);

	},

	///////////////////////////////////////////////////////////////////////////////////////////////////
	/// PUSH 메서드군
	///////////////////////////////////////////////////////////////////////////////////////////////////

	/**
		애니메이션 동작을 재생목록에 넣음
		
		@method pushAnimate
		
		@param {Number} nDuration 변경 할일을 몇 ms 동안 진행되게 할지
		@param {Array} aLists 애니메이션을 진행 할 객체와 속성 목록
			@param {Object} aLists.0 어떤 객체에 대해서 진행 할지
			@param {Hash} aLists.1 어떤 속성들을 변경 할지
			@param {Object} [aLists.2] 어떤 객체에 대해서 진행 할지 (2)
			@param {Hash} [aLists.3] 어떤 속성들을 변경 할지 (2)
			@param {Object} [aLists.4] 어떤 객체에 대해서 진행 할지 (3)
			@param {Hash} [aLists.5] 어떤 속성들을 변경 할지 (3)
			...
		
		@return {this}
		
		@example
			oMorph.pushAnimate(3000, [
				elFoo, {
					'@left' : '300px',
					'scrollTop' : 100
				},
				elBar, {
					'scrollLeft' : 500,
					'@backgroundColor' : '#f00'
				}
			]).play();
	**/
	pushAnimate : function(nDuration, aLists) {

		if (aLists && !(aLists instanceof Array)) { throw Error('aLists should be a instance of Array'); }

		aLists = [].concat(aLists);
		aLists.duration = nDuration;

		this._aQueue.push(aLists);

		return this;

	},

	/**
		Keyframe 객체를 재생목록에 넣음

		@method pushKeyframe

		@param {Number} nDuration 변경 할일을 몇 ms 동안 진행되게 할지
		@param {jindo.m.Keyframe} oKeyframe Keyframe 객체

		@return {this}
	**/
	pushKeyframe : function(nDuration, oKeyframe) {
		this._aQueue.push({ action : 'keyframe', args : { duration : nDuration, keyframe : oKeyframe } });
		return this;
	},

	/**
		일정시간 또는 다른 jindo.m.Morph 의 애니메이션이 끝나기를 기다림
		
		@method pushWait
		@param {Number|jindo.m.Morph} vItem 기다리게 할 ms 단위의 시간 또는 다른 애니메이션 객체
		@param {Number|jindo.m.Morph} [vItem2] 기다리게 할 ms 단위의 시간 또는 다른 애니메이션 객체 (2)
		@param {Number|jindo.m.Morph} [vItem3] 기다리게 할 ms 단위의 시간 또는 다른 애니메이션 객체 (3)
		...
		
		@example
			oMorph
			.pushWait(3000) // 3초 기다리기
			.pushWait(oOtherMorph); // 다른 morph 객체가 끝날때까지 기다리기

		@return {this}
	**/
	pushWait : function(nDuration) {

		var oMorph;

		for (var i = 0, nLen = arguments.length; i < nLen; i++) {

			var vItem = arguments[i];

			if (vItem instanceof this.constructor) {
				this._aQueue.push(vItem);
			} else {
				this.pushAnimate(vItem, []);
			}

		}

		return this;

	},

	/**
		실행 할 함수를 재생목록에 넣음
		
		@method pushCall
		@param {Function} fpCallback 순서가 되었을 때 실행 할 함수
		
		@return {this}
		
		@example
			oMorph.pushCall(function() {
				alert('애니메이션이 시작될꺼임');
			}).pushAnimate(3000,
				elFoo, {
					'@left' : '300px',
					'scrollTop' : 100
				}
			).pushCall(function() {
				alert('애니메이션이 끝났음');
			}).play();
	**/
	pushCall : function(fpCallback) {
		this._aQueue.push(fpCallback);
		return this;
	},

	/**
		반복 구역 시작 지점을 재생목록에 넣음
		
		@method pushRepeatStart
		@param {Number} [nTimes=1] 몇 번 반복할껀지 (무한반복할꺼면 Infinity 를 지정)
		@return {this}
	**/
	pushRepeatStart : function(nTimes) {

		if (typeof nTimes === 'undefined') { nTimes = 1; }

		var sLabel = 'L' + Math.round(new Date().getTime() * Math.random());
		this._aRepeat.push(sLabel);

		this._pushLabel(sLabel, nTimes);
		return this;

	},

	/**
		goto 명령으로 이동하는데 사용되는 라벨을 재생목록에 넣음
		
		@ignore
		@method _pushLabel
		@param {String} sLabel 라벨명
		@return {this}
	**/
	_pushLabel : function(sLabel, nTimes) {

		if (typeof nTimes === 'undefined') { nTimes = Infinity; }
		this._aQueue.push({ action : 'label', args : { label : sLabel, times : nTimes } });

		return this;

	},

	/**
		반복 구역 종료 지점을 재생목록에 넣음
		
		@method pushRepeatEnd
		@return {this}
	**/
	pushRepeatEnd : function() {

		var self = this;
		var sLabel = this._aRepeat.pop();

		var fpLoop = function() {

			var nIndex = self._getLabelIndex(sLabel);
			if (nIndex === -1) throw 'Repeat calls don\'t matched.';

			var aLabelItem = this._aQueue[nIndex];
			aLabelItem.args.count = aLabelItem.args.count || 0;

			if (++aLabelItem.args.count < aLabelItem.args.times) {
				self._goto(nIndex + 1);
			}

		};

		fpLoop.__repeat_end = sLabel;
		this.pushCall(fpLoop);

		return this;

	},

	///////////////////////////////////////////////////////////////////////////////////////////////////
	/// flow 동작 구현
	///////////////////////////////////////////////////////////////////////////////////////////////////

	_waitMorph : function(oMorph) {

		var self = this;

		if (!oMorph.isPlaying()) {
			return true;
		}

		var fHandler = function() {
			oMorph.detach('end', fHandler).detach('pause', fHandler);
			self._flushQueue();
		};

		oMorph.attach('end', fHandler).attach('pause', fHandler);

		return false;

	},

	_getLabelIndex : function(sLabel) {

		var aItem = null;

		for (var i = 0, nLen = this._aQueue.length; i < nLen; i++) {
			aItem = this._aQueue[i];
			if (aItem.action === 'label' && aItem.args.label === sLabel) { return i; }
		}

		return -1;

	},

	_getRepeatEndIndex : function(sLabel, nFrom) {

		var aItem = null;

		for (var i = nFrom || 0, nLen = this._aQueue.length; i < nLen; i++) {
			aItem = this._aQueue[i];
			if (aItem instanceof Function && aItem.__repeat_end === sLabel) { return i; }
		}

		return -1;

	},

	_flushQueue : function() {

		var bSync, aItem;
		var self = this;

		var oKeyframe, nPausePassed, aCompiledItem;

		do {

			bSync = false;
			aItem = this._aIngItem = this._aQueue[this._nPtr];

			if (!aItem) {

				this._bPlaying = false;

				/**
					애니메이션이 종료 되었을 때(더이상 진행할 내용이 없을때) 발생
					@event end
				**/
				if (!aItem) {
					this.fireEvent('end');
				}

				return;
			}

			this._nPtr++;

			if (aItem instanceof Function) {
				aItem.call(this);
				bSync = true;
				continue;
			} else if (aItem instanceof this.constructor) {
				bSync = this._waitMorph(aItem);
				continue;
			} else if (typeof aItem === 'number') {
				setTimeout(function() { self._flushQueue(); }, aItem);
				continue;
			} else if (aItem.action === 'label') {
				delete aItem.args.count;
				if (aItem.args.times < 1) {
					var nIndex = this._getRepeatEndIndex(aItem.args.label, this._nPtr);
					if (nIndex > -1) { this._goto(nIndex + 1); }
				}
				bSync = true;
				continue;
			} else if (aItem.action === 'goto') {
				this._goto(aItem.args.label);
				bSync = true;
				continue;
			} else if (aItem.action === 'keyframe') {

				oKeyframe = aItem.args.keyframe;
				nPausePassed = this._nPausePassed;
				aCompiledItem = this._aCompiledItem = aItem.args;

				bSync = aCompiledItem.duration < 0;

				if (bSync) {
					this._processKeyframe(1.0, oKeyframe);
					continue;
				}

				this._playKeyframe(nPausePassed, oKeyframe);
				this._nPausePassed = 0;
				continue;
			}

			aCompiledItem = this._aCompiledItem;
			nPausePassed = this._nPausePassed;

			if (!nPausePassed) {
				aCompiledItem = this._aCompiledItem = this._compileItem(aItem);
			} else {
				// 전부 다 Timer 로 돌리도록 강제 변경
				for (var i = 0, nLen = aCompiledItem.length; i < nLen; i++) {
					// aCompiledItem[i].oEffectCSS = {};
					aCompiledItem[i].sTimingFunc = '';
				}
				aCompiledItem.allCSS = false;
			}

			// console.log('_flushQueue', aCompiledItem);

			bSync = aCompiledItem.duration < 0;

			if (bSync) {
				this._processItem(1.0, true); // 마지막 상태로 바로 셋팅
				continue;
			}

			this._playItem(nPausePassed);
			this._nPausePassed = 0;

		} while(bSync);

	},

	///////////////////////////////////////////////////////////////////////////////////////////////////
	/// 애니메이션 동작 구현
	///////////////////////////////////////////////////////////////////////////////////////////////////

	_playKeyframe : function(nPausePassed, oKeyframe) {

		var self = this;
		this._nStart = new Date().getTime() - nPausePassed;

		var aCompiledItem = this._aCompiledItem;
		var nDuration = aCompiledItem.duration;

		(function _animationLoop() {

			self._oTimer = self._requestAnimationFrame(function() {

				var nStart = self._nStart;

				if (self._oTimer === null) { return; }
				self._oTimer = null;

				var nPer = Math.min(1, Math.max(0, (new Date().getTime() - nStart) / nDuration));
				oKeyframe.frame(nPer);

				if (nPer < 1) {
					_animationLoop();
				} else {
					self.fireEvent('timerEnd');
					self._flushQueue();
				}

			});

		})();

	},

	_playItem : function(nPausePassed) {

		var self = this;

		this._nStart = new Date().getTime() - nPausePassed;
		this._nIng = 2;

		// 처음부터 진행하는거면 처음 상태로 셋팅
		if (!nPausePassed) {
			this._processItem(0.0, true, 3/*ALL*/, true);
		}

		var aCompiledItem = this._aCompiledItem;
		// console.log(aCompiledItem);

		// Timer 돌리기
		
		if (!aCompiledItem.allCSS) { this._animationLoop(true); }
		else { this._nIng--; }

		(function() {

			// CSS 를 적용해야 하는 것 적용
			// console.log('...ing BEFORE', aCompiledItem[0].welObj.$value().style.cssText);
			var aTransitionCache = self._processItem(1.0, true, 1/*CSS*/).transitionCache;
			// console.log('...ing AFTER ', aCompiledItem[0].welObj.$value().style.cssText);

			if (!aTransitionCache || aCompiledItem.duration === 0) {
				if (--self._nIng === 0) {
					self._flushQueue();
				}
				return;
			}

			var welObj = null;
			var nLen = aTransitionCache.length;

			for (var i = 0; i < nLen; i++) {
				if (aTransitionCache[i].visible()) {
					welObj = aTransitionCache[i];
					break;
				}
			}

			var fpNext = function(bPause) {

				var oItem;
				var aShouldReset = [];

				while (oItem = aTransitionCache.pop()) {

					// oItem.css(self._getCSSKey('transitionProperty'), 'none');
					oItem.css(self._getCSSKey('transitionDuration'), '0.0001ms');
					aShouldReset.push(oItem);

				}

				aTransitionCache = null;

				(window.requestAnimationFrame || window.setTimeout)(function() {
					while (oItem = aShouldReset.pop()) {
						oItem.css(self._getCSSKey('transitionDuration'), '0');
						oItem.css(self._getCSSKey('transitionProperty'), 'none');
					}
					aShouldReset = null;
				}, 0);

				self.fireEvent('transitionEnd');

				if (--self._nIng === 0 && !bPause) {
					self._requestAnimationFrame(function() {
						self._flushQueue();
					});
				}

			};

			// 변화시키는 모든 엘리먼트가 안 보이는 상태이면
			if (!welObj) {
				fpNext();
				return;
			}

			var elObj = welObj.$value();

			var fpOnTransitionEnd = function(bPause) {
				elObj.removeEventListener(self._sTransitionEnd, self._fpOnTransitionEnd, true);
				self._fpOnTransitionEnd = null;
				fpNext(bPause === true);
			};

			self._fpOnTransitionEnd = function(evt) {
				// console.log('on fpOnTransitionEnd', evt);
				fpOnTransitionEnd(evt);
			};

			// console.log('set _fpOnTransitionEnd');
			elObj.addEventListener(self._sTransitionEnd,  self._fpOnTransitionEnd, true);

		})();

	},

	_animationLoop : function(bSetStatic) {

		var self = this;

		this._oTimer = this._requestAnimationFrame(function() {

			var nStart = self._nStart;
			var nDuration = self._aCompiledItem.duration;

			if (self._oTimer === null) { return; }
			self._oTimer = null;

			var nPer = Math.min(1, Math.max(0, (new Date().getTime() - nStart) / nDuration));
			self._processItem(nPer, bSetStatic, 2/*TIMER*/);

			if (nPer < 1) {
				self._animationLoop();
			} else {
				self.fireEvent('timerEnd');
				if (--self._nIng === 0) {
					self._flushQueue();
				}
			}

		});

	},

	_processKeyframe : function(nRate, oKeyframe) {
		oKeyframe.preprocess().frame(nRate);
	},

	/**
	 * @param nRate 얼마나 진행 시킬지
	 * @param bSetStatic 상수를 사용한 값도 셋팅할꺼면 true, 변화하는 값만 셋팅할꺼면 false
	 * @param nTargetType 셋팅할 대상을 지정 (1 : CSS Transition 를 쓰는 것, 2 : Timer 를 쓰는 것)
	 * @param bPause 정지하기 위해 호출하는 거면
	 */
	_processItem : function(nRate, bSetStatic, nTargetType, bPause) {
		// var aTransitionCache = self._processItem(1.0, true, 1/*CSS*/);

		// var aTransitionCache = self._processItem(1.0, true, 1/*CSS*/);

		var oRet = {
			normalPropsToPause : [], // 셋팅되어야 하는 일반 프로퍼티 목록 (bPause 가 true 일때만 채워짐)
			transitionCache : []
		};

		var aNormalPropsToPause = oRet.normalPropsToPause;
		var aTransitionCache = oRet.transitionCache;

		var self = this;

		var aCompiledItem = this._aCompiledItem;
		var nDuration = aCompiledItem.duration;

		if (nDuration === 0) { nDuration = 1; }
		else if (nDuration < 0) { nDuration = 0; }

		var oObj, welObj, oProps; //, oEffectCSS;

		var vProp, nType;
		var bFirstCSS = true;

		var sStyleKey;
		var bHasTransformRenderBug = this._bHasTransformRenderBug;

		nTargetType = nTargetType || (1/*CSS*/ | 2/*TIMER*/);

		/**
			애니메이션 진행을 위해 값을 설정하기 직전에 발생
			@event beforeProgress

			@stoppable

			@param {Number} nRate 진행률 (0~1 사이의 값)
			@param {Function} stop 호출 시 값을 설정하지 않음
		**/
		if (!this.fireEvent('beforeProgress', { 'nRate' : nRate })) {
			return;
		}

		var aLists = [], oListProp;

		for (var i = 0, oItem; oItem = aCompiledItem[i]; i++) {

			oObj = oItem.oObj;
			welObj = oItem.welObj;
			oProps = oItem.oProps;
			// oEffectCSS = oItem.oEffectCSS;

			var sObjTimingFunc = oItem.sTimingFunc;
			if (sObjTimingFunc && (nTargetType & 1)) {

				// Transition CSS 를 먹여도 실행되지 않는 문제 해결
				welObj && welObj.$value().clientHeight;

				if (!('@transition' in oProps) && !bPause) {
					if (!('@transitionProperty' in oProps)) { welObj.css(this._getCSSKey('transitionProperty'), 'all'); }
					if (!('@transitionDuration' in oProps)) { welObj.css(this._getCSSKey('transitionDuration'), (nDuration / 1000).toFixed(3) + 's'); }
					if (!('@transitionTimingFunction' in oProps)) { welObj.css(this._getCSSKey('transitionTimingFunction'), sObjTimingFunc); }
				}

				aTransitionCache.push(welObj);

			}

			// bFirstCSS = true;

			oListProp = {};
			aLists.push(oObj, oListProp);

			// 현재 지정된 종료 transform 을 유지한채 (nRate:1) 멈추고 싶을때 AppleWebKit/534.30 에서 발생하는 문제 회피
			if (bPause && nRate === 1 && '@transform' in oProps && /AppleWebKit\/534\.30/.test(navigator.userAgent)) {
				welObj.css(this._getCSSKey('transform'), '');
				oObj.clientHeight;
			}

			for (var sKey in oProps) if (oProps.hasOwnProperty(sKey)) {

				// var sPropTimingFunc = oEffectCSS[sKey];

				vProp = oProps[sKey];
				sStyleKey = /^@(.*)$/.test(sKey) && RegExp.$1;

				nType = sObjTimingFunc && sStyleKey ? 1/*CSS*/ : 2/*TIMER*/;

				// 지금꺼가 바꿔야 하는게 아니면 그만둠
				if (!(nTargetType & nType)) {
					continue;
				}

				// if (nTargetType & 1/*CSS*/ && nType & 1/*CSS*/ && bFirstCSS && !bPause) {
				// 	// bFirstCSS = false;
				// }

				if (typeof vProp === 'function') { vProp = vProp(nRate); }
				else if (!bSetStatic) { continue; }

				if (sStyleKey) {
					if (/transition/.test(sKey)) { vProp = this._getCSSVal(vProp); }

					if (bHasTransformRenderBug && '@transform' === sKey && ('@left' in oProps || '@top' in oProps)) {
						oObj.clientHeight;
					}

					welObj.css(this._getCSSKey(sStyleKey), vProp);
				} else {
					if (bPause) {
						aNormalPropsToPause.push([ oObj, sKey, vProp ]);
					} else {
						oObj[sKey] = vProp;
					}
				}

				oListProp[sKey] = vProp;

			}

		}

		/**
			애니메이션 진행을 위해 값을 설정한 직후에 발생
			@event progress

			@param {Array} aLists 설정 한 애니메이션 정보 (객체와 프로퍼티 목록이 번갈아가며 존재)
			@param {Number} nRate 진행률 (0~1 사이의 값)
		**/
		this.fireEvent('progress', { 'aLists' : aLists, 'nRate' : nRate });

		return oRet;

	},

	_compileItem : function(aItem) {

		// var bAnyTimer = false; // 하나라도 타이머로 바꿔야 하는 속성인경우 true
		// var bTouchAny = false; // 뭔가 속성 하나라도 변화하는 경우 true

		var bFoundShouldTimer = aItem.length == 0; // 타이머로 동작해야 하는 속성이 발견된 경우

		var aRet = [];
		aRet.duration = aItem.duration;

		var oObj, welObj, oProps;
		var vDepa, vDest;

		var oCompiledProps; //, oEffectCSS;
		// var nCSSCount, nTimerCount;

		var bIsStyleKey, sStyleKey;

		// 옵션에 지정된 기본 효과 얻기
		var fDefaultEffect = this.option('fEffect');

		for (var i = 0, nLen = aItem.length; i < nLen; i += 2) {

			var fObjEffect, // 객체에서 사용하는 이펙트 함수
				sObjTimingFunc = null; // 객체에서 사용하는 CSS 타이밍 함수

			oObj = aItem[i];
			welObj = jindo.$Element(oObj);
			oProps = aItem[i + 1];
			oCompiledProps = {}; //, oEffectCSS = {};
			// nCSSCount = nTimerCount = 0;

			// 각 엘리먼트에 할당되어야 하는 값을 얻음
			for (var sKey in oProps) if (oProps.hasOwnProperty(sKey)) {

				var fPropEffect, // 프로퍼티에서 사용하는 이펙트 함수
					sPropTimingFunc; // 프로퍼티에서 사용하는 CSS 타이밍함수

				vDest = oProps[sKey];
				bIsStyleKey = /^@(.*)$/.test(sKey);
				// bUseCSS = bIsStyleKey;

				sStyleKey = RegExp.$1;

				// 목표값이 배열 형태이면 시작값도 지정된 상태
				if (vDest instanceof Array) {
					vDepa = vDest[0];
					vDest = vDest[1];
				} else if (bIsStyleKey) { // 키값이 CSS 이면 시작값을 현재 상태로부터 얻음
					vDepa = welObj.css(this._getCSSKey(sStyleKey));
				} else { // 키값이 CSS 가 아닌경우의 시작값을 현재 상태로부터 얻음
					vDepa = oObj[sKey];
				}

				vDepa = (vDepa === 0 ? vDepa : vDepa || '');

				// 이 속성을 변경할때 사용할 이펙트
				fPropEffect = typeof vDest === 'function' ? vDest.effectConstructor : fDefaultEffect;
				sPropTimingFunc = this._getEffectCSS(fPropEffect) || '';

				if (bIsStyleKey) { // 키 값이 CSS 이면
					// 객체에 CSS 타이밍함수가 안 정해져 있으면 이 속성의 CSS 타이밍함수 쓰기
					if (sObjTimingFunc === null) {
						sObjTimingFunc = sPropTimingFunc;
					// 객체에 이미 CSS 타이밍함수가 정해져있고 이 속성에서 쓰는거랑 다르면 객체 전체에서 CSS 타이밍함수 안 쓰기
					} else if (sObjTimingFunc !== sPropTimingFunc) {
						sObjTimingFunc = '';
					}
				} else { // 키 값이 CSS 가 아니면 CSS 를 사용한 효과구현 안하게
					sPropTimingFunc = '';
				}

				if (/^@transform$/.test(sKey)) {
					oCompiledProps[sKey] = this._getTransformFunction(vDepa, vDest, fPropEffect);
				} else {
					try {
						if (typeof vDest === 'function') {
							if ('setStart' in vDest) { vDest.setStart(vDepa); }
							oCompiledProps[sKey] = vDest;
						} else {
							oCompiledProps[sKey] = fPropEffect(vDepa, vDest);
						}
					} catch(e) {
						if (!/^unit error/.test(e.message)) { throw e; }
						oCompiledProps[sKey] = vDest;
					}
				}

				// 속성이 어떤 CSS 타이밍함수를 써야하는지 보관
				// oEffectCSS[sKey] = sPropTimingFunc;

				// CSS 로 움직일수 있는건지 보고 해당 카운트를 늘려준다
				// if (oEffectCSS[sKey]) { nCSSCount++; }
				// else { nTimerCount++; }
				// console.warn('sObjTimingFunc : ', sPropTimingFunc);
				bFoundShouldTimer = bFoundShouldTimer || !sObjTimingFunc;
 
			}

			// bTouchAny = true;
			// bAnyTimer |= nTimerCount;

			aRet.push({
				'oObj' : oObj, 'welObj' : welObj, 'oProps' : oCompiledProps,
				/*'oEffectCSS' : oEffectCSS, */'sTimingFunc' : sObjTimingFunc// nCSSCount' : nCSSCount, 'nTimerCount' : nTimerCount
			});

		}

		// console.log('bFoundShouldTimer : ', bFoundShouldTimer);
		// console.log(aRet);
		aRet.allCSS = !bFoundShouldTimer;

		return aRet;

	},

	///////////////////////////////////////////////////////////////////////////////////////////////////
	/// public 메서드 구현
	///////////////////////////////////////////////////////////////////////////////////////////////////

	/**
		현재 재생위치부터 재생목록에 들어있는 일을 수행
		
		@method play
		@return {this}
	**/
	play : function() {

		if (!this._bPlaying) {
			this._bPlaying = true;

			/**
				애니메이션이 재생이 시작 되었을 때 발생
				@event play
			**/
			this.fireEvent('play');
			this._flushQueue();

		}

		return this;

	},

	/**
		재생 위치를 맨 처음으로 변경
		@method reset
		@return {this}
	**/
	reset : function() {
		return this._goto(0);
	},

	/**
		애니메이션 수행 중단
		@method pause

		@param {Number} [nRate] 중단 위치 (0(시작상태)~1(종료상태) 사이의 값을 지정 할 수 있으며, 생략시 현 상태로 중단한다)

		@return {this}
	**/
	pause : function(nRate) {

		// $Element('ball').css({
		// 	'transform' : 'translateX(100px) scale(1.5) rotate(45deg)',
		// 	// 'transitionProperty' : 'none',
		// 	'transitionDuration' : '0.0001ms'
		// });

		// return;

		// this._requestAnimationFrame(function() {
		// 	$Element('ball').css({
		// 		'transitionDuration' : '0'
		// 	});
		// }, 0);

		// console.log(this._fpOnTransitionEnd);

		// return;

		if (!this._bPlaying) { return this; }

		this._cancelAnimationFrame(this._oTimer);
		this._oTimer = null;

		var aCompiledItem = this._aCompiledItem;
		var nDuration = aCompiledItem.duration;

		if (typeof nRate === 'undefined') {
			var nPassed = new Date().getTime() - this._nStart;
			nRate = nPassed / nDuration;
		}

		nRate = Math.max(0, Math.min(1, nRate));

		var aNormalPropsToPause = null;

		if (aCompiledItem.keyframe) {
			this._processKeyframe(nRate, aCompiledItem.keyframe);
		} else {
			aNormalPropsToPause = this._processItem(nRate, true, 3/*ALL*/, true).normalPropsToPause;
		}

		this._nPtr--;
		this._nPausePassed = Math.round(nDuration * nRate);

		if (this._fpOnTransitionEnd) {
			this._fpOnTransitionEnd(true);
		}

		// console.log('aNormalPropsToPause', aNormalPropsToPause);
		if (aNormalPropsToPause) {
			for (var i = 0, nLen = aNormalPropsToPause.length; i < nLen; i++) {
				var aNormalProp = aNormalPropsToPause[i];
				aNormalProp[0][aNormalProp[1]] = aNormalProp[2];
			}
		}

		this._bPlaying = false;

		/**
			애니메이션이 재생이 정지 되었을 때 발생
			@event pause
		**/
		this.fireEvent('pause');

		return this;

	},

	/**
		지정된 라벨로 실행 포인터를 이동함
		
		@ignore
		@method _goto
		@param {String} sLabel 라벨명
		@return {this}
	**/
	/**
		지정된 목록 위치로 실행 포인터를 이동함
		
		@ignore
		@method _goto
		@param {Number} nIndex 목록 위치
		@return {this}
	**/
	_goto : function(nIndex) {

		var sLabel = nIndex;

		if (typeof nIndex === 'number') {
			nIndex = nIndex || 0;
		} else {
			nIndex = this._getLabelIndex(sLabel);
			if (nIndex === -1) throw 'Label not found';
			nIndex++;
		}

		this._nPtr = nIndex;
		this._nPausePassed = 0;

		return this;

	},

	/**
		현재 재생중인 상태인지 반환
		
		@method isPlaying
		@return {Boolean} 재생중이면 true, 재생중이 아니면 false
	**/
	isPlaying : function() {
		return this._bPlaying || false;
	},

	/**
		재생목록을 모두 삭제함
		@method clear
		@return {this}
	**/
	clear : function() {

		this._aQueue.length = 0;
		this._aRepeat.length = 0;
		this._nPtr = 0;
		this._nPausePassed = 0;

		return this;

	},

	/**
		현재 재생 위치를 얻음
		
		@ignore
		@method _getPointer
		@return {Number} 현재 재생 위치
	**/
	_getPointer : function() {
		return this._nPtr;
	},

	///////////////////////////////////////////////////////////////////////////////////////////////////
	/// UTIL 성격의 메서드
	///////////////////////////////////////////////////////////////////////////////////////////////////
	_oProperPrefix : {},

	_getProperPrefix : function(sType) {

		var oProperPrefix = this._oProperPrefix;
		if (sType in oProperPrefix) {
			return oProperPrefix[sType];
		}

		var oBodyStyle = document.body.style;
		var aPrefix = [ 'webkit', '', 'Moz', 'O', 'ms' ];
		var sPrefix, sFullType;

		for (var i = 0, nLen = aPrefix.length; i < nLen; i++) {
			sPrefix = aPrefix[i];
			sFullType = sPrefix + (sPrefix ? sType.replace(/^[a-z]/, function(s) { return s.toUpperCase(); }) : sType);
			if (sFullType in oBodyStyle) {
				return (oProperPrefix[sType] = sPrefix);
			}
		}

		return (oProperPrefix[sType] = '');

	},

	_getCSSKey : function(sName) {

		var self = this;
		var sPrefix = '';

		var sFullname = sName.replace(/^(\-(webkit|o|moz|ms)\-)?([a-z]+)/, function(_0, _1, _sPrefix, sType) {
			sPrefix = _sPrefix || self._getProperPrefix(sType);
			if (sPrefix) { sType = sType.replace(/^[a-z]/, function(s) { return s.toUpperCase(); }); }
			return sType;
		}).replace(/\-(\w)/g, function(_, sChar) {
			return sChar.toUpperCase();
		});

		return (({ 'o' : 'O', 'moz' : 'Moz', 'webkit' : 'Webkit' })[sPrefix] || sPrefix) + sFullname;

	},

	_getCSSVal : function(sName) {

		var self = this;

		var sFullname = sName.replace(/(^|\s)(\-(webkit|moz|o|ms)\-)?([a-z]+)/g, function(_0, sHead, _2, sPrefix, sType) {
			sPrefix = sPrefix || self._getProperPrefix(sType);
			return sHead + (sPrefix && '-' + sPrefix + '-') + sType;
		});

		return sFullname;

	},

	_parseTransformText : function(sText) {

		sText = sText || '';

		var oRet = {};

		sText.replace(/([\w\-]+)\(([^\)]*)\)/g, function(_, sKey, sVal) {

			var aVal = sVal.split(/\s*,\s*/);

			switch (sKey) {
			case 'translate3d':
			case 'scale3d':
			case 'skew3d': // but, not support
				sKey = sKey.replace(/3d$/, '');
				oRet[sKey + 'Z'] = aVal[2];
				// cont.

			case 'translate':
			case 'scale':
			case 'skew':
				oRet[sKey + 'X'] = aVal[0];

				if (typeof aVal[1] === 'undefined') {
					if (sKey === 'scale') { oRet[sKey + 'Y'] = aVal[0]; }
				} else {
					oRet[sKey + 'Y'] = aVal[1];
				}

				break;

			//case 'rotate':
			//	sKey = 'rotateZ';
			//	// cont.

			default:
				oRet[sKey] = aVal.join(',');
				break;
			}

		});

		return oRet;

	},

	_getTransformFunction : function(vDepa, vDest, fEffect) {

		var self = this;

		var sKey;

		var oDepa = this._parseTransformText(vDepa);
		var oDest = this._parseTransformText(vDest);

		var oProp = {};

		for (sKey in oDepa) if (oDepa.hasOwnProperty(sKey)) {
			oProp[sKey] = fEffect(oDepa[sKey], oDest[sKey] || (/^scale/.test(sKey) ? 1 : 0));
		}

		for (sKey in oDest) if (oDest.hasOwnProperty(sKey) && !(sKey in oDepa)) {
			oProp[sKey] = fEffect(oDepa[sKey] || (/^scale/.test(sKey) ? 1 : 0), oDest[sKey]);
		}

		var fpFunc = function(nRate) {
			var aRet = [];
			for (var sKey in oProp) if (oProp.hasOwnProperty(sKey)) {
				aRet.push(sKey + '(' + oProp[sKey](nRate)+ ')');
			}
			/*
			aRet = aRet.sort(function(a, b) {
				return a === b ? 0 : (a > b ? -1 : 1);
			});
			*/

			return aRet.join(' ');
		};

		return fpFunc;

	},

	_getEffectCSS : function(fEffect) {

		var bUseTransition = this.option('bUseTransition') && this._bTransitionSupport;

		// Transition 를 쓰지않도록 셋팅되어 있으면 Timer 사용
		if (!bUseTransition) { return null; }

		// progress 나 beforeProgress 핸들러가 등록되어 있으면 Timer 사용
		if (
			(this._htEventHandler.progress && this._htEventHandler.progress.length) ||
			(this._htEventHandler.beforeProgress && this._htEventHandler.beforeProgress.length)
		) { return null; }

		switch (fEffect) {
		case jindo.m.Effect.linear:
			return 'linear'; break;
		case jindo.m.Effect.cubicEase:
			return 'ease'; break;
		case jindo.m.Effect.cubicEaseIn:
			return 'ease-in'; break;
		case jindo.m.Effect.cubicEaseOut:
			return 'ease-out'; break;
		case jindo.m.Effect.cubicEaseInOut:
			return 'ease-in-out'; break;
		default:
			if (fEffect.cubicBezier && Math.max.apply(Math, fEffect.cubicBezier) <= 1 && Math.min.apply(Math, fEffect.cubicBezier) >= 0) {
				return 'cubic-bezier(' + fEffect.cubicBezier.join(',') + ')';
			}
			break;
		}

		// CSS 에 없는 timing-function 이면 Timer 사용
		return null;

	},

	_requestAnimationFrame : function(fFunc) {

		var ret;
		var self = this;
 
		var fWrap = function() {

			if (ret === self._oLastRAF) {
				self._oLastRAF = null;
				fFunc();
			}
 
		};
 
		if (window.requestAnimationFrame) {
			ret = requestAnimationFrame(fWrap);
		} else {
			ret = setTimeout(fWrap, 1000 / 60);
		}
 
		return (this._oLastRAF = ret);

	},

	_cancelAnimationFrame : function(nTimer) {

		var ret;

		if (window.cancelAnimationFrame) {
			ret = cancelAnimationFrame(nTimer);
		} else {
			ret = clearTimeout(nTimer);
		}
 
		this._oLastRAF = null;
 
		return ret;

	}

}).extend(jindo.m.Component);
