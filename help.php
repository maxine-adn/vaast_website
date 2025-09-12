<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Help</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="assets/js/color-modes.js"></script>
    <link href="css/help.css" rel="stylesheet" />
    <link href="css/all.css" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
        rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

    <!-- button icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <?php include 'color-modes.php'; ?>
    <?php include 'header.php'; ?>
    <main>
        <div class="container-sm" style="margin-top: 5rem; margin-bottom: 5rem;">
            <h1 class="display-3 fw-bold text-body-emphasis mb-4" style="text-align:center">
                Frequently asked questions
            </h1>
            <!-- <p class="mx-auto mb-4" style="width:50%; text-align:center; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Do you need help on something specific or have questions on some features?</p> -->

            <div class="mx-auto rounded-3 py-3 bg-body-tertiary" style="width:85%; margin-bottom: 2.5rem; overflow: hidden;">

                <div class=" bg-body-tertiary">
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold px-3 py-0 m-0">The feature I added to the experiment code isn't shown in the experiment, why?</p>

                        <button id="1" type="button" class="showOrHideHelp text-center help-button my-auto bg-body-tertiary">
                            <ion-icon name="chevron-forward-outline" id="icon-1" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>

                    <div id="qu-1" class="answer bg-body-tertiary">
                        <p style="left: 15px; width: 95%">Have you made sure you pushed the feature to the timeline? It should look something like :
                        <pre style="width: 16.5rem; border-radius:10px"><code>timeline.push(feature_name);</code></pre>
                        </p>
                    </div>
                </div>
                <hr style="width: 95%" class="mx-auto" />

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold px-3 py-0 m-0">Why is there a flash in the task?</p>

                        <button id="2" type="button" class="showOrHideHelp text-center help-button my-auto bg-body-tertiary">
                            <ion-icon name="chevron-forward-outline" id="icon-2" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>

                    <div id="qu-2" class="answer bg-body-tertiary">
                        <p style="left: 15px; width: 95%">We are aware that a flash appears on the screen the <strong>first time</strong> a movement is made in either direction. <br>
                            Note that it only happens once, as it probably has to do with the preloading of the images not working properly. <br>
                            Find more information about this, <a href="docs.php#flash">here</a>.</p>
                    </div>
                </div>
                <hr style="width: 95%" class="mx-auto" />

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold px-3 py-0 m-0">question 3</p>

                        <button id="3" type="button" class="showOrHideHelp text-center help-button my-auto bg-body-tertiary">
                            <ion-icon name="chevron-forward-outline" id="icon-3" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>
                    <div id="qu-3" class="answer bg-body-tertiary">
                        <p style="left: 15px; width: 95%">answer to question 3</p>
                    </div>
                </div>
                <hr style="width: 95%" class="mx-auto" />

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold px-3 py-0 m-0">question 4</p>

                        <button id="4" type="button" class="showOrHideHelp text-center help-button my-auto bg-body-tertiary">
                            <ion-icon name="chevron-forward-outline" id="icon-4" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>

                    <div id="qu-4" class="answer bg-body-tertiary">
                        <p style="left: 15px; width: 95%">answer to question 4</p>
                    </div>
                </div>
            </div>

            <h1 class="display-6 fw-bold text-body-emphasis mb-3" style="text-align:center">You have another question:</h1>
            <p class="mx-auto mb-4" style="text-align:center; width:80%">
                If it relates to jsPsych, to the use of plugins or timelines..., please visit <a target="_blank" rel="noopener noreferrer" href="https://www.jspsych.org/latest/">jsPsych</a>, their <a target="_blank" rel="noopener noreferrer" href="https://github.com/jspsych/jsPsych/discussions">GitHub discussion board</a>, or ask your question there.
                <br>
                If it relates to the VAAST, please read <a target="_blank" rel="noopener noreferrer" href="https://www.sciencedirect.com/science/article/abs/pii/S0022103117305309">this article</a>
                to see if it answers your questions, or email us at:
            </p>
            <div class="mx-auto position-relative bg-body-tertiary" style="width:85%; height: 50px; border-radius: 7.5px;">
                <p class="push-tl email-adress position-absolute top-50 translate-middle-y" style="left: 15px">email-adress!</p>
                <button id="copy-mail" type="button" class="copy-ft bg-body-secondary" data-copy=".email-adress">
                    <ion-icon name="copy-outline" class="copy-icon"></ion-icon>
                    <span class="copy-label">Copy</span>
                </button>
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
    <script src="js/copy-button.js"></script>
    <script src="js/show-hide-help-button.js"></script>

    <!-- code highlighter: -->
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/highlight.min.js"></script>
    <link data-bs-theme="dark" rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-dark.min.css">
    <link data-bs-theme="light" rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.11.1/styles/atom-one-light.min.css">
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>