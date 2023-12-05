const btn = document.querySelector('button')
const wynik = document.querySelector('#wynik')
const liczba = document.querySelector('#liczba')

btn.addEventListener('click', function(){

    let l = parseInt(liczba.value)
    let k = Math.pow(l,2)
    let s = Math.pow(l,3)

    wynik.innerHTML = l+"<sup>2</sup> = "+k+"<br>"+l+"<sup>3</sup> = "+s;

})

//Dominik Walenczak 2p/2
