function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks1905;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks1905 = document.getElementsByClassName("tablinks1905");
  for (i = 0; i < tablinks1905.length; i++) {
    tablinks1905[i].className = tablinks1905[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


