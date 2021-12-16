<!-- LANGUAGE ADD -->

<?= $this->include('data/admin-operation-top.php') ?>

<div class="container" style="min-height : calc(100vh - 200px);">
    <form class="mt-5"  action="/LanguageController/addLanguage" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputLanguageName">Language Name</label>
                <input type="text" class="form-control" id="inputLanguageName" name="language_name">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
    <br><hr>
    <?php if(isset($validation)):?>
                    <div class="col-12"> 
                        <div class="alert alert-warning">
                            <?= $validation->listErrors() ?>
                        </div>
                    </div>
    <?php endif;?>
</div>


<?= $this->include('data/admin-operation-bottom.php') ?>