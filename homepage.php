<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Resautarant management system</title>
    <!--<link rel=stylesheet href='style.css'>-->
    <script src='https://use.fontawesome.com/0c7a3095b5.js'></script>
    <style>
    #dashboardMainContainer{
    display: flex;
    flex-direction: row;
    }
    .dashboard_slider{
    width: 30%;
    background: #323232;
    height: 100vh;
    }
    .dashboard_content_container{
    width: 70%;
    }
    h3.dashboard_logo{
    color: #f865a1;
    font-size: 80px;
    text-align: center;
}
div.dashboard_slider{
    text-align: center;
    position: relative;
}
    .dashboard_slider_user.img{
    width: 60px;
    display: inline-block;
    border: 2px solid #f865a1;
    border-radius: 60%;
    margin-left: 5px;
}

    div.dashboard_slider_user.span{
       position: relative ;
    }
    div.dashboard_slider
    </style>
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_slider">
            <div class="dashboard_logo" style="color: #f865a1; font-size: 80px; text-align: center;">RMS</div>
            <div class="dashboard_slider_user"></div>
            <img src="avatar.png" class="avtar"
            style="width: 50%;border-radius: 50%;width: 60px;display: inline-block;border: 2px solid #f865a1;border-radius: 60%;margin-left: 5px;">
            <span>MICHEL</span>
        </div>
        <div class="dashboard_content">
            <div class="dashboard_slider_menus">
                <ul class="dahsboard_menus_lists">
                    <li>
                        <a href=""><i class="fa fa-dashboard">Dashboard</i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dashboard">Dashboard</i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href=" "><i class="fa fa-navicon"></i></a>
                <a href=" "><i class="fa fa-powerr-off">Log Out</i></a>
            </div>
             <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
             </div>
        </div>
    </div>
</body>
</html>