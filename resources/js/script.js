fetch('/api/anime')
.then(response => response.json())
.then(data => {
    let wrapper = document.querySelector('#wrapper');
    data.forEach(item => {
        let col = document.createElement('div');
        col.classList.add('col-12', 'col-md-3', 'my-3', 'd-flex', 'justify-content-around');
        let card = document.createElement('div');
        card.classList.add('card');
        card.style.width = '18rem';
        card.innerHTML= `
        <img src="${item.img}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">${item.title}</h5>
            <p class="card-text">Genere: ${item.genre}</p>
            <p class="card-text">Numero episodi: ${item.episodes}</p>
        </div>`;
        col.appendChild(card);
        wrapper.appendChild(col);
    });
})
.catch(error => {
    console.error('Si è verificato un errore:', error);
})