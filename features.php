<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>Features</title>
  <script src="../assets/js/color-modes.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <meta name="theme-color" content="#712cf9" />
  <link href="css/features.css" rel="stylesheet" />
  <link href="css/all.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
    rel="stylesheet" />

  <!-- code highlighter: -->
  <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-dark.min.css">
  <script src="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/highlight.min.js"></script>
  <script>
    hljs.highlightAll();
  </script>

  <!-- button icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <?php include 'color-modes.php'; ?>
  <?php include 'header.php'; ?>

  <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Carousel</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav> -->
  <main>
    <div class="container-sm marketing">
      <div class="my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-4">
          <div class="container py-5">
            <h1 class="text-body-emphasis">Remember!</h1>
            <p class="col-lg-8 mx-auto lead">
              When you choose to add one or more of these features to your code, don't forget to push them to the timeline !
              <br><br>
              <code>timeline.push(name_of_the_feature_trial)</code>
            </p>
          </div>
        </div>
      </div>
      <hr class="featurette-divider" />
      <div class="row featurette">
        <div class="col-md-5">
          <h2 class="featurette-heading fw-normal lh-1">
            Browser Check :
            <br>
            <span style="font-size: 35px;">Making sure the participant's set-up is functional</span>
          </h2>
          <p class="lead">
            The participant must use a compatible browser (Firefox or Chrome) on their computer.
            <br>
            Their screen must be large enough to display the experiment.
          </p>
        </div>
        <div class="col-md-7">
          <div>
            <div class="position-relative">
              <pre class="feature-code browser-check"><code>const browser_check = {
  type: jsPsychBrowserCheck,
  features : ["browser", "mobile", "width", "height"],
  allow_window_resize: true,
  minimum_height: 600,
  minimum_width: 800,
  inclusion_function: (data) => {
    return (data.browser === 'chrome' || data.browser === 'firefox') && data.mobile === false
  },
  exclusion_message: (data) => {
    if(data.mobile){
      return '<p>You must use a desktop/laptop computer to participate in this experiment.</p>';
    } else if (data.browser !== 'firefox' && data.browser !== 'chrome') {
      return '<p>Unfortunately, this study is not compatible with your browser.</p>' +
        '<p>Please reopen this experiment from a supported browser (like Chrome or Firefox).</p>'
    }
  }
};</code></pre>
              <button type="button" class="copy top-buttons" data-copy=".browser-check">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/bw-check.html" class="open-demo top-buttons">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab
              </a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-bc"><code>timeline.push(browser_check)</code></pre>
              <button type="button" class="copy-tl" data-copy=".push-bc">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
            </div>
          </div>
        </div>
        <hr class="featurette-divider" />
        <div class="row featurette">
          <div class="col-md-5 order-md-2 desc">
            <h2 class="featurette-heading fw-normal lh-1">
              Attention Check :
              <br>
              <span style="font-size: 35px;">Making sure the participant was attentive during the task</span>
            </h2>
            <p class="lead">
              The participant is tested on their attention to the task.
              <br>
              Their data could later be left unused if the attention check is incorrect.
            </p>
          </div>
          <div class="col-md-7 feature-code order-md-1">
            <div class="position-relative">
              <pre class="feature-code attention-check"><code>const attention_check = {
  type: jsPsychSurveyText,
  data: {trial: "attention_check"},
  preamble: "<p class ='instructions'>When asked for your favorite color, please enter the word baguette in the box below.</p>",
  questions: [{
    prompt: "<p class='instructions'>Based on the text above, what is your favorite color?</p>"
  }],
  button_label: "Submit",
};</code></pre>
              <button type="button" class="copy top-buttons" data-copy=".attention-check">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/att-check.html" class="open-demo top-buttons">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab</a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-ac"><code>timeline.push(attention_check)</code></pre>
              <button type="button" class="copy-tl" data-copy=".push-ac">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
            </div>
          </div>
        </div>
        <hr class="featurette-divider" />
        <div class="row featurette">
          <div class="col-md-5">
            <h2 class="featurette-heading fw-normal lh-1">
              Demographic Questions :
              <br>
              <span style="font-size: 35px;">Who was the participant?</span>
            </h2>
            <p class="lead">
              At the end of the experiment, you have the possibility to ask demographic questions to find out about your participant.
              Be mindful of the privacy constraints in the questions you choose to ask.
            </p>
          </div>
          <div class="col-md-7 feature-code order-md-1">
            <div class="position-relative">
              <pre class="feature-code demo-qu"><code>const vaast_demographic_questions = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'> Task 1: Video Game Task</h1>" +
    "<p class='instructions'>The Video Game task is now completed.</p>" +
    "<p class='instructions'>We will now ask you some demographic questions.</p>" +
    "<p class='instructions'>Please exit the fullscreen mode by pressing <b>space</b> to continue.</p>" +
    "<p class = 'continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [" "]
};</code></pre>
              <button type="button" class="copy top-buttons" data-copy=".demo-qu">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/demo-qu.html" class="open-demo top-buttons">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab
              </a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-dq"><code>timeline.push(vaast_demographic_questions)</code></pre>
              <button type="button" class="copy-tl" data-copy=".push-dq">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center my-5">
          <button type="button" class="showOrHide btn text-center mb-5">
            <ion-icon name="eye-outline" class="eye-icon show-hide-icon"></ion-icon>
            <span class="btn-label">View question examples</span>
          </button>
        </div>

        <div id="more-qu" style="display: none">
          <hr class="featurette-divider my-4" />
          <div class="d-flex flex-column">
            <div class="p-2">
              <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
                Age: <span class="lead">Their answer must be a positive numeric value</span>
              </h2>
              <p>* Be aware that every wrong answer the participant makes is still saved.
                Only use the last (valid) anwser in your analysis.</p>
            </div>
            <div class="p-2">
              <div class="position-relative">
                <pre class="feature-code qu-age"><code>const extra_information_age = {
  timeline: [{
    type: jsPsychSurveyText,
    questions: [{prompt: "How old are you?",
                 required: true, 
                 name: "age"}],
    button_label: "Confirm",
  }],
  loop_function: function() {
    let trial_data = jsPsych.data.getLastTrialData().values()[0];
    let age = "";
    if (trial_data.response && trial_data.response.age !== undefined) {
      age = trial_data.response.age.trim();
    }
    // Checks whether the given answer is a number or not (if not, asks to answer again)
    if (!/^\d+$/.test(age) || parseInt(age) < 1) {
      alert("Please enter your age as a number (e.g., 25).");
      return true; // asks again
    }
    return false;
  }
};</code></pre>
                <button type="button" class="copy top-buttons" data-copy=".qu-age">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-age.html" class="open-demo top-buttons">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-age"><code>timeline.push(extra_information_age)</code></pre>
                <button type="button" class="copy-tl" data-copy=".push-age">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>

          <br>

          <div class="d-flex flex-column">
            <div class="p-2">
              <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
                Sex:
              </h2>
            </div>
            <div class="p-2">
              <div class="position-relative">
                <pre class="feature-code qu-sex"><code>const extra_information_sex = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "Please indicate your sex:", 
               options: ["&nbspMale", "&nbspFemale", "&nbspOther"], 
               required: true, horizontal: true, 
               name: "sex"}],
  button_label: "Confirm"
};</code></pre>
                <button type="button" class="copy top-buttons" data-copy=".qu-sex">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-sex.html" class="open-demo top-buttons">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-sex"><code>timeline.push(extra_information_sex)</code></pre>
                <button type="button" class="copy-tl" data-copy=".push-sex">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>

          <br>

          <div class="d-flex flex-column">
            <div class="p-2">
              <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
                English fluency:
              </h2>
            </div>
            <div class="p-2">
              <div class="position-relative">
                <pre class="feature-code qu-eng"><code>const extra_information_fluency = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "How well do you speak English?",
               options: ["&nbspFluently", "&nbspVery well", "&nbspWell", "&nbspAverage", "&nbspBadly", "&nbspVery badly"],
               required: true, horizontal: false,
               name: "fluency"}],
  button_label: "Confirm"
};</code></pre>
                <button type="button" class="copy top-buttons" data-copy=".qu-eng">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-eng.html" class="open-demo top-buttons">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-eng"><code>timeline.push(extra_information_fluency)</code></pre>
                <button type="button" class="copy-tl" data-copy=".push-eng">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>

          <br>

          <div class="d-flex flex-column">
            <div class="p-2">
              <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
                Socioeconomic status:
              </h2>
            </div>
            <div class="p-2">
              <div class="position-relative">
                <pre class="feature-code qu-ses"><code>const extra_information_ses = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "What is your socioeconomic status?",
               options: ["&nbspVery low", "&nbspLow", "&nbspMedium", "&nbspHigh", "&nbspVery high"],
               required: true, horizontal: false, 
               name: "socioeconomic status"}],
  button_label: "Submit"
};</code></pre>
                <button type="button" class="copy top-buttons" data-copy=".qu-ses">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-ses.html" class="open-demo top-buttons">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-ses"><code>timeline.push(extra_information_ses)</code></pre>
                <button type="button" class="copy-tl" data-copy=".push-ses">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>

          <br>

          <div class="d-flex flex-column">
            <div class="p-2">
              <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
                Highest level of education:
              </h2>
            </div>
            <div class="p-2">
              <div class="position-relative">
                <pre class="feature-code qu-ed"><code>const extra_information_edu = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "What is your highest level of education?",
               options: ["&nbspDid not complete high school", "&nbspHigh school/GED", "&nbspSome college", "&nbspBachelor's degree", "&nbspMaster's degree", "&nbspAdvanced graduate work or Ph.D."],
               required: true, horizontal: false, 
               name: "education"}],
  button_label: "Submit"
};</code></pre>
                <button type="button" class="copy top-buttons" data-copy=".qu-ed">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-ed.html" class="open-demo top-buttons">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-ed"><code>timeline.push(extra_information_edu)</code></pre>
                <button type="button" class="copy-tl" data-copy=".push-ed">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>

          <br>

          <div class="d-flex flex-column">
            <div class="p-2">
              <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
                Participant comments:
              </h2>
            </div>
            <div class="p-2">
              <div class="position-relative">
                <pre class="feature-code remarks"><code>const extra_information_remarks = {
  type: jsPsychSurveyText,
  questions: [{prompt: "Do you have any remarks about this study? [Optional]",
               name: "remarks"}],
  button_label: "Submit"
};</code></pre>
                <button type="button" class="copy top-buttons" data-copy=".remarks">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/remarks.html" class="open-demo top-buttons">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-rem"><code>timeline.push(extra_information_remarks)</code></pre>
                <button type="button" class="copy-tl" data-copy=".push-rem">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- /END THE FEATURETTES -->
      </div>
      <!-- /.container -->
      <!-- FOOTER -->
  </main>
  <?php include 'footer.php'; ?>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"
    class="astro-vvvwv3sm"></script>
  <script src="js/copy-button.js"></script>
  <script src="js/active-hd.js"></script>
  <script src="js/show-hide-button.js"></script>
</body>

</html>