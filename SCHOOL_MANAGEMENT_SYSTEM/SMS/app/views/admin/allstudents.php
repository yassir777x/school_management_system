<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <?php require "../app/views/components/navbar.php"  ?>
    </header>
    <main>
        <section>
            <?php require "../app/views/components/sidebar.php"  ?>
        </section>
        <section class="main_section">
            <?php
            $h4 = 'All Students';
            require "../app/views/components/section_navbar.php"
            ?>

            <div class="search_box">
                <input type="search" placeholder="Search Student By Name    ">
            </div>

            <div class="all_students">
                <div class="user_card">
                    <img src="/assets/images/male.png" alt="">
                    <div class="user_minInfo">
                        <h4>email</h4>
                        <h4>name</h4>
                    </div>
                    <div class="actions">
                        <div class="modify">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="m19.41,3c-.78-.78-2.05-.78-2.83,0l-2.09,2.09-1.79-1.79c-.39-.39-1.02-.39-1.41,0l-6,6,1.41,1.41,5.29-5.29,1.09,1.09L4.29,15.29c-.13.13-.22.29-.26.46l-1,4c-.08.34.01.7.26.95.19.19.45.29.71.29.08,0,.16,0,.24-.03l4-1c.18-.04.34-.13.46-.26l12.29-12.29c.78-.78.78-2.05,0-2.83l-1.59-1.59Zm-11.93,15.1l-2.11.53.53-2.11L14.5,7.91l1.59,1.59-8.6,8.6Zm10.01-10.01l-1.59-1.59,2.09-2.09,1.59,1.58-2.09,2.09Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="delete">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M17 6V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H2v2h2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8h2V6zM9 4h6v2H9zM6 20V8h12v12z">
                                    </path>
                                    <path d="M9 10h2v8H9zM13 10h2v8h-2z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="user_card">
                    <img src="/assets/images/female.png" alt="">
                    <div class="user_minInfo">
                        <h4>email</h4>
                        <h4>name</h4>
                    </div>
                    <div class="actions">
                        <div class="modify">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="m19.41,3c-.78-.78-2.05-.78-2.83,0l-2.09,2.09-1.79-1.79c-.39-.39-1.02-.39-1.41,0l-6,6,1.41,1.41,5.29-5.29,1.09,1.09L4.29,15.29c-.13.13-.22.29-.26.46l-1,4c-.08.34.01.7.26.95.19.19.45.29.71.29.08,0,.16,0,.24-.03l4-1c.18-.04.34-.13.46-.26l12.29-12.29c.78-.78.78-2.05,0-2.83l-1.59-1.59Zm-11.93,15.1l-2.11.53.53-2.11L14.5,7.91l1.59,1.59-8.6,8.6Zm10.01-10.01l-1.59-1.59,2.09-2.09,1.59,1.58-2.09,2.09Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="delete">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 24 24">

                                    <path
                                        d="M17 6V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H2v2h2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8h2V6zM9 4h6v2H9zM6 20V8h12v12z">
                                    </path>
                                    <path d="M9 10h2v8H9zM13 10h2v8h-2z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ? ADD STUDENT  -->
                <a href="index.php?controller=admin&action=addstudent" class="add_card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M3 13h8v8h2v-8h8v-2h-8V3h-2v8H3z"></path>
                    </svg>
                    <h5>New</h5>
                </a>
            </div>

        </section>
    </main>
    <script src="assets/js/sidebar.js"></script>
</body>

</html>