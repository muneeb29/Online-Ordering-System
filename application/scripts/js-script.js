
mybutton = document.getElementById("topBN");

window.onscroll = function() {Functionscroll()};

function Functionscroll() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function Scrolltop() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}