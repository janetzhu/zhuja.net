// Cache selectors
var lastId,
    menu = $(".nav"),
    downBtn = $(".down-btn"),
    menuHeight = menu.outerHeight(),
    // All list items
    menuItems = menu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top - menuHeight + 1;

  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Animate pressing down button link
downBtn.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = $(href).offset().top - menuHeight + 1;

  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});


// Bind to scroll
$(window).scroll(function(){
  // Get container scroll position
  var fromTop = $(this).scrollTop() + menuHeight;

  // Get id of current scroll item
  var cur = scrollItems.map(function(){
    if ($(this).offset().top < fromTop)
      return this;
  });

  // Get the id of the current element
  cur = cur[cur.length - 1];
  var id = cur && cur.length ? cur[0].id : "";

  // Change background of navbar to and from transparent
  if(id !== "")
    $(".navbar-inverse").css("background-color", "#4d363c");
  if(id === "")
    $(".navbar-inverse").css("background-color", "rgba(255,255,255,0)");

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#" + id + "]").parent().addClass("active");
   }                   
});


//remove map overlay on click

var mapOverlay = $(".overlay");

mapOverlay.click(function(e){
  $(this).text("");
  $(this).css("pointer-events", "none");
});