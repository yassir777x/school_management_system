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
            $h4 = 'Add Student';
            require "../app/views/components/section_navbar.php"
            ?>
            <div class="form_wrapper">
                <form action="" method="POST">
                    <h1 class="page_title">Add Student</h1>
                    <div class="form_semi_title">
                        Student information
                    </div>
                    <div class="inputs_wrapper">

                        <?php require "../app/views/components/forms.php"; ?>
                        <?php foreach ($forms['student'] as $form):    ?>
                            <div class="input_wrapper">
                                <?php if ($form['type'] !== 'select' && $form['type'] !== 'checkbox') { ?>

                                    <label for="<?php echo $form['for'] ?>">
                                        <?php echo $form['label'] ?>
                                    </label>
                                    <input type="<?php echo $form['type'] ?>" name="<?php echo $form['for'] ?>"
                                        placeholder="<?php echo $form['placeholder'] ?? '' ?>" required>
                                <?php } else if ($form['type'] === 'select') { ?>
                                    <label for="<?php echo $form['for'] ?>"><?php echo $form['label'] ?></label>
                                    <select name="<?php echo $form['for'] ?>" required>
                                        <option value="none" selected disabled><?php echo $form['placeholder'] ?></option>
                                        <?php foreach ($form['options'] as $option) : ?>
                                            <option value="<?php echo $option ?>">
                                                <?php echo $option ?></option>
                                        <?php endforeach ?>
                                    </select>
                                <?php } else if ($form['type'] === 'checkbox') { ?>

                                    <div class="checkboxes_wrapper">
                                        <h4>Subjects</h4>
                                        <div class="checkboxes">
                                            <?php foreach ($form['checkboxes'] as $checkbox) : ?>
                                                <div class="checkbox">
                                                    <input type="checkbox" name="<?php echo $checkbox ?>">
                                                    <span><?php echo $checkbox ?></span>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>

                                <?php } ?>

                            </div>

                        <?php endforeach   ?>

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