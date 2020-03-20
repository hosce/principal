<?php
include('../../controller/funciones.php'); 
include('../../model//sala_prensa/fill_table.php');
?>

<div class="container">

  <h2 class="sub-title">Sala de Prensa</h2>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#2020" role="tab" aria-controls="home" aria-selected="true">2020</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#2019" role="tab" aria-controls="profile" aria-selected="false">2019</a>
    </li>
 
  </ul>

  <div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="2020" role="tabpanel" aria-labelledby="home-tab">
       
      <div role="tabpanel" class="tab-pane active" id="2020">
        <?php $anio  = 2020; include('tab.php'); $anio = ''; ?>
      </div>

    </div>

    <div class="tab-pane fade" id="2019" role="tabpanel" aria-labelledby="profile-tab">
        
        <div role="row">
          <?php $anio  = 2019; include('tab.php'); $anio = ''; ?>
        </div>
      
    </div>

 

  </div>

  <div>
  
  </div>
</div>