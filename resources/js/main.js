window.addEventListener('userUpdated', event => {
    Livewire.emit('refreshUser');
});

setTimeout(function() {
    document.querySelector('#status-msg').remove();
}, 4000);