<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Monitoring</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <!-- <style>
        #videoElement {
        width: 55rem;
        height: 25rem;
        background-color: transparent;
        }
        </style> -->
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include "partials/_navbar.html"; ?> 
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include "partials/_sidebar.html"; ?> 
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Updates</h4>
                    <div class="btn-off">
                        <div class="col-5 grid-margin">

                        <a href="cam.php">
                            <button type="button" class="btn btn-danger">OFF</button>
                        </a>
                        </div>
                    </div>
                    
                    <div class="row text-black">
                        <video autoplay="true" id="videoElement"></video>
                            <div class="navbar-form navbar-right">
                            </div> 
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial:partials/_footer.html -->
          <?php include "partials/_footer.html"; ?> 
          <!-- partial -->
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script>
        var video = document.querySelector("#videoElement");
        if (navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices.getUserMedia({ 
                video: true,
                width: 1024,
                heigth: 480
            })
            .then(function (stream) {
                video.srcObject = stream;
            }).catch(function (err0r) {
                console.log("Something went wrong!");
            });
        }
    </script>
  </body>
</html>