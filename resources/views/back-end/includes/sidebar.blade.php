            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{route('admin.dashboard')}}">
                                    <i class="la la-dashboard"></i>
                                    <span class="badge badge-info badge-pill float-right"></span>
                                    <span> Dashboards </span>
                                </a>
                               
                            </li>

                            <li>
                                <a href="#">
                                    <i class="la la-cube"></i>
                                    <span> Portfolio </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{route('portfolio.create')}}">Add Project</a>
                                    </li>
                                    <li>
                                        <a href="{{route('portfolio.index')}}">View Project</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-clone"></i>
                                    <span> Projects </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li>
                                        <a href="layouts-sidebar-collapsed.html">Add Project</a>
                                    </li>
                                    <li>
                                        <a href="layouts-boxed.html">View Project</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                <i class="la la-briefcase"></i>
                                    <span> Client </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{route('client.create')}}"  class="nav-link {{ Request::is('admin/client/add')? 'active' : '' }}"  >Add Client</a>
                                    </li>
                                    <li>
                                        <a href="{{route('client.index')}}">View Client</a>
                                    </li>
                                    <li>
                                        <a href="{{route('feedback')}}">View Feedback</a>
                                    </li>
                                    
                                </ul>
                            </li>



                
                            <li>
                                <a href="javascript: void(0);">
                                <i class="la la-users"></i>
                                    <span> Team </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{route('team.create')}}">Add Member</a>
                                    </li>
                                    <li>
                                        <a href="{{route('team.index')}}">View Member</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                <i class="la la-file-text-o"></i>
                                    <span> Blog </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="email-inbox.html">New Post</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">View Post</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                <i class="la la-picture-o"></i>
                                    <span>Gallery</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="{{route('slider.index')}}">Slider</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">View Image</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="la la-copy"></i>
                                    <span> Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="pages-starter.html">Home</a>
                                    </li>
                                    
                                </ul>
                            </li>


                            


                            <li>
                                <a href="javascript: void(0);">
                                <i class="la la-wrench"></i>
                                    <span> Site Settings </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="email-inbox.html">General Information</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">Backup</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                <i class="la la-gears"></i>
                                    <span>ERP</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="email-inbox.html">Current Project</a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html"></a>
                                    </li>
                                    <li>
                                        <a href="email-read.html"></a>
                                    </li>
                                    
                                </ul>
                            </li>
                          
                           

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
