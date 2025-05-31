<?php
$statistics_array = [
    "Student" => [
        "card_title" => "Total Students",
        "svg_path" => "M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5m0-8c1.65 0 3 1.35 3 3s-1.35 3-3 3-3-1.35-3-3 1.35-3 3-3M4 22h16c.55 0 1-.45 1-1v-1c0-3.86-3.14-7-7-7h-4c-3.86 0-7 3.14-7 7v1c0 .55.45 1 1 1m6-7h4c2.76 0 5 2.24 5 5H5c0-2.76 2.24-5 5-5",
        "card_total" => 0
    ],
    "Teacher" => [
        "card_title" => "Total Teachers",
        "svg_path" => "M20 6h-3V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9 4h6v2H9zM4 20V8h3v12zm5 0V8h6v12zm8 0V8h3v12z",
        "card_total" => 0
    ],
    "Class" => [
        "card_title" => "Total Classes",
        "svg_path" => "M21 9h-3V5h1V3H5v2h1v4H3c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h18c.55 0 1-.45 1-1V10c0-.55-.45-1-1-1M4 11h2v8H4zm6 4v4H8V5h8v14h-2v-4zm10 4h-2v-8h2z",
        "card_total" => 0
    ],
    "Subject" => [
        "card_title" => "Total Subjects",
        "svg_path" => "m21.45,8.61l-9-4.5c-.28-.14-.61-.14-.89,0l-6,3-3,1.5-1,.5c-.34.17-.55.52-.55.89v6h2v-5.38l2,1v3.83c0,2.06,3.12,4.56,7,4.56s7-2.49,7-4.56v-3.83l2.45-1.22c.34-.17.55-.52.55-.89s-.21-.72-.55-.89Zm-15,.29l5.55-2.78,6.76,3.38-6.76,3.38-6.76-3.38,1.21-.61h0Zm10.55,6.55c0,.76-2.11,2.56-5,2.56s-5-1.79-5-2.56v-2.83l4.55,2.28c.14.07.29.11.45.11s.31-.04.45-.11l4.55-2.28v2.83Z",
        "card_total" => 0
    ],
];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>


    <header>
        <?php require "../app/views/components/navbar.php"  ?>
    </header>
    <main>
        <section>
            <?php require "../app/views/components/sidebar.php"  ?>
        </section>
        <section class=" section">
            <!--====SHOW TOTAL STUDENTS====-->
            <div class="dashboard_header">
                <div class="dashboard_title">
                    <div>
                        <h3>Welcome To Admin Dashboard</h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem omnis cum quaerat fuga neque
                            exercitationem adipisci nulla ex maxime, molestiae quia!
                        </p>
                    </div>
                    <img src="assets/images/work.png">
                </div>
                <div class="dash_right_img">
                    <img src="assets/images/school.png" width="500px" alt="">
                </div>
            </div>
            <div class="cards">

                <?php foreach ($statistics_array as $row): ?>
                <div class="card">
                    <h6 class="card_title"><?php echo $row['card_title'] ?></h6>
                    <h2 class="card_icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="<?php echo $row['svg_path'] ?>">
                            </path>
                        </svg>
                        <span><?php echo $row['card_total'] ?></span>
                    </h2>
                </div>
                <?php endforeach ?>
            </div>
        </section>
    </main>


    <script src="/assets/js/sidebar.js"></script>
</body>

</html>