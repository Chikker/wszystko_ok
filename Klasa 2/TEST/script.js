const isLoggedIn = true;

if(isLoggedIn) {
    console.log("Zalogowano");
} else {
    console.log("Nie zalogowano");
}

// Wartości fałszywe
// false, 0, "", null, undefined, NaN

const value = "";

if(value) {
    console.log("Ta wartość nie jest fałszywa");
}