<div class="sidebar">
    <h3>Menu </h3>
    <ul class="menu_list">
        <li class="menu_items" id="dashboard">
            <div class="sub_menu active" data-id="dashboard">
                <a href="index.php?controller=admin&action=dashboard" class="left_sub_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="m20,11h-6c-.55,0-1,.45-1,1v8c0,.55.45,1,1,1h6c.55,0,1-.45,1-1v-8c0-.55-.45-1-1-1Zm-1,8h-4v-6h4v6Z">
                        </path>
                        <path
                            d="m10,15h-6c-.55,0-1,.45-1,1v4c0,.55.45,1,1,1h6c.55,0,1-.45,1-1v-4c0-.55-.45-1-1-1Zm-1,4h-4v-2h4v2Z">
                        </path>
                        <path
                            d="m20,3h-6c-.55,0-1,.45-1,1v4c0,.55.45,1,1,1h6c.55,0,1-.45,1-1v-4c0-.55-.45-1-1-1Zm-1,4h-4v-2h4v2Z">
                        </path>
                        <path
                            d="m10,3h-6c-.55,0-1,.45-1,1v8c0,.55.45,1,1,1h6c.55,0,1-.45,1-1V4c0-.55-.45-1-1-1Zm-1,8h-4v-6h4v6Z">
                        </path>
                    </svg>
                    <p>Dashboard</p>
                </a>
            </div>
        </li>
        <li class="menu_items" id="student">

            <div class="sub_menu" data-id="student">

                <div class="left_sub_menu">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5m0-8c1.65 0 3 1.35 3 3s-1.35 3-3 3-3-1.35-3-3 1.35-3 3-3M4 22h16c.55 0 1-.45 1-1v-1c0-3.86-3.14-7-7-7h-4c-3.86 0-7 3.14-7 7v1c0 .55.45 1 1 1m6-7h4c2.76 0 5 2.24 5 5H5c0-2.76 2.24-5 5-5">
                        </path>
                    </svg>

                    <p>Student Management</p>
                </div>


                <div class="show_drop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"></path>
                    </svg>

                </div>
            </div>

            <div class="sub_menu_wrapper">
                <ul class="sub_menu_items">
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=addstudent" class="link_to_page" data-id="1">
                            Add Student
                        </a>
                    </li>
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=allstudents" class="link_to_page" data-id="2">
                            Show All Student
                        </a>
                    </li>
                </ul>
            </div>

        </li>
        <li class="menu_items" id="teacher">
            <div class="sub_menu" data-id="teacher">
                <div class="left_sub_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M20 6h-3V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9 4h6v2H9zM4 20V8h3v12zm5 0V8h6v12zm8 0V8h3v12z">
                        </path>
                    </svg>
                    <p>Teacher Management</p>
                </div>
                <div class="show_drop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"></path>
                    </svg>
                </div>
            </div>

            <div class="sub_menu_wrapper">
                <ul class="sub_menu_items">
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=addteacher" class="link_to_page" data-id="1">
                            Add Teacher
                        </a>
                    </li>
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=allteachers" class="link_to_page" data-id="2">
                            Show All Teachers
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu_items" id="class">
            <div class="sub_menu" data-id="class">
                <div class="left_sub_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">

                        <path d="M9 11h2v2H9zM9 7h2v2H9zM13 11h2v2h-2zM13 7h2v2h-2z"></path>
                        <path
                            d="M21 9h-3V5h1V3H5v2h1v4H3c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h18c.55 0 1-.45 1-1V10c0-.55-.45-1-1-1M4 11h2v8H4zm6 4v4H8V5h8v14h-2v-4zm10 4h-2v-8h2z">
                        </path>
                    </svg>
                    <i class='bx bx-school' style='color:#000000'></i>
                    <p>Classe Management</p>
                </div>
                <div class="show_drop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"></path>
                    </svg>
                </div>
            </div>

            <div class="sub_menu_wrapper">
                <ul class="sub_menu_items">
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=addclass" class="link_to_page" data-id="1">
                            Add Class
                        </a>
                    </li>
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=allclasses" class="link_to_page" data-id="2">
                            Show All Classes
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="menu_items" id="subjects">
            <div class="sub_menu" data-id="subjects">
                <div class="left_sub_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path class="b"
                            d="m21.45,8.61l-9-4.5c-.28-.14-.61-.14-.89,0l-6,3-3,1.5-1,.5c-.34.17-.55.52-.55.89v6h2v-5.38l2,1v3.83c0,2.06,3.12,4.56,7,4.56s7-2.49,7-4.56v-3.83l2.45-1.22c.34-.17.55-.52.55-.89s-.21-.72-.55-.89Zm-15,.29l5.55-2.78,6.76,3.38-6.76,3.38-6.76-3.38,1.21-.61h0Zm10.55,6.55c0,.76-2.11,2.56-5,2.56s-5-1.79-5-2.56v-2.83l4.55,2.28c.14.07.29.11.45.11s.31-.04.45-.11l4.55-2.28v2.83Z">
                        </path>
                    </svg>
                    <p>Subject Management</p>
                </div>
                <div class="show_drop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"></path>
                    </svg>
                </div>
            </div>

            <div class="sub_menu_wrapper">
                <ul class="sub_menu_items">
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=addsubject" class="link_to_page" data-id="1">
                            Add Subject
                        </a>
                    </li>
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=allsubjects" class="link_to_page" data-id="2">
                            Show All Subject
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="menu_items" id="settings">
            <div class="sub_menu" data-id="settings">
                <div class="left_sub_menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4m0 6c-1.08 0-2-.92-2-2s.92-2 2-2 2 .92 2 2-.92 2-2 2">
                        </path>
                        <path
                            d="m20.42 13.4-.51-.29c.05-.37.08-.74.08-1.11s-.03-.74-.08-1.11l.51-.29c.96-.55 1.28-1.78.73-2.73l-1-1.73a2.006 2.006 0 0 0-2.73-.73l-.53.31c-.58-.46-1.22-.83-1.9-1.11v-.6c0-1.1-.9-2-2-2h-2c-1.1 0-2 .9-2 2v.6c-.67.28-1.31.66-1.9 1.11l-.53-.31c-.96-.55-2.18-.22-2.73.73l-1 1.73c-.55.96-.22 2.18.73 2.73l.51.29c-.05.37-.08.74-.08 1.11s.03.74.08 1.11l-.51.29c-.96.55-1.28 1.78-.73 2.73l1 1.73c.55.95 1.77 1.28 2.73.73l.53-.31c.58.46 1.22.83 1.9 1.11v.6c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2v-.6a8.7 8.7 0 0 0 1.9-1.11l.53.31c.95.55 2.18.22 2.73-.73l1-1.73c.55-.96.22-2.18-.73-2.73m-2.59-2.78c.11.45.17.92.17 1.38s-.06.92-.17 1.38a1 1 0 0 0 .47 1.11l1.12.65-1 1.73-1.14-.66c-.38-.22-.87-.16-1.19.14-.68.65-1.51 1.13-2.38 1.4-.42.13-.71.52-.71.96v1.3h-2v-1.3c0-.44-.29-.83-.71-.96-.88-.27-1.7-.75-2.38-1.4a1.01 1.01 0 0 0-1.19-.15l-1.14.66-1-1.73 1.12-.65c.39-.22.58-.68.47-1.11-.11-.45-.17-.92-.17-1.38s.06-.93.17-1.38A1 1 0 0 0 5.7 9.5l-1.12-.65 1-1.73 1.14.66c.38.22.87.16 1.19-.14.68-.65 1.51-1.13 2.38-1.4.42-.13.71-.52.71-.96v-1.3h2v1.3c0 .44.29.83.71.96.88.27 1.7.75 2.38 1.4.32.31.81.36 1.19.14l1.14-.66 1 1.73-1.12.65c-.39.22-.58.68-.47 1.11Z">
                        </path>
                    </svg>
                    <p>Settings</p>
                </div>
                <div class="show_drop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"></path>
                    </svg>
                </div>
            </div>

            <div class="sub_menu_wrapper">
                <ul class="sub_menu_items">
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=schoolsettings" class="link_to_page" data-id="1">
                            School Settings
                        </a>
                    </li>
                    <li class="sub_menu_item">
                        <a href="index.php?controller=admin&action=adminsettings" class="link_to_page" data-id="2">
                            Admin Settings
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>