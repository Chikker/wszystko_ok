const liczba1 = document.querySelector('#A');
const liczba2 = document.querySelector('#B');
const liczba3 = document.querySelector('#C')
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseFloat(liczba1.value);
    let B = parseFloat(liczba2.value);
    let C = parseFloat(liczba3.value);

   console.log(A);
   let p = 0.5*(A+B+C);
   let pole = Math.sqrt(p*(p-A)*(p-B)*(p-C));
   wynik.innerHTML=` a = ${A} <br>
                    b = ${B}<br>
                    c = ${C}<br>
                    pole wynosi = ${pole} <br>
`

})