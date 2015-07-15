<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Data tables | Dynamic Admin Template</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Css files -->
        <!-- Icons -->
        <link href="css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>


                            <!-- col-lg-12 end here -->
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->
                                <div class="panel panel-default toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Responsive example</h4>
                                    </div>
                                    <div class="panel-body">
                                        <table id="responsive-datatables" class="table table-bordered table-striped table-hover dt-responsive non-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
 
<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dave";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT id FROM test_one";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
       // output data of each row
        while($row = $result->fetch_assoc())
        {
            echo "<tr><td>". $row["id"]."</td></tr>";
        }
    } 
    else
    {
        echo "0 results";
    }
    $conn->close();

?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>


        <!-- Back to top -->
        <div id="back-to-top"><a href="#">Back to Top</a>
        </div>
        <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ) -->
        <script src="js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Remove click delay in touch -->
        <script src="plugins/core/fastclick/fastclick.js"></script>
        <!-- Increase jquery animation speed -->
        <script src="plugins/core/velocity/jquery.velocity.min.js"></script>
        <!-- Quick search plugin (fast search for many widgets) -->
        <script src="plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox fast bootstrap modals -->
        <script src="plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="plugins/tables/datatables/jquery.dataTables.js"></script>
        <script src="plugins/tables/datatables/dataTables.tableTools.js"></script>
        <script src="plugins/tables/datatables/dataTables.bootstrap.js"></script>
        <script src="plugins/tables/datatables/dataTables.responsive.js"></script>
        <script src="js/jquery.Dynamic.js"></script>
        <script src="js/main.js"></script>
        <script src="js/pages/tables-data.js"></script>
    </body>
</html>
