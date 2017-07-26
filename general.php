<?php 
#header( "location: http://www.google.com" );
session_start();
#if($_SESSION['data']['name']){ echo $_SESSION['user'];}

if (!isset($_SESSION['data']['name'])) {
header('Location: index.php'); 
}
#session_destroy();
#echo $_SESSION['data']['group']." : ".$_SESSION['data']['username'];

$number_online = 0;                      
$number_offline = 0;
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
    <title>Form General</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/lib/animate.css/fa-animate.min.css">     

          
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


        <!-- <link rel="stylesheet" href="/assets/lib/inputlimiter/jquery.inputlimiter.css"> -->
        <!-- <link rel="stylesheet" href="/assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css"> -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/css/bootstrap3/bootstrap-switch.min.css">
        <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/css/datepicker3.min.css"> -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

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
                            Line Service
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
                                    <h5 class="media-heading"></h5>
                                    <ul class="list-unstyled user-info">
                                                <li><a href=""><?php echo $_SESSION['data']['name']; ?></a></li>                                                
                                                <!-- <li>Last Access : <br> -->
                                                    <!-- <small><i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> -->
                                                </li>
                                            </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker"></ul>
                        <!-- /#menu -->
                    </div>
                    <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <!--BEGIN INPUT TEXT FIELDS-->


            <div class="row">
                    <div class="col-lg-12">
                        <div class="box dark">
                            <header>
                                <div class="icons"><i class="fa fa-edit"></i></div>
                                <h5>Summary</h5>
                                <!-- .toolbar -->
                                <div class="toolbar">
                                  <nav style="padding: 8px;">
                                      <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                          <i class="fa fa-minus"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                          <i class="fa fa-expand"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                          <i class="fa fa-times"></i>
                                      </a>
                                  </nav>
                                </div>            <!-- /.toolbar -->
                            </header>
                          <div id="div-1" class="body text-center">
                            
                              <a class="quick-btn" href="#">
                              <i class="fa fa-spinner fa-spin fa-2x" style="color:green"></i>
                              <span>Online</span>
                              <span class="label label-success" id="online">0</span>
                              </a>                                  
                              <a class="quick-btn" href="#">
                              <i class="fa fa-power-off fa-2x" style="color:red"></i>
                              <span>Offline</span>
                              <span class="label label-danger" id="offline">0</span>
                              </a>

                          </div>
                        </div>
                    </div>

<!--END TEXT INPUT FIELD-->



                        </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="box dark">
                            <header>
                                <div class="icons"><i class="fa fa-edit"></i></div>
                                <h5>Add More Server</h5>
                                <!-- .toolbar -->
                                <div class="toolbar">
                                  <nav style="padding: 8px;">
                                      <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                          <i class="fa fa-minus"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                          <i class="fa fa-expand"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                          <i class="fa fa-times"></i>
                                      </a>
                                  </nav>
                                </div>            <!-- /.toolbar -->
                            </header>
                          <div id="div-1" class="body">
                              <form class="form-horizontal" name="addserver">

                                  <div class="form-group">
                                      <label for="text1" class="control-label col-lg-4">Server Name</label>

                                      <div class="col-lg-8">
                                          <input type="text" id="servername" name="servername" placeholder="Server Name" class="form-control">
                                      </div>
                                  </div>
                                  <!-- /.form-group -->

                                  <div class="form-group">
                                      <label for="pass1" class="control-label col-lg-4">Server Address</label>

                                      <div class="col-lg-8">
                                         <input type="text" id="serveraddress" name="serveraddress" placeholder="Server address" class="form-control">
                                      </div>
                                  </div>
                                  <!-- /.form-group -->

                                  <div class="form-group">
                                      <label class="control-label col-lg-4">Server Group</label>

                                      <div class="col-lg-8">
                                          <input type="text" id="servergroup" name="servergroup" placeholder="Server Group" class="form-control">
                                      </div>
                                  </div>
                                  <!-- /.form-group -->

                                                     

                                      <button type="button" class="btn btn-success col-lg-12" onclick="addServer()">Add</button>
                                      
                                  
                                  <!-- /.form-group -->
                                  
                              </form>
                          </div>
                        </div>
                    </div>

<!--END TEXT INPUT FIELD-->



                        </div>


                        <div class="row">
                    <div class="col-lg-12">
                        <div class="box dark">
                            <header>
                                <div class="icons"><i class="fa fa-edit"></i></div>
                                <h5>Monitoring Lists</h5>
                                <!-- .toolbar -->
                                <div class="toolbar">
                                  <nav style="padding: 8px;">
                                      <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                          <i class="fa fa-minus"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                          <i class="fa fa-expand"></i>
                                      </a>
                                      <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                          <i class="fa fa-times"></i>
                                      </a>
                                  </nav>
                                </div>            <!-- /.toolbar -->
                            </header>
                          <div id="div-2" class="body">
                              <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped sortableTable">

                <?php 
                    require( "assets/config/php_config.cfg" );
                    require( "assets/config/php_function.fun" );
                    $dbh = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
                    $dbh->exec("set names utf8");                                                     
                    
                ?>


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

                        

                        if ($_SESSION['data']['group'] == "Admin") {

                            $get_admin_list = "SELECT * FROM `server`";
                            $admin_results = $dbh -> prepare($get_admin_list);
                            $admin_results -> execute(); 
                            $admin_result = $admin_results->fetchAll();
                            foreach ($admin_result as $key => $value) {

                                // $status = pingAddress($value['address']);
                                if (linkStatus($value['address']) == "ONLINE") {
                                    # code...
                                  $number_online++;
                                    $status = "<span style='color:green;'>ONLINE</span>";

                                    ?>

                                  <script type="text/javascript">
                                    var currentOnline = <?php echo $number_online; ?> ;
                                    document.getElementById("online").innerHTML = currentOnline;
                                  </script>

                                  <?php


                                } else {
                                    # code...
                                    $number_offline++;
                                    $status = "<span style='color:red;'>OFFLINE</span>";

                                    ?>

                                  <script type="text/javascript">
                                    var currentOffline = <?php echo $number_offline; ?> ;
                                    document.getElementById("offline").innerHTML = currentOffline;
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
                                  $number_online++;
                                    $status = "<span style='color:green;'>ONLINE</span>";

                                  ?>

                                  <script type="text/javascript">
                                    var currentOnline = <?php echo $number_online; ?> ;
                                    document.getElementById("online").innerHTML = currentOnline;
                                  </script>

                                  <?php

                                } else {
                                    # code...
                                    $number_offline++;
                                    $status = "<span style='color:red;'>OFFLINE</span>";

                                    ?>

                                    <script type="text/javascript">
                                      var currentOffline = <?php echo $number_offline; ?> ;
                                      document.getElementById("offline").innerHTML = currentOffline;
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

<!--END TEXT INPUT FIELD-->



                        </div>






                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
                    <div id="right" class="bg-light lter">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong> Best check yo self, you're not looking too good.
                        </div>
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <ul class="list-unstyled">
                                <li>Visitor <span class="inlinesparkline pull-right">1,4,4,7,5,9,10</span></li>
                                <li>Online Visitor <span class="dynamicsparkline pull-right">Loading..</span></li>
                                <li>Popularity <span class="dynamicbar pull-right">Loading..</span></li>
                                <li>New Users <span class="inlinebar pull-right">1,3,4,5,3,5</span></li>
                            </ul>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <button class="btn btn-block">Default</button>
                            <button class="btn btn-primary btn-block">Primary</button>
                            <button class="btn btn-info btn-block">Info</button>
                            <button class="btn btn-success btn-block">Success</button>
                            <button class="btn btn-danger btn-block">Danger</button>
                            <button class="btn btn-warning btn-block">Warning</button>
                            <button class="btn btn-inverse btn-block">Inverse</button>
                            <button class="btn btn-metis-1 btn-block">btn-metis-1</button>
                            <button class="btn btn-metis-2 btn-block">btn-metis-2</button>
                            <button class="btn btn-metis-3 btn-block">btn-metis-3</button>
                            <button class="btn btn-metis-4 btn-block">btn-metis-4</button>
                            <button class="btn btn-metis-5 btn-block">btn-metis-5</button>
                            <button class="btn btn-metis-6 btn-block">btn-metis-6</button>
                        </div>
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
            </div>
            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; Bacom Internetwork CO.,LTD.</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->
            <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="color: black">About Us</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                <div class="entry-content">
                                  <p style="color: black">Since 2000, Bacom Internetwork Co., Ltd. has been the pioneering marketer and distributor of some of the most intelligent and innovative security technologies in Thailand.</p>
                              <p style="color: black"><img class="aligncenter size-full wp-image-19" alt="bannereee" src="http://bacominternetwork.com/wp-content/uploads/2013/02/bannereee.jpg" width="430" height="189" srcset="http://bacominternetwork.com/wp-content/uploads/2013/02/bannereee.jpg 430w, http://bacominternetwork.com/wp-content/uploads/2013/02/bannereee-300x131.jpg 300w" sizes="(max-width: 430px) 100vw, 430px"></p>
                              <p style="color: black">We pride ourselves in equipping our customers with the best in cutting edge security systems and facilities through our synergetic partnerships with renowned suppliers from across the globe. Our expertise and services are unparalleled – Bacom Internetwork’s team are highly knowledgeable and experienced in supporting security system integrators and equipment supplier companies for HD CCTV, Software VMS, HD Storage, Network Equipment and LED Lighting ,We pride ourselves to our expertise and services are unparalleled.</p>
                              <p style="color: black">We also provide specialized support in custom turnkey systems that integrate different technologies, thus adding value to your business operations.</p>
                              <p style="color: black">Together with our professional team of skillful technical, engineering and marketing specialists, you can be sure that we are expertly experienced to design, recommend and implement state of the art security system that is tailor made to meet the ever-changing security demands of your business.</p>
                              <p style="color: black">BACOM Team</p>
                              <ul style="color: black">
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
                              <p style="color: black">Always at the forefront of the latest innovations in security technologies, our prime commitment to you lies in the distribution and application of our in-depth knowledge in closed circuit television business development, channel development, distribution strategies and the marketing of technologically advanced platform for the integration of security products.</p>
                              <p style="color: black">At BACOM, we focus our knowledge and experiences on three key components:</p>
                              <p style="color: black">Providing security system integrators and channel distributors across Thailand with innovative and proven products that are sourced globally for the benefit of their respective markets.</p>
                              <p style="color: black">Providing technical advices, solutions and after-sales services for security system integrators during and after product integrations.</p>
                              <p style="color: black">Providing Preventive maintenance for our valued Partners and Customers</p>

    
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
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/autosize.js/1.18.17/jquery.autosize.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/js/bootstrap-datepicker.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/js/bootstrap-colorpicker.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <!-- <script src="/assets/lib/inputlimiter/jquery.inputlimiter.js"></script> -->
                    <!-- <script src="/assets/lib/validVal/js/jquery.validVal.min.js"></script> -->
                    <!-- <script src="/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script> -->

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

                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
