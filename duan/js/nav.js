function toggleDropdown(dropdownId) {
    var dropdown = document.getElementById(dropdownId);
    dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
}

function openSidebar() {
    document.getElementById("mySidebar").classList.toggle('open');
}