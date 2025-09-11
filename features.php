<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>Features</title>
  <script src="assets/js/color-modes.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <meta name="theme-color" content="#712cf9" />
  <link href="css/features.css" rel="stylesheet" />
  <link href="css/all.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
    rel="stylesheet" />

  <!-- button icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  
  <?php include 'header.php'; ?>

  <main class="container-sm">
    <div class="container-sm marketing">
      <div class="my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-4">
          <div class="container py-5">
            <h1 class="text-body-emphasis">Remember!</h1>
            <p class="col-lg-8 mx-auto lead">
              When you choose to add one or more of these features to your code, don't forget to push them to the timeline!
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
            Browser Check:
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
              <pre class="feature-code browser-check"><code data-language="javascript">const browser_check = {
  type: jsPsychBrowserCheck,
  features: ["browser", "mobile", "width", "height"],
  allow_window_resize: true,
  minimum_height: 600,
  minimum_width: 800,
  inclusion_function: (data) => {
    return (data.browser === 'chrome' || data.browser === 'firefox') && data.mobile === false
  },
  exclusion_message: (data) => {
    if(data.mobile){
      return '&lt;p&gt;You must use a desktop/laptop computer to participate in this experiment.&lt;/p&gt;';
    } else if (data.browser !== 'firefox' && data.browser !== 'chrome') {
      return '&lt;p&gt;Unfortunately, this study is not compatible with your browser.&lt;/p&gt;' +
        '&lt;p&gt;Please reopen this experiment from a supported browser (like Chrome or Firefox).&lt;/p&gt;'
    }
  }
};</code></pre>
              <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".browser-check">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/bw-check.html" class="open-demo top-buttons bg-body-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab
              </a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-bc"><code>timeline.push(browser_check)</code></pre>
              <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-bc">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
            </div>
          </div>
        </div>
        <hr class="featurette-divider" />

        <div class="d-flex flex-column">
          <div class="p-2">
            <h2 class="featurette-heading fw-normal lh-1 demo-question-title">
              Enough time:
            </h2>
            <p class="lead">The participant is asked if they do or do not have enough time to complete the experiment.</p>
          </div>
          <div class="p-2">
            <div class="position-relative">
              <pre class="feature-code time"><code data-language="javascript">const enough_time = {
  type: jsPsychHtmlButtonResponse,
  stimulus:
    "&lt;p class='instructions'&gt;Before going further, please note that this study should take " +
    "15-17 minutes to complete.&lt;/p&gt;",
  choices: ['I have enough time', 'I do not have enough time'],
};

const not_enough_time_to_complete = {
  type: jsPsychHtmlButtonResponse,
  stimulus: '&lt;p&gt;Please come back later to take part in this experiment.&lt;/p&gt;',
  choices: ['Go back to Prolific Academic'],
};

const redirect_to_prolific = {
  type: jsPsychCallFunction,
  func: function() {
    window.location.href = "https://www.prolific.ac/";
    jsPsych.pauseExperiment();
  }
}

const if_not_enough_time = {
  timeline: [not_enough_time_to_complete, redirect_to_prolific],
  conditional_function: function() {
    // get the data from the previous trial,
    // and check which key was pressed
    let trial_data = jsPsych.data.getLastTrialData().values()[0].response;
    if(trial_data == 1){ // participant says they don't have enough time
      return true;
    } else { // participant says they have enough time
      return false;
    }
  }
};</code></pre>
              <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".time">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/enough-time.html" class="open-demo top-buttons bg-body-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab
              </a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-time"><code>timeline.push(enough_time, if_not_enough_time)</code></pre>
              <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-time">
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
              Attention Check:
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
              <pre class="feature-code attention-check"><code data-language="javascript">const attention_check = {
  type: jsPsychSurveyText,
  data: {trial: "attention_check"},
  preamble: "&lt;p class ='instructions'&gt;When asked for your favorite color, please enter the word baguette in the box below.&lt;/p&gt;",
  questions: [{
    prompt: "&lt;p class='instructions'&gt;Based on the text above, what is your favorite color?&lt;/p&gt;"
  }],
  button_label: "Submit",
};</code></pre>
              <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".attention-check">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/att-check.html" class="open-demo top-buttons bg-body-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab</a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-ac"><code>timeline.push(attention_check)</code></pre>
              <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-ac">
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
              Demographic Questions:
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
              <pre class="feature-code demo-qu"><code data-language="javascript">const vaast_demographic_questions = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "&lt;p class='instructions'&gt;The study is almost finished. Now, you have to answer a few questions.&lt;/p&gt;" +
    "&lt;p class='continue-instructions'&gt;Press &lt;strong&gt;space&lt;/strong&gt; to continue.&lt;/p&gt;",
  choices: [" "]
};</code></pre>
              <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".demo-qu">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
              <a target="_blank" rel="noopener noreferrer" href="features/demo-qu.html" class="open-demo top-buttons bg-body-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                </svg>
                Open demo in new tab
              </a>
            </div>
            <div class="position-relative">
              <pre class="push-tl push-dq"><code>timeline.push(vaast_demographic_questions)</code></pre>
              <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-dq">
                <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                <span class="copy-label">Copy</span>
              </button>
            </div>
          </div>
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
                <pre class="feature-code qu-age"><code data-language="javascript">const extra_information_age = {
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
                <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".qu-age">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-age.html" class="open-demo top-buttons bg-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-age"><code>timeline.push(extra_information_age)</code></pre>
                <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=" .push-age">
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
                <pre class="feature-code qu-sex"><code data-language="javascript">const extra_information_sex = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "Please indicate your sex:", 
               options: ["&nbspMale", "&nbspFemale", "&nbspOther"], 
               required: true, horizontal: true, 
               name: "sex"}],
  button_label: "Confirm"
};</code></pre>
                <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".qu-sex">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-sex.html" class="open-demo top-buttons bg-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-sex"><code>timeline.push(extra_information_sex)</code></pre>
                <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-sex">
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
                <pre class="feature-code qu-eng" data-bs-theme="dark"><code data-language="javascript">const extra_information_fluency = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "How well do you speak English?",
               options: ["&nbspFluently", "&nbspVery well", "&nbspWell", "&nbspAverage", "&nbspBadly", "&nbspVery badly"],
               required: true, horizontal: false,
               name: "fluency"}],
  button_label: "Confirm"
};</code></pre>
                <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".qu-eng">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-eng.html" class="open-demo top-buttons bg-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-eng"><code>timeline.push(extra_information_fluency)</code></pre>
                <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-eng">
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
                <pre class="feature-code qu-ses"><code data-language="javascript">const extra_information_ses = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "What is your socioeconomic status?",
               options: ["&nbspVery low", "&nbspLow", "&nbspMedium", "&nbspHigh", "&nbspVery high"],
               required: true, horizontal: false, 
               name: "socioeconomic status"}],
  button_label: "Submit"
};</code></pre>
                <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".qu-ses">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-ses.html" class="open-demo top-buttons bg-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-ses"><code>timeline.push(extra_information_ses)</code></pre>
                <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-ses">
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
                <pre class="feature-code qu-ed"><code data-language="javascript">const extra_information_edu = {
  type: jsPsychSurveyMultiChoice,
  questions: [{prompt: "What is your highest level of education?",
               options: ["&nbspDid not complete high school", "&nbspHigh school/GED", "&nbspSome college", "&nbspBachelor's degree", "&nbspMaster's degree", "&nbspAdvanced graduate work or Ph.D."],
               required: true, horizontal: false, 
               name: "education"}],
  button_label: "Submit"
};</code></pre>
                <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".qu-ed">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/qu-ed.html" class="open-demo top-buttons bg-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-ed"><code>timeline.push(extra_information_edu)</code></pre>
                <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-ed">
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
                <pre class="feature-code remarks"><code data-language="javascript">const extra_information_remarks = {
  type: jsPsychSurveyText,
  questions: [{prompt: "Do you have any remarks about this study? [Optional]",
               name: "remarks"}],
  button_label: "Submit"
};</code></pre>
                <button type="button" class="copy copy-ft top-buttons bg-body-secondary" data-copy=".remarks">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
                <a target="_blank" rel="noopener noreferrer" href="features/remarks.html" class="open-demo top-buttons bg-body-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                  </svg>
                  Open demo in new tab
                </a>
              </div>
              <div class="position-relative">
                <pre class="push-tl push-rem"><code>timeline.push(extra_information_remarks)</code></pre>
                <button type="button" class="copy-tl copy-ft bg-body-secondary" data-copy=".push-rem">
                  <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                  <span class="copy-label">Copy</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center my-5">
          <button type="button" class="showOrHide text-center mb-5 bg-body-secondary">
            <ion-icon name="eye-outline" class="eye-icon show-hide-icon"></ion-icon>
            <span class="btn-label">View question examples</span>
          </button>
        </div>

      </div>
    </div>

    <br>
    <hr />
    <br>

    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-lg-12 px-0">
        <h1 class="display-6 fst-italic fw-bold">
          Dive into the details of the experiment
        </h1>
        <p class="lead my-3">
          The VAAST was created using <a target="_blank" rel="noopener noreferrer" href="https://www.jspsych.org/latest/">jsPsych</a>.
          The technology behind the experiment is 3 plugins: vaast-fixation, vaast-text and vaast-image, that you can find in the <a href="future_vaast_file.zip">zip file</a>.
          <br>
          These plugins make it possible for a participant to view a fixation cross for a random duration on a background screen.
          They also make the movement happen when a participant chooses to approach or avoid a stimulus.
          <br>
          These plugins have a few parameters that can allow you to customise <strong>your</strong> experiment. Let's see in more details:
        </p>
      </div>
    </div>

    <br>

    <div class="table-around" style="min-width: 100%; overflow-x: auto;">
      <div class="table-box m-0" style="overflow-x: auto; min-width: 400px; padding: 2rem 2rem 1rem 2rem ;">
        <h2 style="margin-left: 0;">vaast-fixation plugin parameters</h2>
        <table class="table table-dark table-hover" style="table-layout: fixed; width: 100%; min-width: 400px;">
          <thead>
            <tr>
              <th scope="col" style="width: 22%;">Parameter</th>
              <th scope="col" style="width: 13%;">Type</th>
              <th scope="col" style="width: 15%;">Default Value</th>
              <th scope="col" style="width: 50%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="word-wrap: break-word;">fixation</th>
              <td style="word-wrap: break-word;">STRING</td>
              <td style="word-wrap: break-word;">'+'</td>
              <td style="word-wrap: break-word;">The string that is displayed as fixation.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">font_size</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">200</td>
              <td style="word-wrap: break-word;">Font size of the fixations text.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">min_duration</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">800</td>
              <td style="word-wrap: break-word;">Minimal duration (in ms).</td>
            <tr>
              <th scope="row" style="word-wrap: break-word;">max_duration</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">2000</td>
              <td style="word-wrap: break-word;">Maximal duration (in ms).</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">background_images</th>
              <td style="word-wrap: break-word;">IMAGE</td>
              <td style="word-wrap: break-word;">undefined</td>
              <td style="word-wrap: break-word;">An array with the images displayed as background as function of the position.</td>
            <tr>
              <th scope="row" style="word-wrap: break-word;">position</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">3</td>
              <td style="word-wrap: break-word;">The position in the "background_images" array which will be used to set the background.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <br>
    <hr />
    <br>

    <div class="table-around" style="min-width: 100%; overflow-x: auto;">
      <div class="table-box m-0" style="overflow-x: auto; min-width: 400px; padding: 2rem 2rem 1rem 2rem ;">
        <h2 style="margin-left: 0;">vaast-text and vaast-image plugin parameters</h2>
        <table class="table table-dark table-hover" style="table-layout: fixed; width: 100%; min-width: 400px;">
          <thead>
            <tr>
              <th scope="col" style="width: 22%;">Parameter</th>
              <th scope="col" style="width: 13%;">Type</th>
              <th scope="col" style="width: 15%;">Default Value</th>
              <th scope="col" style="width: 50%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" style="word-wrap: break-word;">stimulus</th>
              <td style="word-wrap: break-word;">STRING/IMAGE</td>
              <td style="word-wrap: break-word;">undefined</td>
              <td style="word-wrap: break-word;">The text/image to be displayed.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">approach_key</th>
              <td style="word-wrap: break-word;">KEY</td>
              <td style="word-wrap: break-word;">'Z'</td>
              <td style="word-wrap: break-word;">The key press associated with an approach movement.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">avoidance_key</th>
              <td style="word-wrap: break-word;">KEY</td>
              <td style="word-wrap: break-word;">'S'</td>
              <td style="word-wrap: break-word;">The key press associated with an avoidance movement.</td>
            <tr>
              <th scope="row" style="word-wrap: break-word;">key_to_move_forward</th>
              <td style="word-wrap: break-word;">KEYS</td>
              <td style="word-wrap: break-word;">"ALL_KEYS"</td>
              <td style="word-wrap: break-word;">This array contains the key(s) that the participant is allowed to press in order to advance to the next trial if their key press was incorrect.
                Keys should be specified as characters (e.g., `'a'`, `'q'`, `' '`, `'Enter'`, `'ArrowDown'`)
                - see {@link https://developer.mozilla.org/en-US/docs/Web/API/UI_Events/Keyboard_event_key_values this page} and
                {@link https://www.freecodecamp.org/news/javascript-keycode-list-keypress-event-key-codes/ this page (event.key column)} for more examples.
                Any key presses that are not listed in the array will be ignored. The default value of `"ALL_KEYS"` means that all keys will be accepted as valid responses.
                Specifying `"NO_KEYS"` will mean that no responses are allowed.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">display_feedback</th>
              <td style="word-wrap: break-word;">BOOL</td>
              <td style="word-wrap: break-word;">false</td>
              <td style="word-wrap: break-word;">If true, then the code included in 'html_when_wrong' will be displayed when the user makes an incorrect key press.</td>
            <tr>
              <th scope="row" style="word-wrap: break-word;">feedback_duration</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">null</td>
              <td style="word-wrap: break-word;">How long the feedback is shown (in ms).</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">html_when_wrong</th>
              <td style="word-wrap: break-word;">HTML_STRING</td>
              <td style="word-wrap: break-word;">'<span style="color: red; font-size: 80px">X</span>'</td>
              <td style="word-wrap: break-word;">The content to display when a user presses the wrong key.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">force_correct_key_press</th>
              <td style="word-wrap: break-word;">BOOL</td>
              <td style="word-wrap: break-word;">false</td>
              <td style="word-wrap: break-word;">If true, the user will be forced to press the correct key in order to advance to the next trial after a wrong key press.</td>
            <tr>
              <th scope="row" style="word-wrap: break-word;">stim_movement</th>
              <td style="word-wrap: break-word;">STRING</td>
              <td style="word-wrap: break-word;">undefined</td>
              <td style="word-wrap: break-word;">The movement associated with the stimulus (either "approach" or "avoidance").</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">font_sizes</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">null</td>
              <td style="word-wrap: break-word;">An array with the sizes of the string stimulus/ image as function of the position. The medium font corresponds to the stimulus font size when it's first presented.
                The smaller and larger fonts correspond to the stimulus font size when the movement is avoidance and approach, respectively.</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">response_ends_trial</th>
              <td style="word-wrap: break-word;">BOOL</td>
              <td style="word-wrap: break-word;">true</td>
              <td style="word-wrap: break-word;">If true, the trial will end when the user makes a response. True in trials in which the participant responds to a stimulus.
                False in trials where the participant sees the position change on the screen (background and stimulus).</td>
            </tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">trial_duration</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">null</td>
              <td style="word-wrap: break-word;">How long to wait for the participant to make a response before ending the trial, in milliseconds.
                If the value of this parameter is `null`, then the trial will wait for a response indefinitely.</td>
            <tr>
            <tr>
              <th scope="row" style="word-wrap: break-word;">background_images</th>
              <td style="word-wrap: break-word;">IMAGE</td>
              <td style="word-wrap: break-word;">undefined</td>
              <td style="word-wrap: break-word;">An array with the images displayed as background as function of the position.</td>
            <tr>
              <th scope="row" style="word-wrap: break-word;">position</th>
              <td style="word-wrap: break-word;">INT</td>
              <td style="word-wrap: break-word;">3</td>
              <td style="word-wrap: break-word;">The position in the "background_images" array which will be used to set the background.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <br>
    <hr />
    <br>


    <div>
      <h1>A little tree to see more clearly</h1>
      <p></p>
      <img class="img-fluid" src="media/tree.png" style="max-width: 100%; height: auto;"></img>
    </div>


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
  <!-- code highlighter: -->

  <script src="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/highlight.min.js"></script>
  <link data-bs-theme="dark" rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-dark.min.css">
  <link data-bs-theme="light" rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-light.min.css">
  <script>
    hljs.highlightAll();
  </script>
</body>

</html>