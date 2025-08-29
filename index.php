<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>The VAAST website</title>
  <script src="assets/js/color-modes.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <meta name="theme-color" content="#712cf9" />
  <link href="css/cover.css" rel="stylesheet" />
  <link href="css/all.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
    rel="stylesheet" />
</head>

<body class="d-flex h-100"> <!-- .text-center -->
  <?php include 'color-modes.php'; ?>
  <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
    <?php include 'header.php'; ?>
    <main class="container-sm px-3">

      <div class="px-0 pt-4 my-5 text-center border-bottom">
        <h2 class="mb-3">A highly replicable implicit measure of attitudes:</h2>
        <h1 class="display-5 fw-bold text-body-emphasis mb-4" id="title">
          &#10024; The Visual Approach and Avoidance by the Self Task &#10024;
        </h1>
        <br>
        <div class="col-lg-12 mx-auto">
          <p class="lead mb-2 mt-2">
            Find out about the experiment, try it out and learn how to set it up for yourself! <br>
            You can even choose the background, the stimuli and different features to make the experiment correspond to your needs. <br>
            Expend the knowledge in this research field by using a quality experiment producing <strong>large and replicable</strong> effects!!
            <br>
            <a target="_blank" rel="noopener noreferrer" href="https://www.sciencedirect.com/science/article/abs/pii/S0022103117305309">Read about the experiment here</a>, or scroll down.
          </p>
        </div>
        <div class="overflow-hidden pt-4" style="max-height: 45vh">
          <div class="container px-5">
            <img
              src="remove-later/bootstrap-themes.png"
              class="img-fluid border rounded-3 shadow-lg mb-4"
              alt="Example image"
              width="875"
              height="625"
              loading="lazy" />
          </div>
        </div>
      </div>

      <!-- <div class="d-flex align-items-center justify-content-between pt-4"> -->
        <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 pt-5" id="2-versions">
          The two versions of the experiment
        </h1>
        <!-- <a href="set-up.php#two-folders">Visit the set-up page</a> -->
      <!-- </div> -->
      <p class="lead">
        The experiment instructions ask the participant to approach or avoid a stimulus appearing on the screen, by using one key or another on their keyboard.
        The movement they have to produce depends on a caracteristic the researcher chooses.
        The participant also does the task with the opposite instructions so that the difference between the two conditions can be measured.
        The researchers are interested in whether the participant is faster in the compatible condition compared to the incompatible condition
        (cf. approach/avoidance compatibility effects, see above article).
      </p>

      <div class="container-sm px-4 py-2"> <!-- col-xxl-8 -->
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src=""
              class="d-block mx-lg-auto img-fluid border rounded-3 p-4"
              alt="gif of explicit vaast"
              width="700"
              height="500"
              loading="lazy" />
          </div>
          <div class="col-lg-6">
            <h2>Explicit VAAST</h2>
            <p class="lead">
              In this version, the participant responds to the caracteristic of the stimulus the researchers are interested about.
              <br>
              For example, we could ask the participant to approach positive words and avoid negative words.
              We'd also have them do the opposite, to measure the difference between the two conditions.
              We expect the participant to be faster at approaching positive words than negative ones and faster at avoiding negative words than positive ones. 
            </p>
          </div>
        </div>
      </div>

      <div class="container-sm px-4 py-2"> <!-- col-xxl-8 -->
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-lg-6">
            <h2>Incidental VAAST</h2>
            <p class="lead">
              In this version, the participant is asked not to pay particular attention to the element that the researchers are interested about (e.g., the valence of the word).
              <br>
              For example, we could ask the participant to approach squares and to avoid diamonds, but before each shape, a positive or a negative word would be presented.
              The researchers would not be interested in whether the participant is faster to approach and avoid different shapes but
              in whether they're faster to make the movement that is compatible with the word previoulsy presented (the prime).
            </p>
          </div>
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src=""
              class="d-block mx-lg-auto img-fluid border rounded-3 p-4"
              alt="gif of incidental vaast"
              width="700"
              height="500"
              loading="lazy" />
          </div>
        </div>
      </div>

      <hr />

      <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3 pt-5" id="background-images">
        A little note about the different backgrounds we provide
      </h1>
      <p class="lead">
        The pictures were taken in a Blender environment, every element being a 3D object.
        The images are divided into 3 folders, depending on the visual flow and the type of environment.
        The notion that surrounds all this how <a class="text-success-emphasis" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Coherent with real-world conditions">ecological</a> these components are.
      </p>

      <div class="container-sm px-4 py-2"> <!-- col-xxl-8 -->
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="media/vaast-background_all_eco.jpg"
              class="d-block mx-lg-auto img-fluid border rounded-3 p-4"
              alt="background image with ecological environment and visual flow"
              width="700"
              height="500"
              loading="lazy" />
          </div>
          <div class="col-lg-6">
            <h2>In the <em>eco_env_vf</em> images,</h2>
            <p class="lead">
              Both the environment and the visual flow are ecological.
              <br>
              First, one could have walked through a similar street in real life.
              Second, the changes that exist between the middle image and the approach and avoid images,
              are the changes one experiences when making a movement towards or away from something.
              <br>
              One picture is taken as the middle image and then the camera is moved to the other positions,
              so <strong>the visual flow is the same as one would experience when making the movement in real life</strong>.
            </p>
            <h3>This is the most simple folder to use.</h3>
          </div>
        </div>
      </div>

      <hr style="width:50%" class="mx-auto" />

      <p class="lead pt-5">
        A few years later, an experiment was created that would offer some insight on whether one component being ecological matters more than the other being ecological.
        The question was : For the approach/avoidance compatibility effect in the VAAST, does it matter more that the environment is ecological or that the visual flow is ?
      </p>

      <div class="container-sm px-4 py-2"> <!-- col-xxl-8 -->
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="media/vaast_background_eco_env.png"
              class="d-block mx-lg-auto img-fluid border rounded-3 p-4"
              alt="background image with ecological environment and visual flow"
              width="700"
              height="500"
              loading="lazy" />
          </div>
          <div class="col-lg-6">
            <h2>In the <em>eco_env</em> images,</h2>
            <p class="lead">
              Only the environment is ecological.
              One could have walked through a similar street in real life.
              However, the changes that exist between the middle image and the approach and avoid images,
              are <strong>not</strong> the changes one experiences when making a movement towards or away from something.
              For example, some objets were made bigger or smaller between the different pictures. Also, the pictures were taken with a zoom (in and out), not with the camera moving,
              which isn't the way we view things when we move forward or away from them.
            </p>
            <h6 class="text-danger-emphasis">The red lines <strong>don't</strong> appear on the experiment background images. <br>
              Here, they appear to show the elements that change in a non-ecological way.</h6>
          </div>
        </div>
      </div>


      <div class="container-sm px-4 py-2"> <!-- col-xxl-8 -->
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-lg-6">
            <h2>In the <em>eco_vf</em> images,</h2>
            <p class="lead">
              Only the visual flow is ecological.
              The environment was created so it didn't resemble anything we've encountered in real life or even in video games or media.
              It was supposed to be an environment we'd never made approach and avoidance movements in.
              However, the changes that exist between the middle image and the approach and avoid images,
              <strong>are</strong> the changes one experiences when making a movement towards or away from something.
              One picture is taken as the middle image and then the camera is moved to the other positions,
              so <strong>the visual flow is the same as one would experience when making the movement in real life</strong>.
            </p>
          </div>
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="media/vaast-background_eco_vf_gq.jpg"
              class="d-block mx-lg-auto img-fluid border rounded-3 p-4"
              alt="background image with ecological environment and visual flow"
              width="700"
              height="500"
              loading="lazy" />
          </div>
        </div>
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"
    class="astro-vvvwv3sm"></script>
  <script src="js/active-hd.js"></script>
  <script src="js/tooltip.js"></script>
</body>

</html>