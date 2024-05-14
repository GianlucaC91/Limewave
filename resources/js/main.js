window.addEventListener('userUpdated', event => {
    Livewire.emit('refreshUser');
});

