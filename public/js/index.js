/*const { backgroundColor } = require("tailwindcss/defaultTheme");*/

/* Back to top button */
back2top.addEventListener('click', (e) => {
e.preventDefault(); /* unterbinden der standart aktion */
window.scroll({ top: 0, left:0, behavior: 'smooth'});/* dann gehe zu back top position angabe */
});

/* Uhr Boris */


window.addEventListener('DOMContentLoaded', () => {

  const uhr = document.querySelectorAll('.uhr')
  console.log(uhr)/* loggen */
  const time = () => {
  var d = new Date()
  var s = d.getSeconds()
  var m = d.getMinutes()
  var h = d.getHours()


  uhr.forEach(uhr => uhr.innerHTML = `${('0' + h).substr(-2)}:${('0' + m).substr(-2)}:${('0' + s).substr(-2)} Uhr`)
}

setInterval(time, 1000)



})