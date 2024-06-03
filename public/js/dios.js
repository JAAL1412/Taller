const cards = document.querySelectorAll('.nav-link');

cards.forEach(card => {
    card.addEventListener('click', ()=>{
        removerActivo();
        card.classList.add('active');
    })
})

function removerActivo(){
    cards.forEach(card => {
        card.classList.remove('.disabled');
    })
}