// Theme Custom JS

var e = document.getElementsByClassName("X-tile");
var sublist;
var self=this;
	for (var k = 0; k < e.length; k++) {
	var mq = window.matchMedia( "(max-width: 768px)" );
	if (mq.matches) {
		// ONCLICK: Set up click event: toggle sublist
		e[k].getElementsByClassName("X-tile-img")[0].onclick = function(e) {
			//this.parentNode.getElementsByClassName('X-tile-desc')[0].classList.toggle('X-tile-desc-show');
		}

	}
}

// EDGE DETECTION
var g = document.getElementsByClassName("menu-item-has-children");

for (var k = 0; k < g.length; k++) {
 //ONCLICK
 g[k].onmouseover = function(e) {
		var cStyle = document.body.currentStyle||window.getComputedStyle(document.body, "");
	// Check the overflow and overflowY properties for "auto" and "visible" values
			var elm = this.getElementsByTagName("ul")[0];
			var l = elm.offsetWidth;
			var w = this.offsetLeft;

			var docW = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

			var isEntirelyVisible = (l + w <= docW);

	if (!isEntirelyVisible) {
			elm.classList.add('X-menu-edge');

	} else {
			elm.classList.remove('X-menu-edge');
	}
 }
}


// Drop Down Menu System
function toggleDropDown(e) {
	// e.preventDefault();
	// e.stopPropagation();
	var mq = window.matchMedia( "(max-width: 1024px)" );
	if (mq.matches) {
		this.parentNode.classList.toggle('open');
		var isExpanded = (this.parentNode.getAttribute('aria-expanded') == 'true');
		this.parentNode.setAttribute('aria-expanded', ( isExpanded )? 'false':'true');
	}
}//end mq

var g = document.getElementsByClassName("menu-item-has-children");
for (var k = 0; k < g.length; k++) {
	//ONCLICK
	g[k].getElementsByTagName("a")[0].addEventListener('click', toggleDropDown);
}

// Menu System
var el = document.getElementsByClassName('menuBox')[0];

clickerFn = function(e) {
	var nav = document.getElementsByClassName('navigation-top')[0];
	var rowThree = document.getElementsByClassName('X-menu')[0];
	rowThree.classList.toggle('showMenu');
	var menuIcon = document.getElementById('icon-menu');

	if (menuIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-close' ) {

		//Global variable to keep track of how far the document has been scrolled
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

		// Figure out how far down the page has been scrolled by the user
		var doc = document.documentElement;
		window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
		menuIcon.classList.toggle('icon-close');
		menuIcon.classList.toggle('icon-menu');
		var XmenuBox = document.getElementsByClassName("menuBox")[0];
		XmenuBox.classList.add('show-menuBox');
		menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
		document.getElementsByTagName("body")[0].classList.add('fixedPosition');
	}
	else {
		menuIcon.classList.toggle('icon-menu');
		menuIcon.classList.toggle('icon-close');

		var XmenuBox = document.getElementsByClassName("menuBox")[0];
		XmenuBox.classList.remove('show-menuBox');
		menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");
		document.getElementsByTagName("body")[0].classList.remove('fixedPosition');

		// Scroll back to where the user was
		window.scrollTo(0, window.toplocation);

		// Close any open submenus
		var g = document.getElementsByClassName("menu-item-has-children");
		for (var k = 0; k < g.length; k++) {
			var mq = window.matchMedia( "(max-width: 1024px)" );
			if (mq.matches) {
				g[k].classList.remove('open');
			}
		}
	}
};
el.addEventListener('click', clickerFn);

// Footer Menu
function toggleFooterMenu(e) {
	var mq = window.matchMedia( "(max-width: 900px)" );
	if (mq.matches) {
		this.classList.toggle('open');
		if(this.getElementsByTagName('ul')[0].style.display == 'block'){
			this.getElementsByTagName("svg")[0].classList.remove('icon-caret-right');
			e.preventDefault();
			e.stopPropagation();
		}
		else{
			this.getElementsByTagName("svg")[0].classList.add('icon-caret-right');
			this.getElementsByTagName('ul')[0].classList.add('animate');
			this.getElementsByTagName('ul')[0].classList.add('open');
		}
	} // if (mq.matches) {
}//end mq

var g = document.getElementsByClassName("footer-menu");
for (var k = 0; k < g.length; k++) {
	g[k].addEventListener('click', toggleFooterMenu);
}

// Search Form
function showSearch(e) {
	e.preventDefault();
	e.stopPropagation();

	var searchIcon = document.getElementById('icon-search-thin-trigger');
	if (searchIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-search-close' ) {
		document.getElementsByTagName("body")[0].classList.add('fixedPosition');
		searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-close");
		searchIcon.classList.toggle('icon-search-thin-close');
		searchIcon.classList.remove('icon-search-thin-open');
	}
	else {
		document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
		searchIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-search-thin-open");
		searchIcon.classList.remove('icon-search-thin-close');
		searchIcon.classList.toggle('icon-search-thin-open');
	}

	var searchContainer = document.querySelector(".X-search-form-container");
	searchContainer.classList.toggle('show-search-form');
	var searchField = document.querySelector('.X-search-form-container form[role="search"] .search-field');
	searchField.focus();
	searchField.select();
}

var searchBox = document.querySelector(".X-searchTrigger button");
if(searchBox){
   	searchBox.addEventListener('click', showSearch);
}


// Fixes issue where IE was not displaying the search bar
if (!Object.getOwnPropertyDescriptor(Element.prototype,'classList')){
    if (HTMLElement&&Object.getOwnPropertyDescriptor(HTMLElement.prototype,'classList')){
        Object.defineProperty(Element.prototype,'classList',Object.getOwnPropertyDescriptor(HTMLElement.prototype,'classList'));
    }
}
