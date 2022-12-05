<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Item</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="main.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        
    </head>
    <style>
     
   
      .main-txt{
        margin-left: 18px;
       font-size: xx-large;
  
        position: relative;
        top: 14px;
      }
      .mm{
    
        position: relative;
      }
        section{
        text-align: center;
        position: unset;
        top: 40%;
        z-index: -2;
      
      }
      @media (max-width:500px) {
              
        section{
        text-align: center;
       
        top: 20%;
        z-index: -2;
      
      }

        }
      </style>
    <body>


        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>Owner</h3>
                </div>

                <ul  class="list-unstyled components">
                    
                      <li class="">
                       
                       <a href="#homeSubmenu" data-toggle="collapse" >   <i class="bi bi-bag-check"></i> Sales</a>
                    
                    </li>
                    <li>
                        <a href="#">   <i class="bi bi-ticket"></i> Receipts</a>
                        <a class="" href="index.php" data-toggle="collapse" > <i class="bi bi-list-ul "></i> Items</a>
                    
                    </li>
                    <li>
                        <a href="#"> <i class="bi bi-gear-fill p-3"></i> Settings</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#"><i class="bi bi-bar-chart-line-fill"></i> Back Office</a>
                    </li>
                    <li>
                        <a href="#"> <i class="bi bi-app"></i> Apps</a>
                    </li>
                    <li>
                        <a href="#"> <i class="bi bi-info-circle"></i> Support</a>
                    </li>
                </ul>

            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar ">
                    <div class="">

                        <div class="navbar-header mm ">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i style="font-size: 25px;" class="bi bi-list"></i>
                             
                            </button>
                      <a class="main-txt" href="index.php">All items</a> 
                        </div>

                        
                    </div>
                </nav>

                

<div class="main">
    <section style=" text-align:centre;" class="item-list" >
        <ul>
          <li><span><i class="bi1 bi-list-ul "></i></span>   <a href="items.php"> Items</a></li>
           
            
            <li><span><i class="bi1 bi-bookmarks"></i></span> <a href="">Categories</a> </li>
            
          
            <li>  <span><i class="bi1 bi-tag"></i></span>  <a href=""> Discounts</a></li>
           
        </ul>
        
    </section>
</div>
<a href="signup.php">sign-up</a>



        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });

        alert("welcome")
         
            
        </script>
    </body>
</html>
