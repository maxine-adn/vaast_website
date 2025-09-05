document.querySelectorAll(".showOrHideHelp").forEach((helpButton) => {
  let helpIsClicked = true;

  helpButton.addEventListener("click", () => {
    let whichQuestion = helpButton.id;
    // console.log(whichQuestion)
    let classname = "qu-"+whichQuestion;
    // console.log(classname)
    let questionP = document.getElementById(classname);
    // console.log(questionP)

    if (helpIsClicked) {
      console.log("button was clicked")
      console.log("button"+ whichQuestion +"was clicked")


      questionP.style.display = "block";
      helpIsClicked = false;

      // Change l'icon
      let help_icon = document.getElementById("icon-" + whichQuestion);
      console.log(help_icon)
      help_icon.name = "chevron-down-outline";
      console.log(help_icon)

    } else {
      questionP.style.display = "none";
      helpIsClicked = true;

      // Change l'icon
      let help_icon = document.getElementById("icon-" + whichQuestion);
      console.log(help_icon)
      help_icon.name = "chevron-forward-outline";
      console.log(help_icon)
    }
  });
});
