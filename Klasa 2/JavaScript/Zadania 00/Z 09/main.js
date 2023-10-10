const liczba1 = document.querySelector('#A');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseFloat(liczba1.value);


    let c = A/0.039370;
   console.log(A);
   wynik.innerHTML=A+" Cali to "+c.toFixed(2)+" mm";
})