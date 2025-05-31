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
            $h4 = 'Add Teacher';
            require "../app/views/components/section_navbar.php"
            ?>
            <div class="form_wrapper">
                <form action="" method="POST">
                    <h1 class="page_title">Add Teacher</h1>
                    <div class="form_semi_title">
                        Teacher information
                    </div>
                    <div class="inputs_wrapper">

                        <?php require "../app/views/components/forms.php"; ?>
                        <?php foreach ($forms['teacher'] as $form):    ?>
                            <div class="input_wrapper">
                                <label for="<?php echo $form['for'] ?>"><?php echo $form['label'] ?></label>
                                <?php if ($form['type'] !== 'select') { ?>

                                    <input type="<?php echo $form['type'] ?>" name="<?php echo $form['for'] ?>"
                                        placeholder="<?php echo $form['placeholder'] ?? '' ?>" required>
                                <?php } else { ?>
                                    <select name="<?php echo $form['for'] ?>" required>
                                        <option value="none" selected disabled>
                                            <?php echo $form['label'] ?>
                                        </option>
                                        <?php foreach ($form['options'] as $option) : ?>
                                            <option value="<?php echo $option ?>">
                                                <?php echo $option ?></option>
                                        <?php endforeach ?>
                                    </select>
                                <?php } ?>

                            </div>

                        <?php endforeach   ?>
                        <div style="width: 350px;"></div>
                    </div>
                    <div class="buttons">
                        <button type="reset">Reset</button>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="assets/js/sidebar.js"></script>
</body>

</html>