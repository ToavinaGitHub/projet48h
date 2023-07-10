<?php
?>
<style>
    .profile{
        padding: 0.5%;
        margin-top: 25%;
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .header {
        background-color: #353535;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-header {
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        height: 40px;
        width: 40px;
    }

    .menutoggle {
        color: #D9D9D9;
        font-size: 18px;
        cursor: pointer;
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .search-trigger {
        background-color: transparent;
        border: none;
        color: #fff;
        font-size: 20px;
        cursor: pointer;
        margin-right: 10px;
    }

    .search-form {
        position: relative;
    }

    .search-form .form-control {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #fff;
        color: #fff;
        font-size: 14px;
        padding: 5px;
        width: 200px;
        transition: all 0.3s ease;
    }

    .search-form .form-control:focus {
        outline: none;
        border-bottom-color: #fa4251;
    }

    .search-close {
        background-color: transparent;
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        position: absolute;
        top: 8px;
        right: 10px;
    }

    .user-area {
        position: relative;
    }
    .header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 999;
    }

</style>
<header id="header" class="header">

    <div class="top-left">

        <div class="navbar-header">
            <a  id="menuToggle" class="menutoggle"><i class="fa fa-bars" style="color: #D9D9D9;"></i></a>
        </div>
    </div>
    <a style="color: white;">NUTRI'</a>
    <div class="top-right">
        <div class="header-menu">
            <div class="header-left">
                <button class="search-trigger" style="color: #333"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" style="color: #333" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fas fa-sign-out"></i></button>
                    </form>
                </div>
            </div>
            <div class="user-area dropdown float-right">
                <?php if (isset($_SESSION['user'])){?>
                    <h4 class="profile" style="color: white"><i class="fa fa-power-off"></i></h4>
                <?php }else{
                    echo "rien";
                } ?>
            </div>
        </div>
    </div>
</header>
