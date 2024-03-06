let ageSpan = document.getElementById('showAge');
let birthYear = 1997;
let currentYear = new Date().getFullYear();
ageSpan.innerHTML = currentYear - birthYear;

console.log("hello")