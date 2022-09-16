<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./plantationstyle.css">
<style>
body {
    font-family : Helvetica, sans-serif;
    margin: 0;  
  }

  h2 {text-align: center;}
  .header {
      padding: 60px;
      text-align: center;
      background: rgb(80, 16, 35);
      color: white;
      font-size: 35px;
  }

  footer {
    text-align: center;
    padding: 3px;
    background-color: green;
    color: black;
  }

  table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      tr:nth-child(even) {
        background-color: #dddddd;
      }
  
      .container {
    position: relative;
    font-family: Arial;
  }
  
  
  * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
  
  </style>
</head>
<body>
<div class="header">
  <h1>Tea Plantations in Sri Lanka</h1>
</div>

<div class = "content" >
<img src="./hom1/pl1.jpg"  style="width: 100%" >
</div>
<h2>Tea Plantation</h2>
<p>Sri Lanka (formerly called Ceylon) has a climate and varied elevation that allows for the production of both Camellia sinensis var. assamica and Camellia sinensis var. sinensis, with the assamica varietal holding the majority of production. Tea production is one of the main sources of foreign exchange for Sri Lanka, and accounts for 2% of GDP, contributing over US$1.3 billion in 2021 to the economy of Sri Lanka.[1] It employs, directly or indirectly, over 1 million people, and in 1995 directly employed 215,338 on tea plantations and estates. In addition, tea planting by smallholders is the source of employment for thousands whilst it is also the main form of livelihoods for tens of thousands of families. Sri Lanka is the world's fourth-largest producer of tea. In 1995, it was the world's leading exporter of tea (rather than producer), with 23% of the total world export, and Sri Lanka ranked second on tea export earnings in 2020 after China. The highest production of 340 million kg was recorded in 2013, while the production in 2014 was slightly reduced to 338 million kg</p>
<p>The humidity, cool temperatures, and rainfall of the country's central highlands provide a climate that favors the production of high-quality tea. On the other hand, tea produced in low-elevation areas such as Matara, Galle and Ratanapura districts with high rainfall and warm temperature has high level of astringent properties. The tea biomass production itself is higher in low-elevation areas. Such tea is popular in the Middle East. Sri Lanka produces mostly orthodox black teas but also produces CTC, white and green teas. The two types of green tea produced are the gunpowder type and sencha.[4] The industry was introduced to the country in 1867 by James Taylor, a British planter who arrived in 1852.Tea planting under smallholder conditions has become popular in the 1970s. Most of Sri Lanka's export market is in the Middle East and Europe but there are also plenty of bidders worldwide for its speciality high-country grown Nuwara Eliya teas</p>

<h2>Sites of Tea Plantations</h2>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./hom1/nuw.jpg" style="width:100%">
  <div class="text"><b>Nuwara Eliya</b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./hom1/e.jpg" style="width:100%">
  <div class="text"><b>Ella</b></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./hom1/hap.jpg" style="width:100%">
  <div class="text"><b>Haputale</b></div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<h2> <i>Sri Lanka Tea Exports </i></h2>

<table>
  <tr>
    <th>Statistics</th>
    <th>2017</th>
    <th>2018</th>
    <th>2019</th>
    <th>2020</th>
    <th>2021</th>
  </tr>
  <tr>
    <td>Bulk</td>
    <td>125,629</td>
    <td>122,428</td>
    <td>122,844</td>
    <td>118,251</td>
    <td>125,388</td>
    
  </tr>
  <tr>
  <td>Tea in Packets</td>
  <td>134,509</td>
  <td>131,256</td>
  <td>139,080</td>
  <td>118,176</td>
  <td>128,344</td>                                 
   
  </tr>
  <tr>
    <td>Tea Bags</td>
    <td>2,572</td>
    <td>2,624</td>
    <td>2,601</td>
    <td>2,642</td>
    <td>2,023</td>
  </tr>
  <tr>
    <td>Instant Tea</td>
    <td>5,023</td>
    <td>4,620</td>
    <td>4,749</td>
    <td>4,126</td>
    <td>4,587</td>
  </tr>

  <tr>
    <td>Green Tea</td>
    <td>2,122</td>
    <td>2,481</td>
    <td>3,071</td>
    <td>2,843</td>
    <td>3,032</td>
    
  </tr>

  <tr>
    <td>Total</td>
    <td>288,984</td>
    <td>282,363</td>
    <td>292,657</td>
    <td>286,016</td>
    <td>265,569</td>
    
  </tr>
</table>
<br>
<footer>
<div class="footer-copyright text-center py-3">© 2022 Copyright: 
    <a href="https://www.srilankateaboard.lk/">Visit for more</a>
  </div>
</footer>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1800); // Change image every 2 seconds
}
</script>
</body>
</html>

