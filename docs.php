<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Docs</title>
    <script src="assets/js/color-modes.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
        rel="stylesheet" />
</head>

<body>

    <?php include 'color-modes.php'; ?>
    <?php include 'header.php'; ?>
    <main class="container-sm">
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

        <div class="border rounded overflow-hidden shadow-sm h-100 position-relative d-flex flex-column" id="flash">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">We're using which plugin, where?</h3>
                <p class="card-text mb-auto" style="padding-top: 0.75rem">
                    Please find below, multiple tables containing all the parameters of each plugin.
                    Below each table, you will find examples of code for typical trials in the VAAST.
                </p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-item nav-link link-body-emphasis active" data-tab="vaast-fixation-param">vaast-fixation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link link-body-emphasis" data-tab="vaast-image-param">vaast-image</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link link-body-emphasis" data-tab="vaast-text-param">vaast-text</a>
                    </li>
                </ul>
            </div>

            <!-- vaast-fixation -->

            <div id="vaast-fixation-param" style="min-width: 100%; overflow-x: auto;">
                <div class="table-around">
                    <div class="table-box m-0" style="overflow-x: auto; min-width: 400px; padding: 2rem 2rem 1rem 2rem ;">
                        <h2 style="margin-left: 0; margin-bottom: 1rem">vaast-fixation plugin parameters</h2>
                        <table class="table table-hover" style="table-layout: fixed; width: 100%; min-width: 400px;">
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
                <div class="p-3 p-md-4 mb-4 rounded text-body-emphasis bg-body-secondary mx-auto" style="width: 95%"> <!-- code chunk -->
                    <h2 style="margin-left: 0; margin-bottom: 1rem">Examples of vaast-fixation trial</h2>

                    <pre><code>const vaast_fixation = {
  type: jsPsychVaastFixation,
  fixation: "+",
  font_size: 46,
  position: 1,
  background_images: background
}</code></pre>
                </div>
            </div>

            <!-- vaast-image -->

            <div id="vaast-image-param" style="display: none">
                <div class="table-around" style="min-width: 100%; overflow-x: auto">
                    <div class="table-box m-0" style="overflow-x: auto; min-width: 400px; padding: 2rem 2rem 1rem 2rem ;">
                        <h2 style="margin-left: 0; margin-bottom: 1rem">vaast-image plugin parameters</h2>
                        <table class="table table-hover" style="table-layout: fixed; width: 100%; min-width: 400px;">
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
                                    <td style="word-wrap: break-word;">IMAGE</td>
                                    <td style="word-wrap: break-word;">undefined</td>
                                    <td style="word-wrap: break-word;">The image to be displayed.</td>
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
                <div class="p-3 p-md-4 mb-4 rounded text-body-emphasis bg-body-secondary mx-auto" style="width: 95%"> <!-- code chunk -->
                    <h2 style="margin-left: 0; margin-bottom: 1rem">Example of vaast-image trial</h2>
                    <pre><code>

</code></pre>
                </div>
            </div>


            <!-- vaast-text -->

            <div id="vaast-text-param" style="display: none">
                <div class="table-around" style="min-width: 100%; overflow-x: auto">
                    <div class="table-box m-0" style="overflow-x: auto; min-width: 400px; padding: 2rem 2rem 1rem 2rem ;">
                        <h2 style="margin-left: 0; margin-bottom: 1rem">vaast-text plugin parameters</h2>
                        <table class="table table-hover" style="table-layout: fixed; width: 100%; min-width: 400px;">
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
                                    <td style="word-wrap: break-word;">STRING</td>
                                    <td style="word-wrap: break-word;">undefined</td>
                                    <td style="word-wrap: break-word;">The text to be displayed.</td>
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
                <div class="p-3 p-md-4 mb-4 rounded text-body-emphasis bg-body-secondary mx-auto" style="width: 95%"> <!-- code chunk -->
                    <h2 style="margin-left: 0; margin-bottom: 1rem">Examples of vaast-text trial</h2>

                    <div class="py-2">
                        <h4 style="margin-left: 0; margin-bottom: 1rem">First step of a test trial</h4>
                        <pre><code>const vaast_first_step = {
  type: jsPsychVaastText,
  stimulus: jsPsych.timelineVariable('stimulus'),
  position: 1,
  background_images: background,
  font_sizes: word_sizes,
  stim_movement: jsPsych.timelineVariable('movement'),
  approach_key:  approach_key,
  avoidance_key: avoidance_key,
  html_when_wrong: '&lt;span style="color: red; font-size: 80px"&gt;&times;&lt;/span&gt;',
  force_correct_key_press: false,
  display_feedback: false,
  response_ends_trial: true
}</code></pre>
                    </div>

                    <div class="py-2">
                        <h4 style="margin-left: 0; margin-bottom: 1rem">Second step of a trial</h4>
                        <pre><code>const vaast_second_step = {
  type: jsPsychVaastText,
  position: next_position,
  stimulus: jsPsych.timelineVariable('stimulus'),
  background_images: background,
  font_sizes: word_sizes,
  stim_movement: jsPsych.timelineVariable('movement'),
  response_ends_trial: false,
  trial_duration: 500
}</code></pre>
                    </div>

                    <div class="py-2">
                        <h4 style="margin-left: 0; margin-bottom: 1rem">First step of a training trial</h4>
                        <p>*You could also change <code>force_correct_key_press</code> to <code>true</code> and <code>response_ends_trial</code>
                            to <code>false</code> to force the participants to respond correctly.
                        </p>
                        <pre><code>const vaast_first_step_train = {
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
}</code></pre>
                    </div>
                </div>
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

        <br>
        <hr />
        <br>

        <div class="border rounded overflow-hidden shadow-sm h-100 position-relative d-flex flex-column" id="flash">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">Note about a quick flash</h3>
                <p class="card-text mb-auto" style="padding-top: 0.75rem">
                    Please note that a flash appears on the screen the first time a movement is made in either direction.
                    Meaning, the first time the background image goes from center to closer and from center to further, there's a flash in the time bewteen the two images being shown.
                    Note that it only happens once, as it probably has to do with the preloading of the images not working properly.
                    Thus, if you choose not to use a training session (unlike we do), the first experimental trials might be slightly different from the next ones.
                </p>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"
        class="astro-vvvwv3sm"></script>
    <script src="js/active-hd.js"></script>
    <script src="js/plugin-parameter-windows.js"></script>

    <!-- code highlighter: -->
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/highlight.min.js"></script>
    <link data-bs-theme="dark" rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-dark.min.css">
    <link data-bs-theme="light" rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-light.min.css">
    <script>
        hljs.highlightAll();
    </script>

    <script src="js/color-modes-highlight.js"></script>
</body>

</html>