const liczba1 = document.querySelector('#liczba1');
const liczba2 = document.querySelector('#liczba2');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener("click",function () {
    let a = liczba1.value;
    let b = liczba2.value;
    let iloraz = a/b;


    wynik.innerHTML = 'Iloraz danych liczb wynosi: '+iloraz.toFixed(2);
})