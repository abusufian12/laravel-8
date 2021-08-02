<!-- Sidebar -->
<nav id="sidebar" class="nav-bg">
    <!-- Primary Navigation Menu -->

    <div class="sidebar-header">
        <h3>Bootstrap Sidebar</h3>
    </div>

    <ul class="list-unstyled components">
        <!-- <p>Dummy Heading</p> -->
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-alarm-fill"></i> Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/users"><i class="fa fa-fw fa-user"></i>  Users</a>
        </li>
        <li>
            <a href="/menus"><i class="fa fa-fw fa-user"></i>  Menus</a>
        </li>
    </ul>
</nav>
<style type="text/css">
.nav-bg{
    background: #313131e0 !important;
}  
.nav-bg ul, .nav-bg div, .nav-bg ul li, .nav-bg ul li a {
    background: #313131e0 !important;
}

</style>    
    