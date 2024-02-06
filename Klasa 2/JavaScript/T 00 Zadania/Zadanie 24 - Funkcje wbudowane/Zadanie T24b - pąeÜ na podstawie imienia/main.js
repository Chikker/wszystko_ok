function sprawdzPlec() {
    var imie = document.getElementById("imie").value.toLowerCase();

    var ostatniaLitera = imie.charAt(imie.length - 1);

    var wynikElement = document.getElementById("wynik");

    if (ostatniaLitera === 'a' && !(imie === 'kuba' || imie === 'barnaba')) {
        wynikElement.innerHTML = "Jest to kobieta.";
    } else {
        wynikElement.innerHTML = "Jest to mężczyzna.";
    }
}