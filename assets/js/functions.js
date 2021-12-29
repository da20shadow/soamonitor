//Enable tooltips everywhere
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})
// Copy text
function copyFunc(){
    let textToCopy = document.getElementById("ref-Url");
    textToCopy.select();
    textToCopy.setSelectionRange(0,99999)
    document.execCommand("copy");
}