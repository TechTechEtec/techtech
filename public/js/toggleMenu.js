function toggleMenu() {
  const menu = document.querySelector("#layout-menu");
  console.log(menu.getAttribute("style"))
  if(menu.getAttribute("style") === null || menu.getAttribute("style") ==="left:-210px") {
     menu.setAttribute("style","left:0");
     return;
  }
 menu.setAttribute("style","left:-210px")
}

