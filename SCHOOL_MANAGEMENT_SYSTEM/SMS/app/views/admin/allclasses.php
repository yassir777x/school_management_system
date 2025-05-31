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
            $h4 = 'All Classes';
            require "../app/views/components/section_navbar.php"
            ?>

            <div class="classes_cards">
                <div class="class_card">
                    <div class="class_name_actions">
                        <h6>class name</h6>
                        <div class="actions">
                            <div class="modify">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="m19.41,3c-.78-.78-2.05-.78-2.83,0l-2.09,2.09-1.79-1.79c-.39-.39-1.02-.39-1.41,0l-6,6,1.41,1.41,5.29-5.29,1.09,1.09L4.29,15.29c-.13.13-.22.29-.26.46l-1,4c-.08.34.01.7.26.95.19.19.45.29.71.29.08,0,.16,0,.24-.03l4-1c.18-.04.34-.13.46-.26l12.29-12.29c.78-.78.78-2.05,0-2.83l-1.59-1.59Zm-11.93,15.1l-2.11.53.53-2.11L14.5,7.91l1.59,1.59-8.6,8.6Zm10.01-10.01l-1.59-1.59,2.09-2.09,1.59,1.58-2.09,2.09Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="delete">
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red"
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
                    <div class="class_info">
                        <h4><span>99</span> Students</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52"
                            fill="blue" viewBox="0 0 24 24">
                            <path class="b" d="m21.45,8.61l-9-4.5c-.28-.14-.61-.14-.89,0l-6,3-3,1.5-1,.5c-.34.17-.55.52-.55.89v6h2v-5.38l2,1v3.83c0,2.06,3.12,4.56,7,4.56s7-2.49,7-4.56v-3.83l2.45-1.22c.34-.17.55-.52.55-.89s-.21-.72-.55-.89Zm-15,.29l5.55-2.78,6.76,3.38-6.76,3.38-6.76-3.38,1.21-.61h0Zm10.55,6.55c0,.76-2.11,2.56-5,2.56s-5-1.79-5-2.56v-2.83l4.55,2.28c.14.07.29.11.45.11s.31-.04.45-.11l4.55-2.28v2.83Z"></path>
                        </svg>
                    </div>
                    <div class="class_details">
                        <p>
                            Boys : <span>99</span>
                        </p>
                        <p>
                            Girls : <span>99</span>
                        </p>
                    </div>
                </div>
                <!-- ? ADD CLASS  -->
                <a href="index.php?controller=admin&action=addclass" class="add_card">
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