<?php $file_name = "textfile.txt" ?>
<?php $fn = fopen($file_name, "r"); ?>
<hr>
<div class="container">
    <h2>Блок знаний (knowledge.inc.php)</h2>
    <p>Не очень интересно работать с примитивными типами, давайте зачитаем файл из файловой системы:</p>
    <p>Имя файла: <b><?php echo $file_name; ?></b></p>
    <div class="file-content">
        <?php $cnt = 1; while (!feof($fn)) { ?>
            <span>Строка номер <?php echo $cnt; ?> - <?php echo fgets($fn); ?></span><br>
        <?php $cnt++; } ?>
    </div>
</div>

<?php
  fclose($fn);
?>