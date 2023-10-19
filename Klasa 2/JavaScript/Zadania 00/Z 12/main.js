const liczba1 = document.querySelector('#A');
const liczba2 = document.querySelector('#B')
const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');

btn.addEventListener('click',function () {
    let A = parseInt(liczba1.value);
    let B = parseInt(liczba2.value)
    let min = A;
    let max = B;
    let p1 = Math.floor(Math.random() * (max - min+1)) + min;
    let p2 = Math.floor(Math.random() * (max - min+1)) + min;
    let p3 = Math.floor(Math.random() * (max - min+1)) + min;
    let p4 = Math.floor(Math.random() * (max - min+1)) + min;
    let p5 = Math.floor(Math.random() * (max - min+1)) + min;
    let suma = p1 + p2 + p3 + p4 + p5;
    let iloczyn = p1 * p2 * p3 * p4 * p5;
    let srednia = suma / 5;
   console.log(A);
   wynik.innerHTML="Wylosowane liczby: <br> p1 = "+p1+ "<br> p2 = "+p2+ " <br>p3 = "+p3+" <br>p4 = "+p4+ "<br> p5 = "+p5+ "<br> Suma liczb: "+p1+ " + " +p2+" + "+p3+" + "+p4+" + "+p5+ " = "+suma+"<br> Iloczyn liczb: "+p1+ " + " +p2+" + "+p3+" + "+p4+" + "+p5+ " = "+iloczyn+"<br> Średnia liczb = "+srednia.toFixed(2);
})