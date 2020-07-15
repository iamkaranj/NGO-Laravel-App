document
  .querySelector(".background-toggle")
  .addEventListener("click", function(event) {
    event.preventDefault();
  });

if (localStorage.getItem("background") != null) {
  getColour = localStorage.background;
  document.body.className = getColour;
}

function toggleDarkLight() {
  var body = document.getElementById("body");
  var currentClass = body.className;

  if (currentClass === "light") {
    currentClass = "dark";
  } else {
    currentClass = "light";
  }

  setColour = currentClass;
  body.className = setColour;
  localStorage.setItem("background", setColour);
}

function myFunction() {}

window.onscroll = function() {
  var header = document.querySelector("#header-scroll");

  if (window.pageYOffset >= 1) {
    header.classList.add("is-sticky");
  } else {
    header.classList.remove("is-sticky");
  }
};

// dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
// of the mouse, set with a mousemove event listener below
var dots = [],
  mouse = {
    x: 0,
    y: 0
  };

// The Dot object used to scaffold the dots
var Dot = function() {
  this.x = 0;
  this.y = 0;
  this.node = (function() {
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  })();
};
// The Dot.prototype.draw() method sets the position of
// the object's <div> node
Dot.prototype.draw = function() {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 1; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
  // draw() is called.
  var x = mouse.x,
    y = mouse.y;

  // This loop is where all the 90s magic happens
  dots.forEach(function(dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];

    dot.x = x;
    dot.y = y;
    dot.draw();
    x += (nextDot.x - dot.x) * 0.0;
    y += (nextDot.y - dot.y) * 0.0;
  });
}

["wheel", "mousemove"].forEach(function(e) {
  window.addEventListener(e, mouseMoveHandler);
});

function mouseMoveHandler(e) {
  //event.preventDefault();
  mouse.x = event.pageX;
  mouse.y = event.pageY;
}

var trailtrack = document.querySelector(".trail");

window.onmousemove = function() {
  trailtrack.classList.remove("no-transition");
};

window.onwheel = function() {
  trailtrack.classList.add("no-transition");
};

// animate() calls draw() then recursively calls itself
// everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();

//SELECT ALL A TAGS
var els = document.querySelectorAll(
  "a, button, [contenteditable], input[type='submit'],.btn"
);
for (var i = els.length; i--; ) {
  els[i].addEventListener("mouseover", function() {
    trailtrack.classList.add("mouseover");
  });

  els[i].addEventListener("mouseout", function() {
    trailtrack.classList.remove("mouseover");
  });
}

$(document).ready(function() {


  $(".continue-button a").on("click", function() {
    $(this).closest('.mc_embed_signup_scroll').find(".first-step").removeClass("show-step");
    $(this).closest('.mc_embed_signup_scroll').find(".second-step").addClass("show-step");
  });

  $(".text-edit").on("click", function() {
    $(this).closest('.mc_embed_signup_scroll').find(".second-step").removeClass("show-step");
    $(this).closest('.mc_embed_signup_scroll').find(".first-step").addClass("show-step");
  });


  $("[contenteditable]").hover(function() {
    if (!$("[contenteditable]").is(":focus")) {
    $(this).focus();
    }
  });

  $("[contenteditable]").on("input", function() {
    $(this).trigger("change");
    map_field = $(this).text();
    $(this)
      .parent()
      .find("input, textarea")
      .val(map_field);
  });

  $(".scroll-to").click(function(e) {
    e.preventDefault;
    $("html, body").animate(
      {
        scrollTop: $(".get-started").offset().top
      },
      800
    );
  });

  // MAILCHIMP FORMS

  $(".form-ideas").ajaxChimp({
    url:
      "https://cregital.us9.list-manage.com/subscribe/post?u=6ff8bce48e48b58c84cdb5336&amp;id=3d6639b2e9"
  });

   $(".form-attend").ajaxChimp({
    url:
      "https://cregital.us9.list-manage.com/subscribe/post?u=6ff8bce48e48b58c84cdb5336&amp;id=ecd9547a19"
  });

  $(".idea-span").on("input", function() {
    if ($(this).html().length > 0) {
      $(this).closest('.first-step').find(".continue-button a").removeClass('disabled-button');
    } else {
      $(this).closest('.first-step').find(".continue-button a").addClass('disabled-button');
    }

});

  $("[contenteditable]").click(function() {
      $("#header-scroll").addClass("is-sticky"); 
    });


setTimeout(
  function reveal(){
      $('body').css('opacity', '1').scrollTop(0);
      $(window).scrollTop(0);
  } ,100);

$(window).on('scroll', function() {
  $(".animation").each(function() {
    if (isScrolledIntoView($(this))) {
      $(this).addClass("animateUp");
    }
  });
});

function isScrolledIntoView(elem) {

    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top - 75;
    var elemBottom = elemTop + $(elem).height();

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

});

