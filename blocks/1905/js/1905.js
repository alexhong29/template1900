function open1905(evt, cityName1905) {
  // Declare all variables
  var i, tabcontents1905, tablinks1905;

  // Get all elements with class="tabcontent" and hide them
  tabcontents1905 = document.getElementsByClassName("tabcontents");
  for (i = 0; i < tabcontents1905.length; i++) {
    tabcontents1905[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks1905 = document.getElementsByClassName("tablinks1905");
  for (i = 0; i < tablinks1905.length; i++) {
    tablinks1905[i].className = tablinks1905[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName1905).style.display = "flex";
  evt.currentTarget.className += " active";
}


