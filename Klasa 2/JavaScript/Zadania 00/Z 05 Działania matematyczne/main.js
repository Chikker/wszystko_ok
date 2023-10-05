const liczba1 = document.querySelector('#A');
const liczba2 = document.querySelector('#B');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener("click",function () {
    let a = parseInt(A.value);
    let b = parseInt(B.value);
    let iloraz = Math.floor(a/b);
    let iloczyn = a*b;
    let suma = a+b;
    let roznica = a-b;


    wynik.innerHTML = 'A = '+a+
                        '<br>B = '+b+
                            '<br>suma = '+suma+
                                '<br>różnica = '+roznica+
                                    '<br>iloczyn = '+iloczyn+
                                        '<br>iloraz = '+iloraz.toFixed(0); // <--- TO POPRAWIC
})