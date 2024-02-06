const wynik = document.querySelector('#wynik')
const btn =document.querySelector('button')

btn.addEventListener('click',function (){
    const urodziny1 = new Date(document.querySelector('#dataUrodzenia1').value);
    const urodziny2 = new Date(document.querySelector('#dataUrodzenia2').value);

    const imie1 = document.querySelector('#imie1').value;
    const imie2 = document.querySelector('#imie2').value;

    if(urodziny1.getTime() < urodziny2.getTime()){
        wynik.innerHTML = `${imie1} jest starszy od ${imie2}.` ;
    }
    else if(urodziny1.getTime() > urodziny2.getTime()){
        wynik.innerHTML = `${imie2} jest starszy od ${imie1}.` ;
    }
    else {
        wynik.innerHTML = `${imie1} i ${imie2} sa urodzeni w tym samym roku.`;
    }
})