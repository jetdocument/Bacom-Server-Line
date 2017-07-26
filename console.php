<?php 
#header( "location: http://www.google.com" );
session_start();
#if($_SESSION['data']['name']){ echo $_SESSION['user'];}

if (!isset($_SESSION['data']['name'])) {
header('Location: index.php'); 
}
#session_destroy();
#echo $_SESSION['data']['group']." : ".$_SESSION['data']['username'];
?>

<?php 
    require( "assets/config/php_config.cfg" );
    require( "assets/config/php_function.fun" );
    $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $dbh->exec("set names utf8");                                                     
    
?>


<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bacom Line Service</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>    
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                    
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                                       class="btn btn-default btn-sm" id="toggleFullScreen">
                                        <i class="glyphicon glyphicon-fullscreen"></i>
                                    </a>
                                </div>
                                <script type="text/javascript">
                                    var policy = '<?php echo $_SESSION['data']['group']; ?>';
                                </script>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Manage User" data-toggle="tooltip"
                                       class="btn btn-info btn-sm" onclick="if ( policy === 'Admin') { location.replace('admin.php');} else {alert('Access Deny');} ">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="index.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                   
                                </div>
                    
                            </div>
                    
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">                                    
                                    <li class="active"><a href="console.php">Console</a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                    <!-- /.navbar -->                        
                    <header class="head">
                                
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
                      <i class="fa fa-home"></i>&nbsp;
                    Line Console
                  </h3>
                                    </div>
                                    <!-- /.main-bar -->
                                </header>
                                <!-- /.head -->
                        </div>
                        <!-- /#top -->
                            <div id="left">
                                <div class="media user-media bg-dark dker">
                                    <div class="user-media-toggleHover">
                                        <span class="fa fa-user"></span>
                                    </div>
                                    <div class="user-wrapper bg-dark">
                                        <a class="user-link" href="">
                                            <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                            <span class="label label-danger user-label">16</span>
                                        </a>
                                
                                        <div class="media-body">
                                            <!-- <h5 class="media-heading">Archie</h5> -->
                                            <ul class="list-unstyled user-info">
                                                <li><a href=""><?php echo $_SESSION['data']['name']; ?></a></li>
                                                
                                            </ul>
                                            <ul class="list-unstyled user-success">
                                                <li><a href="#NewPassword" data-toggle="modal" data-original-title="Set your new password" data-placement="bottom">Set Password</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /#left -->
                        <div id="content">
                            <div class="outer">
                                <div class="inner bg-light lter">

    <div class="row">
    <div class="text-center col-lg-12">
        <div class="box">
            <header>
            <h5>Summary Server Status</h5>
            </header>
            
            <a class="quick-btn" href="#" style="color: red">
            <i class="fa fa-power-off fa-2x"></i>
            <span>OFFLINE</span>
            <span class="label label-danger" id="offline_number">0</span>
            </a>
            <a class="quick-btn" href="#" style="color: green">
            <i class="fa fa-spinner fa-2x fa-spin"></i>
            <span>ONLINE</span>
            <span class="label btn-success" id="online_number">0</span>
            </a>        

        </div>
    </div>


    </div>

    <div class="row">
    <div class="text-center col-lg-12">
        <div class="box">
    <header>
    <h5>Add Server</h5>
    </header>            
    </div>

    <div class="body">        
    <form class="form-horizontal" name="addserver">

        <div class="form-group">
            <div class="col-lg-4">
                <input type="text" id="servername" name="servername" placeholder="Server Name" class="form-control">
            </div>
            <div class="col-lg-4">
                <input type="text" id="serveraddress" name="serveraddress" placeholder="Server address" class="form-control">
            </div>
            <div class="col-lg-3">
                <input type="text" id="servergroup" name="servergroup" placeholder="Server Group" class="form-control">
            </div>
            <div class="col-lg-1">
                <button type="button" class="btn btn-success" onclick="addServer()">Add</button>
            </div>
        </div>                
        <!-- /.form-group -->                
    </form>
    </div>           
       
    </div>    
    </div>

<div class="row">
    <div class="text-center col-lg-12">
        <div class="box">
            <header>
            <h5>Your Server Monitoring</h5>
            </header>              
        </div>
        <div class="box">                 
        
            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Address</th>
                        <th>Last active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="tbody">

                    <?php  

                        $online_number = 0;
                        $offline_number = 0;                                             

                        if ($_SESSION['data']['group'] == "Admin") {
                            

                            $get_admin_list = "SELECT * FROM `server`";
                            $admin_results = $dbh -> prepare($get_admin_list);
                            $admin_results -> execute(); 
                            $admin_result = $admin_results->fetchAll();
                            foreach ($admin_result as $key => $value) {

                                // $status = pingAddress($value['address']);
                                if (linkStatus($value['address']) == "ONLINE") {
                                    # code...
                                
                                    $status = "<span style='color:green;'>ONLINE</span>";                                    
                                    $online_number = $online_number+1;
                                    ?>
                                    <script type="text/javascript">
                                        document.getElementById('online_number').innerHTML = <?php echo $online_number; ?>;
                                    </script>
                                    <?php
                                } else {
                                    # code...
                                    $status = "<span style='color:red;'>OFFLINE</span>";
                                    $offline_number = $offline_number+1;
                                    ?>
                                    <script type="text/javascript">
                                        document.getElementById('offline_number').innerHTML = <?php echo $offline_number; ?>;
                                    </script>
                                    <?php
                                }
                                

                                    echo "  <tr>
                                                <td>".$status."</td>
                                                <td>".$value['name']."</td>
                                                <td>".$value['group']."</td>
                                                <td><a href=http://".$value['address'].">".$value['address']."</a></td>
                                                <td>".$value['updated_at']."</td>
                                                <td><button type='button' class='btn btn-success delete' onclick=''>Delete</button></td> 
                                                
                                            </tr>";

                            } 

                        } else if ($_SESSION['data']['group'] == "User") {

                            $get_server_list = "SELECT * FROM `server` WHERE `created_by` = '".$_SESSION['data']['username']."'";
                            $results = $dbh -> prepare($get_server_list);
                            $results -> execute();

                            $result = $results->fetchAll();
                            foreach ($result as $key => $value) {

                                if (linkStatus($value['address']) == "ONLINE") {
                                    # code...
                                   
                                    $status = "<span style='color:green;'>ONLINE</span>";
                                    $online_number = $online_number+1;
                                    ?>
                                    <script type="text/javascript">
                                        document.getElementById('online_number').innerHTML = <?php echo $online_number; ?>;
                                    </script>
                                    <?php

                                } else {
                                    # code...
                                    $status = "<span style='color:red;'>OFFLINE</span>";
                                    $offline_number = $offline_number+1;
                                    ?>
                                    <script type="text/javascript">
                                        document.getElementById('offline_number').innerHTML = <?php echo $offline_number; ?>;
                                    </script>
                                    <?php
                                }

                                if ($value['created_by'] ==  $_SESSION['data']['username']) {
                                    # code...
                                    echo "  <tr>
                                            <td>".$status."</td>
                                            <td>".$value['name']."</td>
                                            <td>".$value['group']."</td>
                                            <td><a href=http://".$value['address'].">".$value['address']."</a></td>
                                            <td>".$value['updated_at']."</td> 
                                            <td><button type='button' class='btn btn-success delete' onclick=''>Delete</button></td>
                                        </tr>";
                                }
                            }

                                                       

                        } else {

                        }

                        
                        ?>
                            
                           
                    </tbody>                

                    </table>
            
        </div>
    </div>
</div>





                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter"></div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Bacom Internetwork CO.,LTD.</p>
                <?php echo $number_online; ?>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">About Us</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                <div class="entry-content">
                                  <p>Since 2000, Bacom Internetwork Co., Ltd. has been the pioneering marketer and distributor of some of the most intelligent and innovative security technologies in Thailand.</p>
                              <p><img class="aligncenter size-full wp-image-19" alt="bannereee" src="http://bacominternetwork.com/wp-content/uploads/2013/02/bannereee.jpg" width="430" height="189" srcset="http://bacominternetwork.com/wp-content/uploads/2013/02/bannereee.jpg 430w, http://bacominternetwork.com/wp-content/uploads/2013/02/bannereee-300x131.jpg 300w" sizes="(max-width: 430px) 100vw, 430px"></p>
                              <p>We pride ourselves in equipping our customers with the best in cutting edge security systems and facilities through our synergetic partnerships with renowned suppliers from across the globe. Our expertise and services are unparalleled – Bacom Internetwork’s team are highly knowledgeable and experienced in supporting security system integrators and equipment supplier companies for HD CCTV, Software VMS, HD Storage, Network Equipment and LED Lighting ,We pride ourselves to our expertise and services are unparalleled.</p>
                              <p>We also provide specialized support in custom turnkey systems that integrate different technologies, thus adding value to your business operations.</p>
                              <p>Together with our professional team of skillful technical, engineering and marketing specialists, you can be sure that we are expertly experienced to design, recommend and implement state of the art security system that is tailor made to meet the ever-changing security demands of your business.</p>
                              <p>BACOM Team</p>
                              <ul>
                              <li>Management Team</li>
                              <li>Sales &amp; Customer Support Team</li>
                              <li>Marketing Team</li>
                              <li>Installation and Commissioning Team</li>
                              <li>Maintenance &amp; After Sale Service Team</li>
                              <li>Logistics Team</li>
                              <li>Training Team</li>
                              <li>Office Team</li>
                              <li>BACOM Business</li>
                              </ul>
                              <p>Always at the forefront of the latest innovations in security technologies, our prime commitment to you lies in the distribution and application of our in-depth knowledge in closed circuit television business development, channel development, distribution strategies and the marketing of technologically advanced platform for the integration of security products.</p>
                              <p>At BACOM, we focus our knowledge and experiences on three key components:</p>
                              <p>Providing security system integrators and channel distributors across Thailand with innovative and proven products that are sourced globally for the benefit of their respective markets.</p>
                              <p>Providing technical advices, solutions and after-sales services for security system integrators during and after product integrations.</p>
                              <p>Providing Preventive maintenance for our valued Partners and Customers</p>

    
                              </div>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->


            <div id="NewPassword" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Set Your Password</h4>
                        </div>
                        <div class="modal-body">
                            
                            <form class="form-horizontal" name="updatepass">

                                <div class="form-group">
                                    <div class="col-lg-6">
                                        <input type="password" id="pass" name="servername" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" id="repass" name="serveraddress" placeholder="Re-Password" class="form-control">
                                    </div>                                                                       
                                </div>                
                                <!-- /.form-group -->                
                            </form>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" onclick="updatePassword();">Confirm</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>




            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

            <!-- Event -->
            <script src="assets/js/console.js"></script>

            <script>
                    $(function() {                        
                        

                        var typingTimer;
                        var doneTypingInterval = 10;
                        var finaldoneTypingInterval = 500;
                        var refreshTimer = setTimeout(function() {
                                  location.reload();
                                }, 30000);

                        var oldData = document.forms['addserver']['servergroup'].placeholder;

                        $('#servername,#serveraddress,#servergroup').keydown(function () {
                            clearTimeout(typingTimer);
                            if ($('#servername,#serveraddress,#servergroup').val) {
                                typingTimer = setTimeout(function () {                                    
                                    // document.forms['addserver']['servergroup'].placeholder = 'Typing...';
                                    clearTimeout(refreshTimer);
                                    // $("#serveraddress").html('Typing...');
                                }, doneTypingInterval);
                            }
                        });

                        $('#servername,#serveraddress,#servergroup').keyup(function () {
                            clearTimeout(typingTimer);
                            typingTimer = setTimeout(function () {
                                // document.forms['addserver']['servergroup'].placeholder = oldData;
                                refreshTimer = setTimeout(function() {
                                  location.reload();
                                }, 30000);
                            }, finaldoneTypingInterval);
                        }); 

                        Metis.MetisTable();
                        Metis.metisSortable();               

                    });
                </script>


            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
