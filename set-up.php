<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>Set up your VAAST</title>
  <script src="assets/js/color-modes.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
    rel="stylesheet" />
  <link href="css/set-up.css" rel="stylesheet" />
  <link href="css/all.css" rel="stylesheet" />

  <!-- icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <?php include 'color-modes.php'; ?>
  <?php include 'header.php'; ?>
  <main class="container-sm">
    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
      <div class="col-lg-12 px-0">
        <h1 class="display-4 fst-italic">
          Let's set up your VAAST experiment!
        </h1>
        <p class="lead my-3">
          Click here to download the <a href="future_vaast_file.zip" class="text-body-emphasis ">experiment zip file</a>
        </p>
      </div>
    </div>
    <div class="row mb-3 align-items-stretch">
      <div class="col-md-6">
        <div class="border rounded overflow-hidden shadow-sm h-100 position-relative d-flex flex-column">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">Try a mock version of the VAAST</h3>
            <p class="card-text mb-auto" style="padding-top: 0.75rem">
              This page features two versions of the VAAST experiment: the incidental and the explicit VAAST.
            </p>
            <a
              href="trials.php"
              class="icon-link gap-1 icon-link-hover stretched-link">
              Click here to choose an experiment
              <svg class="bi" aria-hidden="true">
                <use xlink:href="#chevron-right"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="border rounded overflow-hidden shadow-sm h-100 position-relative d-flex flex-column">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">Optional Features</h3>
            <p class="mb-auto" style="padding-top: 0.75rem">
              This page presents a large number of optional features. <br> These code snippets offer the possibility to add a browser check,
              an attentional check and a range of demographic questions to your experiment, among other things.
            </p>
            <a
              href="features.php"
              class="icon-link gap-1 icon-link-hover stretched-link">
              Find out about the features
              <svg class="bi" aria-hidden="true">
                <use xlink:href="#chevron-right"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-5">
      <div class="col-md-8">
        <!-- <h3 class="pb-4 mb-4 fst-italic border-bottom" id="you-got-this">You got this!</h3> -->
        <article class="blog-post" id="before">
          <h2 class="display-5 link-body-emphasis mb-1" id="what-you-need">What you need</h2>
          <p class="blog-post-meta">
            Applications and Websites
          </p>
          <p>
            You will need a <strong>development environment</strong>, like <a target="_blank" rel="noopener noreferrer" href="https://code.visualstudio.com/">Visual Studio Code</a> (which we will use in this set-up).
            If you don't have one yet, you can download one or use the web version if they have one.
          </p>
          <hr />
          <p>
            For this set up, we chose to use <a target="_blank" rel="noopener noreferrer" href="https://docs.github.com/en/pages">GitHub Pages</a>, <a target="_blank" rel="noopener noreferrer" href="https://osf.io/">OSF (Open Science Framework)</a> and <a target="_blank" rel="noopener noreferrer" href="https://pipe.jspsych.org/">DataPipe</a>.
            We'll use GitHub Pages to host the experiment online. For that we'll need a GitHub account.
            We'll use OSF to store the resulting data, you'll need an account there as well.
            We'll use DataPipe to be the bridge between the two previous tools.
            <br>
            If you use other means, feel free to make the necessary adjustments.
            Otherwise, log onto these websites or create an account on each using the <em>Sign Up</em> button:
          <ul>
            <li><a target="_blank" rel="noopener noreferrer" href="https://github.com/">GitHub</a></li>
            <li><a target="_blank" rel="noopener noreferrer" href="https://osf.io/">OSF</a></li>
            <li><a target="_blank" rel="noopener noreferrer" href="https://pipe.jspsych.org/">DataPipe</a></li>
          </ul>
          </p>

          <h2 id="two-folders">Set up Visual Studio Code</h2>
          <p>
            Download the following <a href="future_vaast_file.zip">code zip file</a>. Unzip it.
            Open VSCode and open the folder (from the Start page or via File>Open Folder).
          </p>
          <img class="img-fluid" src="media/procedure/image.png" style="max-width: 100%; height: auto;"></img>
          <br>
          <hr />
          <p>
            You should see two folders, named <em>incidental</em> and <em>explicit</em>. Each folder contains all the needed files for the specific experiment.
            Go to the <a href="index.php#2-versions">home page</a> to learn about the differences between the two versions.
            <br>
            Now, go to the left-hand side of your VSCode, to the Source Control logo (<ion-icon name="git-branch-outline"></ion-icon>). There, you will set up your distant GitHub repository.
            You'll be asked to connect to your GitHub account.
            You should then choose a <strong>public</strong> repository.
            Visit this VSCode <a target="_blank" rel="noopener noreferrer" href="https://code.visualstudio.com/docs/sourcecontrol/overview#_initialize-a-repository">page</a> if you have any trouble at this time.
          </p>

          <h3 id="changes">Make all the necessary changes</h3>
          <p>
            Once you have linked your local version of the folder to the distant one, you can start making the changes you want.
            Know that to save these changes to the distant repository (online on GitHub), you'll need to do <code>git add .</code> then <code>git push</code> and add a message,
            click the tick in the upper right corner to validate.
            This will update your distant repository with the local changes.
          </p>
          <p>
            Whether you chose the incidental or the explicit version, there are a number of changes you could make.
            Here's a (non-exhaustive) list of things you might want to change, according to the specific experiment you want to run:
          </p>
          <ul>
            <li>The stimuli (words or images)</li>
            <li>The background images (see <a href="index.php#background-images">this paragraph</a> in the home page, for more information on the different backgrounds available)</li>
            <li>The amount of training and testing trials (i.e., how many times the participants see a stimulus that they have to approach/avoid)</li>
            <li>The instructions</li>
            <li>The end:
              <ul>
                <li>Adding demographic questions</li>
                <li>The end page</li>
              </ul>
            </li>
            <li>Etc.</li>
          </ul>

          <hr />
          <p>If you want to try the experiment at any time, you can use the <a target="_blank" rel="noopener noreferrer" href="https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer">Live Server</a> VSCode extension that you can download directly from the application.
          </p>
          <p>Now that you've made all the changes you want, it's time to dive into how to save your data.
            As explained above, we'll use OSF (Open Science Framework) to hold the data.
          </p>
        </article>

        <article class="blog-post" id="data-online">
          <h2 class="display-5 link-body-emphasis mb-1">Data and Availability online</h2>
          <p class="blog-post-meta">
            OSF, DataPipe and GitHub Pages
          </p>
          <p>
            DataPipe is an API (Application Programming Interface) created by the developpers of JsPsych for sending data from behavioural experiments to the Open Science Framework,
            <strong>for free</strong>.
            Check out more information on <a target="_blank" rel="noopener noreferrer" href=https://pipe.jspsych.org/getting-started>getting started with DataPipe</a>.
          </p>
          <h2 id="DataPipe-OSF">Setting up DataPipe and OSF</h2>
          <p>Here, find a recap of the different tasks you'll need to engage in, in order.

          <ul class="list-group">
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
              <label class="form-check-label" for="firstCheckbox" style="overflow-wrap: break-word;">Create an OSF page for your project, <strong>copy the numbers at the end of the URL</strong>.</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
              <label class="form-check-label" for="secondCheckbox" style="overflow-wrap: break-word;">Create an authorization token on OSF (write_only authorization) and make sure to <strong>save this token</strong>. <br> You only need to do this <strong>once</strong>, <strong>not for every experiment</strong>.</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
              <label class="form-check-label" for="thirdCheckbox" style="overflow-wrap: break-word;">Create the study in DataPipe. Use the OSF URL code previously copied. <br> For the component to create in OSF, enter 'data'. <br>This automatically creates a component on the OSF page.
                <!-- <img class="img-fluid" src="media/datapipe-settings.png" style="max-width: 100%; height: auto;"> -->
              </label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="fourthCheckbox">
              <label class="form-check-label" for="fourthCheckbox" style="overflow-wrap: break-word;">Paste the different elements given by DataPipe in your Javascript code and in the index file:
              </label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="fifthCheckbox">
              <label class="form-check-label" for="fifthCheckbox" style="overflow-wrap: break-word;">
                Uncomment this line in the <code>index.html</code> file:
                <br>
                <pre style="max-width: 100%; white-space: pre-wrap; word-break: break-all;"><code>&lt;script src="https://unpkg.com/@jspsych-contrib/plugin-pipe"&gt;&lt;/script&gt;</code></pre>
              </label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="sixthCheckbox">
              <label class="form-check-label" for="sixthCheckbox" style="overflow-wrap: break-word;">Add these lines to the <code>experiment.js</code> file:
                <br>
                <pre style="max-width: 100%; white-space: pre-wrap; word-break: break-all;"><code>const subject_id = jsPsych.randomization.randomID(10);</code></pre>
                <pre style="max-width: 100%; white-space: pre-wrap; word-break: break-all;"><code>const filename = `${subject_id}.csv`;</code></pre>
                <pre style="max-width: 100%; white-space: pre-wrap; word-break: break-all;"><code>const save_data = {
  type: jsPsychPipe,
  action: "save",
  experiment_id: "your-experiment-id",
  filename: filename,
  data_string: ()=>jsPsych.data.get().csv()
};</code></pre>
                Don't forget to replace <code>"your-experiment-id"</code> by the real code between quotation marks
              </label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="seventhCheckbox">
              <label class="form-check-label" for="seventhCheckbox" style="overflow-wrap: break-word;">Try your experiment with the <a target="_blank" rel="noopener noreferrer" href="https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer">Live Server extension</a> to test if the data is saved on OSF.</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1" type="checkbox" value="" id="eighthCheckbox">
              <label class="form-check-label" for="eighthCheckbox" style="overflow-wrap: break-word;">Use the GitHub Pages URL to share your experiment (on whichever platform you use).</label>
            </li>
          </ul>
          <br>

          <h2 id="GitHub-pages">Using GitHub Pages to access the experiment online</h2>
          <p>Visit the remote (on GitHub) version of your experiment. Click on Settings, below 'Code and automation', find Pages.
            Choose 'deploy from a branch' and the branch your experiment is on (usually main).</p>
          <p>Wait a few minutes and reload the current page you're on.
            At the top of your screen you should see '<em>Your site is live at https://your-username.github.io/repo-name/</em>',
            click on the <strong>Visit site</strong> button to see your published site.</p>
          <p>You can now use this URL to share your experiment.</p>
          <p>Please note, it might take <strong>up to 10 minutes</strong> for any changes you make to the files to be visible.</p>

        </article>
      </div>
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem">
          <div class="p-4 mb-5 mt-2 bg-body-tertiary rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">
              Read about the experiment in <a target="_blank" rel="noopener noreferrer" href="https://www.sciencedirect.com/science/article/abs/pii/S0022103117305309">this article</a>,
              or go back to the <a href="index.php">home page</a> to find out more about the different versions or the background images.
            </p>
          </div>
          <div>
            <h4 class="fst-italic">The mock experiments</h4>
            <ul class="list-unstyled">
              <li>
                <a
                  class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" target="_blank" rel="noopener noreferrer"
                  href="explicit-vaast.php">
                  <img src="/media/vaast-background_eco_vf.jpg" height="100">
                  <div class="col-lg-8">
                    <h6 class="mb-0">Try the explicit vaast!</h6>
                    <small class="text-body-secondary">Click here</small> <!-- replace by something else ? -->
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" target="_blank" rel="noopener noreferrer"
                  href="incidental-vaast.php">
                  <img src="/media/vaast-background_all_eco.jpg" height="100">
                  <div class="col-lg-8">
                    <h6 class="mb-0">Try the incidental vaast!</h6>
                    <small class="text-body-secondary">Click here</small> <!-- replace by something else ? -->
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="p-4">
            <h4 class="fst-italic">Table of contents</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#before">What you need</a></li>
              <li><a href="#two-folders">Set up Visual Studio Code</a></li>
              <li><a href="#changes">Make all the necessary changes</a></li>
              <li><a href="#data-online">Data and Availability online</a></li>
              <li><a href="#DataPipe-OSF">Setting up DataPipe and OSF</a></li>
              <li><a href="#GitHub-pages">Using GitHub Pages</a></li>
            </ol>
          </div>
          <div class="p-4">
            <h4 class="fst-italic">Example</h4>
            <ol class="list-unstyled">
              <li><a target="_blank" rel="noopener noreferrer" href="https://github.com/maxine-adn/test-vaast">GitHub</a></li>
              <li><a target="_blank" rel="noopener noreferrer" href="https://maxine-adn.github.io/test-vaast/">Experiment</a></li>
            </ol>
          </div>
        </div>
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