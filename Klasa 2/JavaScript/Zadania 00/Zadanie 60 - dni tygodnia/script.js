const liczba1 = document.querySelector('#A');
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseInt(liczba1.value);
    let b;
    switch (A) {
        case 1:
            b = "Poniedziałek"
            break;
        case 2:
            b = "Wtorek"
            break;
        case 3:
           b = "Środa"
            break;
        case 4:
           b = "Czwartek"
            break;
        case 5:
           b = "Piątek"
            break;
        case 6:
          b =  "Sobota"
            break;
        case 7:
           b = "Niedziela"
            break;
        default:
            "NIe podales numerak od 1 do 7"
    }
    wynik.innerHTML=b;
})