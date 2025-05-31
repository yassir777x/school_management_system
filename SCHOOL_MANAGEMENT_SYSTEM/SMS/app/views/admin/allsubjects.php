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
                $h4 = 'All Subjects' ;
                require "../app/views/components/section_navbar.php"
                ?>



        </section>
    </main>
    <script src="assets/js/sidebar.js"></script>
</body>

</html>