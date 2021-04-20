
var button = document.getElementById('c');
var count = 0;

button.addEventListener('click', function() {
  count++;

  if (count == 15) {
    var domanda = window.prompt('4°, t _ _ _ _ e, ???');
    count = 0;
  }
  if (domanda == 'tedone') {
    window.location = "https://youtu.be/ozRyRcbx57I";
  }
});
