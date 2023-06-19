<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Demo - Matri Care AI</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<style>
    h6.mb-4 {
    font-weight: 700;
    color: #720285;
}


h5.card-title {
    background: #fae6ff;
    padding: 10px;
    color: #720285;
    font-weight: 700;
    font-size: 13px;
}



p.card-text {
    color: #000;
}


.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #CDDC39;
    background-color: #640f84;
    border-color: #dddfeb #dddfeb #fff;
    font-weight: 700;
}


.nav-tabs .nav-link {
    background: #fae6ff;
}


.ap-po-details-time.airecommendation {
    background: #700b8d;
    color: #FFEB3B;
    font-size: 14px;
    padding: 10px;
    font-weight: 500;
}
    </style>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-baby"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Matri Care <sup>AI</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Demo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                How We Built It
            </div>


            
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.who.int/data/gho/data/themes/topics/sdg-target-3-1-maternal-mortality">
                <i class="fas fa-asterisk"></i>
                    <span>SDG #3</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.databricks.com/">
                <i class="fas fa-asterisk"></i>
                    <span>DataBricks</span></a>
            </li>






            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://huggingface.co/databricks/dolly-v2-12b">
                <i class="fas fa-database"></i>
                    <span>Dolly v2</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://replicate.com/replicate/dolly-v2-12b">
                <i class="fas fa-microchip"></i>
                    <span>Replicate</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://devpost.com/software/mama-care-ai">
                <i class="fas fa-code"></i>
                    <span>Devpost</span></a>
            </li>


             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://github.com/allanmukhwana/matricareai">
                <i class="fas fa-code-branch"></i>
                    <span>Github</span></a>
            </li>

            

        
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2">Revolutionizing maternal health support by utilizing cutting-edge AI technology to provide personalized tips and guidance to mothers, empowering them to navigate their journey with confidence.</p>
                <a class="btn btn-success btn-sm" href="https://devpost.com/software/mama-care-ai" target="_blank">Learn More</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="#" id="userDropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Demo User</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                         
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="https://github.com/allanmukhwana/matricareai" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Github</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">

                                <h6 class="mb-4">Matri Care AI Parameters</h6>


                                <div class="container mt-5">
  
    <!-- Period of Pregnancy (Expectant Mothers) -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Period of Pregnancy (Expectant Mothers)</h5>
        <p class="card-text">Enter the current period of pregnancy to receive personalized tips and guidance tailored to your specific stage.</p>
      </div>
    </div>

    <!-- Mother Health History (Expectant Mothers) -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Mother Health History (Expectant Mothers)</h5>
        <p class="card-text">Provide details about your health history, including any pre-existing conditions or complications, to ensure accurate and customized recommendations.</p>
      </div>
    </div>

    <!-- Age of Child (Existing Mothers) -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Age of Child (Existing Mothers)</h5>
        <p class="card-text">Specify the age of your child to receive age-appropriate advice and suggestions for their growth, development, and well-being.</p>
      </div>
    </div>

    <!-- Gender of Child (Existing Mothers) -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="card-title">Gender of Child (Existing Mothers)</h5>
        <p class="card-text">Indicate the gender of your child to receive gender-specific guidance related to their health, nutrition, and overall care.</p>
      </div>
    </div>
  </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">


                                <h6 class="mb-4">Input</h6>

                                    
                           

                                <div class="container mt-5">
  

    <ul class="nav nav-tabs mb-4">
      <li class="nav-item">
        <a class="nav-link active" id="existing-tab" data-toggle="tab" href="#existing-mothers">Existing Mothers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="expectant-tab" data-toggle="tab" href="#expectant-mothers">Expectant Mothers</a>
      </li>
    </ul>

    <div class="tab-content">
      <!-- Existing Mothers Form -->
      <div class="tab-pane fade show active" id="existing-mothers">
      <form id="mcform">
                                                        <input type="hidden" name="module" value="existing"/>
          <div class="form-group">
            <label for="child-age">Age of Child(Enter the age of your child)</label>
            <input type="text" class="form-control" id="child-age" name="age" placeholder="e.g, 2 months, 3 years">
          </div>
          <div class="form-group">
            <label for="child-gender">Gender of Child</label>
            <input type="text" class="form-control" id="child-gender" name="gender" placeholder="e.g, Male">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Expectant Mothers Form -->
      <div class="tab-pane fade" id="expectant-mothers">
      <form id="mcformb">
        <input type="hidden" name="module" value="expectant"/>
        <div class="form-group">
            <label for="pregnancy-period">Period of Pregnancy</label>
            <input type="text" class="form-control" id="pregnancy-period" name="period" placeholder="e.g, 10 weeks">
          </div>
          <div class="form-group">
            <label for="health-history">Mother Health History</label>
            <textarea class="form-control" id="health-history" name="history" rows="3" placeholder="e.g, Diabetes"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
                                
                                
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                <h6 class="mb-4">Output</h6>


                                

                                <div id="loader" style="display:none;">

<img src="img/fingerprint-scan.gif" width="100%" />


</div>



<div class="overview-content w-100" id="aioutput" style="display:none;">



     <div class="ap-po-details-time airecommendation">
      <p id="airectxt"></p>
     
   </div>
   <br/>
 
  

</div>
                                </div>
                            </div>
                        </div>

                      
                    </div>

                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Matri Care AI 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>

    <script>
$(document).ready(function() {
 // Variable to hold request
 var request;

// Bind to the submit event of our form
$("#mcformb").submit(function(event){


    

document.getElementById('aioutput').style.display = 'none';

document.getElementById('loader').style.display = 'block';

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "/matricareai/demo/ajax.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){


        


       

  
    $('#airectxt').html(response);


    //alert(recommendations);


    document.getElementById('aioutput').style.display = 'block';

document.getElementById('loader').style.display = 'none';

$inputs.prop("disabled", false);

/*
    if(rescode==500){

        $(".toast").attr('class', 'toast align-items-center text-white bg-danger fade');
        $('.toast').toast('show');

    }
    else if(rescode==100){

        $(".toast").attr('class', 'toast align-items-center text-white bg-success fade');
        $('.toast').toast('show');


                    setTimeout(
            function() 
            {
                location.reload();
            }, 5000);
    } 

    */
        // Log a message to the console
        //alert("Hooray, it worked!");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});




// Bind to the submit event of our form
$("#mcform").submit(function(event){


    

document.getElementById('aioutput').style.display = 'none';

document.getElementById('loader').style.display = 'block';

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "/matricareai/demo/ajax.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){


        


       

  
    $('#airectxt').html(response);


    //alert(recommendations);


    document.getElementById('aioutput').style.display = 'block';

document.getElementById('loader').style.display = 'none';

$inputs.prop("disabled", false);

/*
    if(rescode==500){

        $(".toast").attr('class', 'toast align-items-center text-white bg-danger fade');
        $('.toast').toast('show');

    }
    else if(rescode==100){

        $(".toast").attr('class', 'toast align-items-center text-white bg-success fade');
        $('.toast').toast('show');


                    setTimeout(
            function() 
            {
                location.reload();
            }, 5000);
    } 

    */
        // Log a message to the console
        //alert("Hooray, it worked!");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});

});
    </script>
  
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>