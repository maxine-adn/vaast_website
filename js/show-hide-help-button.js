document.querySelectorAll(".showOrHideHelp").forEach((helpButton) => {
  let helpIsClicked = true;

  helpButton.addEventListener("click", () => {
    let whichQuestion = helpButton.id;
    let questionP = document.getElementById("qu-" + whichQuestion);

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

document.querySelectorAll(".showOrHideHelp").forEach((helpDiv) => {
  let helpIsClicked = true;

  helpDiv.addEventListener("click", () => {
    let whichQuestion = helpDiv.id;
    let questionP = document.getElementById("qu-" + whichQuestion.substring(4));
    console.log(questionP);

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
