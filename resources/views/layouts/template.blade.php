<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ujikom</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="asset/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="asset/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="asset/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="asset/assets/img/assalaam.png"/>
                    </a>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h3> UJIKOM </h3>
                    </a>
                    
                </div>
              
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><font size="4"> {{ Auth::user()->name }} </font><span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                    &nbsp;
                        <li><a href="{{ url('/jabatan') }}"> <i class="fa fa-group"></i> Jabatan </a></li>
                        <li><a href="{{ url('/golongan') }}"><i class="fa fa-group"></i> Golongan</a></li>
                        <li><a href="{{ url('/pegawai') }}"> <i class="fa fa-user"></i> Pegawai</a></li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-clock-o"></i> Lembur <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('/kategorilembur')}}">Kategori Lembur</a></li>
                            <li><a href="{{url('/lemburpegawai')}}">Lembur Pegawai</a></li>
                          </ul>
                        </li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-dollar"></i> Tunjangan <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('/tunjangan')}}">Tunjangan</a></li>
                            <li><a href="{{url('/tpegawai')}}">Tunjangan Pegawai</a></li>
                          </ul>
                        </li>

                        <li><a href="{{ url('/penggajian') }}"><i class="fa fa-money"></i>Penggajian</a></li>
                    </li>
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner"> 
                <div class="row">
                    <div class="col-lg-12 ">
                        @yield('content')
                       
                    </div>
                    </div> 
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2017 SMK Assalaam Bandung | <a href="http://smkassalaambandung.sch.id" style="color:#fff;" target="_blank">smkassalaambandung.sch.id</a>
                </div>
            </div>
        </div>
        
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="asset/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="asset/assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="asset/assets/js/custom.js"></script>
    
   
</body>
</html>
