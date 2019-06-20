<?php require_once 'app-header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3>Results</h3>

            <div class="divider"></div>

            <?php
            if ($requirementsSatisfied) {
                ?>
                <p class="result-message green lighten-3">
                    <i class="material-icons dp48">check</i> Your server satisfies all the requirements to run Laravel <?php echo $laravelVersion; ?>.
                </p>

                <p>
                    Get started by <a href="https://laravel.com/docs/<?php echo $laravelVersion; ?>" target="_blank">installing the Laravel <?php echo $laravelVersion; ?> application</a>.
                </p>
            <?php
            } else {
                ?>
                <p class="result-message red lighten-3">
                    <i class="material-icons dp48">error</i> Your server is missing some requirements to run Laravel <?php echo $laravelVersion; ?>.
                </p>
            <?php
            } ?>

            <table class="highlight">
                <thead>
                    <tr>
                        <th>Requirement</th>
                        <th>Satisfied?</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <?php echo $requirements['php']['description']; ?>
                        </td>
                        <td>
                            <?php
                            if ($requirements['php']['passed']) {
                                echo '<span class="green-text darken-4">YES</span>';
                            } else {
                                echo '<span class="red-text darken-4">NO</span>';
                                echo '<br><span>Current PHP Version: ' . $currentPhpVersion . '</span>';
                            } ?>
                        </td>
                    </tr>

                    <?php
                    foreach ($requirements['extensions'] as $extension) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $extension['description']; ?>
                            </td>
                            <td>
                                <?php
                                if ($extension['passed']) {
                                    echo '<span class="green-text darken-4">YES</span>';
                                } else {
                                    echo '<span class="red-text darken-4">NO</span>';
                                } ?>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col s6">
            <a class="waves-effect waves-light btn" href="index.php">BACK TO HOME</a>
        </div>
        <div class="col s6">
            <form action="checker.php" method="POST">
                <input name="version" type="hidden" value="<?php echo $laravelVersion; ?>"/>
                <button class="btn waves-effect waves-light" type="submit" name="action">RE-CHECK</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'app-footer.php';
