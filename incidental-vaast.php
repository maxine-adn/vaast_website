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
    <script src="trials/js/vaast-plugins/jspsych-vaast-image.js"></script>
    <script src="trials/js/vaast-plugins/jspsych-vaast-text.js"></script>
    <script src="trials/js/vaast-plugins/jspsych-vaast-fixation.js"></script>

    <!-- style sheet -->
    <link href="https://unpkg.com/jspsych@8.2.1/css/jspsych.css" rel="stylesheet" type="text/css" />
    <link href="trials/css/custom.css" rel="stylesheet" />
    <link href="trials/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Questrial|Slabo+27px" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet" />

</head>

<body></body>
<script>
    // LICENCE -----------------------------------------------------------------------------
    //
    // Copyright 2018 - Cédric Batailler  & Yoann Julliard
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
        on_finish: function() {
            jsPsych.data.displayData();
        }
    });

    // VAAST --------------------------------------------------------------------------------
    // Define experimental conditions
    const vaast_condition_approach = jsPsych.randomization.sampleWithoutReplacement(["approach_diamond", "approach_square"], 1)[0];

    // VAAST variables ----------------------------------------------------------------------
    let movement_diamond = undefined;
    let movement_square = undefined;
    let shape_to_approach = undefined;
    let shape_to_avoid = undefined;
    let shapeimage_to_approach = undefined;
    let shapeimage_to_avoid = undefined;

    switch (vaast_condition_approach) {
        case "approach_diamond":
            movement_diamond = "approach";
            movement_square = "avoidance";
            shape_to_approach = "diamonds";
            shape_to_avoid = "squares";
            shapeimage_to_approach = 'trials/stimuli/diamond_instructions.png';
            shapeimage_to_avoid = 'trials/stimuli/square_instructions.png';
            break;

        case "approach_square":
            movement_diamond = "avoidance";
            movement_square = "approach";
            shape_to_approach = "squares";
            shape_to_avoid = "diamonds";
            shapeimage_to_approach = 'trials/stimuli/square_instructions.png';
            shapeimage_to_avoid = 'trials/stimuli/diamond_instructions.png';
            break;
    }

    // VAAST stimuli ------------------------------------------------------------------------

    // Training stimuli
    const vaast_stim_training = [{
            movement: movement_diamond,
            shape: "diamonds",
            stimulus: 'trials/stimuli/diamond.png',
            valence: "neg",
            prime: "crime"
        },
        {
            movement: movement_diamond,
            shape: "diamonds",
            stimulus: 'trials/stimuli/diamond.png',
            valence: "pos",
            prime: "success"
        },
        {
            movement: movement_square,
            shape: "squares",
            stimulus: 'trials/stimuli/square.png',
            valence: "neg",
            prime: "evil"
        },
        {
            movement: movement_square,
            shape: "squares",
            stimulus: 'trials/stimuli/square.png',
            valence: "pos",
            prime: "reward"
        }
    ]

    // Test stimuli
    const vaast_stim_test = [{
            movement: movement_diamond,
            shape: "diamonds",
            stimulus: 'trials/stimuli/diamond.png',
            valence: "neg",
            prime: "death"
        },
        {
            movement: movement_diamond,
            shape: "diamonds",
            stimulus: 'trials/stimuli/diamond.png',
            valence: "neg",
            prime: "accident"
        },
        {
            movement: movement_diamond,
            shape: "diamonds",
            stimulus: 'trials/stimuli/diamond.png',
            valence: "pos",
            prime: "humor"
        },
        {
            movement: movement_diamond,
            shape: "diamonds",
            stimulus: 'trials/stimuli/diamond.png',
            valence: "pos",
            prime: "sun"
        },
        {
            movement: movement_square,
            shape: "squares",
            stimulus: 'trials/stimuli/square.png',
            valence: "neg",
            prime: "misery"
        },
        {
            movement: movement_square,
            shape: "squares",
            stimulus: 'trials/stimuli/square.png',
            valence: "neg",
            prime: "tomb"
        },
        {
            movement: movement_square,
            shape: "squares",
            stimulus: 'trials/stimuli/square.png',
            valence: "pos",
            prime: "party"
        },
        {
            movement: movement_square,
            shape: "squares",
            stimulus: 'trials/stimuli/square.png',
            valence: "pos",
            prime: "health"
        }
    ]

    const background = [
        "trials/background/1.jpg",
        "trials/background/3.jpg",
        "trials/background/5.jpg"
    ];

    // VAAST stimuli sizes -------------------------------------------------------------------
    const stim_sizes = [
        38,
        42,
        46
    ];

    const resize_factor = 7;
    const image_sizes = stim_sizes.map(function(x) {
        return x * resize_factor;
    });

    // Global variables:
    const approach_key = "T";
    const avoidance_key = "B";

    // Cursor helper functions -------------------------------------------------------------
    const hiding_cursor = {
        type: jsPsychCallFunction,
        func: function() {
            document.body.style.cursor = "none";
        }
    }

    const showing_cursor = {
        type: jsPsychCallFunction,
        func: function() {
            document.body.style.cursor = "auto";
        }
    }

    // Helper function ---------------------------------------------------------------------
    const next_position_training = function() {
        const current_position = jsPsych.data.getLastTrialData().values()[0].position;
        const current_movement = jsPsych.data.getLastTrialData().values()[0].movement;
        let position = current_position;

        if (current_movement == "approach") {
            position = position + 1;
        }

        if (current_movement == "avoidance") {
            position = position - 1;
        }

        return (position)
    }

    // Preloading
    const all_backgrounds = [
        "trials/media/vaast-background.png",
        "trials/media/keyboard-vaast-tgb3.png",
        "trials/background/1.jpg",
        "trials/background/3.jpg",
        "trials/background/5.jpg",
        "trials/stimuli/square.png",
        "trials/stimuli/diamond.png"
    ];

    const preload = {
        type: jsPsychPreload,
        images: all_backgrounds
    };

    const welcome = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<h1 class ='custom-title'> Welcome </h1>" +
            "<p class='instructions'>This is a mock experiment of the incidental VAAST.<p>" +
            "<p class='instructions'>During this mock experiment, you will have to complete a categorization task. " +
            "Your performance data will be visible at the end of the mock experiment.</p>" +
            "<p class='instructions'>We do <strong>NOT</strong/> save your performance on this task or record any identifying information.</p>" +
            "<p class = 'continue-instructions'>Press <strong>space</strong> to start the study.</p>",
        choices: [' ']
    };

    // Switching to fullscreen --------------------------------------------------------------
    const fullscreen_trial = {
        type: jsPsychFullscreen,
        message: '<p>To take part in this mock study, your browser needs to be set to fullscreen.</p>',
        button_label: 'Switch to fullscreen',
        fullscreen_mode: true
    }

    // VAAST instructions -------------------------------------------------------------------
    const vaast_instructions_1 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<h1 class ='custom-title'> Task 1: Video Game task</h1>" +
            "<p class='instructions'>A series of geometric shapes (squares or diamonds) will be displayed in this environment.</p>" +
            "<p class='instructions'>Your task will be to move forward or backward according to these geometric shapes as fast as possible.</p>" +
            "<p class='instructions'>More precise instructions will follow.</p>" +
            "<img src = 'trials/media/vaast-background.png'>" +
            "<br><br>" +
            "<p class = 'continue-instructions'>Press <strong>space</strong> to continue.</p>",
        choices: [' ']
    };

    const vaast_instructions_2 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<h1 class ='custom-title'> Task 1: Video Game task</h1>" +
            "<p class='instructions'>To move forward or backward, you will use the following keys of your keyboard:</p>" +
            "<img src = 'trials/media/keyboard-vaast-tgb3.png'>" +
            "<p class = 'continue-instructions'>Press <strong>space</strong> to continue.</p>",
        choices: [" "]
    };

    const vaast_instructions_3 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<h1 class ='custom-title'> Task 1: Video Game task</h1>" +
            "<p class='instructions'>At the beginning of each trial, you will see the 'O' symbol. " +
            "This symbol indicates that you have to press the START key (namely, the <b>G key</b>) to start the trial. </p>" +
            "<p class='instructions'>Then, you will see a fixation cross (+) at the center of the screen, followed by a word, and then by a geometric shape. </p>" +
            "<p class='instructions'><b>Your task is to ignore the word and to move forward or backward depending on the geometric shape</b>." +
            "<br> Once the geometric shape has disappeared, press again the START key (namely, the <b>G key</b>). " +
            "<p class='instructions'>Please <b>use only the index of your preferred hand</b> for all these actions. </p>" +
            "<p class = 'continue-instructions'>Press <strong>space</strong> to continue.</p>",
        choices: [" "]
    };

    const vaast_instructions_4 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<h1 class ='custom-title'> Task 1: Video Game task</h1>" +
            "<p class='instructions'>More precise instructions are displayed below. Your task is to:</p>" +
            "<ul class='instructions'>" +
            "<table>" +
            "<tr>" +
            "<td><img class=shape src = " + shapeimage_to_approach + "></td>" +
            "<td align='left'>APPROACH " + shape_to_approach + " by pressing the MOVE FORWARD key (namely, the <b>T key</b>)</td>" +
            "</tr>" +
            "<tr>" +
            "<td><img class=shape src = " + shapeimage_to_avoid + "></td>" +
            "<td align='left'>AVOID " + shape_to_avoid + " by pressing the MOVE BACKWARD key (namely, the <b>B key</b>)</td>" +
            "</tr>" +
            "</table>" +
            "</ul>" +
            "<p class='instructions'>Please read carefully and make sure that you memorize the instructions above. </p>" +
            "<p class='instructions'><strong>Also, note that it is EXTREMELY IMPORTANT THAT YOU TRY TO BE AS FAST AND ACCURATE AS YOU CAN. </strong>" +
            "<br>A red cross will appear if your response is incorrect.</p>" +
            "<p class='instructions'><b>Now, let's start with a training!</b></p>" +
            "<p class = 'continue-instructions'>Press <strong>space</strong> to start the training.</p>",
        choices: [" "]
    };

    const vaast_instructions_5 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<h1 class ='custom-title'> Task 1: Video Game task</h1>" +
            "<p class='instructions'>The training is over. Now, you will start the real task.</p>" +
            "<p class='instructions'>Instructions stay the same:</p>" +
            "<ul class='instructions'>" +
            "<table>" +
            "<tr>" +
            "<td><img class=shape src = " + shapeimage_to_approach + "   ></td>" +
            "<td align='left'>APPROACH " + shape_to_approach + " by pressing the MOVE FORWARD key (namely, the <b>T key</b>)</td>" +
            "</tr>" +
            "<tr>" +
            "<td><img class=shape src = " + shapeimage_to_avoid + "   ></td>" +
            "<td align='left'>AVOID " + shape_to_avoid + " by pressing the MOVE BACKWARD key (namely, the <b>B key</b>)</td>" +
            "</tr>" +
            "</table>" +
            "</ul>" +
            "<br>" +
            "<p class='instructions'>Do not forget to be <b>as fast and accurate as you can</b> and to <b>use only the index of your preferred hand</b>.</p>" +
            "<p class = 'continue-instructions'>Press <strong>space</strong> to start the task.</p>",
        choices: [" "]
    };

    const vaast_instructions_6 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<p class='instructions'><center>Before you start:</center></p>" +
            "<p class='instructions'>Remember that it is EXTREMELY IMPORTANT that you try to " +
            "respond as fast and as correctly as possible.</p>" +
            "<br>" +
            "<p class='continue-instructions'>Press <strong>space</strong> to continue.</p>",
        choices: [' ']
    }

    const vaast_instructions_7 = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<p class='instructions'><center><strong>End of this section</strong></center></p>" +
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
        font_sizes: stim_sizes,
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

    const vaast_prime = {
        type: jsPsychVaastText,
        stimulus: "prime",
        stimulus: jsPsych.timelineVariable('prime'),
        position: 1,
        background_images: background,
        font_sizes: stim_sizes,
        stim_movement: jsPsych.timelineVariable('movement'),
        response_ends_trial: false,
        trial_duration: 200
    }

    const vaast_blank = {
        type: jsPsychVaastText,
        stimulus: " ",
        position: 1,
        background_images: background,
        font_sizes: stim_sizes,
        stim_movement: jsPsych.timelineVariable('movement'),
        response_ends_trial: false,
        trial_duration: 100
    }

    const vaast_first_step_training_1 = {
        type: jsPsychVaastImage,
        stimulus: jsPsych.timelineVariable('stimulus'),
        position: 1,
        background_images: background,
        font_sizes: image_sizes,
        approach_key: "t",
        avoidance_key: "b",
        stim_movement: jsPsych.timelineVariable('movement'),
        html_when_wrong: '<span style="color: red; font-size: 80px">&times;</span>',
        force_correct_key_press: true,
        display_feedback: true,
        response_ends_trial: true
    }

    const vaast_second_step_training_1 = {
        type: jsPsychVaastImage,
        stimulus: jsPsych.timelineVariable('stimulus'),
        position: next_position_training,
        background_images: background,
        font_sizes: image_sizes,
        stim_movement: jsPsych.timelineVariable('movement'),
        response_ends_trial: false,
        trial_duration: 650
    }

    // VAAST blocks ---------------------------------------------------------------------
    const vaast_training_block = {
        timeline: [
            vaast_start,
            vaast_fixation,
            vaast_prime,
            vaast_blank,
            vaast_first_step_training_1,
            vaast_second_step_training_1
        ],
        timeline_variables: vaast_stim_training,
        repetitions: 1,
        randomize_order: true,
        data: {
            phase: "training",
            valence: jsPsych.timelineVariable('valence'),
            prime: jsPsych.timelineVariable('prime'),
            shape: jsPsych.timelineVariable('shape'),
            stimulus: jsPsych.timelineVariable('stimulus'),
            movement: jsPsych.timelineVariable('movement'),
        }
    };

    const vaast_test_block = {
        timeline: [
            vaast_start,
            vaast_fixation,
            vaast_prime,
            vaast_blank,
            vaast_first_step_training_1,
            vaast_second_step_training_1
        ],
        timeline_variables: vaast_stim_test,
        repetitions: 1,
        randomize_order: true,
        data: {
            phase: "test",
            valence: jsPsych.timelineVariable('valence'),
            prime: jsPsych.timelineVariable('prime'),
            shape: jsPsych.timelineVariable('shape'),
            stimulus: jsPsych.timelineVariable('stimulus'),
            movement: jsPsych.timelineVariable('movement'),
        }
    };

    // End fullscreen -----------------------------------------------------------------------

    const fullscreen_trial_exit = {
        type: jsPsychFullscreen,
        fullscreen_mode: false
    }

    // End instructions ---------------------------------------------------------------------
    const ending = {
        type: jsPsychHtmlKeyboardResponse,
        stimulus: "<p class='instructions'>You are now finished with this mock study.<p>" +
            "<p class='instructions'>In this study, we were interested in how fast individuals perform approach and avoidance actions when primed with a pleasant or an unpleasant word. " +
            "<br>Specifically, you had to approach/avoid geometric shapes but before it appeared, we briefly displayed a pleasant/unpleasant word. " +
            "We expected this word to impact the latency of you responses: You should have been faster to make an approach action after a pleasant word and an avoidance action after an unpleasant word (rather than the other way around). </p>" +
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
    timeline.push(vaast_instructions_4,
        vaast_instructions_6,
        vaast_training_block,
        vaast_instructions_7,
        vaast_instructions_5,
        vaast_instructions_6,
        vaast_test_block,
        vaast_instructions_7
    );

    // vaast - end
    timeline.push(fullscreen_trial_exit,
        showing_cursor);

    // ending
    timeline.push(ending);

    // Launch experiment --------------------------------------------------------------------
    jsPsych.run(timeline);
</script>

</html>