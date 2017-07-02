@extend('welcome')

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">iFund</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                      <li>
                        <a href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('startups')); ?>">Startups</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('regmaster')); ?>">Investors</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('profiles')); ?>">Partners</a>
                    </li>


                    <ul class="nav navbar-nav navbar-right" style ="padding-left: 100px: ">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            
                        <?php else: ?>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                                                     <li>
                                        <a href="<?php echo e(route('profile')); ?>"
                                            onclick = <?php echo e(route('profile')); ?>;
                                        >
                                            Profile
                                        </a>

           
                                    </li>

                                
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>


                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>


                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>