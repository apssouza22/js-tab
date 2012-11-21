/**
 *Sistema de navegação entre abas 
 **/
var Tab = function(options){

	var settings = {},

	optDefault = {
		cssClassItemSelected : 'selected',
		selectorTab	: '.abas a',
		selectorBoxContents	: '.aba_content'
	}

	settings = $.extend( {}, optDefault, options );
	$boxContent = $(settings.selectorBoxContents);
	$boxContent.hide();
	
	var navigate = function(e){
		e.preventDefault();
		$boxContent.hide();
		$boxContent.filter(this.hash).fadeIn();
		$(settings.selectorTab).removeClass(settings.cssClassItemSelected);
		$(this).addClass(settings.cssClassItemSelected);
		if(this.hash.indexOf('#') >=0 ){
			location.href = this.hash.replace(/_/g,'-');
		}
	}
	
	$(settings.selectorTab).click(navigate)
		.filter(':first').click();
}


