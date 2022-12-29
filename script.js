let Użytkowink = [
    {
        Imię: "Mieszko",
        Nazwisko: "Winiarski",
        Email: "mieszkoksu@gmail.com",
        Hasło: "Mieszko123",
    }
]
function getInfo(){
    let Imię = document.getElementById("Imię").value;
    let Nazwisko = document.getElementById("Nazwisko").value;
    let Email = document.getElementById("email").value;
    let Hasło = document.getElementById("Hasło").value;

    for(let i = 0; i < Użytkowink.length; i++){
        if(Imię == Użytkowink[i].Imię
            && Nazwisko == Użytkowink[i].Nazwisko
            && Email == Użytkowink[i].Email
            && Hasło == Użytkowink[i].Hasło){
            alert("Cześć  " + Imię + " zostałeś/aś poprawnie zaresjestrowany/a, teraz przejdź do panelu logowania, aby móc się zalogować!")
            console.log(Imię + " jest zarejestrowany")
            return;
            }
    }
    alert("Nieprawidłowe dane")
    console.log("Nieprawidłowe dane")
}