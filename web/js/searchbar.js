var frameRate = 30,
	isLoaded = false;

var formVerify = {
    fieldGroups: [
        '#airport input, #airport2 input'
      , '#dates input, #dates2 input'
      , '#sort input, #sort2 input'
      , '#filter .first-flip input, #filter3 input'
      , '#filter .second-flip input, #filter4 input'
    ]

  , check: function() {
        var selectCount = 0;
        for( var i = 0; i < formVerify.fieldGroups.length; i++ ) {
            if( $( formVerify.fieldGroups[ i ] ).filter( ':checked' ).length )
                selectCount++;
        }
		
        if( selectCount === formVerify.fieldGroups.length ) {
            $( '#search, #sentence button' ).removeAttr( 'disabled' );
        } else {
            $( '#search, #sentence button' ).attr( 'disabled', true );
        }
    }
};

var formVerifySentence2 = {
	showError: function(input, error) {
		var errorId = input.attr('id') + '-error';
		var errorElement = $('#' + errorId);
		
		if(!errorElement || errorElement.length < 1) {
			errorElement = $('<div class="errorMessage" id="' + errorId + '"></div>');
			sendAnalytics('Datacapture', 'Error_'+errorId);
		} else {
			errorElement.empty();
		}
		
		errorElement.append(error);
		
		errorElement.click(function(){
			$(this).fadeOut();							  
		});
		
		errorElement.css({
			'position' : 'absolute',
			'zIndex' : 1000,
			'left' : 0,
			'top' : 0,
		});
		
		var offset = input.parent().offset();
		
		var container = $('#sentence2');
		
		var offsetContainer = container.offset();
		
		container.append(errorElement);
		
		errorElement.css({
			'left' : offset.left - offsetContainer.left,
			'top' : offset.top - offsetContainer.top - errorElement.height()
		});
		
		errorElement.fadeIn(600);
	},
	hideAllErrors : function() {
		$('#sentence2 .errorMessage').fadeOut(300);
	},
	hideError: function(input) {
		var errorId = input.attr('id') + '-error';
		var errorElement = $('#' + errorId);
		errorElement.fadeOut(300);
	},
	checkEmail: function(email) {
		//use a very pretty permissive regexp to avoid false negative which are worse than false positive for this usecase
		var pattern = new RegExp(/^[\w\.\-+~]+@[\w\.\-]+\.[\w]+$/i);
		return pattern.test(email);
	},
	check: function() {
		var errors = false;
		
		var input = $('#sentence2-city');
		var value = input.val();
		
		
		if(!value || value == '') {
			this.showError(input, $('<span>Please type your city name</span>'));
			errors = true;
		} else {
			this.hideError(input);
		}
		
		input = $('#sentence2-mail');
		value = input.val();
		
		if(!value || value == '' || !this.checkEmail(value)) {
			this.showError(input, $('<span><strong>Uh-oh.</strong> Are you sure that\'s the right one? Please retype your email address</span>'));
			errors = true;
		} else {
			this.hideError(input);
		}
		
		input = $('#sentence2-check');
		var checked = input.filter(':checked').length > 0;
		
		if(!checked) {
			this.showError(input, $('<span> Sorry, the nitty gritty is pretty important</span>'));
			errors = true;
		} else {
			this.hideError(input);
		}
		
		return !errors;
	}
};

$( document ).ready( function() {
		
	$(window).load(function(){
		isLoaded = true;										
	});
	
	$('#search').click(function(){
		
		if($('header').hasClass('open')){
			
			//CLOSE PANEL
			 togglePanel();
			 sendAnalytics('Search', 'Sentence');
			 
			 //SUBMIT WHEN FLIP ARE DONE
			 setTimeout(function(){
				$('#header-bar').submit();				 
			},300);
			 
			 return false;
		}else{
			sendAnalytics('Search', 'Topbar');	
		};							
	});
	
	
	if($('#about-page #about-search').length != 0){
		$('#about-page #about-search').click(function(){
			
			if(!$('header').hasClass('open')){
				//OPEN PANEL
				 togglePanel();
				 return false;
			};							
		});
	};
	
	
							  
	var switchPanel = function(toClose, toOpen) {
		toClose.hide();
		toOpen.show();
		
		var panel = $('header .panel');
		panel.css('min-height', toOpen.height());
	};

	var switchToSentence1 = function() {
		switchPanel($('#sentence2, #sentence-success, #sentence-loading'), $('#sentence'));
		
		$('#search').removeAttr('disabled');
	};
	
	var switchToSentence2 = function() {
		switchPanel($('#sentence, #sentence-success, #sentence-loading'), $('#sentence2'));
		sendAnalytics('Datacapture', 'Start');
		
		$('#search').attr('disabled','disabled');
	};
	
	var switchToSentenceLoading = function() {
		switchPanel($('#sentence, #sentence2, #sentence-success'), $('#sentence-loading'));
	};
	
	var switchToSentenceSuccess = function() {
		switchPanel($('#sentence, #sentence2, #sentence-loading'), $('#sentence-success'));
	};
	
	$('#sentence2 input').each(function(i, elm){
		var oElm = $(elm),
			sId = oElm.attr('id');
			
		oElm.click(function(){
			$('#'+sId+'-error').fadeOut();					
		}).focus(function(){
			$('#'+sId+'-error').fadeOut();					
		});
	});

	var togglePanel = function() {
		var header = $( 'header' ),
			expandArrow = $( '#expand' ).find( 'span' );
			
			$('#header-bar .flip').each(function(i, elm){
				if($(elm).find('.sprite-animation').hasClass('animate')){
					$(elm).find('.sprite-animation').spStop().destroy().removeClass('animate').css('background-position','0 0');
				};
				$(elm).find('.sprite-animation').hide();
			})

        if( !header.hasClass( 'open' ) ) {
			switchToSentence1();
            if( this.id === 'expand' ) {
                header.addClass( 'no-intro' );
			} else {
                header.removeClass( 'no-intro' );
			}
			
            header.removeClass('close').addClass( 'open' );
            expandArrow.removeClass( 'icon-down-arrow' ).addClass( 'icon-up-arrow' );
			
			/* SET ALL FLIP TO / */
			
			$('#header-bar .flip').each(function(i, elm){
				$(elm).find('.flip-content').html('<span class="icon-empty"></span>');
			});
			
			sendAnalytics('Topbar', 'open');

			
        } else {
            header.one( 'webkitAnimationEnd', function() {
                header.removeClass( 'close' );
            } );
            header.removeClass( 'open' ).addClass( 'close' );
            expandArrow.removeClass( 'icon-up-arrow' ).addClass( 'icon-down-arrow' );
			
			formVerifySentence2.hideAllErrors();
			
			/* RESET FLIP */
			
			$('#header-bar input:checked').each(function(i, elm){
				$(elm).trigger('change');
			});
			
			sendAnalytics('Topbar', 'close');
        }
	};
	
	$( '#city input' ).on( 'change', function(e) {
		if(this.value == 'other') {
			$('#city input[value=ldn]').attr('checked', 'checked');
			switchToSentence2();
		};
	});
							  
    // Airport input display
    $( '#airport input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var airport = $( this ).val();
			
			if($(document.body).hasClass('loaded') && !$('header').hasClass('close')){
				sendAnalytics('Topbar', 'From', airport);
			}
			
            $( '#airport .display .flip' ).each( function( i, el ) {
														  
				animateGo();
				setFlip(el, 'regular-data', i*200, airport[i]);
				
				formVerify.check();
				
            } );

            $( '#airport2 > span' ).html( $( this ).siblings( 'label' ).html().replace( $( '#city > span' ).html(), '' ) );
            $( '#airport input[value="' + airport + '"], #airport2 input[value="' + airport + '"]' ).attr( 'checked', true );
			
			//CLOSE ON CLICK
			var oParent = $(this).parents('ul');
			oParent.addClass('hide');
			setTimeout(function(){
				oParent.removeClass('hide');				
			},10);
        }
    } );
	
	// Sentence: Airport input display
    $( '#airport2 input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var airport = $( this ).val();
			sendAnalytics('Sentence', 'From', airport);

            $( '#airport2 > span' ).html( $( this ).siblings( 'label' ).html().replace( $( '#city > span' ).html(), '' ) );
            $( '#airport input[value="' + airport + '"], #airport2 input[value="' + airport + '"]' ).attr( 'checked', true );
			
			 formVerify.check();
        }
    } );

    // Date input display
    $( '#dates input' ).on( 'change', function() {
		
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , dates = $( this ).data( 'dates' ).split( ',' );
			
			if($(document.body).hasClass('loaded') && !$('header').hasClass('close')){
				sendAnalytics('Topbar', 'Date', $( this ).data( 'dates' ));
			};
			  
			if(dates.length != 3){
				 dates = [dates[0], '<span class="icon-arrow-right"></span>', dates[dates.length-1]];
			};
			  
            $( '#dates .display .flip' ).each( function( i, el ) {
				animateGo();
				setFlip(el, 'regular-data', i*200, dates[i]);
            } );

            $( '#dates2 > span' ).html( $( '#dates2 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#dates input[value="' + val + '"], #dates2 input[value="' + val + '"]' ).attr( 'checked', true );

            formVerify.check();
			
			//CLOSE ON CLICK
			var oParent = $(this).parents('ul');
			oParent.addClass('hide');
			setTimeout(function(){
				oParent.removeClass('hide');				
			},10);
        }
    } );
    $( '#dates input:checked' ).change();
	
	// Sentence: Date input display
    $( '#dates2 input' ).on( 'change', function() {
		
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , dates = $( this ).data( 'dates' ).split( ',' );
			  
			sendAnalytics('Sentence', 'Date', $( this ).data( 'dates' ));
          

            $( '#dates2 > span' ).html( $( '#dates2 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#dates input[value="' + val + '"], #dates2 input[value="' + val + '"]' ).attr( 'checked', true );

            formVerify.check();
        }
    } );
	

    $( '#sort input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , icon = $( this ).data( 'icon' );
			
			if($(document.body).hasClass('loaded') && !$('header').hasClass('close')){
				sendAnalytics('Topbar', 'Preference', icon);
			};

            $( '#sort2 > span' ).html( $( '#sort2 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#sort input[value="' + val + '"], #sort2 input[value="' + val + '"]' ).attr( 'checked', true );
			
			animateGo();
			setFlip('#sort .flip', icon, 0);
			
			formVerify.check();
			
			//CLOSE ON CLICK
			var oParent = $(this).parents('ul');
			oParent.addClass('hide');
			setTimeout(function(){
				oParent.removeClass('hide');				
			},10);
        }
    } );
    $( '#sort input:checked' ).change();
	
	$( '#sort2 input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , icon = $( this ).data( 'icon' );
			  
			sendAnalytics('Sentence', 'Preference', icon);

            $( '#sort2 > span' ).html( $( '#sort2 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#sort input[value="' + val + '"], #sort2 input[value="' + val + '"]' ).attr( 'checked', true );
			
			formVerify.check();
        }
    } );
	
	
	// FIRST INTEREST
	 $( '#filter .first input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , icon = $( this ).data( 'icon' );
			  
			if($(document.body).hasClass('loaded') && !$('header').hasClass('close')){
				sendAnalytics('Topbar', 'Interest1', icon);
			};

            $( '#filter3 > span' ).html( $( '#filter3 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#filter .first input[value="' + val + '"], #filter3 input[value="' + val + '"]' ).attr( 'checked', true );
			
			// HIDE OPTION IN OTHER FILTER
			$( '#filter .second input' ).parent().show();
			$( '#filter .second input[data-icon='+icon+']' ).parent().hide();
			
			$( '#filter4 input' ).parent().show();
			$( '#filter4 input[data-icon='+icon+']' ).parent().hide();
			
			animateGo();
			setFlip('#filter .first-flip', icon, 0);

            formVerify.check();
			
			//CLOSE ON CLICK
			var oParent = $(this).parents('ul');
			oParent.addClass('hide');
			setTimeout(function(){
				oParent.removeClass('hide');				
			},10);
        }
    } );
	 
	// Sentence: FIRST INTEREST
	$( '#filter3 input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , icon = $( this ).data( 'icon' );
			  
			sendAnalytics('Sentence', 'Interest1', icon);

            $( '#filter3 > span' ).html( $( '#filter3 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#filter .first input[value="' + val + '"], #filter3 input[value="' + val + '"]' ).attr( 'checked', true );
			
			// HIDE OPTION IN OTHER FILTER
			$( '#filter .second input' ).parent().show();
			$( '#filter .second input[data-icon='+icon+']' ).parent().hide();
			
			$( '#filter4 input' ).parent().show();
			$( '#filter4 input[data-icon='+icon+']' ).parent().hide();

            formVerify.check();
        }
    } );
    
	
	//SECOND INTEREST
    $( '#filter .second input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , icon = $( this ).data( 'icon' );
			
			if($(document.body).hasClass('loaded') && !$('header').hasClass('close')){
				sendAnalytics('Topbar', 'Interest2', icon);
			};

            $( '#filter4 > span' ).html( $( '#filter4 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#filter .second input[value="' + val + '"], #filter4 input[value="' + val + '"]' ).attr( 'checked', true );
			
			// HIDE OPTION IN OTHER FILTER
			$( '#filter .first input' ).parent().show();
			$( '#filter .first input[data-icon='+icon+']' ).parent().hide();
			
			$( '#filter3 input' ).parent().show();
			$( '#filter3 input[data-icon='+icon+']' ).parent().hide();
			
			animateGo();
			setFlip('#filter .second-flip', icon, 0);
			
			//CLOSE ON CLICK
			var oParent = $(this).parents('ul');
			oParent.addClass('hide');
			setTimeout(function(){
				oParent.removeClass('hide');				
			},10);
			
        }
    } );
	
	// Sentence: SECOND INTEREST
    $( '#filter4 input' ).on( 'change', function() {
        if( $( this ).is( ':checked' ) ) {
            var val = $( this ).val()
              , icon = $( this ).data( 'icon' );
			  
			sendAnalytics('Sentence', 'Interest2', icon);

            $( '#filter4 > span' ).html( $( '#filter4 [value="' + val + '"]' ).siblings( 'label' ).html() );
            $( '#filter .second input[value="' + val + '"], #filter4 input[value="' + val + '"]' ).attr( 'checked', true );
			
			// HIDE OPTION IN OTHER FILTER
			$( '#filter .first input' ).parent().show();
			$( '#filter .first input[data-icon='+icon+']' ).parent().hide();
			
			$( '#filter3 input' ).parent().show();
			$( '#filter3 input[data-icon='+icon+']' ).parent().hide();
        }
    } );
    $( '#filter input:checked' ).change();
	
	$('#show-sentence-2').click(function(){
		togglePanel();
		switchToSentence2();
	});
	

    // Sentence expander
    $( '#expand, #close-panel').on( 'click', function(e) {
		if(e && e.preventDefault) e.preventDefault();
	
        togglePanel();

        return false;
    });
	
	 $( '#header-overlay').click(function(e) {
        togglePanel();
        return false;
    });

	
    // Sentence dropdown positioning
		
	$( '.panel .dropdown').each(function(i, elm){
		var oElm = $(elm);
		 var list = $( this ).find( 'ul' );
		  
		oElm.on( 'focus', function() {
            list.css( 'top', Math.max( -$( this ).position().top, ( $( this ).height() - list.height() ) / 2 ) );
			list.addClass('show-drop');
        } ).on( 'blur', function() {
            list.css( 'top', 0 );
			list.removeClass('show-drop');
        } );
		
		oElm.find('input').change(function(){
			oElm.blur();
		});
	});
	

	/** AUTO RESIZING INPUTS **/
	$( '.panel .input' ).each(function(index, item) {
		var div = $(item),
			input = div.find('input'),
			span = div.find('span'),
			defaultValue = span.text();
		
		div.on('focus', function(e) {
			div.blur();
			input.css( 'top', Math.max( -div.position().top, ( div.height() - input.height() ) / 2 ) );
			span.css('paddingRight', 20);
			input.css( 'width', span.width() + 20 );
			input.show();
			input.focus();
		});
		
		var refreshInput = function() {
			var value = input.val();
			var trimmedValue = $.trim(value);
			
			if(value != trimmedValue) {
				value = trimmedValue;
				input.val(value);
			}
			
			if(!value || value == '') {
				span.html('&nbsp;');
			} else {
				span.text(value);
			}
			
			input.css( 'width', span.width() + 20 );
		};
		
		input
			.on( 'keyup', refreshInput)
			.on( 'keypress', refreshInput)
			.on( 'keydown', refreshInput)
			.on( 'blur', function() {
				var value = input.val();
				
				if(!value || value == '') {
					value = defaultValue;
				}
				
				span.text(value);
				span.css('paddingRight', 0);
				input.hide();
			});
	});
	
	$('#sentence2-check').on('change', function(e) {
		if(this.checked) {
			$(this).parent().addClass('checked');
		} else {
			$(this).parent().removeClass('checked');
		}
	});
	
	$('#sentence2').on('submit', function(e) {
		if(e && e.preventDefault) e.preventDefault();
		
		if(formVerifySentence2.check()) {
			switchToSentenceLoading();
			
			$.ajax({
				url : $('#sentence2').attr('action'),
				type : 'POST',
				data : {
					date : $('#sentence2-dates2-T').val(),
					email : $('#sentence2-mail').val(),
					city : $('#sentence2-city').val(),
					check : '1'
				},
				complete : function(e, status) {
					if(status == 'success' && e.responseText == 'Thank you for submitting your interest') {
						switchToSentenceSuccess();
						sendAnalytics('Datacapture', 'Submit');
						setTimeout(togglePanel, 3000);
					} else {
						switchToSentence2();
					}
				}
			});
		}
	});
	
    formVerify.check();
	
	//IF NEW USER
	if(!$.cookie("new-user")){
		togglePanel();
		$.cookie("new-user", "true", { expires: 7 });
	};

} );


var sortMap = {
	// Map the value to the icon name
	'weather': 'cloud'
  , 'price': 'tags'
  , 'hassle': 'clock'
  , 'outdoor': 'compass'
  , 'food': 'food'
  , 'romance': 'heart'
  , 'nightlife': 'cocktail'
  , 'culture': 'book'
  , 'hidden-gem': 'diamond'
  , 'none': 'empty'
};

function setFlip(sId, sIcon, iDelay, sData){
	var oElm=  $(sId),
		oSprite = $(oElm.find('.sprite-animation')[0]),
		oContent = oElm.find('.flip-content'),
		sId = $(oSprite).attr('id');
		
	if(isLoaded == true){
		
		oSprite.show();
		
		if(oSprite.hasClass('animate')){
			iDelay = 0;
			oSprite.spStop();
			oSprite.destroy();
		};
		
		//SPRITESHEET
		setTimeout(function(){
							
			oSprite.sprite({
				fps: frameRate, 
				no_of_frames: 24,
				on_frame: {
					1 : function(obj){
						oSprite.addClass('animate');
					},
					21 : function(obj){
						if(oSprite.hasClass('animate')){
							if(sIcon == 'regular-data'){
								oContent.html(sData );
							}else{
								oContent.html( '<span class="icon-' + sortMap[ sIcon ] + '"></span>' );
							};
						};
					}
				},
				on_last_frame: function(obj) {
					oSprite.hide();
					oSprite.css('background-position','0 0');
					oSprite.removeClass('animate');
					setTimeout(function(){obj.destroy();}, 5);
				}
			});
		},iDelay);
		//end SPRITESHEET
	
	}else{
		if(sIcon == 'regular-data'){
			oContent.html(sData );
		}else{
			oContent.html( '<span class="icon-' + sortMap[ sIcon ] + '"></span>' );
		};
	}
};
function animateGo(){
	$('#search').removeClass('animate');
	setTimeout(function(){
		$('#search').addClass('animate');					
	},10);
};
