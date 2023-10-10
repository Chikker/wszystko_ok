const liczba1 = document.querySelector('#A');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseFloat(liczba1.value);

    let b = A /60;
    let h = Math.floor(A / 3600);
   let m = Math.floor(b%60);
   let s = A-h.toFixed(0)*3600-m*60
   console.log(A);
   wynik.innerHTML= h.toFixed(0)+" godzin "+m+" minut "+s+" sekund";
})