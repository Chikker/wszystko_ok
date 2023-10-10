const liczba1 = document.querySelector('#A');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseFloat(liczba1.value);


   console.log(A);
   let F = A * 1.8 + 32;
   let K = A + 273.15;
   wynik.innerHTML=`
   Temperatura w Celsjuszach = ${A} <br>
   Temperatura w Fahrenheitach = ${F} <br> 
   Temperatura w Kelvinach =  ${K} <br>
   `
})