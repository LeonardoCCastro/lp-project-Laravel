jQuery(document).ready(function () {
  falldown();
});

function falldown() {
  $("#falldown6").animate({ height: "100%" });
  $("#falldown5").delay(100).animate({ height: "100%" }, 300);
  $("#falldown4").delay(200).animate({ height: "100%" }, 300);
  $("#falldown3").delay(300).animate({ height: "100%" }, 300);
  $("#falldown2").delay(400).animate({ height: "100%" }, 300);
  $("#falldown1").delay(500).animate({ height: "100%" }, 300);
  $("#falldown-background").delay(500).animate({ height: "100%" }, 300);
  $("#falldown").delay(1000).fadeOut();
}

function falldownIn() {
  if ($('#falldown-in-text').hasClass('hidden')) {
    $('#falldown-in-text').removeClass('hidden');
  }
  $("#falldown-in").css({ height: "100%" });
  $("#falldown-in").show();
  $("#falldown-in6").animate({ height: "100%" });
  $("#falldown-in5").delay(100).animate({ height: "100%" }, 300);
  $("#falldown-in4").delay(200).animate({ height: "100%" }, 300);
  $("#falldown-in3").delay(300).animate({ height: "100%" }, 300);
  $("#falldown-in2").delay(400).animate({ height: "100%" }, 300);
  $("#falldown-in1").delay(500).animate({ height: "100%" }, 300);
  $("#falldown-in").delay(1000).fadeOut(300, resetFalldownIn);
}

function resetFalldownIn() {
  if (!$('#falldown-in-text').hasClass('hidden')) {
    $('#falldown-in-text').addClass('hidden');
  }
  $("#falldown-in").css({ height: "100%" });
  $("#falldown-in6").css({ height: "0%" });
  $("#falldown-in5").css({ height: "0%" });
  $("#falldown-in4").css({ height: "0%" });
  $("#falldown-in3").css({ height: "0%" });
  $("#falldown-in2").css({ height: "0%" });
  $("#falldown-in1").css({ height: "0%" });
}

var myFullpage = new fullpage("#fullpage", {
  controlArrows: false,
  verticalCentered: false,
  scrollOverflow: false,
  fitToSection: true,
  css3: true,
  onLeave: function (index, nextIndex, direction) {
    falldownIn();
  },
});

function nextPage(index) {
  myFullpage.moveTo(index);
}

window.nextPage = nextPage;

VanillaTilt.init(document.getElementById("card-1"), {
  max: 0.1,
  scale: 1.1,
  reset: true, 
  speed: 400,
  glare: false,
});

VanillaTilt.init(document.getElementById("card-2"), {
  max: 0.1,
  scale: 1.1,
  reset: true,
  speed: 400,
  glare: false,
});

VanillaTilt.init(document.getElementById("card-3"), {
  max: 0.1,
  scale: 1.1,
  reset: true,
  speed: 400,
  glare: false,
});

VanillaTilt.init(document.getElementById("card-4"), {
  max: 0.1,
  scale: 1.1,
  reset: true,
  speed: 400,
  glare: false,
});

Fancybox.bind('[data-fancybox="gallery"]', {});

function tel_format(v) {
  v = String(v).replace(/\D/g, ""); // Converte para string e remove tudo o que não é dígito
  v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); // Coloca parênteses em volta dos dois primeiros dígitos
  v = v.replace(/(\d)(\d{4})$/, "$1-$2"); // Coloca hífen entre o quarto e o quinto dígitos
  return v;
}

window.tel_format = tel_format;
  