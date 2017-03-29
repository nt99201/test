/**
* jquery.flash.js Flash Movie Loading
*
* @options
*
* @use
*	$("#flash-movie").flash({wmode : Transparent, loop : false, paly : true});
*
*
* @auther jsyang <yakuyaku@gmail.com>
* @since 2010년 12월 9일 목요일
* @version 1.0
*/
;(function($){

    $.fn.flash = function(opts){

        var $this  = $(this);
        var options = $.extend({}, $.fn.flash.defaluts, opts);

        options.movie  = $this.attr("title") || options.movie;
        options.width  = $this.attr("width") || options.width;
        options.height = $this.attr("height") || options.height;

		if ( !options.movie ) {
			alert(' flash movie not Exits ');
			return false;
		};

        var out = "";

        $tagAattr = {
            classid  : "clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" ,
            codebase : "http://fpdownload.adobe.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" ,
            width    : options.width   ,
            height   : options.height
        };

        $embedAttr = {
            src : options.movie ,
            width    : options.width  ,
            height   : options.height ,
            play     : options.play ,
            loop     : options.loop ,
            quality  : options.high ,
            wmode  : options.wmode ,
            pluginspage : "http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"

        };

        var paramTag ="";
        for (var data in options) {
           paramTag += '<param name="' + data + '" value="' +  options[ data ]   +  '">\n';
        }

        out += openTag("object" , $tagAattr);
        out += paramTag;
        out += openTag("embed" , $embedAttr);
        out += closeTag("embed");
        out += closeTag("object");

        $this.html(out);

        function openTag(tag, attr) {
            var str = "<" + tag + "";
            for (var data in attr ) {
                str += "  " + data +"='" + attr[ data ] + "' ";
            }
            str += ">";
            return str;
        }

        function closeTag(tag) {
            return "</" + tag + ">";
        }

    };

    $.fn.flash.defaluts = {
        movie : false ,
        width : 300   ,
        height: 300   ,
        play  : true  ,
        loop  : true  ,
        quality : 'autohigh' ,
        bgcolor : 'transparent',
        menu : true,
        allowscriptaccess : 'always',
        wmode : 'transparent'
    };

})(jQuery);