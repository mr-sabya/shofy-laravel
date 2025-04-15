document.addEventListener('livewire:navigated', () => {
    var myElement = document.getElementById('simple-bar');
    new SimpleBar(myElement, {
        autoHide: true
    });

});

document.addEventListener('DOMContentLoaded', function () {
    var myElement = document.getElementById('simple-bar');
    new SimpleBar(myElement, {
        autoHide: true
    });

}
);