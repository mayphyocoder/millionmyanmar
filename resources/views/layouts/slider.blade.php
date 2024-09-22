{{-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
<div class="w3-content " style="max-width:100%">
  

    <img class="mySlides w3-animate-fading" src="{{asset('data/slider_bb.png')}}" style="width:100%">
    <img class="mySlides w3-animate-fading" src="{{asset('data/slider_travel.png')}}" style="width:100%">
    <img class="mySlides w3-animate-fading" src="{{asset('data/slider_realestate.png')}}" style="width:100%">
    <img class="mySlides w3-animate-fading" src="{{asset('data/slider_agency.png')}}" style="width:100%">
    <img class="mySlides w3-animate-fading" src="{{asset('data/slider_entertainment.png')}}" style="width:100%">
  
  </div>
  
  <script>
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
  }
  </script>
   
  </section>