var ddsmoothmenu={arrowimages:{down:["downarrowclass","images/menu_arrow.html",30],right:["rightarrowclass","images/menu_arrow.png"]},transition:{overtime:300,outtime:300},shadow:{enable:!1,offsetx:5,offsety:5},showhidedelay:{showdelay:100,hidedelay:200},detectwebkit:-1!=navigator.userAgent.toLowerCase().indexOf("applewebkit"),detectie6:document.all&&!window.XMLHttpRequest,css3support:window.msPerformance||!document.all&&document.querySelector,ismobile:null!=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i),getajaxmenu:function(a,b){var c=a("#"+b.contentsource[0]);c.html("Loading Menu..."),a.ajax({url:b.contentsource[1],async:!0,error:function(a){c.html("Error fetching content. Server Response: "+a.responseText)},success:function(d){c.html(d),ddsmoothmenu.buildmenu(a,b)}})},buildmenu:function(a,b){var c=ddsmoothmenu,d=a("#"+b.mainmenuid+">ul");d.parent().get(0).className=b.classname||"ddsmoothmenu";var e=d.find("ul").parent();if(e.hover(function(b){a(this).children("a:eq(0)").addClass("selected")},function(b){a(this).children("a:eq(0)").removeClass("selected")}),e.each(function(d){var e=a(this).css({zIndex:100-d}),f=a(this).find("ul:eq(0)").css({display:"block"});if(f.data("timers",{}),this._dimensions={w:this.offsetWidth,h:this.offsetHeight,subulw:f.outerWidth(),subulh:f.outerHeight()},this.istopheader=1==e.parents("ul").length,f.css({top:this.istopheader&&"v"!=b.orientation?this._dimensions.h+"px":0}),c.shadow.enable&&!c.css3support){if(this._shadowoffset={x:this.istopheader?f.offset().left+c.shadow.offsetx:this._dimensions.w,y:this.istopheader?f.offset().top+c.shadow.offsety:e.position().top},this.istopheader)$parentshadow=a(document.body);else{var g=e.parents("li:eq(0)");$parentshadow=g.get(0).$shadow}this.$shadow=a('<div class="ddshadow'+(this.istopheader?" toplevelshadow":"")+'"></div>').prependTo($parentshadow).css({left:this._shadowoffset.x+"px",top:this._shadowoffset.y+"px"})}e.hover(function(d){var g=f,h=e.get(0);clearTimeout(g.data("timers").hidetimer),g.data("timers").showtimer=setTimeout(function(){h._offsets={left:e.offset().left,top:e.offset().top};var d=h.istopheader&&"v"!=b.orientation?0:h._dimensions.w;if(d=h._offsets.left+d+h._dimensions.subulw>a(window).width()?h.istopheader&&"v"!=b.orientation?-h._dimensions.subulw+h._dimensions.w:-h._dimensions.w:d,g.queue().length<=1&&(g.css({left:d+"px",width:h._dimensions.subulw+"px"}).animate({height:"show",opacity:"show"},ddsmoothmenu.transition.overtime),c.shadow.enable&&!c.css3support)){var f=h.istopheader?g.offset().left+ddsmoothmenu.shadow.offsetx:d,i=h.istopheader?g.offset().top+c.shadow.offsety:h._shadowoffset.y;!h.istopheader&&ddsmoothmenu.detectwebkit&&h.$shadow.css({opacity:1}),h.$shadow.css({overflow:"",width:h._dimensions.subulw+"px",left:f+"px",top:i+"px"}).animate({height:h._dimensions.subulh+"px"},ddsmoothmenu.transition.overtime)}},ddsmoothmenu.showhidedelay.showdelay)},function(a){var b=f,d=e.get(0);clearTimeout(b.data("timers").showtimer),b.data("timers").hidetimer=setTimeout(function(){b.animate({height:"hide",opacity:"hide"},ddsmoothmenu.transition.outtime),c.shadow.enable&&!c.css3support&&(ddsmoothmenu.detectwebkit&&d.$shadow.children("div:eq(0)").css({opacity:0}),d.$shadow.css({overflow:"hidden"}).animate({height:0},ddsmoothmenu.transition.outtime))},ddsmoothmenu.showhidedelay.hidedelay)})}),c.shadow.enable&&c.css3support)for(var f=a("#"+b.mainmenuid+" ul li ul"),g=parseInt(c.shadow.offsetx)+"px "+parseInt(c.shadow.offsety)+"px 5px #aaa",h=["boxShadow","MozBoxShadow","WebkitBoxShadow","MsBoxShadow"],i=0;i<h.length;i++)f.css(h[i],g);d.find("ul").css({display:"none",visibility:"visible"})},init:function(a){if("object"==typeof a.customtheme&&2==a.customtheme.length){var b="#"+a.mainmenuid,c="v"==a.orientation?b:b+", "+b;document.write('<style type="text/css">\n'+c+" ul li a {background:"+a.customtheme[0]+";}\n"+b+" ul li a:hover {background:"+a.customtheme[1]+";}\n</style>")}this.shadow.enable=!(document.all&&!window.XMLHttpRequest)&&this.shadow.enable,jQuery(document).ready(function(b){"object"==typeof a.contentsource?ddsmoothmenu.getajaxmenu(b,a):ddsmoothmenu.buildmenu(b,a)})}};