// Function to open cafe tabs
document.addEventListener("DOMContentLoaded", function () {
  // By default, load Kopisan Cafe tab on page load
  document.getElementById("Kopisan").style.display = "block";
});

function openCafe(evt, cafeName) {
  let i, tabcontent, tablinks;

  // Hide all tab content
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the "active" class from all tabs
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the clicked tab and add "active" class
  document.getElementById(cafeName).style.display = "block";
  evt.currentTarget.className += " active";
}

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
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;

  // Hide all tab contents
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    tabcontent[i].classList.remove("active");
  }

  // Remove active class from all tablinks
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab and add "active" class to the clicked tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Load default tab (For You) when the page loads
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("ForYou").classList.add("active");
});
