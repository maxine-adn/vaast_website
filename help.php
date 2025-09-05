<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Help</title>
    <script src="assets/js/color-modes.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9" />
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
    <?php include 'header.php'; ?>
    <main>
        <div class="container-sm" style="margin-top: 5rem; margin-bottom: 5rem;">
            <h1 class="display-3 fw-bold text-body-emphasis mb-3" style="text-align:center">
                Frequently asked questions
            </h1>
            <p class="mx-auto mb-5" style="width:40%; text-align:center; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">PHRASE À REPRENDRE: Do you need some help with something or do you have questions on some features?</p>

            <div class="mx-auto rounded-3" style="background-color: gray; width:85%; margin-bottom: 2.5rem" ;>

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold">question 1</p>

                        <button id="1" type="button" class="showOrHideHelp text-center help-button my-auto">
                            <ion-icon name="chevron-forward-outline" id="icon-1" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>

                    <div id="qu-1" style="display: none; background-color:darkseagreen; width: 80%">
                        <p>answer to question 1</p>
                    </div>
                </div>
                <hr style="width: 90%" class="mx-auto" />

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold">question 2</p>

                        <button id="2" type="button" class="showOrHideHelp text-center help-button my-auto">
                            <ion-icon name="chevron-forward-outline" id="icon-2" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>

                    <div id="qu-2" style="display: none; background-color:darkseagreen; width: 80%">
                        <p>answer to question 2</p>
                    </div>
                </div>
                <hr style="width: 90%" class="mx-auto" />

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold">question 3</p>

                        <button id="3" type="button" class="showOrHideHelp text-center help-button my-auto">
                            <ion-icon name="chevron-forward-outline" id="icon-3" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>
                    <div id="qu-3" style="display: none; background-color:darkseagreen; width: 80%">
                        <p>answer to question 3</p>
                    </div>
                </div>
                <hr style="width: 90%" class="mx-auto" />

                <div>
                    <div class="d-flex align-items-center justify-content-between p-4 position-relative">
                        <p class="fw-bold">question 4</p>

                        <button id="4" type="button" class="showOrHideHelp text-center help-button my-auto">
                            <ion-icon name="chevron-forward-outline" id="icon-4" class="show-hide-help-icon"></ion-icon>
                        </button>
                    </div>

                    <div id="qu-4" style="display: none; background-color:darkseagreen; width: 80%">
                        <p">answer to question 4</p>
                    </div>
                </div>
                <hr style="width: 90%" class="mx-auto" />
            </div>

            <h1 classs="display-6 fw-bold text-emphasis mb-1" style="text-align:center">You have another question:</h1>
            <p class="mx-auto mb-5" style="text-align:center; width:80%">
                If it relates to jsPsych, to the use of plugins or timelines..., please visit <a target="_blank" rel="noopener noreferrer" href="https://www.jspsych.org/latest/">jsPsych</a>, their <a target="_blank" rel="noopener noreferrer" href="https://github.com/jspsych/jsPsych/discussions">GitHub discussion board</a>, or ask your question there.
                <br>
                If it relates to the VAAST, please read this article to see if it answers your questions, or email us at:
            </p>
            <div class="position-relative" style="background-color: grey; height: 50px">
                <p class="push-tl email-adress ">email-adress!</p>
                <button id="copy-mail" type="button" class="copy-ft" data-copy=".email-adress">
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
    <script src="js/show-hide-help-button.js"></script>
</body>

</html>