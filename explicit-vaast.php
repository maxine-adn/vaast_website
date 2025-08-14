<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Mock study on Movement and Reaction Times</title>

        <!-- bootbox -->
        <script src="trials/js/jquery.min.js"></script>
        <script src="trials/js/bootstrap.min.js"></script>
        <script src="trials/js/bootbox.min.js"></script>
        
        <!-- jsPsych core library and plugins -->
    	<script src="https://unpkg.com/jspsych@8.2.1"></script>
        <script src="https://unpkg.com/@jspsych/plugin-html-keyboard-response@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-survey-text@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-survey-multi-choice@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-call-function@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-fullscreen@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-html-button-response@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-preload@2.1.0"></script>
        <script src="https://unpkg.com/@jspsych/plugin-browser-check@2.1.0"></script>

        <!-- VAAST custom plugins -->
        <script src = "js/vaast-plugins/jspsych-vaast-image.js"></script>
    	<script src = "js/vaast-plugins/jspsych-vaast-text.js"></script>
    	<script src = "js/vaast-plugins/jspsych-vaast-fixation.js"></script>

    	<!-- style sheet --> 
    	<link href="https://unpkg.com/jspsych@8.2.1/css/jspsych.css" rel="stylesheet" type="text/css"/>
    	<link href="trials/css/custom.css" rel="stylesheet"/>
        <link href="trials/css/bootstrap.min.css" rel="stylesheet"/>
    	<link href="https://fonts.googleapis.com/css?family=Questrial|Slabo+27px" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"/>

  	</head>
  <body></body>
  <script>
// LICENCE -----------------------------------------------------------------------------
//
// Copyright 2018 - Cédric Batailler
//
// Permission is hereby granted, free of charge, to any person obtaining a copy of this
// software and associated documentation files (the "Software"), to deal in the Software
// without restriction, including without limitation the rights to use, copy, modify,
// merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
// permit persons to whom the Software is furnished to do so, subject to the following
// conditions:
//
// The above copyright notice and this permission notice shall be included in all copies
// or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
// INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
// PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
// HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
// CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
// OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
//
// --------------------------------------------------------------------------------------

var jsPsych = initJsPsych({
  on_interaction_data_update: function() {
    saving_browser_events(completion = false);
  },
  on_finish: function() {
    saving_browser_events(completion = true);
    window.location.href = "your-redirection-url";
  }
});

// VAAST --------------------------------------------------------------------------------
// Variables used to define the experimental conditions
const vaast_cond_block_1 = jsPsych.randomization.sampleWithoutReplacement(["app_pos", "app_neg"], 1)[0];
const vaast_cond_block_2 = vaast_cond_block_1 === "app_pos" ? "app_neg" : "app_pos";

// VAAST variables ----------------------------------------------------------------------
const vaast_conditions = {
  app_pos: {
    move_pos: "approach",
    move_neg: "avoidance",
    stim_to_approach: "positive words",
    stim_to_avoid: "negative words"
  },
  app_neg: {
    move_pos: "avoidance",
    move_neg: "approach",
    stim_to_approach: "negative words",
    stim_to_avoid: "positive words"
  }
};

const cond1 = vaast_conditions[vaast_cond_block_1];
const cond2 = vaast_conditions[vaast_cond_block_2];

const move_pos_1 = cond1.move_pos;
const move_neg_1 = cond1.move_neg;
const stim_to_approach_1 = cond1.stim_to_approach;
const stim_to_avoid_1 = cond1.stim_to_avoid;
  
const move_pos_2 = cond2.move_pos;
const move_neg_2 = cond2.move_neg;
const stim_to_approach_2 = cond2.stim_to_approach;
const stim_to_avoid_2 = cond2.stim_to_avoid;  

bg_preview = "trials/media/vaast-background";

// VAAST stimuli ------------------------------------------------------------------------
const vaast_stim_training_block_1_words = [
  {stimulus: 'courage',     category: "pos", movement: move_pos_1},
  {stimulus: 'poverty',     category: "neg", movement: move_neg_1},
];

const vaast_stim_block_1_words = [
  {stimulus: 'accomplishment',  category: "pos",  movement: move_pos_1},
  {stimulus: 'comedy',          category: "pos",  movement: move_pos_1},
  {stimulus: 'friendship',      category: "pos",  movement: move_pos_1},
  {stimulus: 'sunshine',        category: "pos",  movement: move_pos_1},
  {stimulus: 'coma',            category: "neg",  movement: move_neg_1},
  {stimulus: 'disaster',        category: "neg",  movement: move_neg_1},
  {stimulus: 'guilt',           category: "neg",  movement: move_neg_1},
  {stimulus: 'nightmare',       category: "neg",  movement: move_neg_1},
];

const vaast_stim_training_block_2_words = [
  {stimulus: 'courage',     category: "pos", movement: move_pos_2},
  {stimulus: 'poverty',     category: "neg", movement: move_neg_2},
];

const vaast_stim_block_2_words = [
  {stimulus: 'accomplishment',  category: "pos",  movement: move_pos_2},
  {stimulus: 'comedy',          category: "pos",  movement: move_pos_2},
  {stimulus: 'friendship',      category: "pos",  movement: move_pos_2},
  {stimulus: 'sunshine',        category: "pos",  movement: move_pos_2},
  {stimulus: 'coma',            category: "neg",  movement: move_neg_2},
  {stimulus: 'disaster',        category: "neg",  movement: move_neg_2},
  {stimulus: 'guilt',           category: "neg",  movement: move_neg_2},
  {stimulus: 'nightmare',       category: "neg",  movement: move_neg_2},
];

const background = [
"trials/background/1.jpg",
"trials/background/3.jpg",
"trials/background/5.jpg"
];

// VAAST stimuli sizes -------------------------------------------------------------------
const word_sizes = [
  38,
  46,
  60
];

// Global variables:
const approach_key  = "T";
const avoidance_key = "B";

// Cursor helper functions -------------------------------------------------------------
const hiding_cursor = {
  type: jsPsychCallFunction,
  func: function() {
    document.body.style.cursor= "none";
  }
}
  
const showing_cursor = {
  type: jsPsychCallFunction,
  func: function() {
    document.body.style.cursor= "auto";
  }
}

// Helper function ---------------------------------------------------------------------
const next_position = function() {
  const current_position = jsPsych.data.getLastTrialData().values()[0].position;
  const current_response = jsPsych.data.getLastTrialData().values()[0].key_press;
  let position = current_position;

  if(jsPsych.pluginAPI.compareKeys(current_response, approach_key)) {
    position = position + 1;
  }

  if(jsPsych.pluginAPI.compareKeys(current_response, avoidance_key)) {
    position = position - 1;
  }

  return(position)
}

// Preloading
const all_backgrounds = [
"trials/media/loading.gif", 
"trials/media/vaast-background.jpg",
"trials/media/keyboard-vaast-tgb3.png",
"trials/background/1.jpg",
"trials/background/3.jpg",
"trials/background/5.jpg"
];

const preload = {
  type: jsPsychPreload,
  images: all_backgrounds
};

const welcome = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'> Welcome </h1>" +
    "<p class='instructions'>This is a mock experiment of the explicit VAAST.<p>" +
    "<p class='instructions'>During this mock experiment, you will have to complete a categorization task. " +
    "Your performance data will be visible at the end of the mock experiment.</p>" +
    "<p class='instructions'>We do <strong>NOT</strong/> save your performance on this task or record any identifying information.</p>" +
    "<p class='instructions'>The data  " +
    "<p class = 'continue-instructions'>Press <strong>space</strong> to start the study.</p>",
  choices: [' ']
};

// Switching to fullscreen --------------------------------------------------------------
const fullscreen_trial = {
  type: jsPsychFullscreen,
  message:  '<p>To take part in this mock study, your browser needs to be set to fullscreen.</p>',
  button_label: 'Switch to fullscreen',
  fullscreen_mode: true
}

// VAAST instructions -------------------------------------------------------------------
const vaast_instructions_1 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task</h1>" +
    "<p class='instructions'>In this task, like in a video game, you will see an environment " +
    "(presented below) in which you will be able to move forward or backward.</p>" +
    "<p class='instructions'></p>" +
      "<img src = '" + bg_preview + "'>" +
    "<br><br>" +
    "<p class = 'continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
};

const vaast_instructions_2 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task</h1>" +
    "<p class='instructions'>Words will appear in this environment and your task " +
    "will be to move forward or backward as a function of the type of word (more specific instructions following).</p>" +
    "<p class='instructions'> To move forward or backward, you will use the following keys of your keyboard:</p>" +
    "<p class='instructions'></p>" +
      "<img src = 'trials/media/keyboard-vaast-tgb3.png'/>" +
    "<br><br>" +
    "<p class = 'continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
};

const vaast_instructions_3 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task</h1>" +
    "<p class='instructions'>At the beginning of each trial, you will see the 'O' symbol. " +
    "This symbol indicates that you have to press the <b>START key</b> (namely the <b>G key</b>) to start the trial.</p>" +
    "<p class='instructions'>Then, you will see a fixation cross (+) at the center of the screen, followed by a word.</p>" +
    "<p class='instructions'>Your task is to move forward or backward by pressing the <b>MOVE FORWARD</b> " +
    "(the <b>T key</b>) or the <b>MOVE BACKWARD</b> (the <b>B key</b>) key <strong>as fast as possible</strong>.</p>" +
    "<p class='instructions'>For all of these actions, please only use the index of your dominant hand.</p>" +
    "<p class='continue-instructions'>Press <strong>space</strong> to start the task.</p>",
  choices: [' ']
};

const vaast_instructions_training_block_1 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task: Section 1</h1>" +
    "<p class='instructions'><center><strong>INSTRUCTION FOR THIS FIRST SECTION</strong></center></p>" +
    "<p class='instructions'>In this section, you have to:</p>" +
     "<ul class='instructions'>" +
      "<li><strong>APPROACH " + stim_to_approach_1 + " by pressing the MOVE FORWARD key <br>(i.e., the " + approach_key + " key)</strong></li>" +
      "<li><strong>AVOID " + stim_to_avoid_1 + " by pressing the MOVE BACKWARD key <br>(i.e., the " + avoidance_key + " key)</strong></li>" +
     "</ul>" +
    "<p class='instructions'>You will start with a training phase.</p>" +
    "<p class='instructions'><u>WARNING:</u> we will report your errors ONLY during the training phase, " +
    "so it is important that you read carefully and memorize the instructions above.</p>" +
    "<p class='continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
};

const vaast_instructions_test_block_1 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task: Section 1</h1>" +
    "<p class='instructions'>The training phase is now over.</p>" +
    "<p class='instructions'><u>WARNING:</u> you will no longer have a message to report your errors.</p>" +
    "<p class='instructions'>As a reminder, you have to:</p>" +
      "<ul class='instructions'>" +
        "<li><strong>APPROACH " + stim_to_approach_1 + " by pressing the MOVE FORWARD key <br>(i.e., the " + approach_key + " key)</strong></li>" +
        "<li><strong>AVOID " + stim_to_avoid_1 + " by pressing the MOVE BACKWARD key <br>(i.e., the " + avoidance_key + " key)</strong></li>" +
      "</ul>" +
    "<p class='continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
};

const vaast_instructions_training_block_2 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task: Section 2</h1>" +
    "<p class='instructions'><center><strong>INSTRUCTION FOR THIS SECOND SECTION</strong></center></p>" +
    "<p class='instructions'>In this section, you have to:</p>" +
      "<ul class='instructions'>" +
        "<li><strong>APPROACH " + stim_to_approach_2 + " by pressing the MOVE FORWARD key <br>(i.e., the " + approach_key + " key)</strong></li>" +
        "<li><strong>AVOID " + stim_to_avoid_2 + " by pressing the MOVE BACKWARD key <br>(i.e., the " + avoidance_key + " key)</strong></li>" +
      "</ul>" +
    "<p class='instructions'>You will start with a training phase.</p>" +
    "<p class='instructions'><u>WARNING:</u> we will report your errors ONLY during the training phase, " +
    "so it is important that you read carefully and memorize the instructions above.</p>" +
    "<p class='continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
};
const vaast_instructions_test_block_2 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<h1 class ='custom-title'>Video Game Task: Section 2</h1>" +
    "<p class='instructions'>The training phase is now over.</p>" +
    "<p class='instructions'><u>WARNING:</u> you will no longer have a message to report your errors.</p>" +
    "<p class='instructions'>As a reminder, you have to:</p>" +
      "<ul class='instructions'>" +
        "<li><strong>APPROACH " + stim_to_approach_2 + " by pressing the MOVE FORWARD key <br>(i.e., the " + approach_key + " key)</strong></li>" +
        "<li><strong>AVOID " + stim_to_avoid_2 + " by pressing the MOVE BACKWARD key <br>(i.e., the " + avoidance_key + " key)</strong></li>" +
      "</ul>" +
    "<p class='continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
};

const vaast_instructions_4 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<p class='instructions'><center>Before you start:</center></p>" +
    "<p class='instructions'>Remember that it is EXTREMELY IMPORTANT that you try to " +
    "respond as fast and as correctly as possible.</p>" +
    "<br>" +
    "<p class='continue-instructions'>Press <strong>space</strong> to continue.</p>",
  choices: [' ']
}

const vaast_instructions_5 = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<p class='instructions'><center><strong>End of this section</strong></center></p>" +
    "<br>" +
    "<p class = 'continue-instructions'><center>Press <strong>space</strong> to continue.</center></p>",
  choices: [' ']
};

// VAAST trials ---------------------------------------------------------------------
const vaast_start = {
  type: jsPsychVaastText,
  stimulus: "o",
  position: 1,
  background_images: background,
  font_sizes:  word_sizes,
  approach_key: "g",
  stim_movement: "approach",
  html_when_wrong: '<span style="color: red; font-size: 80px">&times;</span>',
  force_correct_key_press: true,
  display_feedback: false,
  response_ends_trial: true
}

const vaast_fixation = {
  type: jsPsychVaastFixation,
  fixation: "+",
  font_size: 46,
  position: 1,
  background_images: background
}

const vaast_first_step_train = {
  type: jsPsychVaastText,
  stimulus: jsPsych.timelineVariable('stimulus'),
  position: 1,
  background_images: background,
  font_sizes: word_sizes,
  stim_movement: jsPsych.timelineVariable('movement'),
  approach_key:  approach_key,
  avoidance_key: avoidance_key,
  html_when_wrong: '<span style="color: red; font-size: 80px">&times;</span>',
  force_correct_key_press: false,
  display_feedback: true,
  feedback_duration: 500, 
  response_ends_trial: true
}

const vaast_first_step = {
  type: jsPsychVaastText,
  stimulus: jsPsych.timelineVariable('stimulus'),
  position: 1,
  background_images: background,
  font_sizes: word_sizes,
  stim_movement: jsPsych.timelineVariable('movement'),
  approach_key:  approach_key,
  avoidance_key: avoidance_key,
  html_when_wrong: '<span style="color: red; font-size: 80px">&times;</span>',
  force_correct_key_press: false,
  display_feedback: false,
  response_ends_trial: true
}

const vaast_second_step = {
  type: jsPsychVaastText,
  position: next_position,
  stimulus: jsPsych.timelineVariable('stimulus'),
  background_images: background,
  font_sizes: word_sizes,
  stim_movement: jsPsych.timelineVariable('movement'),
  response_ends_trial: false,
  trial_duration: 500
}

const vaast_second_step_train = {
  timeline: [vaast_second_step],
  conditional_function: function() {
    let trial_data = jsPsych.data.getLastTrialData().values()[0];
    return trial_data.correct;
  }
}

// VAAST blocks ---------------------------------------------------------------------
const vaast_training_block_1 = {
  timeline: [
  	vaast_start, 
  	vaast_fixation, 
  	vaast_first_step_train, 
  	vaast_second_step_train
  ],
  timeline_variables: vaast_stim_training_block_1_words,
  repetitions: 1,
  randomize_order: true
};

const vaast_test_block_1 = {
  timeline: [
  	vaast_start, 
  	vaast_fixation, 
  	vaast_first_step, 
  	vaast_second_step
  ],
  timeline_variables: vaast_stim_block_1_words,
  repetitions: 1,
  randomize_order: true
};

const vaast_training_block_2 = {
  timeline: [
  	vaast_start, 
  	vaast_fixation, 
  	vaast_first_step_train, 
  	vaast_second_step_train
  ],
  timeline_variables: vaast_stim_training_block_2_words,
  repetitions: 1,
  randomize_order: true
};

const vaast_test_block_2 = {
  timeline: [
  	vaast_start, 
  	vaast_fixation, 
  	vaast_first_step, 
  	vaast_second_step
  ],
  timeline_variables: vaast_stim_block_2_words,
  repetitions: 1,
  randomize_order: true
};

// End fullscreen -----------------------------------------------------------------------

const fullscreen_trial_exit = {
  type: jsPsychFullscreen,
  fullscreen_mode: false
}

// End instructions ---------------------------------------------------------------------
const ending = {
  type: jsPsychHtmlKeyboardResponse,
  stimulus:
    "<p class='instructions'>You are now finished with this mock study.<p>" +
    "<p class='instructions'>In this study, we were interested in the measure of " +
    "approach and avoidance tendencies. Research show that individuals are generally " +
    "faster to approach positive stimuli and to avoid negative stimuli (rather than the reverse). </p>" +
    "<p class='instructions'> Here, we wanted to see if this effect was larger for one visual environment " +
    "compared to the other. </p>" +
    "<p class='instructions'>The data will now be printed on the screen.</p>",
  choices: [' ']
};

// Procedure ----------------------------------------------------------------------------
// Initialize timeline ------------------------------------------------------------------
  
const timeline = [];

timeline.push(preload);

timeline.push(welcome);


// fullscreen
timeline.push(fullscreen_trial);

// vaast - instructions
timeline.push(vaast_instructions_1,
              vaast_instructions_2,
              vaast_instructions_3,
              hiding_cursor);

// vaast - blocks
timeline.push(vaast_instructions_training_block_1,
              vaast_instructions_4,
              vaast_training_block_1,
              vaast_instructions_test_block_1,
              vaast_test_block_1,
              vaast_instructions_5,
              vaast_instructions_training_block_2,
              vaast_instructions_4,
              vaast_training_block_2,
              vaast_instructions_test_block_2,
              vaast_test_block_2,
              vaast_instructions_5);

// vaast - end
timeline.push(fullscreen_trial_exit,
              showing_cursor); 

// ending
timeline.push(ending);

// Launch experiment --------------------------------------------------------------------
jsPsych.run(timeline);
  </script>
</html>