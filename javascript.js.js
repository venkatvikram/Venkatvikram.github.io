var openButton = document.getElementById('openForm');
var form = document.getElementById('form');

openButton.addEventListener('click', function() {
  form.style.display = 'block';
});

form.addEventListener('submit', function(event) {
  event.preventDefault();
  // Code to process the form data goes here
  form.style.display = 'none';
});
