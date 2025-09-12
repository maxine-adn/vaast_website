<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <title>Try the experiments</title>
  <script src="assets/js/color-modes.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap"
    rel="stylesheet" />
  <link href="css/mock-expes.css" rel="stylesheet" />
  <link href="css/all.css" rel="stylesheet" />

</head>

<body>
  <?php include 'color-modes.php'; ?>
  <?php include 'header.php'; ?>
  <main>
    <div class="p-md-5 my-4 text-body-emphasis bg-body-secondary container mt-5" style="border-radius: 21px">
      <div class="col-lg-12 px-0 text-center">
        <h2 class="fst-italic">
          Choose which version of the VAAST you want to try :
        </h2>
      </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 ps-md-3 container-sm" style="margin-bottom: 4rem">
      <a
        target="_blank" rel="noopener noreferrer"
        class="text-body-emphasis me-md-3 pt-md-4 mb-4 text-center text-decoration-none"
        href="explicit-vaast.php">

        <div class="mb-2 pb-2 pt-4">
          <h2 class="display-6">Explicit VAAST</h2>
        </div>

        <div class="mx-auto">
          <img
            src="media/vaast-background_eco_vf_gq.jpg"
            style="width: 85%"
            class="mx-auto img-fluid border rounded-3 p-4"
            alt="background image with ecological environment and visual flow"
            loading="lazy" />
        </div>
      </a>
      <a
        target="_blank" rel="noopener noreferrer"
        class="text-body-emphasis me-md-3 pt-md-4 mb-4 text-center text-decoration-none"
        href="incidental-vaast.php">

        <div class="mb-2 pb-2 pt-4">
          <h2 class="display-6">Incidental VAAST</h2>
        </div>

        <div class="mx-auto">
          <img
            src="media/vaast-background_all_eco.jpg"
            style="width: 85%"
            class="mx-auto img-fluid border rounded-3 p-4"
            alt="background image with ecological environment and visual flow"
            loading="lazy" />
        </div>
      </a>
    </div>

  </main>
  <?php include 'footer.php'; ?>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"
    class="astro-vvvwv3sm"></script>
  <script src="js/active-hd.js"></script>

</body>

</html>