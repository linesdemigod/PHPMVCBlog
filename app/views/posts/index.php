<?php 
    require APPROOT . '/views/includes/head.php';
?>
<?php 
    require APPROOT . '/views/includes/navigation.php';
?>
<div class="container">
    <div class="row">
        <br>
        <div class="col s12 m12 center">
            
            <?php if(isLoggedIn()): ?>
                <a href="<?php echo URLROOT; ?>/posts/create" class="btn">Create</a>
            <?php endif; ?>
        
        </div>
            <?php foreach($data['posts'] as $post): ?>
            
                <div class="col s12 m12 center underline">
                
                <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] ==  $post->user_id):?>
                    <a href="<?php echo URLROOT . "/posts/update/" . $post->id?>" class="btn blue">Update</a>
                    <br><br>
                    <form action="<?php echo URLROOT . "/posts/delete/" . $post->id?>" method="post">
                
                        <input type="submit" name="delete" value="Delete" class="btn red">
                       
                    </form>
                <?php endif;?>
                
                <h3>
                    <?php echo $post->title; ?>
                </h3>
                <h6>
                    <?php echo 'Created on:' . date('F j h:m', strtotime($post->created_at)) ?>
                </h6>
                <p>
                    <?php echo $post->body ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>