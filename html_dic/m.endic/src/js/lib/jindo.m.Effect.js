/**
	@version #__VERSION__#
**/

/*
	TERMS OF USE - EASING EQUATIONS
	Open source under the BSD License.
	Copyright (c) 2001 Robert Penner, all rights reserved.
**/

/**
	수치의 중간 값을 쉽게 얻을 수 있게 하는 static 컴포넌트
	새로운 이펙트 함수를 생성한다.
	
	@class jindo.m.Effect
	@group Component	
	@uses jindo.m  
	@static
	@param {Function} fEffect 0~1 사이의 숫자를 인자로 받아 정해진 공식에 따라 0~1 사이의 값을 리턴하는 함수
	@return {Function} 이펙트 함수. 이 함수는 시작 값과 종료 값을 입력하여 특정 시점에 해당하는 값을 구하는 타이밍 함수를 생성한다.
	
	@keyword effect, 효과, animation, 애니메이션

	@history 1.14.0 New CSS 타이밍함수로 바뀔 수 있는 Effect 함수에 toString 구현
	@history 1.10.0 New Effect 함수 내에 start, end 프로퍼티 추가
	@history 1.10.0 Update 입력값이 0일 경우, 단위에 상관없이 처리하도록 수정
	@history 1.9.0 Release 최초 릴리즈
**/
jindo.m.Effect = function(fEffect) {
	if (this instanceof arguments.callee) {
		throw new Error("You can't create a instance of this");
	}
	
	var rxNumber = /^(\-?[0-9\.]+)(%|\w+)?$/,
		rxRGB = /^rgb\(([0-9]+)\s?,\s?([0-9]+)\s?,\s?([0-9]+)\)$/i,
		rxRGBA = /^rgba\(([0-9]+)\s?,\s?([0-9]+)\s?,\s?([0-9]+),\s?([0-9\.]+)\)$/i,
		rxHSL = /^hsl\(([0-9\.]+)\s?,\s?([0-9\.]+)%\s?,\s?([0-9\.]+)%\)$/i,
		rxHSLA = /^hsla\(([0-9\.]+)\s?,\s?([0-9\.]+)%\s?,\s?([0-9\.]+)%,\s?([0-9\.]+)\)$/i,
		rxHex = /^#([0-9A-F]{2})([0-9A-F]{2})([0-9A-F]{2})$/i,
		rx3to6 = /^#([0-9A-F])([0-9A-F])([0-9A-F])$/i;
	
	var getUnitAndValue = function(v) {
		var nValue = v, sUnit;
		
		if (rxNumber.test(v)) {
			nValue = parseFloat(v); 
			sUnit = RegExp.$2 || "";
		} else if (rxRGB.test(v)) {
			nValue = [parseInt(RegExp.$1, 10), parseInt(RegExp.$2, 10), parseInt(RegExp.$3, 10), 1];
			sUnit = 'color';
		} else if (rxRGBA.test(v)) {
			nValue = [parseInt(RegExp.$1, 10), parseInt(RegExp.$2, 10), parseInt(RegExp.$3, 10), parseFloat(RegExp.$4, 10)];
			sUnit = 'color';
		} else if (rxHSL.test(v)) {
			nValue = hsl2rgb(parseFloat(RegExp.$1, 10), parseFloat(RegExp.$2, 10)/100, parseFloat(RegExp.$3, 10)/100, 1);
			nValue.push(1);
			sUnit = 'color';
		} else if (rxHSLA.test(v)) {
			nValue = hsl2rgb(parseFloat(RegExp.$1, 10), parseFloat(RegExp.$2, 10)/100, parseFloat(RegExp.$3, 10)/100, 1);
			nValue.push(parseFloat(RegExp.$4, 10));
			sUnit = 'color';
		} else if (rxHex.test(v = v.replace(rx3to6, '#$1$1$2$2$3$3'))) {
			nValue = [parseInt(RegExp.$1, 16), parseInt(RegExp.$2, 16), parseInt(RegExp.$3, 16), 1];
			sUnit = 'color';
		} else {
			throw new Error('unit error (' + v + ')');
		}
				
		return { 
			nValue : nValue, 
			sUnit : sUnit 
		};
	};

	var fExplode = function(sStr) {
		var aRet = [];
		sStr.replace(/([^\s]+\([^\)]*\)|[^\s]+)\s?/g, function(_, a) { aRet.push(a); });
		return aRet;
	};

	var getUnitAndValueList = function(v) {

		var aList = fExplode(v?v+'':'0');
		var aRet = [];

		for (var i = 0, nLen = aList.length; i < nLen; i++) {
			aRet.push(getUnitAndValue(aList[i]));
		}

		return aRet;

	};

	var copy = function(oValue) {
		if (typeof oValue === 'object') {
			return { nValue : oValue.nValue, sUnit : oValue.sUnit };
		}
		return oValue;
	};

	// http://jsfiddle.net/EPWF6/9/
	var hsl2rgb = function(H, S, L) {
		var C = (1 - Math.abs((2 * L) - 1)) * S;
		var H_ = H / 60;
		var X = C * (1 - Math.abs((H_ % 2) - 1));
		var R1, G1, B1;

		if (H === undefined || isNaN(H) || H === null) {
			R1 = G1 = B1 = 0;
		} else {
			if (H_ >= 0 && H_ < 1) {
				R1 = C;
				G1 = X;
				B1 = 0;
			} else if (H_ >= 1 && H_ < 2) {
				R1 = X;
				G1 = C;
				B1 = 0;
			} else if (H_ >= 2 && H_ < 3) {
				R1 = 0;
				G1 = C;
				B1 = X;
			} else if (H_ >= 3 && H_ < 4) {
				R1 = 0;
				G1 = X;
				B1 = C;
			} else if (H_ >= 4 && H_ < 5) {
				R1 = X;
				G1 = 0;
				B1 = C;
			} else if (H_ >= 5 && H_ < 6) {
				R1 = C;
				G1 = 0;
				B1 = X;
			}
		}

		var m = L - (C / 2);

		return [
			Math.round((R1 + m) * 255),
			Math.round((G1 + m) * 255),
			Math.round((B1 + m) * 255)
		];

	};

	return function(sStart, sEnd) {

		var aStart, aEnd;

		var fParse = function() {

			var bChanged = false;

			if (fReturn.start !== sStart) {
				aStart = getUnitAndValueList(fReturn.start);
				sStart = fReturn.start;
				bChanged = true;
			}

			if (fReturn.end !== sEnd) {
				aEnd = getUnitAndValueList(fReturn.end);
				sEnd = fReturn.end;
				bChanged = true;
			}

			if (bChanged) {

				var nLen = Math.max(aStart.length, aEnd.length);
				var oStart, oEnd;

				if (aStart.length !== aEnd.length && nLen > 1) {

					switch (aStart.length) {
					case 1: aStart[1] = copy(aStart[2] = copy(aStart[3] = copy(aStart[0]))); break;
					case 2: aStart[2] = copy(aStart[0]), aStart[3] = copy(aStart[1]); break;
					case 3: aStart[3] = copy(aStart[1]); break;
					}

					switch (aEnd.length) {
					case 1: aEnd[1] = aEnd[2] = aEnd[3] = aEnd[0]; break;
					case 2: aEnd[2] = aEnd[0], aEnd[3] = aEnd[1]; break;
					case 3: aEnd[3] = aEnd[1]; break;
					}

				}

				for (var i = 0; i < nLen; i++) {

					oStart = aStart[i];
					oEnd = aEnd[i];

					if (oStart.nValue === 0) { oStart.sUnit = oEnd.sUnit; }
					else if (oEnd.nValue === 0) { oEnd.sUnit = oStart.sUnit; }

					// 두개의 단위가 다르면
					if (oStart.sUnit != oEnd.sUnit) {
						throw new Error('unit error (' + sStart + ', ' + sEnd + ')');
					}

				}

			}

		};

		var fReturn = function(p) {

			var aRet = [];

			fParse();

			var oStart, oEnd;
			var nStart, nEnd, sUnit;
			for (var i = 0, nLen = Math.max(aStart.length, aEnd.length); i < nLen; i++) {

				oStart = aStart[i];
				oEnd = aEnd[i];

				nStart = oStart.nValue;
				nEnd = oEnd.nValue;
				sUnit = oStart.sUnit;

				var nValue = fEffect(p),
					getResult = function(s, d, sUnit) {
						return (d - s) * nValue + s + (sUnit || 0);
					};
				
				if (sUnit == 'color') {

					var alpha = getResult(nStart[3], nEnd[3], 0);
					if (alpha === 1) {

						var r = Math.max(0, Math.min(255, Math.round(getResult(nStart[0], nEnd[0], 0)))) << 16;
						r |= Math.max(0, Math.min(255, Math.round(getResult(nStart[1], nEnd[1], 0)))) << 8;
						r |= Math.max(0, Math.min(255, Math.round(getResult(nStart[2], nEnd[2], 0))));
						
						r = r.toString(16).toUpperCase();
						for (var j = 0; 6 - r.length; j++) {
							r = '0' + r;
						}
							
						aRet.push('#' + r);

					} else {

						aRet.push('rgba(' + [
							Math.round(getResult(nStart[0], nEnd[0], 0)),
							Math.round(getResult(nStart[1], nEnd[1], 0)),
							Math.round(getResult(nStart[2], nEnd[2], 0)),
							getResult(nStart[3], nEnd[3], 0)
						].join(',') + ')');

					}

					continue;
				}
				
				aRet.push(getResult(nStart, nEnd, sUnit));

			}

			return aRet.join(' ');

		};

		switch (arguments.length) {
		case 0: break;
		case 1:
			sEnd = sStart || '0';
			sStart = '0';
			
			fReturn.setStart = function(sStart) {
				this.start = sStart;
			}; // deprecated
			break;
		}

		fReturn.start = sStart;
		fReturn.end = sEnd;
		fReturn.effectConstructor = arguments.callee;

		sStart = sEnd = null;

		if (arguments.length > 1) {
			fParse();
		}

		return fReturn;

	};
	
};

/**
	linear 이펙트 함수
	
	@method linear
	@static
**/
jindo.m.Effect.linear = jindo.m.Effect(function(s) {
	return s;
});
jindo.m.Effect.linear.toString = function() { return 'linear'; };

/**
	easeInSine 이펙트 함수
	
	@method easeInSine
	@static
**/
jindo.m.Effect.easeInSine = jindo.m.Effect(function(s) {
	return (s == 1) ? 1 : -Math.cos(s * (Math.PI / 2)) + 1;
});
/**
	easeOutSine 이펙트 함수
	
	@method easeOutSine
	@static
**/
jindo.m.Effect.easeOutSine = jindo.m.Effect(function(s) {
	return Math.sin(s * (Math.PI / 2));
});
/**
	easeInOutSine 이펙트 함수
	
	@method easeInOutSine
	@static
**/
jindo.m.Effect.easeInOutSine = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInSine(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutSine(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutInSine 이펙트 함수
	
	@method easeOutInSine
	@static
**/
jindo.m.Effect.easeOutInSine = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOutSine(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeInSine(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInQuad 이펙트 함수
	
	@method easeInQuad
	@static
**/
jindo.m.Effect.easeInQuad = jindo.m.Effect(function(s) {
	return s * s;
});
/**
	easeOutQuad 이펙트 함수
	
	@method easeOutQuad
	@static
**/
jindo.m.Effect.easeOutQuad = jindo.m.Effect(function(s) {
	return -(s * (s - 2));
});
/**
	easeInOutQuad 이펙트 함수
	
	@method easeInOutQuad
	@static
**/
jindo.m.Effect.easeInOutQuad = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInQuad(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutQuad(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutInQuad 이펙트 함수
	
	@method easeOutInQuad
	@static
**/
jindo.m.Effect.easeOutInQuad = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOutQuad(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeInQuad(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInCubic 이펙트 함수
	
	@method easeInCubic
	@static
**/
jindo.m.Effect.easeInCubic = jindo.m.Effect(function(s) {
	return Math.pow(s, 3);
});
/**
	easeOutCubic 이펙트 함수
	
	@method easeOutCubic
	@static
**/
jindo.m.Effect.easeOutCubic = jindo.m.Effect(function(s) {
	return Math.pow((s - 1), 3) + 1;
});
/**
	easeInOutCubic 이펙트 함수
	
	@method easeInOutCubic
	@static
**/
jindo.m.Effect.easeInOutCubic = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeIn(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOut(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutInCubic 이펙트 함수
	
	@method easeOutInCubic
	@static
**/
jindo.m.Effect.easeOutInCubic = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOut(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeIn(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInQuart 이펙트 함수
	
	@method easeInQuart
	@static
**/
jindo.m.Effect.easeInQuart = jindo.m.Effect(function(s) {
	return Math.pow(s, 4);
});
/**
	easeOutQuart 이펙트 함수
	
	@method easeOutQuart
	@static
**/
jindo.m.Effect.easeOutQuart = jindo.m.Effect(function(s) {
	return -(Math.pow(s - 1, 4) - 1);
});
/**
	easeInOutQuart 이펙트 함수
	
	@method easeInOutQuart
	@static
**/
jindo.m.Effect.easeInOutQuart = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInQuart(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutQuart(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutInQuart 이펙트 함수
	
	@method easeOutInQuart
	@static
**/
jindo.m.Effect.easeOutInQuart = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOutQuart(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeInQuart(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInQuint 이펙트 함수
	
	@method easeInQuint
	@static
**/
jindo.m.Effect.easeInQuint = jindo.m.Effect(function(s) {
	return Math.pow(s, 5);
});
/**
	easeOutQuint 이펙트 함수
	
	@method easeOutQuint
	@static
**/
jindo.m.Effect.easeOutQuint = jindo.m.Effect(function(s) {
	return Math.pow(s - 1, 5) + 1;
});
/**
	easeInOutQuint 이펙트 함수
	
	@method easeInOutQuint
	@static
**/
jindo.m.Effect.easeInOutQuint = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInQuint(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutQuint(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutInQuint 이펙트 함수
	
	@method easeOutInQuint
	@static
**/
jindo.m.Effect.easeOutInQuint = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOutQuint(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeInQuint(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInCircle 이펙트 함수
	
	@method easeInCircle
	@static
**/
jindo.m.Effect.easeInCircle = jindo.m.Effect(function(s) {
	return -(Math.sqrt(1 - (s * s)) - 1);
});
/**
	easeOutCircle 이펙트 함수
	
	@method easeOutCircle
	@static
**/
jindo.m.Effect.easeOutCircle = jindo.m.Effect(function(s) {
	return Math.sqrt(1 - (s - 1) * (s - 1));
});
/**
	easeInOutCircle 이펙트 함수
	
	@method easeInOutCircle
	@static
**/
jindo.m.Effect.easeInOutCircle = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInCircle(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutCircle(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutInCircle 이펙트 함수
	
	@method easeOutInCircle
	@static
**/
jindo.m.Effect.easeOutInCircle = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOutCircle(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeInCircle(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInBack 이펙트 함수
	
	@method easeInBack
	@static
**/
jindo.m.Effect.easeInBack = jindo.m.Effect(function(s) {
	var n = 1.70158;
	return (s == 1) ? 1 : (s / 1) * (s / 1) * ((1 + n) * s - n);
});
/**
	easeOutBack 이펙트 함수
	
	@method easeOutBack
	@static
**/
jindo.m.Effect.easeOutBack = jindo.m.Effect(function(s) {
	var n = 1.70158;
	return (s === 0) ? 0 : (s = s / 1 - 1) * s * ((n + 1) * s + n) + 1;
});
/**
	easeInOutBack 이펙트 함수
	
	@method easeInOutBack
	@static
**/
jindo.m.Effect.easeInOutBack = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInBack(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutBack(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInElastic 이펙트 함수
	
	@method easeInElastic
	@static
**/
jindo.m.Effect.easeInElastic = jindo.m.Effect(function(s) {
	var p = 0, a = 0, n;
	if (s === 0) {
		return 0;
	}
	if ((s/=1) == 1) {
		return 1;
	}
	if (!p) {
		p = 0.3;
	}
	if (!a || a < 1) { 
		a = 1; n = p / 4; 
	} else {
		n = p / (2 * Math.PI) * Math.asin(1 / a);
	}
	return -(a * Math.pow(2, 10 * (s -= 1)) * Math.sin((s - 1) * (2 * Math.PI) / p));
});

/**
	easeOutElastic 이펙트 함수
	
	@method easeOutElastic
	@static
**/
jindo.m.Effect.easeOutElastic = jindo.m.Effect(function(s) {
	var p = 0, a = 0, n;
	if (s === 0) {
		return 0;
	}
	if ((s/=1) == 1) {
		return 1;
	}
	if (!p) {
		p = 0.3;
	}
	if (!a || a < 1) { 
		a = 1; n = p / 4; 
	} else {
		n = p / (2 * Math.PI) * Math.asin(1 / a);
	}
	return (a * Math.pow(2, -10 * s) * Math.sin((s - n) * (2 * Math.PI) / p ) + 1);
});
/**
	easeInOutElastic 이펙트 함수
	
	@method easeInOutElastic
	@static
**/
jindo.m.Effect.easeInOutElastic = jindo.m.Effect(function(s) {
	var p = 0, a = 0, n;
	if (s === 0) {
		return 0;
	}
	if ((s=s/(1/2)) == 2) {
		return 1;
	}
	if (!p) {
		p = (0.3 * 1.5);
	}
	if (!a || a < 1) { 
		a = 1; n = p / 4; 
	} else {
		n = p / (2 * Math.PI) * Math.asin(1 / a);
	}
	if (s < 1) {
		return -0.5 * (a * Math.pow(2, 10 * (s -= 1)) * Math.sin( (s - n) * (2 * Math.PI) / p ));
	}
	return a * Math.pow(2, -10 * (s -= 1)) * Math.sin( (s - n) * (2 * Math.PI) / p ) * 0.5 + 1;
});

/**
	easeOutBounce 이펙트 함수
	
	@method easeOutBounce
	@static
**/
jindo.m.Effect.easeOutBounce = jindo.m.Effect(function(s) {
	if (s < (1 / 2.75)) {
		return (7.5625 * s * s);
	} else if (s < (2 / 2.75)) {
		return (7.5625 * (s -= (1.5 / 2.75)) * s + 0.75);
	} else if (s < (2.5 / 2.75)) {
		return (7.5625 * (s -= (2.25 / 2.75)) * s + 0.9375);
	} else {
		return (7.5625 * (s -= (2.625 / 2.75)) * s + 0.984375);
	} 
});
/**
	easeInBounce 이펙트 함수
	
	@method easeInBounce
	@static
**/
jindo.m.Effect.easeInBounce = jindo.m.Effect(function(s) {
	return 1 - jindo.m.Effect.easeOutBounce(0, 1)(1 - s);
});
/**
	easeInOutBounce 이펙트 함수
	
	@method easeInOutBounce
	@static
**/
jindo.m.Effect.easeInOutBounce = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInBounce(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutBounce(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	easeInExpo 이펙트 함수
	
	@method easeInExpo
	@static
**/
jindo.m.Effect.easeInExpo = jindo.m.Effect(function(s) {
	return (s === 0) ? 0 : Math.pow(2, 10 * (s - 1));
});
/**
	easeOutExpo 이펙트 함수
	
	@method easeOutExpo
	@static
**/
jindo.m.Effect.easeOutExpo = jindo.m.Effect(function(s) {
	return (s == 1) ? 1 : -Math.pow(2, -10 * s / 1) + 1;
});
/**
	easeInOutExpo 이펙트 함수
	
	@method easeInOutExpo
	@static
**/
jindo.m.Effect.easeInOutExpo = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeInExpo(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeOutExpo(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});
/**
	easeOutExpo 이펙트 함수
	
	@method easeOutInExpo
	@static
**/
jindo.m.Effect.easeOutInExpo = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.easeOutExpo(0, 1)(2 * s) * 0.5 : jindo.m.Effect.easeInExpo(0, 1)((2 * s) - 1) * 0.5 + 0.5;
});

/**
	Cubic-Bezier curve
	@method _cubicBezier
	@private
	@param {Number} x1
	@param {Number} y1
	@param {Number} x2
	@param {Number} y2
	@see http://www.netzgesta.de/dev/cubic-bezier-timing-function.html 
**/
jindo.m.Effect._cubicBezier = function(x1, y1, x2, y2){
	return function(t){
		var cx = 3.0 * x1, 
	    	bx = 3.0 * (x2 - x1) - cx, 
	    	ax = 1.0 - cx - bx, 
	    	cy = 3.0 * y1, 
	    	by = 3.0 * (y2 - y1) - cy, 
	    	ay = 1.0 - cy - by;
		
	    function sampleCurveX(t) {
	    	return ((ax * t + bx) * t + cx) * t;
	    }
	    function sampleCurveY(t) {
	    	return ((ay * t + by) * t + cy) * t;
	    }
	    function sampleCurveDerivativeX(t) {
	    	return (3.0 * ax * t + 2.0 * bx) * t + cx;
	    }
	    function solveCurveX(x,epsilon) {
	    	var t0, t1, t2, x2, d2, i;
	    	for (t2 = x, i = 0; i<8; i++) {
	    		x2 = sampleCurveX(t2) - x; 
	    		if (Math.abs(x2) < epsilon) {
	    			return t2;
	    		} 
	    		d2 = sampleCurveDerivativeX(t2); 
	    		if(Math.abs(d2) < 1e-6) {
	    			break;
	    		} 
	    		t2 = t2 - x2 / d2;
	    	}
		    t0 = 0.0; 
		    t1 = 1.0; 
		    t2 = x; 
		    if (t2 < t0) {
		    	return t0;
		    } 
		    if (t2 > t1) {
		    	return t1;
		    }
		    while (t0 < t1) {
		    	x2 = sampleCurveX(t2); 
		    	if (Math.abs(x2 - x) < epsilon) {
		    		return t2;
		    	} 
		    	if (x > x2) {
		    		t0 = t2;
		    	} else {
		    		t1 = t2;
		    	} 
		    	t2 = (t1 - t0) * 0.5 + t0;
		    }
	    	return t2; // Failure.
	    }
	    return sampleCurveY(solveCurveX(t, 1 / 200));
	};
};

/**
	Cubic-Bezier 함수를 생성한다.
	
	@method cubicBezier
	@static
	@see http://en.wikipedia.org/wiki/B%C3%A9zier_curve
	@param {Number} x1 control point 1의 x좌표
	@param {Number} y1 control point 1의 y좌표
	@param {Number} x2 control point 2의 x좌표
	@param {Number} y2 control point 2의 y좌표
	@return {Function} 생성된 이펙트 함수
**/
jindo.m.Effect.cubicBezier = function(x1, y1, x2, y2){
	var f = jindo.m.Effect(jindo.m.Effect._cubicBezier(x1, y1, x2, y2));
	var cssTimingFunction = 'cubic-bezier(' + [ x1, y1, x2, y2 ].join(',') + ')';
	f.toString = function() { return cssTimingFunction; };
	return f;
};

/**
	Cubic-Bezier 커브를 이용해 CSS3 Transition Timing Function과 동일한 ease 함수
	
	@example
		jindo.m.Effect.cubicBezier(0.25, 0.1, 0.25, 1);
	
	@method cubicEase
	@static
	@see http://www.w3.org/TR/css3-transitions/#transition-timing-function_tag
**/
jindo.m.Effect.cubicEase = jindo.m.Effect.cubicBezier(0.25, 0.1, 0.25, 1);

/**
	Cubic-Bezier 커브를 이용해 CSS3 Transition Timing Function과 동일한 easeIn 함수

	@example
		jindo.m.Effect.cubicBezier(0.42, 0, 1, 1);
	
	@method cubicEaseIn
	@static
	@see http://www.w3.org/TR/css3-transitions/#transition-timing-function_tag
**/
jindo.m.Effect.cubicEaseIn = jindo.m.Effect.cubicBezier(0.42, 0, 1, 1);

/**
	Cubic-Bezier 커브를 이용해 CSS3 Transition Timing Function과 동일한 easeOut 함수
	
	@example
		jindo.m.Effect.cubicBezier(0, 0, 0.58, 1);
	
	@method cubicEaseOut
	@static
	@see http://www.w3.org/TR/css3-transitions/#transition-timing-function_tag
**/
jindo.m.Effect.cubicEaseOut = jindo.m.Effect.cubicBezier(0, 0, 0.58, 1);

/**
	Cubic-Bezier 커브를 이용해 CSS3 Transition Timing Function과 동일한 easeInOut 함수
	
	@example
		jindo.m.Effect.cubicBezier(0.42, 0, 0.58, 1);
	
	@method cubicEaseInOut
	@static
	@see http://www.w3.org/TR/css3-transitions/#transition-timing-function_tag
**/
jindo.m.Effect.cubicEaseInOut = jindo.m.Effect.cubicBezier(0.42, 0, 0.58, 1);

/**
	Cubic-Bezier 커브를 이용해 easeOutIn 함수를 구한다.
	
	@example
		jindo.m.Effect.cubicBezier(0, 0.42, 1, 0.58);
	
	@method cubicEaseOutIn
	@static
**/
jindo.m.Effect.cubicEaseOutIn = jindo.m.Effect.cubicBezier(0, 0.42, 1, 0.58);

/**
	overphase 이펙트 함수
	
	@method overphase
	@static
**/
jindo.m.Effect.overphase = jindo.m.Effect(function(s){
	s /= 0.652785;
	return (Math.sqrt((2 - s) * s) + (0.1 * s)).toFixed(5);	
});

/**
	sin 곡선의 일부를 이용한 sinusoidal 이펙트 함수
	
	@method sinusoidal
	@static
**/
jindo.m.Effect.sinusoidal = jindo.m.Effect(function(s) {
	return (-Math.cos(s * Math.PI) / 2) + 0.5;
});

/**
	mirror 이펙트 함수
	sinusoidal 이펙트 함수를 사용한다.
	
	@method mirror
	@static
**/
jindo.m.Effect.mirror = jindo.m.Effect(function(s) {
	return (s < 0.5) ? jindo.m.Effect.sinusoidal(0, 1)(s * 2) : jindo.m.Effect.sinusoidal(0, 1)(1 - (s - 0.5) * 2);
});

/**
	nPulse의 진동수를 가지는 cos 함수를 구한다.
	
	@method pulse
	@static
	@param {Number} nPulse 진동수
	@return {Function} 생성된 이펙트 함수
	@example
		var f = jindo.m.Effect.pulse(3); //진동수 3을 가지는 함수를 리턴
		//시작 수치 값과 종료 수치 값을 설정해 jindo.m.Effect 함수를 생성
		var fEffect = f(0, 100);
		fEffect(0); => 0
		fEffect(1); => 100
**/
jindo.m.Effect.pulse = function(nPulse) {
    return jindo.m.Effect(function(s){
		return (-Math.cos((s * (nPulse - 0.5) * 2) * Math.PI) / 2) + 0.5;	
	});
};

/**
	nPeriod의 주기와 nHeight의 진폭을 가지는 sin 함수를 구한다.
	
	@method wave
	@static
	@param {Number} nPeriod 주기
	@param {Number} nHeight 진폭
	@return {Function} 생성된 이펙트 함수
	@example
		var f = jindo.m.Effect.wave(3, 1); //주기 3, 높이 1을 가지는 함수를 리턴
		//시작 수치 값과 종료 수치 값을 설정해 jindo.m.Effect 함수를 생성
		var fEffect = f(0, 100);
		fEffect(0); => 0
		fEffect(1); => 0
**/
jindo.m.Effect.wave = function(nPeriod, nHeight) {
    return jindo.m.Effect(function(s){
    	return (nHeight || 1) * (Math.sin(nPeriod * (s * 360) * Math.PI / 180)).toFixed(5);
	});
};

/**
	CSS3 Transition Timing Function 의 step-start 와 동일한 함수
	
	@method stepStart
	@static
	@see http://www.w3.org/TR/css3-transitions/#transition-timing-function_tag
**/
jindo.m.Effect.stepStart = jindo.m.Effect(function(s) {
	return s === 0 ? 0 : 1;
});

/**
	CSS3 Transition Timing Function 의 step-end 와 동일한 함수
	
	@method stepEnd
	@static
	@see http://www.w3.org/TR/css3-transitions/#transition-timing-function_tag
**/
jindo.m.Effect.stepEnd = jindo.m.Effect(function(s) {
	return s === 1 ? 1 : 0;
});

/**
	easeIn 이펙트 함수
	easeInCubic 함수와 동일하다.
	
	@method easeIn
	@static
	@see easeInCubic
**/
jindo.m.Effect.easeIn = jindo.m.Effect.easeInCubic;
/**
	easeOut 이펙트 함수
	easeOutCubic 함수와 동일하다.
	
	@method easeOut
	@static
	@see easeOutCubic
**/
jindo.m.Effect.easeOut = jindo.m.Effect.easeOutCubic;
/**
	easeInOut 이펙트 함수
	easeInOutCubic 함수와 동일하다.
	
	@method easeInOut
	@static
	@see easeInOutCubic
**/
jindo.m.Effect.easeInOut = jindo.m.Effect.easeInOutCubic;
/**
	easeOutIn 이펙트 함수
	easeOutInCubic 함수와 동일하다.
	
	@method easeOutIn
	@static
	@see easeOutInCubic
**/
jindo.m.Effect.easeOutIn = jindo.m.Effect.easeOutInCubic;
/**
	bounce 이펙트 함수
	easeOutBounce 함수와 동일하다.
	
	@method bounce
	@static
	@see easeOutBounce
**/
jindo.m.Effect.bounce = jindo.m.Effect.easeOutBounce;
/**
	elastic 이펙트 함수
	easeInElastic 함수와 동일하다.
	
	@method elastic
	@static
	@see easeInElastic
**/
jindo.m.Effect.elastic = jindo.m.Effect.easeInElastic;
