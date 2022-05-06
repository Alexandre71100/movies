/**
 * Sélection de tous les films
 */

fetch("http://api.test/movies.php")
    .then(response => response.json())
    .then(movies => {

        const tbody = document.querySelector('tbody');

        movies.forEach(movie => {
            let tr = `<tr>
            <th scope="row">${movie.id}</th>
                            
            <td>
                <img class="w-25 rounded" src="${movie.image}" alt="">
            </td>
            <td>${movie.title}</td>
            <td>${movie.date}</td>
            <td>${movie.time}</td>
            <td>${movie.director}</td>
            <td>
                <a href="details.php?id=${movie.id}">Détails</a>
            </td>
        </tr>`;

            tbody.innerHTML += tr;
        });


    })
    .catch(error => alert(error));



const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault();

    const datas = {
        "title": document.querySelector('#titre').value,
        "description": document.querySelector('#description').value,
        "date": document.querySelector('#date').value,
        "time": document.querySelector('#time').value,
        "director": document.querySelector('#director').value,
        "image": document.querySelector('#image').value,
        "trailer": document.querySelector('#trailer').value
    }

    fetch('http://api.test/add.php', {
        method: "POST", 
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json"
        },
        body: JSON.stringify(datas)
    })
        .then(response => response.json())
        .then(movie => {
            console.log(movie);
        })
        .catch(error => alert(error));

});