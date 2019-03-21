let bereken = document.getElementById('bereken');
let lengte = document.getElementById('lengte');
let gewicht = document.getElementById('gewicht');
let resultaat = document.getElementById('resultaat');
let input = document.getElementById('input');
let leeftijd = document.getElementById('leeftijd');
let geslacht = document.getElementById('geslacht');

gewicht.addEventListener('focus', function() {
	gewicht.value = '';
})
lengte.addEventListener('focus', function() {
	lengte.value  = '';
})
bereken.addEventListener('click', function() {
	ajax(gewicht.value, lengte.value);
})

function clearResult() {
	lengte.value="";
	gewicht.value="";
	leeftijd.value="";
}