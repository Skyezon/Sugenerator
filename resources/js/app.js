const bootstrap = require('./bootstrap');
const Parallax = require('parallax-js');
const jquery = require('jquery');
const fold = require('./fold');
// const modernizr = require("modernizr");


var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);


window.addEventListener("load", function() {
    var load_screen = document.getElementById("load");
    setTimeout(function() {
      load_screen.classList.add('hilang');
    }, 0);
    setTimeout(function(){
        load_screen.style.display = 'none';
    },1000);
  });
