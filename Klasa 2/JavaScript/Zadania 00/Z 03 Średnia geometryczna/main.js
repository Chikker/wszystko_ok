let a = prompt("Podaj liczbę a: ", "0")
a = parseInt(a);
let b = prompt("Podaj liczbę b: ", "0")
b = parseInt(b)
let c = prompt("Podaj liczbę c: ", "0")
c = parseInt(c)
let d = prompt("Podaj liczbę d: ", "0")
d = parseInt(d)

let iloczyn = a*b*c*d;
let srednia = Math.pow(iloczyn,0.25);
console.log(iloczyn)
document.write("a wynosi: "+a+ "<br> b wynosi: "+b+"<br> c wynosi: "+c+"<br> d wynosi: "+d)
document.write("<br><b>Średnia geometryczna wynosi: "+srednia+ "</b>")
document.write("<br><b>Zaokrąglona średnia geometryczna wynosi: "+srednia.toFixed(2)+ "</b>")