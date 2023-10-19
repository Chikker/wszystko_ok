const liczba1 = document.querySelector('#A');
const liczba2 = document.querySelector('#P')
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseInt(liczba1.value);
    let P = parseInt(liczba2.value)

    let B = (A/100)*P;
   console.log(A);
   wynik.innerHTML=P+ "% z " +A+ " to: "+B;
})