var menu_c = document.querySelectorAll("#dropdown >li");

for (var i = 0; i < menu_c.length; i++) {
    menu_c[i].addEventListener("click", function() {
        var menu = document.querySelectorAll("#dropdown >li >ul");
        for (var j = 0; j < menu.length; j++) {
            menu[j].style.display = "none";
        }
        this.children[1].style.display = "block";
    });
}