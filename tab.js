/**
 *Sistema de navegação entre abas 
 **/
var Tab = function(options) {
		var publicMethods = {};
		var $tabNavigation,
				$boxContents;

		var defaultOptions = {
			cssClassSelected: '.selected',
			tabNavigation: ".tab-navigation",
			tabSelected: ':first',
			boxContents: '.tab-content'
		}
		var settings = $.extend({}, defaultOptions, options);

		function changeTab()
		{
			$boxContents.hide().filter(this.hash).show();
			$tabNavigation.removeClass(settings.cssClassSelected);
			$(this).addClass(settings.cssClassSelected);
			return false;
		}

		publicMethods.init = function() {
			$tabNavigation = $(settings.tabNavigation);
			$boxContents = $(settings.boxContents);

			$(settings.tabNavigation).click(changeTab)
					.filter(settings.tabSelected)
					.click();
		};

		return publicMethods;

	}

