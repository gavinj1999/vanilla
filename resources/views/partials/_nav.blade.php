<!----navbar----------------->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand no-padding margin-left-15" href="#"><img class="img-responsive" src="storage/{{ Voyager::setting('logo') }}" alt="vannillAffiliate"></a>
        </div>
{!!  Menu::display('Home', 'bootstrap')   !!}
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">
                        Categories
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 1</a></li>
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 2</a></li>
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 3</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">
                        Categories
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 1</a></li>
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 2</a></li>
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 3</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"  data-close-others="false">
                        Categories
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 1</a></li>
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 2</a></li>
                        <li><a href="#"><span class="glyphicons glyphicons-chevron-right"></span> Cat 3</a></li>
                    </ul>
                </li>

                <li><a href="#"> Information</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!----/////----navbar----------------->