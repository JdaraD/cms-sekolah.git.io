// slider images start

var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
        counter = 1;
    }
}, 5000);

// slider images ends

function playVideo() {
    var video = document.getElementById("myVideo");
    var image = document.getElementById("videoImage");
    var playIcon = document.querySelector(".play-icon");
  
    image.style.display = "none"; // Sembunyikan gambar latar
    playIcon.style.display = "none"; // Sembunyikan ikon play
    video.style.display = "block"; // Tampilkan video
    video.play(); // Putar video
  }
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
  
    // Hide all elements with class="tab-content"
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Remove the class "active" from all tab links
    tablinks = document.getElementsByClassName("tab-link");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Set the default open tab
  document.getElementById("admission").style.display = "block";