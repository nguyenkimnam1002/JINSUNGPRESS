$OBJ = {
	'win' : $(window),
	'doc' : $(document),
	'html' : $('html')
}

function winW(){//창 너비
	return $OBJ.win.width();
}

function winH(){// 창 높이
	return $OBJ.win.height();
}

function winSh(){// 스크롤 값
	return $OBJ.win.scrollTop();
}

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function lockScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  document.addEventListener('wheel', preventDefault, {passive: false}); // Disable scrolling in Chrome
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    document.removeEventListener('wheel', preventDefault, {passive: false}); // Enable scrolling in Chrome
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}


function ajaxLink(href,type,idx){//a:주소, b:type, c:넘길 값
	$.ajax({
		type: type,
		url: href,
		data : idx,
		success : function(data) {
			$('body').find('._pop-ajax').remove().end().append(data).find('._pop-ajax').fadeIn(500);
		}
	});
}

function ajaxClose(a){
	$(a).fadeOut(500,function(){$(this).remove()});
}

function mChk(){// 모바일 체크
	return $('#mchk').is(':visible');
}

var head = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#header');
		var mnu = a.find('.mnu');
		var go = a.find('._go');

		function headSc(){
			if(winSh() > 50){
				$OBJ.html.addClass('headSc');
			}else{
				$OBJ.html.removeClass('headSc');
			}
		}

		$OBJ.win.on('loac scroll',function(){
			headSc();
		});

		mnu.on('click',function(){
			$OBJ.html.toggleClass('navOn');
		});

		go.on('click',function(){
			var id = $(this).attr('href');
			if(mChk() == true){
				var sc = -50;
			}else{
				var sc = -70;
			}
			$OBJ.win.stop(true).scrollTo($(id),500,{offset:{top:sc}});
			$OBJ.html.removeClass('navOn');
			return false;
		});

	}
};


var vis = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#vis');
		var roll = a.find('.roll');
		a.find('.vis').height(winH());

		roll.slick({
			arrows: true,
			dots: true,
			infinite: true,
			speed: 1000,
			fade: true,
			autoplay: true,
			autoplaySpeed: 5000
		});

		$OBJ.win.on('resize',function(){
			roll.slick('refresh');
		});
	}
}

var his = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#ah');
		var scr = a.find('.area');
		var prev = a.find('.prev');
		var next = a.find('.next');
		var max = a.find('.box').length;
		var num = 0;
		var scrIng = true;
		var enn = $('#ah .about, #vis, #pdt')

		function moveScr(num){
			a.find('.os-viewport').stop(true).scrollTo(scr.find('.box').eq(num),200);
		}

		function scrStart(){
			scrIng = true;
		}

		enn.on('mouseenter',function(){
			enableScroll();
		});

		scr.on({
			'mousewheel' : function(e){
				if(scrIng == true){
					scrIng = false;
					if(e.originalEvent.deltaY<0){//휠업
						if(num <= 0 ){
							num == 0;
						}else{
							num--;
						}
					}else{//휠다운
						if(num >= max-1 ){
							num == max-1;
						}else{
							num++;
						}
					}
					moveScr(num);
					setTimeout(scrStart(),2000);
				}else{
					return false;
				}
			},
			'mouseenter' : function(){
				if(mChk()==false){
					lockScroll();
				}
			},
			'mouseleave' : function(){
				enableScroll();
			}
		});

		prev.on('click',function(){
			if(num <= 0 ){
				num == 0;
			}else{
				num--;
			}
			moveScr(num);
		});

		next.on('click',function(){
			if(num >= max-1 ){
				num == max-1;
			}else{
				num++;
			}
			moveScr(num);
		});
	}
}


var fac = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#fac');
		var area = a.find('area');
		var flt = a.find('.float');
		var box = a.find('.box');
		var map = a.find('.map img');
		var close = a.find('.close');
		var res = $('#respon, #service');
		var spd = 300;
		var posNum = 99;

		res.appear();

		area.on('mouseenter',function(e){
			if(mChk()==false){
				var i = $(this).index();
				var x = e.pageX - 120;
				var y = e.offsetY - 70;
				if(posNum !== i){
					flt.css({'left':x,'top':y});
				}
				
				flt.stop(true).fadeIn(spd);
				box.eq(i).show().siblings().hide();
				console.log(e);

				posNum = i;

				return false;
			}
		});

		area.on('click',function(e){
			if(mChk()==true){
				var i = $(this).index();
				var UserAgent = navigator.platform; //하드웨어 플랫폼

				if (UserAgent.match(/i(Phone|Pod)/i) != null ){
					var x = e.offsetX - 180;
					var y = e.offsetY - a.offset().top - 20;
				} else{
					var x = e.offsetX - 150;
					var y = e.offsetY - 20;
				}

				if(posNum !== i){
					flt.css({'left':x,'top':y});
				}
				
				flt.stop(true).fadeIn(spd);
				box.eq(i).show().siblings().hide();
				//alert('x:'+x+'y:'+y);
				//alert(winSh());
				posNum = i;
			}

			return false;
		});

		/*
		map.on('mouseleave',function(){
			flt.stop(true).fadeOut(spd);
		});
		*/

		res.on('mouseenter',function(){
			flt.stop(true).fadeOut(spd);
		});

		close.on('click',function(){
			flt.fadeOut(spd);
		});

		$OBJ.doc.on('click',function(e){
			if(!$(box).has(e.target).length){
				flt.fadeOut(spd);
			}
		});

	}
};




var sc = {
	init : function(){
		if($('._sc').length > 0){
			this.action();
		}
	},
	action : function(){
		var ele = $('._sc');
		var snb = $('#header .gnb');
		var snbA = snb.find('li');
		var scrNum = 0;
		var solh = [];
		var aniNum = [];

		function navActive(a){
			snbA.eq(a).addClass('active').siblings().removeClass('active');
		}

		function motionArea(){
			for (i=0;i<ele.length;i++){
				if(winSh() >= solh[i]){
					scrNum = i;
					if(aniNum[i]==0){
						aniNum[i]=1;
					}
				}
			}
			navActive(scrNum);
			//motion(scrNum);
		}

		ele.each(function(i){
			aniNum[i] = 0;
		});

		function startScr(){
			ele.each(function(i){
				solh[i] = parseInt(ele.eq(i).offset().top - (953 - (953/1.5)));
			});
			setTimeout(function(){
				motionArea();
				wheelNum = scrNum;
			},500);
		}
		startScr();

		$OBJ.win.on({
			'load' : function(){
				startScr();
			},
			'scroll' : function(){
				motionArea();
			}
		});

	}
}



$OBJ.doc.ready(function(){
	head.init();
	vis.init();
	his.init();
	fac.init();
	sc.init();
	$('img[usemap]').rwdImageMaps();
	$('._scr').overlayScrollbars({});
});

$OBJ.win.on('load',function(){
	AOS.init({
		duration:1000,
		offset: 20
	});
});