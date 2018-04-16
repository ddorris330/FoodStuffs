<html>
<title>UTK IE421 Term Project</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<body style="background-image:url('Images/Background.jpg')">

<!-- ***The Food Items link doesn't work if you shrink the page... -->
<!-- Sidebar (hidden by default)-->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left w3-black" style="display:none;z-index:2;width:2%;min-width:300px; opacity: 0.75" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button" style="opacity: 0.0">☰</a>
  <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="index.html#about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
  <a href="add_item.html" onclick="w3_close()" class="w3-bar-item w3-button">Add Food Item</a>
  <a href="review.html" onclick="w3_close()" class="w3-bar-item w3-button">Log In or Sign Up</a>
</nav>




<!-- Top menu *** We need to add the search bar and link it to onclick="w3_open()">Search</div>-->
<!-- Should be the same for all pages -->
<div class="w3-top">
  <div class="w3-black w3-xlarge" style="margin:auto; opacity: 0.65">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-button w3-right w3-text-white" onclick="w3_open()">  <a href="search.html" onclick="w3_close()" class="w3-bar-item w3-button">Search</a></div>
    <div class="w3-center w3-padding-16 w3-text-white">FoodStuffs</div>
  </div>
</div>
 






<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding w3-light-grey" style="max-width:1200px;margin-top:100px;opacity: 0.9">
	
<div class="w3-row-padding w3-padding-8 w3-center"> <br> <br>

	<h1>Thanks for your feedback <?php echo $_POST["name"]; ?>! <br> </h1> </div>
  <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-center w3-button">Return to Home</a>
<hr style="border-color: grey; opacity: 0.5">



  
  


  
  <!-- Footer ***CHANGE THIS b4 presenting -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>Credits</h3>
      <p>We would like to thank Dr. Li!</p>
      <img src="Images/Li.jpg" alt="Dr. Li" style="width:60%">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="https://www.w3schools.com/w3css/default.asp">w3.css</a></p>
    </div>
  



    <div class="w3-third">
      <h3>Top 3 Local Restaurants</h3>
      <ul class="w3-ul w3-hoverable">
          <a href="https://www.balterbeerworks.com/" target="https://www.balterbeerworks.com/"> <li class="w3-padding-16">
          <img src="Images/BalterBeerworks.jpg" class="w3-margin-right w3-margin-right" style="width:150px">
          <span class="w3-large">1. Balter Beerworks</span><br>
          <span>A Lofty taproom with a spacious backyard doles out Mexican and Sourthern-inspired Eats and draft beers</span> </a>
        </li>
          <a href="http://www.sunspotrestaurant.com/" target="http://www.sunspotrestaurant.com/"> <li class="w3-padding-16">
          <img src="Images/Sunspot.jpg" class="w3-margin-right w3-margin-right" style="width:150px">
          <span class="w3-large">2. Sunspot</span><br>
          <span>A Rustic-chic spot for Southwestern, Caribbean and Latin American fare, vegetarian items, draft beers and a variety of wines</span> </a>
        </li> 
                <li class="w3-padding-16">
          <a href="https://calhouns.com/menus-and-locations/tennessee-river/" target="https://calhouns.com/menus-and-locations/tennessee-river/"> <img src="Images/Calhouns.jpg" class="w3-margin-right w3-margin-right" style="width:150px">
          <span class="w3-large">3. Calhoun's</span><br>
          <span>Tennessee BBQ, fresh-ground burgers and sandwiches, plus homestyle sides and craft beers</span> </a>
        </li> 
      </ul>
    </div>




<!--TAGS ***Replace the Google Links with whereever we want to send from the link-->
    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <a href="https://www.google.com/search?source=hp&ei=OMLTWqqwBoGKggfbgK6oCg&q=chicken&oq=chicken&gs_l=psy-ab.3..0i131k1l2j0i46k1j46l2j0l5j0i131k1j0.42936.43850.0.44138.9.7.0.0.0.0.106.488.6j1.7.0....0...1c.1.64.psy-ab..2.7.488.0...0.RAxNJVVpM2s" target="https://www.google.com/search?source=hp&ei=OMLTWqqwBoGKggfbgK6oCg&q=chicken&oq=chicken&gs_l=psy-ab.3..0i131k1l2j0i46k1j46l2j0l5j0i131k1j0.42936.43850.0.44138.9.7.0.0.0.0.106.488.6j1.7.0....0...1c.1.64.psy-ab..2.7.488.0...0.RAxNJVVpM2s"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> </a>

        <a href="https://www.google.com/search?ei=pMLTWuOCItGm_Qb3wZ-IAw&q=beef&oq=beef&gs_l=psy-ab.3..0i67k1l3j0j0i131k1j0j0i131k1j0i67k1l3.21702.23683.0.23886.11.11.0.0.0.0.103.783.9j1.11.0....0...1c.1.64.psy-ab..0.10.771.0..0i46i67k1j46i67k1j0i131i67k1.40.ATxpe9Ho6jo" target="https://www.google.com/search?ei=pMLTWuOCItGm_Qb3wZ-IAw&q=beef&oq=beef&gs_l=psy-ab.3..0i67k1l3j0j0i131k1j0j0i131k1j0i67k1l3.21702.23683.0.23886.11.11.0.0.0.0.103.783.9j1.11.0....0...1c.1.64.psy-ab..0.10.771.0..0i46i67k1j46i67k1j0i131i67k1.40.ATxpe9Ho6jo"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Beef</span> </a>
        
        <a href="https://www.google.com/search?ei=4sLTWtDvIKWq_Qad7LnoCQ&q=fish&oq=fish&gs_l=psy-ab.3..0i67k1l4j0l4j0i131k1l2.7532.8368.0.8624.5.5.0.0.0.0.98.306.4.5.0....0...1c.1.64.psy-ab..0.4.303.0..0i131i67k1.47.TDmGFZezrho" target="https://www.google.com/search?ei=4sLTWtDvIKWq_Qad7LnoCQ&q=fish&oq=fish&gs_l=psy-ab.3..0i67k1l4j0l4j0i131k1l2.7532.8368.0.8624.5.5.0.0.0.0.98.306.4.5.0....0...1c.1.64.psy-ab..0.4.303.0..0i131i67k1.47.TDmGFZezrho"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> </a>

        <a href="https://www.google.com/search?q=vegetables&oq=Veg&aqs=chrome.2.69i57j69i60j69i59j69i60j69i61j0.2830j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=vegetables&oq=Veg&aqs=chrome.2.69i57j69i60j69i59j69i60j69i61j0.2830j0j9&sourceid=chrome&ie=UTF-8"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Vegetables</span></a>

        <a href="https://www.google.com/search?q=breakfast&oq=breakfast&aqs=chrome..69i57j69i61j0l4.2470j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=breakfast&oq=breakfast&aqs=chrome..69i57j69i61j0l4.2470j0j9&sourceid=chrome&ie=UTF-8"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Breakfast</span> </a>

       <a href="https://www.google.com/search?q=lunch&oq=lunch&aqs=chrome..69i57j69i60j69i61j69i59l2j0.1430j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=lunch&oq=lunch&aqs=chrome..69i57j69i60j69i61j69i59l2j0.1430j0j9&sourceid=chrome&ie=UTF-8" <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Lunch</span> </a>

       <a href="https://www.google.com/search?q=dinner&oq=dinner&aqs=chrome..69i57j69i61j69i59j0j69i59j0.1094j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=dinner&oq=dinner&aqs=chrome..69i57j69i61j69i59j0j69i59j0.1094j0j9&sourceid=chrome&ie=UTF-8" <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span></a>

        <a href="https://www.google.com/search?q=Dessert&oq=Dessert&aqs=chrome..69i57j69i61j69i59j0l3.1654j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=Dessert&oq=Dessert&aqs=chrome..69i57j69i61j69i59j0l3.1654j0j9&sourceid=chrome&ie=UTF-8"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dessert</span> </a>

        <a href="https://www.google.com/search?ei=A8TTWpvMOsfL_Qakza-oAg&q=american+cusine&oq=american+cusine&gs_l=psy-ab.3..0i10k1l10.3755.5402.0.5870.7.7.0.0.0.0.139.569.6j1.7.0....0...1c.1.64.psy-ab..0.7.561...0j46j0i131i67k1j0i67k1j0i46k1j0i131k1.0.AQ5lHoAiPqI" target="https://www.google.com/search?ei=A8TTWpvMOsfL_Qakza-oAg&q=american+cusine&oq=american+cusine&gs_l=psy-ab.3..0i10k1l10.3755.5402.0.5870.7.7.0.0.0.0.139.569.6j1.7.0....0...1c.1.64.psy-ab..0.7.561...0j46j0i131i67k1j0i67k1j0i46k1j0i131k1.0.AQ5lHoAiPqI"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">American</span> </a>

        <a href="https://www.google.com/search?ei=NMTTWvmOEcjM_Aa__aOwBA&q=mexican+cusine&oq=mexican+cusine&gs_l=psy-ab.3..0i10k1l10.5541.8336.0.8593.14.12.2.0.0.0.90.728.12.12.0....0...1c.1.64.psy-ab..0.14.727...0j0i131i67k1j0i67k1j0i131k1.0.lN3bx29x2hY" target="https://www.google.com/search?ei=NMTTWvmOEcjM_Aa__aOwBA&q=mexican+cusine&oq=mexican+cusine&gs_l=psy-ab.3..0i10k1l10.5541.8336.0.8593.14.12.2.0.0.0.90.728.12.12.0....0...1c.1.64.psy-ab..0.14.727...0j0i131i67k1j0i67k1j0i131k1.0.lN3bx29x2hY"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Mexican</span> </a>

        <a href="https://www.google.com/search?q=asian+cuisine&oq=asian+cu&aqs=chrome.1.69i57j0l5.14202j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=asian+cuisine&oq=asian+cu&aqs=chrome.1.69i57j0l5.14202j0j9&sourceid=chrome&ie=UTF-8"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Asian</span> </a>

        <a href="https://www.google.com/search?q=italian+cuisine&oq=Italian+cusine&aqs=chrome.1.69i57j0l5.7310j0j9&sourceid=chrome&ie=UTF-8" target="https://www.google.com/search?q=italian+cuisine&oq=Italian+cusine&aqs=chrome.1.69i57j0l5.7310j0j9&sourceid=chrome&ie=UTF-8"<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Italian</span></a>

      </p>
    </div>
  </footer>





<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
