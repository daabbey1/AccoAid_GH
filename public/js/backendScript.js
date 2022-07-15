// Platform image hover
var test = document.getElementById("region-image");
var txt1 = document.getElementById('region-img-txt1')
var txt2 = document.getElementById('region-img-txt2')
var bigBox = document.getElementById('region-box')
var region_bcg_txt1= document.getElementById('region-bcg-txt1')
var region_bcg_txt2= document.getElementById('region-bcg-txt2')
var HoverOutBox = document.getElementById('region-box-hover')


function waHover() {
  txt1.style.display = 'none';
  txt2.style.display = 'none';
  region_bcg_txt1.style.display = "block";
  region_bcg_txt2.style.display = "block";
  bigBox.style.backgroundColor= "#da2828c8";
  // bigBox.style.backgroundColor = "#ff6347";
}

function waHoverOut() {
  region_bcg_txt1.style.display = "none";
  region_bcg_txt2.style.display = "none";
  txt1.style.display = 'block';
  txt2.style.display = 'inline';
  bigBox.style.backgroundColor= "#da282896";
}

function tamaleHover() {
  txt1.style.display = 'none';
  txt2.style.display = 'none';
  region_bcg_txt1.style.display = "block";
  region_bcg_txt2.style.display = "block";
  bigBox.style.backgroundColor= "#da2828c8";
  // bigBox.style.backgroundColor = "#ff6347";
}

function tamaleHoverOut() {
  region_bcg_txt1.style.display = "none";
  region_bcg_txt2.style.display = "none";
  txt1.style.display = 'block';
  txt2.style.display = 'inline';
  bigBox.style.backgroundColor= "#da282896";
}

// var test = document.getElementById("region-image");
// var txt1 = document.getElementById('region-img-txt1')
// var txt2 = document.getElementById('region-img-txt2')

// test.addEventListener("mouseover", function(  ) {
//   txt1.style.display = 'none';
//   txt2.style.display = 'none';
// });