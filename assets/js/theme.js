


/* INDEX */

// PROTOTYPE: SlideShow 
   // METHOD: setSize
   // METHOD: setupSlides
   // METHOD: setupControls
   // METHOD: moveLeft
   // METHOD: moveRight
   // METHOD: changeImage
   // METHOD: addKeyControls

// PROTOTYPE: SlideShow extends SlideShow
   // METHOD: changeImage

// PROTOTYPE: Boxes 
   // METHOD: move

// PROTOTYPE: Boxes_Menu extends Boxes


/*------PROTOTYPE Slides------*/
// Implements a slideshow
function SlideShow(ID) {
   // CHECKS
   if(ID == null){
      console.error("Slides Module: Missing ID."); 
      return 0;
   }

   // Check if a string was passed
   if(typeof(ID) == "string"){
      this.ID = ID;
      this.mainDiv=document.getElementById(this.ID); 
      if(this.mainDiv == null){
         console.error("Slides Module: Could not find: " + this.ID); 
         return 0;
      }
    }
    else{
    // Check if an object was passed 
      this.mainDiv=ID;
      if(document.body.contains(ID)){
         console.error("Slides Module: Could not find Slide module in document."); 
         return 0;
      }
   }

   // Variables
   this.urlLength=0;               // Number of slide image URLs
   this.position = 0;              // Current slide position  
   this.previousSlide = 0;         // Previous slide position 
   this.slideShowStarted=false;    // Track if slideshow was started
   this.url = new Array();         // Store slide image URLs here 
   this.imageW = new Array();         // Store slide image width here 
   this.imageH = new Array();         // Store slide image height here 
   this.slideDesc = new Array();   // Store slide description here  
   this.magnifyObjs = new Array(); // Store slide image Magnification Objects here

   // Selectors
   this.slideDivs = this.mainDiv.getElementsByClassName('slide');
   this.slideDescDivs = this.mainDiv.getElementsByClassName('slideDesc'); 
   this.images = this.mainDiv.getElementsByTagName("img");

    this.left = this.mainDiv.getElementsByClassName('prev')[0];
    this.right = this.mainDiv.getElementsByClassName('next')[0];

   // STRUCTURE of Divs in document
   //  __SlideShow__
   // |     --slide       |
   // |       --slideDesc | 

    // Check if STRUCTURE is present in document
   //if(this.slideDivs.length==0 || this.slideDescDivs.length==0 || this.images.length==0){
   //   console.error("Slides Module: Detected missing structures in document. Refer to module for structure definition."); 
   //   return 0;
  // }

   // Set Defaults
   this.scrollLeft=0; 
   this.scrollTop=0; 

   // Trigger the dynamicResize() method whenever slides need to be re-sized
   // CSS for slideDiv is set in changeImage()  
   // Execute these once the prototype is created:

   var self=this; // 'this' is not preserved in callbacks, so send a copy to the callback functions

   this.moveSlides = setInterval(function(){ self.moveRight() }, 5000);

   this.left.onclick = function() {self.moveLeft();self.addKeyControls(self);  clearInterval(self.moveSlides);};
   this.right.onclick = function() {self.moveRight();self.addKeyControls(self);  clearInterval(self.moveSlides);};
   this.setupSlides();

   // All is well!
   console.log('Slides Module instantiated with ID:'+ID);
};

   // METHOD: onLoad()
   SlideShow.prototype.onLoad = function() {
      this.getImageDim.bind(this);
      this.dynamicResize.bind(this);      
   }

  // METHOD: setupControls()
   SlideShow.prototype.setupControls = function() {



      console.log("Setting up controls for " + this.ID); 
   };  

   // METHOD: moveLeft()
   SlideShow.prototype.moveLeft = function() { 
      if (this.position==0){  
         this.position=this.numSlides;
      }
      else{
         this.position--;
      }
     this.changeImage(this.position);

   };

   // METHOD: moveRight()
   SlideShow.prototype.moveRight = function() {
      if (this.position==this.numSlides){
         this.position=0;
      }
      else{      
         this.position++;
      }

      this.changeImage(this.position);
   };

   // METHOD: addKeyControls(self)
   SlideShow.prototype.addKeyControls = function(self) {
      document.onkeydown = function(e) {
         e = e || window.event;
         if (e.keyCode == '38') { // up arrow       
         }
         else if (e.keyCode == '40') { // down arrow
         }
         else if (e.keyCode == '37') { // left arrow      
            self.moveLeft(); 
         }
         else if (e.keyCode == '39') {       
            self.moveRight(); // right arrow
         }
      }
   };

   // METHOD: changeImage()
   SlideShow.prototype.changeImage = function() {    
     // Show Image         
         this.slideDivs[this.previousSlide].classList.add("fadeOut");
         this.slideDivs[this.previousSlide].style.display="none"; // default 
         this.previousSlide=this.position;
         this.slideDivs[this.position].classList.add("fadeIn");
         this.slideDivs[this.position].style.display="block";
   };


   // METHOD: setupSlides()
   SlideShow.prototype.setupSlides = function() {   
      // Get Image URLs
      for (var i = 0; i < this.images.length; i++){ 
         this.url[i]= this.images[i].src;  
         //this.magnifyObjs[i] = new Magnify(this.images[i]);  
      }  
      // Hide slide descriptions
      for (var i = 0; i < this.slideDivs.length; i++){ 
         this.slideDivs[i].style.display="none";
      } 
      this.numSlides=(this.slideDivs.length-1);
      this.changeImage(this.position); // Setup first slide 
      console.log("Set up slides for " + this.ID); 
   };

  // Module name is the class name of the div
function findModules(ModuleName){
   this.ModuleName=ModuleName;
   // Find Module in document (modules are designated by class name)
   var e = document.getElementsByClassName(ModuleName); // returns an array
   if(e.length==0){
      console.log("Could not find module: " + this.ModuleName + " in document."); 
      return false;
    }
   for (var i = 0; i < e.length; i++){ 
      // Now get the unique instances of each module,
      // that is, get the ID of the div
      ModuleID=e[i].getAttribute("id"); 
      if(ModuleID=='' || ModuleID==null)
         console.error("Missing/wrong ID for Module:" + this.ModuleName); 

      // If a module was found, set it up
      if (ModuleID!=''){
         switch(ModuleName) {
            case 'slides': 
              var a = new SlideShow(ModuleID); 
            break;
            case 'SlideShowCover': 
              var b = new SlideShowCover(ModuleID); 
            break;
            case 'MenuTopLeft': 
               var d = new MenuTopLeft(ModuleID); 
            break;
            case 'MenuTopRight': 
               var e = new MenuTopRight(ModuleID); 
            break;
            case 'Boxes_Menu': 
               var f = new Boxes_Menu(ModuleID); 
            break;
            case 'Drag': 
               var g = new Drag(ModuleID); 
            break;
            case 'Magnify': 
               var h = new Magnify(ModuleID); 
            break;
            default:
               console.log("Could not any matching module for:" + this.ModuleName); 
         }        
      }
      else
         console.log("Could not find ID for Module:" + this.ModuleName); 
   } 
}


// SCRIPTS STARTS HERE: Module name is the class name of the div. Find modules on the page.
findModules('slides');
//findModules('SlideShowCover');


      var e = document.getElementsByClassName("X-tile");
      var sublist;
      var self=this; 
      for (var k = 0; k < e.length; k++) {     
          const mq = window.matchMedia( "(max-width: 768px)" ); 
         if (mq.matches) {
           // ONCLICK: Set up click event: toggle sublist 
         e[k].getElementsByClassName("X-tile-img")[0].onclick = function(e) {     
            //this.parentNode.getElementsByClassName('X-tile-desc')[0].classList.toggle('X-tile-desc-show'); 

         }

         } 
      }

/* EDGE DETECTION */

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



/* Menu System */
      var el = document.getElementsByClassName('menuBox')[0];
      clickerFn = function(e) {     
 
      var nav = document.getElementsByClassName('navigation-top')[0];  
      var rowThree = document.getElementsByClassName('CLAS-menu')[0];  
      rowThree.classList.toggle('showMenu');    
      var menuIcon = document.getElementById('icon-menu');
      if (menuIcon.getElementsByTagName("use")[0].getAttribute('xlink:href') != '#icon-close' ) {
         //Global variable to keep track of how far the document has been scrolled
         var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
         // Figure out how far down the page has been scrolled by the user
         var doc = document.documentElement;
         //var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
         window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
         menuIcon.classList.toggle('icon-close');
         menuIcon.classList.toggle('icon-menu');
         var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
         XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
         //document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
        // nav.setAttribute("position", "relative");
      }
      else {
         menuIcon.classList.toggle('icon-menu');
         menuIcon.classList.toggle('icon-close');

          var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");        
         //document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
         // Scroll back to where the user was
         window.scrollTo(0, window.toplocation);  
         // Close any open submenus
         var g = document.getElementsByClassName("menu-item-has-children");
         for (var k = 0; k < g.length; k++) {  
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              g[k].classList.remove('open');   
               }
         }
  
      }

   };
el.addEventListener('click', clickerFn);  

/* Drop Down Menu System */
      var g = document.getElementsByClassName("menu-item-has-children");
      for (var k = 0; k < g.length; k++) {   
       //ONCLICK
         g[k].getElementsByTagName("a")[0].onclick = function(e) {
           // e.preventDefault();
           // e.stopPropagation();   
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              this.parentNode.classList.toggle('open');     
               }
            }//end mq
      }
  
/* Menu System */
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
         //var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
         window.toplocation = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
         menuIcon.classList.toggle('icon-close');
         menuIcon.classList.toggle('icon-menu');
         var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
         XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-close");
         document.getElementsByTagName("body")[0].classList.add('fixedPosition'); 
        // nav.setAttribute("position", "relative");
      }
      else {
         menuIcon.classList.toggle('icon-menu');
         menuIcon.classList.toggle('icon-close');

          var XmenuBox = document.getElementsByClassName("menuBox")[0]; 
           XmenuBox.classList.add('show-menuBox'); 
         menuIcon.getElementsByTagName("use")[0].setAttribute("xlink:href", "#icon-fivelines");        
         document.getElementsByTagName("body")[0].classList.remove('fixedPosition');
         // Scroll back to where the user was
         window.scrollTo(0, window.toplocation);  
         // Close any open submenus
         var g = document.getElementsByClassName("menu-item-has-children");
         for (var k = 0; k < g.length; k++) {  
            const mq = window.matchMedia( "(max-width: 1024px)" ); 
            if (mq.matches) {            
              g[k].classList.remove('open');   
               }
         }
  
      }

   };
el.addEventListener('click', clickerFn);  




/* Footer Menu */
      var g = document.getElementsByClassName("footer-menu");
      for (var k = 0; k < g.length; k++) {    
       //ONCLICK
         g[k].onclick = function(e) { 
            const mq = window.matchMedia( "(max-width: 900px)" ); 
            if (mq.matches) {            
               this.classList.toggle('open');  
               if(this.getElementsByTagName('ul')[0].style.display == 'block'){
                  this.getElementsByTagName("svg")[0].classList.remove('icon-caret-right'); 
                  e.preventDefault();
                  // this.getElementsByTagName('ul')[0].style.display = 'none'; 
                  e.stopPropagation(); 
                }  
               else{
                  this.getElementsByTagName("svg")[0].classList.add('icon-caret-right'); 
                  //this.getElementsByTagName('ul')[0].style.display = 'block';
                  this.getElementsByTagName('ul')[0].classList.add('animate'); 
                  this.getElementsByTagName('ul')[0].classList.add('open'); 
               }    
            } // if (mq.matches) { 
         }//end mq
      }

/* Search Form */
   var searchBox = document.querySelector(".X-searchTrigger");
   searchBox.onclick = function(e) { 
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
      var searchField = document.querySelector(".X-search-form-container .search-form .search-field");
      searchField.focus();
      searchField.select();   
   };

