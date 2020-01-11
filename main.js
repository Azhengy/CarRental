
window.onload=function() {
document.getElementById("defaultOpen").click();
};

$(document).ready(function() {

  $("#newCustomer").click(function() {
    $("#formNewCustomer").toggle();
  });
  $("#existingCustomer").click(function() {
    $("#formExistingCustomer").toggle();
  });
  $("#rentWithReservation").click(function() {
    $("#formWithReservation").toggle();
  });
  $("#rent").click(function() {
    $("#formWithoutReservation").toggle();
  });
});



function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName('tabcontent');
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = 'none';
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName('tablinks');
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(' active', '');
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = 'block';
  evt.currentTarget.className += ' active';
}

