window.addEventListener('userUpdated', event => {
    const statusMsg = document.querySelector("#status-msg");
    if (statusMsg) {
        statusMsg.remove();
    }
    Livewire.emit('refreshUser');
});