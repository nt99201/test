typeof nhn === 'undefined' && (nhn = {});
nhn.mobile = nhn.mobile || {};
nhn.mobile.common = nhn.mobile.common || {};

/**
 * @fileOverview 프로젝트 > 모듈 > 컨트롤러
 * @author AU개발랩
 */
nhn.mobile.common.Carousel = eg.Class.extend(eg.Component,/** @lends nhn.mobile.common.Carousel.prototype */{

	// scroller class name
	_SCROLLER_CLASS_NAME : '_scroller',

	// 이어더보기 엘리먼튼의 class명
	_MORE_CLASS_NAME : '_circle_gauge',

	// fitWidth 기능을 위한 class
	_FIT_WIDTH_CLASS_NAME : '_fit_width',

	construct : function(elBase, htGlobalConfig){
		this.$elBase = elBase;

		var htDefaultConfig = {
			// 실행시 deacitvate 할지 여부
			bActivateOnload : true,

			// item의 클래스명(기본값 : _item)
			sItemClassName : '_item',

			// percent 게이지의 감도 (기본값 : 1)
			nPercentSensitive : 1,

			// 설정값에 따라 왼쪽 고정값 여벽을 조절할 수 있다
			nLeftSpace : 0,

			// scroll 되는 animation duration
			nScrollDuration : 200,

			// wrapper의 높이가 내부의 item의 높이대로 계산되어 들어갈지 여부 (기본값: true)
			bUseWrapperHeight : true,

			// 판의 높이가 변하면 자동으로 wrapper의 크기도 변하도록하는 옵션 (기본값 : false)
			bAutoFitWrapperHeight : false,

			// 판의 너비를 wrapper의 너비로 일괄적용, false로 해둔상태에서는 _CLASS_FIT_WIDTH 클래스를 이용하여 개별적용가능
			bAutoFitWidth : false,

			// 이어더보기가 있는 contnets element
			elMore : $('.' + this._MORE_CLASS_NAME, this.$elBase).first(),

			// 이어더보기 애니메이션 동작여부
			bUseMoreAnimation : true,

			// 자체 이미지 레이지로딩 사용여부 (기본값 : true)
			bUseLoadImage : true,

			// mouse event에 scroll 반응여부 (기본값 : false)
			bUseMouseScroll : false,

			// 최대 아이템의 갯수 (기본값 : 10)
			nMaxItemCount : 10,

			// _item 구성 템플릿
			sItemTemplate : '',

			// 이어더보기 템플릿
			sMoreTemplate : '',

			// custom scrollbar class
			sScrollbarClass : ''
		};

		// default option과 사용자지정 option merge
		this.htConfig = $.extend(htDefaultConfig, htGlobalConfig);

		this._initVar();
		this._assignElement();

		// compoenet 초기화 및 초기세팅
		this._activate();
	},

	_initVar : function(){
		// carousel영역의 높이
		this._nWrapperHeight = 0;

		// 현재 아이템의 갯수
		this._nItemCount = 0;

		// 이어더보기 진행율 (0~100)
		this._nGauge = 0;
	},

	_assignElement : function(){
		// scroller
		this._$elScroller = $('.' + this._SCROLLER_CLASS_NAME, this.$elBase).first() || this.$elBase.children().first();

		// li item들 (옵션에 따라 클래스명이 변동될 수 있음)
		this._$aItems = $('.' + this.htConfig['sItemClassName'], this.$elBase);

		this._$elGauge = this.htConfig['elMore'];
	},

	_activate : function(){
		// base element에 overflow hidden 속성추가
		this._setWrapperStyle();

		// option에 따라 Item들의 width값 세팅
		this._fitItemWidth();

		// item들의 width값을 통해 scroller길이 지정
		this._setElementsSize();

		// item갯수 카운팅
		this._nItemCount = this._$aItems.length;

		// scroll Option 세팅
		var htScrollOption = {
			deceleration : 0.06,
			HWCompositing : eg.isHWAccelerable(),
			useTransition : eg.isTransitional(),
            scrollX : true,
            scrollY : false,
            eventPassthrough : true,
            bounceTime : this.htConfig['nScrollDuration'],
            snap : '.' + this.htConfig['sItemClassName'],
            disableMouse : this.htConfig['bUseMouseScroll'] ? false : true
		};

		// 스크롤바를 사용할 경우 옵션에 indicator옵션추가
		if(this._useScrollbar()){
			htScrollOption = $.extend(htScrollOption, {
				indicators : {
	            	el : $('.' + this.htConfig['sScrollbarClass'], this.$elBase).get(0),
	            	resize : false
	            }
			});
		}

		// option을 통해 스크롤 초기화
		this._oScroll = new IScroll(this.$elBase.get(0), htScrollOption);

		// leftSpace가 있다면 세팅
		this._setLeftSpace();

		// event attach
		this._attachEvent();

		// lazyloading
		this.htConfig['bUseLoadImage'] && this._loadImage();
	},

	_attachEvent : function(){
		var oScroll = this._oScroll;

		oScroll.on('scrollStart', $.proxy(this._onScrollStart, this));
		oScroll.on('scrollEnd' , $.proxy(this._onAfterScroll, this));
		oScroll.on('flick', $.proxy(this._onFlick, this));

		$(window).on({
			touchstart : $.proxy(this._onTouchStart, this),
			touchmove : $.proxy(this._onTouchMove, this),
			touchend : $.proxy(this._onTouchEnd, this),
			rotate : $.proxy(this._onRotate, this)
		});

		// mouse이벤트로 스크롤링 되는 현상 제거를 위한 코드
		// item에 있는 각 아이템들에 bubbling을 막는다
		if(!this.htConfig['bUseMouseScroll']){
			this.$elBase.find('._item').on('mousemove', function(e){
				e.stopPropagation();
			}).on('mousedown', function(e){
				e.stopPropagation();
			});
		}
	},

	// jindo scroll과 같은 속성을 wrapper에 추가
	_setWrapperStyle : function(){
		this.$elBase.css({
			'overflow' : 'hidden',
			'position' : 'relative',
			'z-index' : 2000
		});
	},

	_setElementsSize : function(){
		var self = this,
			$aItems = this._$aItems,
			nItemWidth = 0,
			nPosition = 0,
			$el = null,
			nTotalListWidth = 0,
			nMaxHeight = 0,
			fnGetSize = this._getSize;
		
		// 아이탬의 길이를 저장한다
		$aItems.each(function(index, item){
			$el = $(item);

			// item이 가진 총 width값을 더한다
			nItemWidth = fnGetSize($el, "margin-left") + fnGetSize($el, "margin-right") + $el.outerWidth();

			// 스크롤러가 될 width에 현 리스트의 width값을 더한다
			nTotalListWidth += nItemWidth;

			// 제일 높은 높이
			nMaxHeight = Math.max(nMaxHeight, $el.height());
		});

		// 리스트중 가장 높은 높이 저장
		this._nWrapperHeight = nMaxHeight;

		// 계산된 리스트의 총 길이를 스크롤러에 지정
		this._$elScroller.width(nTotalListWidth);
	},

	_fitItemWidth : function(){
		var $aItems = this._$aItems,
			$el = null,
			nMaxItemCount = $aItems.length - 1,
			bExistMoreItem = this._existMoreItem();

		$aItems.each($.proxy(function(nIndex, el){
			$el = $(el);

			// autoFitWidth 옵션을 사용할때나, li개별로 _fit_width 클래스가 있을경우에 적용
			if(!this._isFitWidth() && !($el.hasClass(this._FIT_WIDTH_CLASS_NAME))){
				return;
			}

			// 이어더보기가 없을때 -> 전부적용, 이어더보기가 있지만 마지막 판이 아닐경우에 viewport사이즈로 width값 변경
			if(!bExistMoreItem || (bExistMoreItem && (nIndex !== nMaxItemCount))){
				$el.width(this.$elBase.width());
			}
		}, this));

		// 이어더보기판에 width값 설정로직 추가
		if(this._existMoreItem()){
			var welMoreItem = this._getMoreItem();

			// 이어더보기 안의 내용물의 width값을 설정
			welMoreItem.width(welMoreItem.children().first().outerWidth());
		}
	},

	// 이동 시, 가변 높이
	// list의 높이에 따라 높이가 변하는 영역이 있을경우!
	_fitItemHeight : function(){
		var $elBase = this.$elBase,
			$elCurrent = this.getCurrentItem();

		// 현재판의 높이를 캐로셀 wrapper에 적용
		$elBase.height($elCurrent.height());

		// 이어더보기 item이 있을경우, 이어더보기 item이 아닐때의 높이를 설정해줌
		if(this._existMoreItem() && ($elCurrent.find('.' + this._MORE_CLASS_NAME).length < 1)){
			this._getMoreItem().height($elCurrent.height());
		}
	},

	// lazyloading
	_loadImage : function(){
		var aItems = this._$aItems,
			aEl = this.getPositionedItem(),
			aElNeedLoad = [];

		// 각각의 item들을 돌면서
		$(aEl).each($.proxy(function(i, v){
			// item 마다 [data-source] 를 가지고 있는 엘리먼트들을 가져와서
			// bugfix data-source가져올때 범위지정
			aElNeedLoad = $('[data-source]', this.$elBase);

			// 그 내부를 돌며, data-source -> src한다.
			$(aElNeedLoad).each(function(nIndex, el){
				var $el = $(el);

				// 엘리먼트에 data-source -> src 로 이미지 이동
				$el.attr({
					'src' : $el.attr('data-source'),
					'data-source' : null,
					'alt' : ''
				});
			});
		}, this));
	},

	_addItem : function(aData){
		var htConfig = this.htConfig,
			sItemTemplate = htConfig['sItemTemplate'],
			sMoreTemplate = htConfig['sMoreTemplate'],
			nRemainCount = this.htConfig['nMaxItemCount'] - this._nItemCount,
			bAddedMore = false,
			sHtml = '';

		if(this._existMoreItem()){
			return;
		}

		$(aData).each($.proxy(function(nIndex, el){
			// 최대치까지 남은 item만 그리고 마지막에 이어더보기 템플릿을 넣어야하면 넣고 for문 종료
			if(nIndex >= nRemainCount){
				bAddedMore = true;

				// 이어더보기 템플릿을 생성
				sHtml += this._getMoreItemTemplate();

				return false;
			}else{
				// 한개수치가 아닐경우
				// item갯수 카운팅
				this._nItemCount += 1;

				// 일반 item template 생성하기
				sHtml += sItemTemplate.replace('{=sHtml}', el);
			}
		}, this));

		// addItem을 마치고 화면에 그려지는 갯수가 total 갯수를 넘으면 이어더보기 추가
		if(!bAddedMore && (this.htConfig['sMoreTemplate'] !== '') && this._isLimitedItemCount()){
			sHtml += this._getMoreItemTemplate();
		}
		
		// 마지막 카드에 만들어진 Item을 넣는다, first()까지 해놓은 엘리먼트 앞에서 저장
		this._$elScroller.children().append(sHtml);

		// 캐로셀 리프레쉬
		this.refresh();
	},

	_setLeftSpace : function(){
		var aPages = this._oScroll.pages,
			htConfig = this.htConfig;

		$(aPages).each($.proxy(function(aPages, nIndex, arr){
			// 처음과 끝 부분에는 leftSpace를 반영하지 않는다
			if((nIndex === 0) || (nIndex >= (aPages[0].length - 1))){
				return true;
			}

			var ht = arr[0];

			// 각 값에 leftSpace를 더한값으로 치환한다
			ht['x'] = ht['x'] + Math.abs(this.htConfig['nLeftSpace']);
		}, this, [aPages]));
	},

	// gauge 색칠된 부분을 nNum만큼 칠한다
	_setGauge : function(nNum){
		var $elGauge = this._$elGauge;

		$elGauge.css('width', 100 - nNum + '%');
	},

	_getMoreItemTemplate : function(){
		var htConfig = this.htConfig,
			sListTemplate = htConfig['sItemTemplate'],
			sMoreTemplate = htConfig['sMoreTemplate'],
			sHtml = '';

		// 이어더보기 템플릿이 없을경우 빈값을 return
		// 이어더보기가 없는 경우로 가정
		if(sMoreTemplate === ''){return '';}

		// item템플릿에 이어더보기 템플릿을 넣는다
		return sListTemplate.replace('{=sHtml}', sMoreTemplate);
	},

	// 화면 오른쪽으로 남은 아이템 갯수가 몇개인지 return
	_getRemainItemCount : function(){
		return this._nItemCount - this.getIndex();
	},

	_getSize : function(el, sType){
		return parseFloat(el.css(sType), 10);
	},

	// 이어더보기가 포함된 _item 반환
	_getMoreItem : function(){
		return $(this._$elGauge).closest('._item').first();
	},

	// scrollbar 사용여부
	_useScrollbar : function(){
		return this.htConfig['sScrollbarClass'] === '' ? false : 'custom';
	},

	_isCurrentMore : function(){
		var oScroll = this._oScroll,
			aPages = oScroll.pages,
			nMaxLeft = aPages[aPages.length - 1][0]['x'];

		if(this._existMoreItem()){
			return (oScroll.x <= nMaxLeft);
		}else{
			return false;
		}
	},

	// 사용자의 스크롤이 우측으로 향하는 플리킹인지 여부
	_isNextFlick : function(){
		return (this._oScroll.directionX > 0) ? true : false;
	},

	_isInnerWrapper : function(el){
		var $el = $(el);

		return ($el.closest(this.$elBase).length > 0);
	},

	// item갯수가 최대값을 넘었는지 여부
	_isLimitedItemCount : function(){
		return this._nItemCount >= this.htConfig['nMaxItemCount'];
	},

	// autoFitWidth 옵션체크 여부
	_isFitWidth : function(){
		return this.htConfig['bAutoFitWidth'];
	},

	// 이어더보기 있는지 여부
	_existMoreItem : function(){
		return (this._$elGauge.length >= 1);
	},

	_onTouchStart : function(e){
		var el = e.target;

		// 현재 클릭된 영역이 캐로셀의 wrapper 내부일 경우에만 로직실행
		if(this._isInnerWrapper(el)){
			this._nDistX = this._oScroll.distX;

			this.trigger('touchStart', {});
		}
	},

	_onTouchMove : function(e){
		var el = e.target;

		// 현재 클릭된 영역이 캐로셀의 wrapper 내부일 경우에만 로직실행
		if(this._isInnerWrapper(el)){
			var nDiff = (Math.abs(this._oScroll.distX) - Math.abs(this._nDistX)) * this.htConfig['nPercentSensitive'];

			nDiff = Math.min(nDiff, 100);
			
			this._nGauge = nDiff;

			// 스크롤의 끝부분에 왔을 경우에만 게이지 세팅
			if(this._isCurrentMore() && this.htConfig['bUseMoreAnimation']){
				this._setGauge(nDiff);
			}

			this.trigger('touchMove', {});
		}
	},

	_onTouchEnd : function(e){
		var el = e.target;

		// 현재 클릭된 영역이 캐로셀의 wrapper 내부일 경우에만 로직실행
		if(this._isInnerWrapper(el)){
			var nGauge = this._nGauge;

			// 스크롤의 끝부분에 와서, 게이지가 100프로 채워졌을 경우에만 발생
			if(this._isCurrentMore() && (nGauge === 100) && this.htConfig['bUseMoreAnimation']){
				this._nGauge = 0;

				this.trigger('afterPullUp', {
					elBase : this.$elBase
				});
			}

			// gauge 0 세팅
			this.htConfig['bUseMoreAnimation'] && this._setGauge(0);
			
			// touchEnd
			this.trigger('touchEnd', {});
		}
	},

	_onScrollStart : function(){
		this.trigger('beforeScroll', {});
	},

	// afterScroll handler
	_onAfterScroll : function(){
		var oScroll = this._oScroll;

		// lazyloading
		this.htConfig['bUseLoadImage'] && this._loadImage();

		// 가변 플리킹 사용옵션 여부에따라 높이 조절
		this.htConfig['bAutoFitWrapperHeight'] && this._fitItemHeight();

		// fireEvent
		this.trigger('afterScroll', {
			elCurrentItem : this.getCurrentItem(),
			aPositionedItem : this.getPositionedItem(),
			nIndex : this.getIndex(),
			bNext : this._isNextFlick()
		});

		// 현재 아이템의 갯수가 최대 갯수보다 크거나 같을경우 아래 로직 생략
		if(this._isLimitedItemCount()){
			return;
		}

		// 현재 viewport 뒤에 남아있는 갯수가 한번에 viewport에 보여지는 카드의 갯수보다 작거나 같을 경우 moreItem fireEvent
		var nPositionedItemCount = this.getPositionedItem().length,
			nRemainItemCount = this._getRemainItemCount() - nPositionedItemCount;

		if(nRemainItemCount <= nPositionedItemCount){
			this.trigger('moreItem', {
				// 마지막 아이템
				elLastItem : this.getLastItem(),
				// 현재 인덱스의 아이템
				elCurrentItem : this.getCurrentItem(),
				// 현재 인덱스
				nCurrentIndex : this.getIndex(),
				// 마지막 인덱스
				nLastIndex : this.getLastIndex()
			});
		}
	},

	_onFlick : function(){
		// clicklog용 이벤트
		this.trigger('clicklog-carousel', {
			bNext : this._isNextFlick(),
			elBase : this.$elBase
		});
	},

	_onRotate : function(e){
		this.refresh();

		this.trigger('rotate', {});
	},

	getPositionedItem : function(){
		var oScroll = this._oScroll,
			nCurrentIndex = oScroll.currentPage['pageX'],
			aPages = oScroll.pages,
			htCurrentPage = aPages[nCurrentIndex][0],
			nCurrentLeft = - htCurrentPage['x'],
			nCurrentRight = (nCurrentLeft + this.$elBase.width()),
			aItems = this._$aItems,
			aResult = [];

		// 현재 viewport내부에 걸려있는 item을 찾는다
		$(aPages).each($.proxy(function(nIndex, aData){
			var ht = aData[0],
				nLeft = - ht['x'],
				nRight = - (ht['x'] - ht['width']);

			// 화면에 걸쳐 있기라도 한 item
			if(nLeft < nCurrentRight && nRight > nCurrentLeft){
				aResult.push(aItems[nIndex]);
			// 화면에 완전히 보이는 item
			}else if(nLeft <= nCurrentLeft && nRight >= nCurrentRight){
				aResult.push(aItems[nIndex]);
			}
		}, this));

		return aResult;
	},

	// 현재 포커싱된 index반환
	getIndex : function(){
		var oScroll = this._oScroll,
			nIndex = 0;

		if(oScroll && oScroll.currentPage['x']){
			if(oScroll.currentPage['x'] === oScroll.maxScrollX){
				nIndex = this.getLastIndex();
			}else{
				nIndex = oScroll.currentPage['pageX'];
			}
		}

		return nIndex;
	},

	// 마지막 인덱스
	getLastIndex : function(){
		var nLength = (this._$aItems.length - 1);

		return (nLength < 0) ? 0 : nLength;
	},

	getCurrentItem : function(){
		return $(this._$aItems[this.getIndex()]);
	},

	getLastItem : function(){
		return this._$aItems[this._$aItems.length - 1];
	},

	clear : function(){
		// li들 제거
		this._$elScroller.children().html('');
		// 그에맞는 scroll refresh
		this.refresh();

		// endClear fireEvent
		this.trigger('endClear', {
			nCurrentIndex : this.getIndex()
		});
	},

	addItem : function(aData){
		this._addItem(aData);

		return this;
	},

	moveTo : function(nIndex, nDuration){
		var nLeftSpace = this.htConfig['nLeftSpace'],
			oScroll = this._oScroll;

		// duration parameter가 있을때만 해당 duration으로 이동, 아니면 초기화 옵션의 값 사용
		nDuration = isNaN(nDuration) ? this.htConfig['nScrollDuration'] : nDuration;

		// 원하는 인덱스로 이동
		oScroll.goToPage(nIndex, 0, nDuration);

		return this;
	},

	// 다음 item으로 이동
	moveNext : function(nDuration){
		// arguments 확인하여 없으면 기본값으로
		nDuration = nDuration || this.htConfig['nScrollDuration'];

		this._oScroll.next(nDuration);

		return this;
	},

	// 이전 item으로 이동
	movePrev : function(nDuration){
		// arguments 확인하여 없으면 기본값으로
		nDuration = nDuration || this.htConfig['nScrollDuration'];

		this._oScroll.prev(nDuration);

		return this;
	},

	refresh : function(){
		var oScroll = this._oScroll;

		// li item들 (옵션에 따라 클래스명이 변동될 수 있음)
		this._$aItems = $('.' + this.htConfig['sItemClassName']);

		// 이어더보기 게이지 부분 지정
		this._$elGauge = $('.' + this._MORE_CLASS_NAME, this.$elBase);

		// item 갯수 갱신
		this._nItemCount = this._$aItems.length;

		// 아이템에 width을 옵션에 맞춰 변경
		this._fitItemWidth();

		// 아이템의 width값으로 스크롤러 사이즈 지정
		this._setElementsSize();

		// IScroll refersh 메서드가 실행안되는 경우가 있어서 setTimeout안에 처리
		setTimeout($.proxy(function(){
			oScroll.options.snap = $('.' + this.htConfig['sItemClassName'], this.$elBase)
			oScroll.refresh();
		},this), 0);

		return this;
	},

	destroy : function(){
		this._oScroll.destroy();
		this._oScroll = null;
	}
});