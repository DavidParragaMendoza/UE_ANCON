  // JavaScript
  function toggleMenu() {
    var menu = document.querySelector(".nav_link");
    var icon = document.querySelector(".nav_icon");

if(menu.style.display != "block"){
menu.style.display = "block";

menu.style.position = "fixed";
menu.style.top = "0";
menu.style.left = "0";
menu.style.width = "100%";

menu.style.height = "100vh";
menu.style.background = "rgba(24, 75, 180, 0.96)";
menu.style.zIndex = "1";

var links = document.querySelectorAll(".nav_links");
for (var i = 0; i < links.length; i++) {
links[i].classList.toggle("nav_links_menu");
}

icon.innerHTML = "<img src='./close.png' alt='Close icon'>";
}else{
menu.style.display = "none";

var links = document.querySelectorAll(".nav_links");
for (var i = 0; i < links.length; i++) {
links[i].classList.remove("nav_links_menu");
}

icon.innerHTML = "<img src='./menu.png' alt='Menu icon'>";
}
}