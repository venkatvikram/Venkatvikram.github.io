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

<script>
  function scrollToContactSection() {
    const contactSection = document.getElementById("contactSection");
    contactSection.scrollIntoView({ behavior: "smooth" });
  }
</script>

