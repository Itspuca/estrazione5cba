
var button = document.getElementById('c');
var count = 0;

function href() {
  window.location = "https://itspuca.github.io/estrazioni/untitled/";
}

button.addEventListener('click', function() {
  count++;

  if (count == 2) {
    var domanda = window.prompt('4°, t _ _ _ _ e, ???');
    count = 0;
  }
  if (domanda == 'ciao') {
    href();
  }
});
