<div class="container">
    <h2>Чтобы было не совсем скучно, вот вам котики:</h2>
    <p>Выводим массив картинок с помощью foreach</p>
    <div class="cats-container">
        <?php foreach ($images as $image) { ?>
            <div class="cat">
                <img src="<?php echo $image ?>" />
            </div>
        <?php } ?> 
    </div>
</div>