const wynik = document.querySelector('#wynik');
const btn = document.querySelector('button');
function addZero(value) {
    return String(value).padStart(2, 0);
}

function convertMonth(value) {
    const months = {
        1: "styczeń",
        2: "luty",
        3: "marzec",
        4: "kwiecień",
        5: "maj",
        6: "czerwiec",
        7: "lipiec",
        8: "sierpień",
        9: "wrzesień",
        10: "październik",
        11: "listopad",
        12: "grudzień",
    };

    return months[value];
}

const now = new Date();

// const formatted = `${addZero(now.getDate())}.${addZero(now.getMonth() + 1)}.${now.getFullYear()}`; // 01.03.2021
const formatted = `${addZero(now.getDate())} ${convertMonth(now.getMonth() + 1)} ${now.getFullYear()}`; // 01.03.2021

console.log(formatted);
btn.addEventListener('click',function () {
    wynik.innerHTML=`${addZero(now.getDate())} ${convertMonth(now.getMonth() + 1)} ${now.getFullYear()}`
})