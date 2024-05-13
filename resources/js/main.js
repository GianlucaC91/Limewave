window.addEventListener('userUpdated', event => {
    Livewire.emit('refreshUser');
});

// STATUS MSG TIMEOUT NOT WORKING

// let message = document.querySelector('#status-msg')
// setTimeout(() => {
//     message.remove()
// }, 4000);