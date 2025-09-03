const showButton = document.querySelector(".showOrHide");
const divContainer = document.querySelector("#more-qu");
let isClicked = true;

const label = document.querySelector(".btn-label");
const originalText = label.textContent;

showButton.addEventListener("click", () => {
  if (isClicked) {
    divContainer.style.display = "block";
    isClicked = false;

    // Change l'icon
    const icon = document.querySelector(".show-hide-icon");
    icon.name = "eye-off-outline";
    label.textContent = "Hide question examples";
    showButton.style.background = "#f1f1f1";
    showButton.style.color = "#292c35";
  } else {
    divContainer.style.display = "none";
    isClicked = true;

    // Change l'icon
    const icon = document.querySelector(".show-hide-icon");
    icon.name = "eye-outline";
    label.textContent = originalText;
    showButton.style.background = "#282c34";
    showButton.style.color = "#ffffff";

    
  }
});