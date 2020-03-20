<?php
include("../../controller/tramites/funciones_tramites.php");
$detalle_tramite = get_detalle_tramite($_POST['id_tramite']);
$requisitos_tramite = get_requisitos_tramite($_POST['id_tramite']);
$tr_requisito = $i = $documento ="";
foreach ($requisitos_tramite as $requisito) 
{
  if($requisito['original'] == 3){
    $original = "No Aplica";
  }if($requisito['original'] == 1){
    $original = "Para Cotejar";
  }if($requisito['original'] == 2){
    $original = "Para Expediente";
  }
  if(is_file($requisito['documento']))
  {
    $documento = '<td><a href="" class="btn btn-xs"><i class="fas fa-download"></i></a></td>';
  }else{
     $documento = '<td></td>';
  }
  $i++;
  $tr_requisito.='
                  <tr>
                      <th scope="row">'.$i.'</th>
                      <td>'.$requisito['requisito'].'</td>
                      <td>'.$original.'</td>
                      <td>'.$requisito['copia'].'</td>
                      '.$documento.'
                    </tr>
                  ';
}
?>

<div class="modal fade" style="overflow-y: scroll;" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Información del Trámite</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" >  
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-book"></i> Información</a>
            </li>
            <li class="nav-item">

              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="far fa-list-alt"></i> Requisitos</a>
            </li>
          </ul>
          
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="overflow-x: scroll;">
              
                <table class="table table-striped">
                  <thead class="thead">
                    <tr>
                      <th scope="col" colspan="2">Información General</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fas fa-building"></i> Dependencia</td>
                      <td scope="row"><?=$detalle_tramite['secretaria']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-user"></i> Titular</td>
                      <td scope="row"><?=$detalle_tramite['titular']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-list"></i> Nombre del trámite</td>
                      <td scope="row"><?=$detalle_tramite['nombre']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-users"></i> Usuarios</td>
                      <td scope="row"><?=$detalle_tramite['usuarios']?></td>
                    </tr>

                    <tr>
                      <td> <i class="fas fa-ticket-alt"></i> Clave</td>
                      <td scope="row"><?=$detalle_tramite['clave']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-hand-holding"></i> Documento o servicio que se obtiene</td>
                      <td scope="row"><?=$detalle_tramite['documento_obtenido']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-dollar-sign"></i> Costo de Trámite/Servicio</td>
                      <td scope="row"><?=$detalle_tramite['costo']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-clock"></i> Tiempo de Respuesta</td>
                      <td scope="row"><?=$detalle_tramite['tiempo']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-calendar-times"></i> Vigencia</td>
                      <td scope="row"><?=$detalle_tramite['vigencia']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-map-marker-alt"></i> Domicilio</td>
                      <td scope="row"><?=$detalle_tramite['domicilio']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-phone"></i> Teléfono(s)</td>
                      <td scope="row"><?=$detalle_tramite['telefono']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-stopwatch"></i> Horario de Atención</td>
                      <td scope="row"><?=$detalle_tramite['horario']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-at"></i> E-mail</td>
                      <td scope="row"><?=$detalle_tramite['email']?></td>
                    </tr>

                    <tr>
                      <td><i class="fas fa-eye"></i> Observaciones</td>
                      <td scope="row"><?=$detalle_tramite['observaciones']?></td>
                    </tr>
                  </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="overflow-x: scroll;">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Requisito</th>
                      <th scope="col">Original</th>
                      <th scope="col">Copia</th>
                      <th scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?=$tr_requisito;?>        
                  </tbody>
                </table>
            </div>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>
