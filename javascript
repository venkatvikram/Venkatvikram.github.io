var openButton = document.getElementById('openForm');
var formPopup = document.getElementById('formPopup');

openButton.addEventListener('click', function() {
  formPopup.style.display = 'block';
});

formPopup.addEventListener('submit', function(event) {
  event.preventDefault();
  // Code to process the form data goes here
  formPopup.style.display = 'none';
});
