<div class="row" >
    <ul class="pagination">
      <?php
      if(isset($_GET['s']) && $_GET['s']!=''){
        echo'';
      }
      else{
        for ($i=1; $i <= $pages ; $i++) { 
          echo '
            <li><a href="?pages='.$i.'">'.$i.'</a></li>
          ';
        }
      }
        
      ?>
    </ul>
</div>