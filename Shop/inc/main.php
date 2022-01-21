<div class="tabs">
        <input type="radio" name = 'tab' id = 'tab-1' value = '' checked>
        <label for="tab-1">Вкладка_1</label>
        <input type="radio" name = 'tab' id = 'tab-2' value = '' >
        <label for="tab-2">Вкладка_2</label>
        <input type="radio" name = 'tab' id = 'tab-3' value = '' >
        <label for="tab-3">Вкладка_3</label>

        <div class = "content" id="content-1">
            
         <?php
          include './inc/content1.php';
         ?>

        </div>
        <div class = "content" id="content-2">
          
          <?php
          include './inc/content2.php';
          ?>

        </div>
        <div class = "content" id="content-3">
          
          <?php
          include './inc/content3.php';
          ?>
          
        </div>
</div>