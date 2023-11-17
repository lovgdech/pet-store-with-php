<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="assets/stylesheets/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/stylesheets/index.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <?php require_once 'sidebar.php' ?>

        <div id="content-wrapper" class="d-flex flex-column" style="min-height: 100vh;">

            <div id="content" class="flex-grow-1 d-flex flex-column">

                <?php require_once 'header.php' ?>

                <div class="container-fluid flex-grow-1">

                    <?php echo $content ?>

                </div>

                <?php require_once 'footer.php' ?>

            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="assets/javascripts/sb-admin-2.min.js"></script>

        <script src="assets/vendor/chart.js/Chart.min.js"></script>

        <script src="assets/javascripts/demo/chart-area-demo.js"></script>
        <script src="assets/javascripts/demo/chart-pie-demo.js"></script>

</body>

</html>