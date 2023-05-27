const form = document.getElementById('form')
const dimensiune1 = document.getElementById('dimensiune1')
const dimensiune2 = document.getElementById('dimensiune2')
const tip = document.getElementById('tip')
const rugozitate = document.getElementById('rugozitate')
const tol1 = document.getElementById('tol1')
const tol2 = document.getElementById('tol2')
const gaura1 = document.getElementById('gaura1')
const gaura2 = document.getElementById('gaura2')
const errorElement1 = document.getElementById('error-dim1')
const errorElement2 = document.getElementById('error-dim2')
const errorElement3 = document.getElementById('error-tip')
const errorElement4 = document.getElementById('error-it')
const errorElement6 = document.getElementById('error-rugozitate')
const errorElement7 = document.getElementById('error-gauraSemifabricat')


form.addEventListener('submit', (e) => {
    if (dimensiune1.value == '' || dimensiune1.value == null) {
        e.preventDefault()
        errorElement1.innerHTML = '*Campul DimensiuneA trebuie completat!'
        setTimeout(() => errorElement1.remove(), 5000)
    }
    if (parseFloat(dimensiune1.value) < 0) {
        e.preventDefault()
        errorElement1.innerHTML = '*DimensiuneaA nu poate fi negativă!'
        setTimeout(() => errorElement1.remove(), 5000)
    }
    if (tip.value === '--Alege tipul suprafeței--') {
        e.preventDefault()
        errorElement3.innerHTML = '*Campul Tip trebuie completat!'
        setTimeout(() => errorElement3.remove(), 5000)
    }
    if (tip.value === 'Cilindrică exterioară' || tip.value === 'Cilindrică interioară' ||
        tip.value === 'Gaură filetată' || tip.value === 'Gaură netedă' || tip.value === 'Plană dreptunghiulară' ||
        tip.value === 'Plană circulară întreruptă' || tip.value === 'Canal de pană' || tip.value === 'Toroidală') {
        if (parseFloat(dimensiune2.value) < 0) {
            e.preventDefault()
            errorElement2.innerHTML = '*DimensiuneaB nu poate fi negativă!'
            setTimeout(() => errorElement1.remove(), 5000)
        } else if (dimensiune2.value === '' || dimensiune2.value == null) {
            e.preventDefault()
            errorElement2.innerHTML = '* Campul DimensiuneB trebuie completat!'
            setTimeout(() => errorElement2.remove(), 5000)
        }
    }
    if (rugozitate.value === '--Alege valoarea rugozității--') {
        e.preventDefault()
        errorElement6.innerHTML = '*Campul Rugozitate trebuie completat!'
        setTimeout(() => errorElement6.remove(), 5000)
    }
    if (tip.value == "Cilindrică interioară" || tip.value == "Gaură netedă" || tip.value == "Gaură filetată") {
        if (gaura1.checked == false && gaura2.checked == false) {
            e.preventDefault()
            errorElement7.innerHTML = '*Campul trebuie completat!'
            setTimeout(() => errorElement7.remove(), 10000)
        }
    }
})