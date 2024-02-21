<?php
    $post_id = 111;
    $post = get_post($post_id, ARRAY_A);
    $title = $post['post_title'];
    $content = $post['post_content'];
?>
<div class="employee-white-block">
    <div class="container">
        <span>
            <div class="col">
                <h3><?php echo $title; ?></h3>
                <?php echo $content; ?>
            </div>
        </span>
    </div>
</div>
