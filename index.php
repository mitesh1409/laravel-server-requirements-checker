<?php require_once 'app-header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3>Laravel Server Requirements Checker</h3>

            <div class="divider"></div>

            <p>
                The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the <a href="https://laravel.com/docs/5.5/homestead" target="_blank">Laravel Homestead</a> virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
            </p>

            <div class="divider"></div>

            <p>
                However, if you are not using Homestead, you will need to make sure your server meets certain requirements.
            </p>

            <p>
                Check if your server meets all the requirements to run the specific version of the Laravel.
            </p>

            <form action="checker.php" method="POST">
                <div class="input-field col s6">
                    <select name="version">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="5.0">5.0</option>
                        <option value="5.1">5.1</option>
                        <option value="5.2">5.2</option>
                        <option value="5.3">5.3</option>
                        <option value="5.4">5.4</option>
                        <option value="5.5">5.5</option>
                        <option value="5.6">5.6</option>
                        <option value="5.7">5.7</option>
                        <option value="5.8">5.8</option>
                    </select>
                    <label>Laravel Version</label>
                </div>
                <div class="input-field col s6">
                    <button class="btn waves-effect waves-light" type="submit" name="action">CHECK</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'app-footer.php';
