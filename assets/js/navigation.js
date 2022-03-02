/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {
	var masthead, menuToggle, siteNavContain, siteNavigation;
	
	function openMainNavigationSubmenu(e) {
		e.preventDefault();
		
		// Don't do anything if this is the mobile menu
		if ( window.matchMedia('(max-width: 1024px)').matches ) {
			return;
		}
		
		var listItem = $(this);
		listItem.addClass( 'open' );
		listItem.attr( 'aria-expanded', 'true' );
		
		listItem.siblings().removeClass('open');
		listItem.siblings().attr( 'aria-expanded', 'false' );
		
		// Remove the classes when tabbing out of the submenu, open when tabbing in
		$( '.X-header' ).nextUntil('a, input, button').on( 'focusin.mainNavigation', closeMainNavigationSubmenu );
		$( '.X-menu' ).prevUntil('a, input, button').on( 'focusin.mainNavigation', closeMainNavigationSubmenu );
	}
	
	function closeMainNavigationSubmenu(e) {
		e.preventDefault();
		
		$('.X-menu .menu-item-has-children').removeClass('open');
		$('.X-menu .menu-item-has-children').attr( 'aria-expanded', 'false' );
		
		$(this).off('focusin.mainNavigation');
	}
	
	function openQuickLinks(e) {
		e.preventDefault();
		
		var _this = $(this);
		var menu = $('#quicklinks');
		menu.addClass( 'open' );
		menu.attr( 'aria-expanded', 'true' );
		
		// Remove the classes when tabbing out of the submenu, open when tabbing in
		$('.X-quickLinks').nextUntil('a, input, button').on( 'focusin.quicklinks', closeQuickLinks );
		$('.X-quickLinks').prevUntil('a, input, button').on( 'focusin.quicklinks', closeQuickLinks );
	}
	
	function closeQuickLinks(e) {
		e.preventDefault();
		
		var menu = $('#quicklinks');
		menu.removeClass('open');
		menu.attr( 'aria-expanded', 'false' );
		
		$(this).off('focusin.quicklinks');
	}
	
	function initMainNavigation( container ) {
		
		// Add dropdown toggle that displays child menu items.
		var dropdownToggle = $( '<button />', { 'class': 'dropdown-toggle', 'aria-expanded': false })
			.append( twentyseventeenScreenReaderText.icon )
			.append( $( '<span />', { 'class': 'screen-reader-text', text: twentyseventeenScreenReaderText.expand }) );
                // CHANGE THE LOCATION OF THE DROP DOWN TOGGLE from outside the <a> tag to within the <a> tag. This was done
                // because the tap-to-expand function works on the <a> tag. Hence, the toggle needs to be within the <a> tag and not outside it.
		container.find( '.menu-item-has-children > a > span, .page_item_has_children > a > span' ).append( dropdownToggle );

		// Set the active submenu dropdown toggle button initial state.
		var topMenuItems = container.find( '.menu > .menu-item-has-children' );
		topMenuItems.attr( 'aria-expanded', 'false' );
		
		container.find( '#top-menu > .menu-item-has-children > a' ).click(openMainNavigationSubmenu);
		container.find( '#top-menu > .menu-item-has-children' ).focusin(openMainNavigationSubmenu);
	}

	initMainNavigation( $( '.main-navigation' ) );
	
	$( '.X-quickLinks a.menu-title' ).click(openQuickLinks);
	$( '.X-quickLinks' ).focusin(openQuickLinks);

	masthead       = $( '.navigation-top' );
	menuToggle     = masthead.find( '.menu-toggle' );
	siteNavContain = masthead.find( '.main-navigation' );
	siteNavigation = masthead.find( '.main-navigation > div > ul' );

	// Enable menuToggle.
	(function() {

		// Return early if menuToggle is missing.
		if ( ! menuToggle.length ) {
			return;
		}

		// Add an initial value for the attribute.
		menuToggle.attr( 'aria-expanded', 'false' );

		menuToggle.on( 'click.twentyseventeen', function() {
			siteNavContain.toggleClass( 'toggled-on' );

			$( this ).attr( 'aria-expanded', siteNavContain.hasClass( 'toggled-on' ) );
		});
	})();

	// Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
	(function() {
		if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
			return;
		}

		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen() {
			if ( 'none' === $( '.menu-toggle' ).css( 'display' ) ) {

				$( document.body ).on( 'touchstart.twentyseventeen', function( e ) {
					if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
						$( '.main-navigation li' ).removeClass( 'focus' );
					}
				});

				siteNavigation.find( '.menu-item-has-children > a, .page_item_has_children > a' )
					.on( 'touchstart.twentyseventeen', function( e ) {
						var el = $( this ).parent( 'li' );

						if ( ! el.hasClass( 'focus' ) ) {
							e.preventDefault();
							el.toggleClass( 'focus' );
							el.siblings( '.focus' ).removeClass( 'focus' );
						}
					});

			} else {
				siteNavigation.find( '.menu-item-has-children > a > span, .page_item_has_children > a > span' ).unbind( 'touchstart.twentyseventeen' );
			}
		}

		if ( 'ontouchstart' in window ) {
			$( window ).on( 'resize.twentyseventeen', toggleFocusClassTouchScreen );
			toggleFocusClassTouchScreen();
		}

		siteNavigation.find( 'a' ).on( 'focus.twentyseventeen blur.twentyseventeen', function() {
			$( this ).parents( '.menu-item, .page_item' ).toggleClass( 'focus' );
		});
	})();
})( jQuery );
