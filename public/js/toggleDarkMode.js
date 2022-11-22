// Getting the Button
const toggleDarkModeButton = document.querySelector("#toggleDarkModeButton");
// Getting the value storaged into localStorage
const darkModeIsActive = localStorage.getItem("theme");
// Getting the html
const html = document.querySelector("#html");

// If darkmode is "dark" so the toggle button is active visually
if (darkModeIsActive === "dark") {
  toggleDarkModeButton.setAttribute("checked", true);
  html.classList.add("dark");
}

// Adding an event to toggle the class dark from html every time the sl-change is emitted
toggleDarkModeButton.addEventListener("sl-change", () => {
  $("#html").toggleClass("dark").trigger("classChange");

  localStorage.setItem("theme", darkModeIsActive === "dark" ? "light" : "dark");
});
