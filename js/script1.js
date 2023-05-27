const form1 = document.getElementById('form1')
const piesa = document.getElementById('piesa')
const supr1 = document.getElementById('supr1')
const supr2 = document.getElementById('supr2')
const precizieSemifabricat = document.getElementById('precizieSemifabricat')
const rugozitateSemifabricat = document.getElementById('rugozitateSemifabricat')
const tratament1 = document.getElementById('tratament1')
const tratament2 = document.getElementById('tratament2')
const clasaToleranta = document.getElementById('clasaToleranta')
const errorElement1 = document.getElementById('error-piesa')
const errorElement2 = document.getElementById('error-supr')
const errorElement3 = document.getElementById('error-precizieSemifabricat')
const errorElement4 = document.getElementById('error-clasaToleranta')
const errorElement5 = document.getElementById('error-tratamentTermic')
const errorElement6 = document.getElementById('error-rugozitateSemifabricat')

form1.addEventListener('submit', (e) => {
    if (piesa.value == '' || piesa.value == null) {
        e.preventDefault()
        errorElement1.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement1.remove(), 10000)
    }
    if (supr1.checked == false && supr2.checked == false) {
        e.preventDefault()
        errorElement2.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement2.remove(), 10000)
    }
    if (precizieSemifabricat.value == '' || precizieSemifabricat.value == null) {
        e.preventDefault()
        errorElement3.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement3.remove(), 10000)
    }
    if (precizieSemifabricat.value < 0) {
        e.preventDefault()
        errorElement3.innerHTML = '*Nu se pot introduce valori negative!'
        setTimeout(() => errorElement3.remove(), 10000)
    }
    if (clasaToleranta.value === '--Alege clasă--') {
        e.preventDefault()
        errorElement4.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement4.remove(), 10000)
    }
    if (tratament1.checked == false && tratament2.checked == false) {
        e.preventDefault()
        errorElement5.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement5.remove(), 10000)
    }
    if (rugozitateSemifabricat.value == '' || rugozitateSemifabricat.value == null) {
        e.preventDefault()
        errorElement6.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement6.remove(), 10000)
    }
    if (precizieSemifabricat.value < 0) {
        e.preventDefault()
        errorElement6.innerHTML = '*Nu se pot introduce valori negative!'
        setTimeout(() => errorElement6.remove(), 10000)
    }
})
const form2 = document.getElementById('form2')
const piesaStergere = document.getElementById('piesaStergere')
const errorElement7 = document.getElementById('error-piesaStergere')
form2.addEventListener('submit', (e) => {
    if (piesaStergere.value == '--Alege piesă--') {
        e.preventDefault()
        errorElement7.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement7.remove(), 10000)
    }
})
const form3 = document.getElementById('form3')
const numepiesa = document.getElementById('numepiesa')
const errorElement8 = document.getElementById('error-numepiesa')
form3.addEventListener('submit', (e) => {
    if (numepiesa.value == '--Alege piesă--') {
        e.preventDefault()
        errorElement8.innerHTML = '*Campul trebuie completat!'
        setTimeout(() => errorElement8.remove(), 10000)
    }
})