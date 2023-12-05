const liczba1 = document.querySelector('#A');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseInt(liczba1.value);

    let b;
    switch (Math.floor(A/10)) {
        case 10:
            b = 5;
            break;
        case 9:
            b = 5;
            break;
        case 8:
            b = 4.5;
            break;
        case 7:
            b = 4;
            break;
        case 6:
            b = 3.5;
            break;
        case 5:
            b =3;
            break;
        default:
            b = 2;
    }
    wynik.innerHTML=b;

})