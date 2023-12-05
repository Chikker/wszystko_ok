let a = prompt("Podaj liczbę a: ", "")
a = parseInt(a);
let b = prompt("Podaj liczbę b: ", "")
b = parseInt(b)
let c = prompt("Podaj liczbę c: ", "")
c = parseInt(c)
let d = prompt("Podaj liczbę d: ", "")
d = parseInt(d)

let srednia = sredniarytmetyczna(a,b,c,d)
let sum= suma(a,b,c,d)
document.write("a wynosi: "+a+ "<br> b wynosi: "+b+"<br> c wynosi: "+c+"<br> d wynosi: "+d+"<br><b>Suma wynosi: "+sum+ "</b> <b><br>Srednia wynosi: "+srednia+ "</b> ")
document.write("<b><br>Srednia zaokrąglona wynosi: "+srednia.toFixed(2)+ "</b> ")