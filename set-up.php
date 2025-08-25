<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>Set up your VAAST</title>
  <script src="../assets/js/color-modes.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <meta name="theme-color" content="#712cf9" />
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
    rel="stylesheet" />
  <link href="css/set-up.css" rel="stylesheet" />
  <link href="css/all.css" rel="stylesheet" />
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
          Something important enough to write here, that I don't repeat later on...
        </p>
        <p class="lead mb-0">
          <a href="#what-you-need" class="text-body-emphasis fw-bold">Continue reading...</a>
        </p>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <div
          class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
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
        <div
          class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
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
            You will need a <strong>development environment</strong>, like <a href="https://code.visualstudio.com/">Visual Studio Code</a> (which we will use in this set-up).
            If you don't have one yet, you can download one or use the web version if they have one.
          </p>
          <hr />
          <p>
            For this set up, we chose to use <a href="https://docs.github.com/en/pages">GitHub Pages</a>, <a href="https://osf.io/">OSF (Open Science Framework)</a> and <a href="https://pipe.jspsych.org/">DataPipe</a>.
            We'll use GitHub Pages to host the experiment online. For that we'll need a GitHub account.
            We'll use OSF to store the resulting data, you'll need an account here as well.
            We'll use DataPipe to be the bridge between the two previous tools.
            <br>
            If you use other <strong>things</strong>, feel free to make the necessary adjustments.
            Otherwise, log onto these websites or create an account on each using the <em>Sign Up</em> button:
          <ul>
            <li><a href="https://github.com/">GitHub</a></li>
            <li><a href="https://osf.io/">OSF</a></li>
            <li><a href="https://pipe.jspsych.org/">DataPipe</a></li>
          </ul>
          </p>

          <h2>Set up Visual Studio Code</h2>
          <p>
            Download the following <a href="future_vaast_file.zip">code zip file</a>. Unzip it.
            Open VSCode and open the folder (from the Start page or via File>Open Folder).
          </p>
            <img class="img-fluid" src="media/procedure/image.png" style="max-width: 100%; height: auto;"></img>
          <br>
          <hr />
          <p>
            You should see two folders, named <em>incidental</em> and <em>explicit</em>. Each file contains all the needed files for the specific experiment.
            Go to the <a href="index.php#2-versions">home page</a> to learn about the differences between the two versions.
            <br>
            Now, you'll go to the left-hand side of your VSCode to the <strong>INSERT SYMBOL</strong> logo. There, you will set up your distant GitHub repository.
            You'll be asked to connect to your GitHub account.
            You should then choose a public repository.
          </p>

          <h3>Make all the necessary changes</h3>
          <p>
            Once you have linked your local version of the file to the distant one, you can start making the changes you want.
            Know that to save these changes to the distant repository (online on GitHub), you'll need to do 'git add .' then 'git push' and add a message,
            click the tick on the top-right-hand side corner to validate.
            This will update your distant repository with the local changes.
          </p>
          <p>
            Whether you chose the incidental or the explicit version, there are a number of changes you could make.
            Here's a (non-exhaustive) list of things you might want to change, according to the specific experiment you want to run:
          </p>
          <ul>
            <li>The stimuli (words)</li>
            <li>The background images (see <a href="index.php#background-images">this paragraph</a> in the home page, for more information on the different backgrounds available)</li>
            <li>The amount of training and testing trials (how many times the participants see a stimulus that they have to approach/avoid)</li>
            <li>The instructions</li>
            <li>The end:
              <ul>
                <li>Adding demographic questions</li>
                <li>The end page</li>
              </ul>
            </li>
            <li>???</li>
          </ul>
          <hr />
          <p>Now that you've made all the changes you want, it's time to dive into how to save your data.
            As explained above, we'll use OSF (Open Science Framework) to hold the data.
          </p>
        </article>

        <article class="blog-post" id="second-step">
          <h2 class="display-5 link-body-emphasis mb-1">Data and Availability online</h2>
          <p class="blog-post-meta">
            OSF, DataPipe and GitHub Pages
          </p>
          <p>
          DataPipe is an API (Application Programming Interface) created by the developpers of JsPsych for sending data from your behavioral experiments to the Open Science Framework, for free. 
          Check out more information on <a href=https://pipe.jspsych.org/getting-started>getting started with DataPipe</a>. 
          </p>
          <h2>Setting up DataPipe and OSF</h2>
          <p>Here, find a recap of the different tasks you'll need to engage in.
          <ol>
            <li>Create an OSF page for your project, <strong>copy the numbers at the end of the URL</strong>.</li>
            <li>Create an authorization token on OSF (write_only authorization) and make sure to <strong>save this token</strong>. You only need to do this <strong>once</strong>, <strong>not for every experiment</strong>.</li>
            <li>Create the study in DataPipe. Use the OSF URL code previously copied. For the component to create in OSF, enter 'data'. This automatically creates a component on the OSF page.</li>          
            <img class="img-fluid" src="media/datapipe-settings.png" style="max-width: 100%; height: auto;">
            <li>Paste the different elements given by DataPipe in your Javascript code and in the index file.</li>
              <ul>
                <li>Uncomment this line in the index.html file : <code><script src="https://unpkg.com/@jspsych-contrib/plugin-pipe"></script></code></li>
                <li>
                  const subject_id = jsPsych.randomization.randomID(10);
                  const filename = `${subject_id}.csv`;
                </li>
                <li>
                  const save_data = {
                    type: jsPsychPipe,
                    action: "save",
                    experiment_id: "your-experiment-id",
                    filename: filename,
                    data_string: ()=>jsPsych.data.get().csv()
                  };
                  don't forget to replace "your-experiment-id" by the real code between quotation marks</li>
              </ul>
            <li>Try your experiment to test if data is saved on OSF.</li>
            <li>Use the GitHub Pages URL to share your experiment (on whichever platform you use).</li>
          </ol>
          <h2>Using GitHub Pages to access the experiment online</h2>
          <p>Visit the remote (on GitHub) version of your experiment. Click on Settings, below 'Code and automation', find Pages. 
            Choose 'deploy from a branch' and the branch your experiment is on (usually main).</p>
          <p>Wait a few minutes and reload the current page you're on. 
            At the top of your screen you should see '<em>Your site is live at https://your-username.github.io/repo-name/</em>', 
            click on the <strong>Visit site</strong> button to see your published site.</p>
          <p>You can now use this URL to share your experiment.</p>
          <p>Please note, it might take <strong>up to 10 minutes</strong> for any changes you make to the files to be visible.</p>
         
        </article>

        <!-- <article class="blog-post" id="second-step">
          <h2 class="display-5 link-body-emphasis mb-1">New feature</h2>
          <p class="blog-post-meta">
            December 14, 2020 by <a href="#">Chris</a>
          </p>
          <p>
            This is some additional paragraph placeholder content. It has been
            written to fill the available space and show how a longer snippet
            of text affects the surrounding content. We'll repeat it often to
            keep the demonstration flowing, so be on the lookout for this
            exact same string of text.
          </p>
          <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ul>
          <p>
            This is some additional paragraph placeholder content. It's a
            slightly shorter version of the other highly repetitive body text
            used throughout.
          </p>
        </article> -->
      </div>
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem">
          <div class="p-4 mb-5 bg-body-tertiary rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">
              A little note: something important but not so bad if they miss it ???? -> add later
            </p>
          </div>
          <div>
            <h4 class="fst-italic">The mock experiments</h4>
            <ul class="list-unstyled">
              <li>
                <a
                  class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
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
                  class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
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
              <li><a href="#before">Before anything</a></li>
              <li><a href="#first-step">First step</a></li>
              <li><a href="#second-step">Second step</a></li>
              <!-- <li><a href="#third">January 2021</a></li>
              <li><a href="#fourth">December 2020</a></li>
              <li><a href="#fifth">November 2020</a></li>
              <li><a href="#">September 2020</a></li>
              <li><a href="#">August 2020</a></li>
              <li><a href="#">July 2020</a></li>
              <li><a href="#">June 2020</a></li>
              <li><a href="#">May 2020</a></li>
              <li><a href="#">April 2020</a></li> -->
            </ol>
          </div>
          <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="py-5 text-center text-body-secondary bg-body-tertiary">
    <p>
      Blog template built for
      <a href="https://getbootstrap.com/">Bootstrap</a> by
      <a href="https://x.com/mdo">@mdo</a>.
    </p>
    <p class="mb-0"><a href="#">Back to top</a></p>
  </footer>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"
    class="astro-vvvwv3sm"></script>
  <script src="js/active-hd.js"></script>
</body>

</html>