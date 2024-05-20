window.addEventListener('userUpdated', event => {
    Livewire.emit('refreshUser');
});


/* per animazione immagine hero  */
window.addEventListener("load", function() {
    let immagine = document.getElementById("immagine");
    setTimeout(function() {
        immagine.classList.remove("slideUp");
    }, 50); // Ritardo di 100 millisecondi prima di rimuovere la classe
});
/* per animazione immagine hero  */
