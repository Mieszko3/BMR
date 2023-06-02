fetch("Dane.json")
    .then(response => response.json())
    .then(data => {
    console.log(data.Dane)
    document.querySelector("#jsonDane").innerText = data.Dane
    document.querySelector("#jsonOpis").innerHTML = data.Opis
})