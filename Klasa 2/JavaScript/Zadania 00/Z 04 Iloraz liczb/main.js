let a = prompt("Podaj liczbę a: ", "0")
a = parseInt(a);
let b = prompt("Podaj liczbę b: ", "0")
b = parseInt(b)

let iloczyn = a/b;
console.log(iloczyn)
document.write("<b>Iloraz tych dwóch liczb wynosi: "+iloczyn.toFixed(2)+"</b>")