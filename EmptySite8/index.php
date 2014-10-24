<?php
    include 'testingFile.php';
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" 
     style ="background: -webkit-linear-gradient(top,#d2ac30 0,#af8e25 50%,#967a20 51%,#7d661b 100%);">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:  #fff">Shareefah's Portfolio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" style="color:  #fff">Project</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Assignments Fa14
                    <small>Programming Studio</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assign1.0.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Assignment1.0</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment1.0'){
                            echo $entry->commit->date;
                        }
                    }
                ?></h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment1.0'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?></h4>
                </h5>
                <p>This week, we will be focusing on unit testing and 
                    object oriented design by implementing the core objects 
                    and data structures for a chess game application. This 
                    will be the first of several weeks in building this 
                    application. By the end of the week, you should have 
                    implemented the tests (first) and the corresponding implementation 
                    (second) for the pieces and board of a chess game.</p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'Assignment1.0') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        $collapse = "collapse";
                                        $target = "#demo1";
                                        $class = "accordion-toggle";
                                        echo "<tr data-toggle= $collapse data-target=$target class=$class style= 'font-size= 20px'><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        #echo "$path<br/>\n";
                                        $paths = "$path$files";
                                        #echo "$paths<br/>\n";
                                        foreach($log->logentry as $logentry){
                                                
                                            foreach($logentry->paths->path as $path){
                                                #echo "$path<br/>\n";
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assign1.2.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Assignment1.2.0</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment1.2.0'){
                            echo $entry->commit->date;
                        }
                    }
                ?>
                </h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment1.2.0'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>This week, we will be focusing on Model-View-Controller architecture. 
                    This means you will be implementing the graphical user interface (GUI),
                    but GUI is only a part of MVC, so do not waste your time with small specifics. 
                    Your GUI should be clean and easy to use, but it doesn't have to be pretty and fancy.
                </p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal1">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Assignment1.2.0 Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'Assignment1.2.0') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>

         <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assign2.0.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Assignment2.0</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment2.0'){
                            echo $entry->commit->date;
                        }
                    }
                ?>
                </h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment2.0'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>This week, you will be reading in raw data in JSON format 
                    and representing it as a graph in memory. You will then 
                    provide an interface to query data about the graph and 
                    provide a hook to visualize the data.</p>
                 <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal3">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Assignment2.0 Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'Assignment2.0') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>
        
        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assign2.1.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Assignment2.1</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment2.1'){
                            echo $entry->commit->date;
                        }
                    }
                ?>
                </h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment2.1'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>The new requirements for the software are:
                    <ol>
                        <li>Allow for online editing of the route network</li>
                        <li>Saving the route network back to disk</li>
                        <li>Displaying additional information about routes in the network</li>
                        <li>Allow for finding the shortest route between two cities</li>
                        <li>Enhance the system to accommodate CSAir's expansion</li>
                   </ol>
                </p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal4">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Assignment2.1 Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'Assignment2.1') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="assign2.2.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Assignment2.2</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment2.2'){
                            echo $entry->commit->date;
                        }
                    }
                ?></h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'Assignment2.2'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>After the chess game you all now have some experience with GUIs.
                    For this week we want you to create a GUI option for CSAir. 
                    CEO Woodley has decided that most users might prefer a GUI over console.</p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal5">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Assignment2.2 Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'Assignment2.2') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>HW0</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'HW0'){
                            echo $entry->commit->date;
                        }
                    }
                ?>
                </h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'AssignmentHW0'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>You are facing a software system which represents a simulation 
                    of a local area network. The development team has been very 
                    fast in accommodating the initial requirements for the system
                    and has been able to release version 1.4 of the system, 
                    which contains all the functionality for the first milestone. </p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal6">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">HW0 Assignment Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'HW0') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>avl</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'avl'){
                            echo $entry->commit->date;
                        }
                    }
                ?> 
                </h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'avl'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>Be sure to familiarize yourself with the basics of SVN.
                   The tutorial below is a very detailed explanation of the
                   operations you will likely need to perform:</p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal7">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Previous Project Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'avl') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>shopping</h3>
                <h4>Date: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'shopping'){
                            echo $entry->commit->date;
                        }
                    }
                ?> 
                </h4>
                <h5>
                    Version: <?php 
                    foreach($lists->list->entry as $entry){
                        if((string)$entry->name == 'shopping'){
                            echo $entry->commit['revision'];
                        }
                    }
                ?>
                </h5>
                <p>Bring in any piece of code that you have written that is at least 400 lines long.
                    You must check this code in to https://subversion.ews.illinois.edu/svn/fa14-cs242/netid/Assignment0.
                    You will also be asked to ask questions and discuss the code presented by other students in your section, 
                    so please read Style Conventions, Modular Programming, and Code Smells.</p>
                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal8">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
        <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Shopping Assignment Files</h4>
              </div>
              <div class="modal-body">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>FileName</th>
                            <th>Size</th>
                            <th>Type</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($lists->list->entry as $entry){
                                if((string)$entry['kind'] == 'file'){
                                    if(strpos((string)$entry->name,'shopping') !== false && strpos((string)$entry->name,'org') == false){
                                        $files = (string)$entry->name;
                                        $file = substr(strrchr($files, "/"), 1);
                                        echo "<tr><th>$file</th>";
                                        echo "<th>$entry->size</th>";
                                        if(strpos((string)$entry->name,'test') !== false){
                                            echo "<th>Test</th>";    
                                        }
                                        elseif (strpos((string)$entry->name,'java') !== false){
                                            echo "<th>Code</th>";    
                                        }
                                        else{
                                            echo "<th>Other</th>";    
                                        }
                                        $path = "https://subversion.ews.illinois.edu/svn/fa14-cs242/scwilli2/";
                                        $path =(string)$path . (string)$files;
                                        echo "<th><a href= $path>$files<a></th></tr>";
                                        echo "<tr><th>Revision</th><th>Author</th><th>Date</th><th>Msg</th></tr>";
                                        $path = "/scwilli2/";
                                        $paths = "$path$files";
                                        foreach($log->logentry as $logentry){
                                            foreach($logentry->paths->path as $path){
                                                if(strcmp($paths, $path) == 0){
                                                    echo "<tr><td>", $logentry['revision'], "</td>";
                                                    echo "<td>", $logentry->author, "</td>";
                                                    echo "<td>", $logentry->date, "</td>";
                                                    echo "<td>", $logentry->msg, "</td></tr>";
                                                }
                                            }
                                        }
                                    }   
                                }
                            }
                        ?>                        
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <hr>
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Template by @Apache 2.0 by Start Bootstrap </p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
