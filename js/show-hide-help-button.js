document.querySelectorAll(".showOrHideHelp").forEach((helpButton) => {
  let helpIsClicked = true;

  helpButton.addEventListener("click", () => {
    let whichQuestion = helpButton.id;
    let classname = "qu-"+whichQuestion;
    let questionP = document.getElementById(classname);

    if (helpIsClicked) {
      questionP.style.display = "block";
      helpIsClicked = false;

      // Change l'icon
      let help_icon = document.getElementById("icon-" + whichQuestion);
      help_icon.name = "chevron-down-outline";

    } else {
      questionP.style.display = "none";
      helpIsClicked = true;

      // Change l'icon
      let help_icon = document.getElementById("icon-" + whichQuestion);
      help_icon.name = "chevron-forward-outline";
    }
  });
});
