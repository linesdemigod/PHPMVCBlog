<?php 
    require APPROOT . '/views/includes/head.php';
?>
<?php 
    require APPROOT . '/views/includes/navigation.php';
?>

<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <h4 class="center">Create new post</h4>
            <form action="<?php echo URLROOT; ?>/posts/create" method="post">
                <div class="input-field">
                    <i class="material-icons prefix">title</i>
                    <input type="text" name="title" id="title">
                    <label for="title">Title</label>
                    <p class="center-align red-text"><?php echo $data['titleError']?></p>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">message</i>
                    <textarea id="textarea1" class="materialize-textarea" type="text" name="body"></textarea>
                    <label for="textarea1">Body</label>
                    <p class="center-align red-text"><?php echo $data['bodyError']?></p>
                </div>
                <div class="input-field center">
                    <button type="submit" name="submit" class="btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
    require APPROOT . '/views/includes/footer.php';
?>