/**
*	ON LOAD
**/

$(window).load(function(){
	$(document.body).addClass('loaded');					
});
$(document).ready(function(){
	$(document.body).addClass('js');
    peopleNumber = 1;
    checkUrl = "";
});


function changePeopleNumber(value){
    peopleNumber += value;
    if(peopleNumber < 1){
        peopleNumber = 1;
    } else if (peopleNumber > 9){
        peopleNumber = 9;
    }
    if(checkUrl == ""){
        checkUrl =  $('.check').children("a").attr("href");
    }
    if(peopleNumber == 1){
        /*$('.people-number').html("<p></p>");
        $('.people').css( "background-position", "13px 0" );*/
        $('.check').children("a").attr("href", checkUrl);
    } else {
        /*$('.people-number').html("<p>"+peopleNumber+"</p>");
        $('.people').css( "background-position", "10px 0" );*/
        var temp = checkUrl.split("?");
        $('.check').children("a").attr("href", temp[0]+peopleNumber+"/?"+temp[1]);
    }
    $('.people-number').html("<p>"+peopleNumber+"</p>");
    //$('.people').css( "background-position", "10px 0" );
    //console.log("<<<<<<<<<"+checkUrl);
    //console.log(">>>>>>>>>"+$('.check').children("a").attr("href"));
}

/**
 * History
 */

History.Adapter.bind(window,'statechange',function(){
	var State = History.getState();
	//History.log(State.data, State.title, State.url);
	
	if(!!State.data.method) {
		if(State.data.method && State.data.href) {
			window[State.data.method](null, State.data.href);
		}
	} else {
		if(openPopup.isOpen()) {
			openPopup.close();
		} else {
			document.location.href = State.url;
		}
	}
});

/**
 * Script of the popups for the destinations
 */
var openPopup = function(e, href) {
	if(e && e.preventDefault) e.preventDefault();
	
	if(!openPopup.busy) {
		//if the href wasn't provided, get it from the element
		if(!href) {
			var element = $(this);
			openPopup.href = element.attr('href');
			//openPopup.href = 'destination.html';
			openPopup.fromHistory = false;
			this.blur();
		} else {
			openPopup.href = href;
			openPopup.fromHistory = true;
		}
		
		//don't proceed if the current popup has the same href
		if(openPopup.currentHref != openPopup.href) {
			openPopup.setBusy(true);
			
			//close current popup without any fadeOut
			openPopup.close(null, true);
			
			if($("#home").length != 0){
				stopAutoSlider();
			};
			
			$.ajax(openPopup.href, {
				'complete' : openPopup.ajaxHandler,
				'contentType' : 'application/x-www-form-urlencoded; charset=UTF-8'
			});
		}
	}
};

openPopup.busy = false;
openPopup.currentHref = null;
openPopup.href = null;
openPopup.fromHistory = false;
openPopup.baseUrl = document.location.href;
openPopup.onClose = null;

openPopup.setBusy = function(busy) {
	openPopup.busy = busy;
	
	if(openPopup.busy) {
		$('body').addClass('loading');
	} else {
		$('body').removeClass('loading');
	}
};

openPopup.isOpen = function() {
	return openPopup.currentHref != null;
};

openPopup.ajaxHandler = function(response) {
	
	if(response.status == 200) {
		//get the DOM element from the response
		var html = $(response.responseText);
		
		var popupElement = html.find('#detail-container');
		
		if(popupElement && popupElement.length > 0) {
			popupElement.addClass('popup-content');
			var overlayElement = $('<div class="popup-overlay"><div class="close"></div></div>');
			var popup = $('<div class="popup"></div>').append(popupElement, overlayElement);
			popup.insertAfter($('#wrapper'));
			
			$('#wrapper').css('minHeight', popupElement.height());
			
			html.filter('script').each(function(){
				$.getScript(this.src);
				$.globalEval(this.text || this.textContent || this.innerHTML || '');
			});
			
			var oHighlight = popup.find('#highlighted-flight');
			
			if(oHighlight && oHighlight.length > 0){
				$('#highlight-wrapper').append(oHighlight);
			};
			
			$('html, body').animate({
				scrollTop : 0
			}, 1200,'easeInOutExpo');
			
			//avoid duplicating history state
			if(!openPopup.fromHistory) {
				History.pushState({ 'method' : 'openPopup', 'href' : openPopup.href, 'time' : new Date().getTime() }, '', openPopup.href);
			}
			
			openPopup.currentHref = openPopup.href;
			
			overlayElement.click(openPopup.close);
		};
	};
	
	openPopup.setBusy(false);
};

openPopup.close = function(e, direct) {
	if(e && e.preventDefault) e.preventDefault();
	
	var popupElement = $('.popup');
	
	openPopup.currentHref = null;
	
	$('#wrapper').css('minHeight', '');
	$('#highlight-wrapper').html('');
	
	if(popupElement) {
		if(direct) {
			popupElement.remove();
		} else {
			openPopup.currentHref = openPopup.baseUrl;
			History.pushState({}, '', openPopup.baseUrl);
			
			popupElement.fadeOut(null, function() {
				if(openPopup.onClose){
					openPopup.onClose();
					openPopup.onClose = null;
				}
				popupElement.remove();
			});
		};
		
		if($("#home").length != 0){
			startAutoSlider();
		};
	};
	
};

var initializePopup = function() {
	var hash = document.location.hash;
	
	if(hash && hash[0] == '#') {
		hash = hash.substr(1);
	}
	
	if(hash && hash != '') {
		openPopup(null, hash);
	}
	
	if($("#wrapper > #destination").length == 0){
		$(document).on('click', '*[data-popup]', openPopup);
	}
};




/**
 * Smoothscrolling
 */
var initializeSmoothscroll = function() {
	$(document).on('click', '*[data-smoothscroll]', function(e) {
		var element = $(this);
		
		var id = element.attr('data-smoothscroll');
		
		if(id && id != '') {
			element = $(id);
		};
		
		if(element && element.length > 0) {
			if(e && e.preventDefault) e.preventDefault();
			this.blur();
			
			var header = $('header');
			var headerSize = header && header.length > 0 ? header.height() : 0;
			
			if($('#highlighted-flight .flight').length !=0){
				headerSize = headerSize+40;
			};
			
			$('html, body').animate({
				scrollTop : element.offset().top - (headerSize+20)
			}, 1200,'easeInOutExpo');
		}
	});
};

/**
 * Tooltips
 */
var initializeTooltips = function() {
	$(document).on('mouseenter', '*[data-tooltip]', function(e) {
		if(e && e.preventDefault) e.preventDefault();
		e.stopPropagation();
		
		this.blur();
		
		var element = $(this);
		element.toggleClass('open');
		
		element.find('.tooltip a').click(function(e){
			e.stopPropagation();
												  
			var oLink = $(this),
				sHref = oLink.attr('href');
				
			window.location.href = sHref;
		})
	});
	
	$(document).on('mouseleave', '*[data-tooltip]', function(e) {
		hiddenTooltips();					   
	});
};

function hiddenTooltips(){
	$('*[data-tooltip]').removeClass('open');
};

var initializeTogglers = function() {
	
	$(document).on('click', '*[data-toggler] > a', function(e) {
		if(e && e.preventDefault) e.preventDefault();
		e.stopPropagation();
		
		this.blur();
		
		var element = $(this).parent();
		element.toggleClass('open');
	});
	
	$(document).on('click', function(e) {
		hiddenTogglers();
	});
};

function hiddenTogglers(){
	$('*[data-toggler]').removeClass('open');
};

/*SHARING POPUP*/

var initializeSharingPopup = function() {
	
	$(document).on('click', '*[data-sharing-popup]', function(e) {
		if(e && e.preventDefault) e.preventDefault();
		
		var position = $(this).attr('data-sharing-popup').split(','),
			width = parseInt(position[0]) || 600,
			height = parseInt(position[1]) || 400,
			href = $(this).attr('href');
		
		window.open(href, 'sharing', 'menubar=no, status=no, top=' + ((window.screen.height - height) / 2) + ', left=' + ((window.screen.width - width) / 2) + ', scrollbars=yes, width=' + width + ', height=' + height);
		
		return false;
	});
};


$(function() {
	initializePopup();
	initializeSmoothscroll();
	initializeTooltips();
	initializeSharingPopup();
	initializeTogglers();
});