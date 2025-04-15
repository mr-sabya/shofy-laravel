document.addEventListener('livewire:navigated', () => {

    if (localStorage.getItem("color"))
        $("#color").attr("href", "assets/backend/css/" + localStorage.getItem("color") + ".css");
    if (localStorage.getItem("dark"))
        $("body").attr("class", "dark-only");
    

});