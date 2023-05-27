const form = document.getElementById('form')
const piesa = document.getElementById('numepiesa')
const errorElement1 = document.getElementById('error-piesa')
form.addEventListener('submit', (e) => {
    if (piesa.value == '--Alege piesă--') {
        e.preventDefault()
        errorElement1.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement1.remove(), 5000)
    }

})