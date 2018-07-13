/* ---- particles.js config ---- */

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 40,
      "density": {
        "enable": true,
        "value_area": 900
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      }
    },
    "opacity": {
      "value": 0.3,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 0.3,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 20,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.3,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "window",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

/* SCROLL TO */
$(".goto-contact").click(function() {
    $('html,body').animate({
        scrollTop: $("#contact").offset().top},
        'slow');
});
$(".goto-promises").click(function() {
    $('html,body').animate({
        scrollTop: $("#promises").offset().top},
        'slow');
});
$(".goto-portfolio").click(function() {
    $('html,body').animate({
        scrollTop: $("#portfolio").offset().top},
        'slow');
});


// button no-project

$('#noproject').click(function() {
    window.location.href = "https://www.facebook.com/MichalIlenda/";
});


/* VALIDATE FORM */

function validateForm() {
    var fname = document.forms["contact-form"]["fname"].value;
    var femail = document.forms["contact-form"]["femail"].value;
    var ftextmessage = document.forms["contact-form"]["ftextmessage"].value;
    
    if ((fname == "" || !isNaN(fname)) &&
        (femail == "" || !isNaN(femail)) &&
        (ftextmessage == "" || !isNaN(ftextmessage)))
    {
        $("#name").addClass('input-error');
        $("#name-label").addClass('label-error');
        
        $("#email").addClass('input-error');
        $("#email-label").addClass('label-error');
        
        $("#message").addClass('input-error');
        $("#message-label").addClass('label-error');
        
        return false;
    }
    
    else if ((fname == "" || !isNaN(fname)) &&
        (femail == "" || !isNaN(femail)))
    {
        $("#name").addClass('input-error');
        $("#name-label").addClass('label-error');
        
        $("#email").addClass('input-error');
        $("#email-label").addClass('label-error');
        
        $("#message").removeClass('input-error');
        $("#message-label").removeClass('label-error');
        
        return false;
    }
    
    else if ((fname == "" || !isNaN(fname)) &&
        (ftextmessage == "" || !isNaN(ftextmessage)))
    {
        $("#name").addClass('input-error');
        $("#name-label").addClass('label-error');
        
        $("#message").addClass('input-error');
        $("#message-label").addClass('label-error');
        
        $("#email").removeClass('input-error');
        $("#email-label").removeClass('label-error');
        
        return false;
    }
    
    else if ((femail == "" || !isNaN(femail)) &&
        (ftextmessage == "" || !isNaN(ftextmessage)))
    {
        $("#email").addClass('input-error');
        $("#email-label").addClass('label-error');
        
        $("#message").addClass('input-error');
        $("#message-label").addClass('label-error');
        
        $("#name").removeClass('input-error');
        $("#name-label").removeClass('label-error');
        
        return false;
    }
    
    
    else if (fname == "" || !isNaN(fname)) {
        
        $("#name").addClass('input-error');
        $("#name-label").addClass('label-error');
        
        $("#email").removeClass('input-error');
        $("#email-label").removeClass('label-error');
        
        $("#message").removeClass('input-error');
        $("#message-label").removeClass('label-error');
        
        return false;
    }
    
    else if (femail == "" || !isNaN(femail)) {
        
        $("#email").addClass('input-error');
        $("#email-label").addClass('label-error');
        
        $("#name").removeClass('input-error');
        $("#name-label").removeClass('label-error');
        
        $("#message").removeClass('input-error');
        $("#message-label").removeClass('label-error');
        
        return false;
    }
    
    else if (ftextmessage == "" || !isNaN(ftextmessage)) {
        
        $("#message").addClass('input-error');
        $("#message-label").addClass('label-error');
        
        $("#email").removeClass('input-error');
        $("#email-label").removeClass('label-error');
        
        $("#name").removeClass('input-error');
        $("#name-label").removeClass('label-error');
        
        return false;
    }
}

/* SLIDER */

$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
    $(".dot").addClass('active');
},  4000);
