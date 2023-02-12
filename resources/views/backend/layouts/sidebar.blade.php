<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" data-key="t-menu">Menu</li>

        <li>
            <a href="{{ route('admin_home') }}">
                <i data-feather="home" class="mdi mdi-home-analytics"></i>
                <span data-key="t-dashboard">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="users"class="mdi mdi-format-list-checks"></i>
                <span data-key="t-authentication">To Do List</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="auth-login.html" data-key="t-login">Login</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="file-text"class="mdi mdi-checkbox-marked-circle-plus-outline"></i>
                <span data-key="t-pages">Tasks</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
            </ul>
        </li>

        <li class="menu-title mt-2" data-key="t-components">Personal</li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="grid" class="mdi mdi-toolbox-outline"></i>
                <span data-key="t-apps">Services</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="{{ route('admin_service_create') }}">
                        <span data-key="t-service">Add Service</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin_service_all') }}">
                        <span data-key="t-service">All Services</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="grid" class="mdi mdi-bag-personal-outline"></i>
                <span data-key="t-apps">My Skills</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="{{ route('admin_skill_create') }}">
                        <span data-key="t-skill">Add Skill</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin_skill_all') }}">
                        <span data-key="t-skills">All Skills</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="mdi mdi-briefcase-outline"></i>
                <span data-key="t-projects">Projects & Portofolio</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li>
                    <a href="{{ route('admin_project_create') }}">
                        <span data-key="t-project">Add Project</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin_project_all') }}">
                        <span data-key="t-projects">All Projects</span>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-title mt-2" data-key="t-components">Website</li>

        <li>
            <a href="#"  class="has-arrow">
                <i data-feather="layout" class="mdi mdi-view-dashboard"></i>
                <span data-key="t-horizontal">Layouts</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('admin_basic_edit') }}" data-key="t-profile">Basics</a></li>
                <li><a href="{{ route('admin_contact_edit') }}" data-key="t-profile">Contact</a></li>
                <li>
                    <a href="javascript: void(0);" data-key="t-user-list">Programming Langs</a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('admin_programming_create') }}">
                                <span data-key="t-project">Add Language</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin_programming_all') }}">
                                <span data-key="t-projects">All Languages</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('admin_MyWorld_edit') }}" data-key="t-profile">My World</a></li>
                <li><a href="{{ route('admin_about_edit') }}" data-key="t-profile">About Me</a></li>
                <li><a href="{{ route('admin_WhoWork_edit') }}" data-key="t-profile">Why Work</a></li>
            </ul>
        </li>
    </ul>
</div>
