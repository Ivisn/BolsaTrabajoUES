<form role="form" action="<?=base_url()?>PerfilDelPuesto/guardar" method="POST">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">		
            <div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title, post-subtitle">Información general</h3>
			  </div>
			  <div class="panel-body">
			  	<div class="form-group">
            		<label for="puesto">Puesto</label>
            		<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del puesto" size="60"></input>
            	</div>
              <div class="form-group">
                <label for="areaPuesto">Area del puesto</label>
                <input type="text" name="areaPuesto" class="form-control" placeholder="Area a la que pertenece el puesto"></input>
              </div>
            	<div class="form-group">
                	<label>Descripción</label>
                	<textarea  name="descripcion" id="descripcion" class="form-control"  rows="3" placeholder="Descripcion del perfil" size="10px"></textarea>
                </div>
            	<div class="form-group">
            		<label for="vacantes" >Puestos vacantes</label>
            		<input type="text" name="vacante" id="vacante" class="form-control" placeholder="Cantidad" size="10"></input>
            	</div>
				<div class="form-group">
                  <label>Jornada Laboral</label>
                  <select name="jornada" class="form-control" id="jornada">
                         <option>Medio Tiempo</option>
                  </select>  
				</div>
				<div class="form-group">
					<label style="font-size: 17px">Experiencia</label>
					<hr size="3">
          <br>
          <div class="form-group">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Cantidad</label>
                    <div class="col-sm-7">
                      <input type="text" name="cantidadexperiencia" class="form-control" placeholder="Cantidad" size="10"></input>
                    </div>
                     <label class ="col-sm-2">Año/s</label>
                    </div>
                  </form>
                  </div>		
				</div>
				<div class="form-group">
                	<label style="font-size: 17px">Salario</label>
                	<hr size="3">
                  <br>
                  <div class="form-group">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                    <div class="col-sm-3">
                      <select name="simbolo" class="form-control" id="simbolo">
                            <option>$</option>
                        </select> 
                    </div>
                      <label class ="col-sm-1">Min</label>
                    <div class="col-sm-3">
                     <input type="text" name="salariomin" class="form-control" placeholder="" size="5"></input>
                    </div>
                    <label class ="col-sm-1">Max</label>
                    <div class="col-sm-3">
                      <input type="text" name="salariomax" class="form-control" placeholder="" size="5"></input> 
                    </div>
                    </div>
                  </form>
                  </div>
            </div>
            	<div class="form-group">
                	<label style="font-size: 17px">Edad</label>
                	<hr size="3">
                  <br>
                  <div class="form-group">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-2">Min</label>
                    <div class="col-sm-4">
                     <input type="text" name="edadmin" class="form-control" placeholder="" size="10"></input>
                    </div>
                    <label class ="col-sm-2">Max</label>
                    <div class="col-sm-4">
                      <input type="text" name="edadmax" class="form-control" placeholder="" size="10"></input>
                    </div>
                    </div>
                  </form>
                  </div>
              </div>

            	<div class="form-group">
                	<label style="font-size: 17px">Localizacion</label>
                	<hr size="3">
                  <br>
                  <div class="form-group">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Departamento</label>
                    <div class="col-sm-9">
                      
                      <select name="deptoperfil" class="form-control" id="deptoperfil">
                      <?php
                          foreach ($consulta->result() as $fila) {                                
                      ?>
                            <option><?= $fila->nombre ?></option>
                      <?php
                        }
                    ?>
                        </select> 
                    </div>
                    </div>
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Municipio</label>
                    <div class="col-sm-9">
                      <select name="muniperfil" class="form-control" id="muniperfil">
                        <?php
                          foreach ($consulta2->result() as $fila) {                                
                        ?>
                          <option><?= $fila->nombre ?></option>
                        <?php
                        }
                      ?>
                        </select> 
                    </div>
                    </div>
                  </form>
                  </div>
 
            	</div>
			  </div>
        <div class="panel-heading">
          <h3 class="panel-title, post-subtitle">Experiencias</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Area</label>
                    <div class="col-sm-9">
                      <select name="areaexp" class="form-control" id="areaexp">
                            <option>Administrativa</option>
                        </select> 
                    </div>
                    </div>
                  </form>
                  </div>

                </div>
            <div class="panel-heading">
          <h3 class="panel-title, post-subtitle">Idiomas</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
            <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Idioma</label>
                    <div class="col-sm-9">
                      <select name="idiomaperfil" class="form-control" id="idiomaperfil">
                            <option>Ingles</option>
                        </select> 
                    </div>
                    </div>
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Nivel</label>
                    <div class="col-sm-9">
                      <select name="nivelidiomaperfil" class="form-control" id="nivelidiomaperfil">
                            <option>Basico</option>
                        </select> 
                    </div>
                    </div>
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Habilidad</label>
                    <div class="col-sm-9">
                      <select name="habidioma" class="form-control" id="habidioma">
                            <option>Hablado</option>
                        </select> 
                    </div>
                    </div>
                  </form>
                  </div>
                  </div>
                  <div class="panel-heading">
          <h3 class="panel-title, post-subtitle">Perfil academico</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                      <label>Nivel academico solicitado</label>
                      <select name="nivelacaperfil" class="form-control" id="nivelacaperfil">
                            <option>Educacion Superior</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label style="font-size: 17px">Educacion superior</label>
                      <hr size="3">
                      <br>
                      <div class="form-group">
                    <form class="form-horizontal" role="form">
                      <div class="form-group  ">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Area</label>
                      <div class="col-sm-9">
                        <select name="areaeducacion" class="form-control" id="areaeducacion">
                            <option>Ingenieria de Sistemas Informaticos</option>
                        </select> 
                      </div>
                      </div>
                      <div class="form-group">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Nivel academico</label>
                      <div class="col-sm-9">
                        <select name="nivelacaeducacion" class="form-control" id="nivelacaeducacion">
                            <option>Egresado</option>
                        </select>
                      </div>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
                
			  </div>
			</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
         	<div class="panel panel-default">
          
                <div class="panel-heading">
			    <h3 class="panel-title, post-subtitle">Habilidades tecnologicas</h3>
			  </div>
			  <div class="panel-body">
			  		<div class="form-group">
                			<label style="font-size: 17px">Ofimatica</label>
                			<hr size="3">
                      <br>
                			<select name="habofimatica" class="form-control" id="habofimatica">
                         		<option>Microsoft</option>
                  			</select> 
                	</div>
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-2 col-lg-2 col-md-2">Nivel</label>
                    <div class="col-sm-10">
                      <select name="nivelofimaticaperfil" class="form-control" id="nivelofimaticaperfil">
                            <option>Basico</option>
                        </select> 
                    </div>
                    </div>
                  </form>
                	<div class="form-group">
                			<label style="font-size: 17px">Software</label>
                			<hr size="3">
                      <br>
                			<select name="habsoftware" class="form-control" id="habsoftware">
                         		<option>PhotoShop</option>
                  			</select> 
                	</div>
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-2 col-lg-2 col-md-2">Nivel</label>
                    <div class="col-sm-10">
                      <select name="nivelofimaticaperfil" class="form-control" id="nivelofimaticaperfil">
                            <option>Basico</option>
                        </select>  
                    </div>
                    </div>
                  </form>
                  <div class="form-group">
                      <label style="font-size: 17px">Hardware</label>
                      <hr size="3">
                      <br>
                      <select name="habhardware" class="form-control" id="habhardware">
                            <option>Manejo de Impresoras</option>
                        </select> 
                  </div>
                  
                </div>
                <div class="panel-heading">
          <h3 class="panel-title, post-subtitle">Habilidades y destrezas</h3>
        </div>
        <div class="panel-body">
                  <div class="form-group">
                      <label style="font-size: 17px">Organizacionales</label>
                      <hr size="3">
                      <br>
                      <select name="haborgani" class="form-control" id="haborgani">
                            <option>Planificacion</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label style="font-size: 17px">Sociales</label>
                      <hr size="3">
                      <br>
                      <select name="habsocial" class="form-control" id="habscial">
                            <option>Empatia</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label style="font-size: 17px">Profesionales</label>
                      <hr size="3">
                      <br>
                      <select name="habprofe" class="form-control" id="habprofe">
                            <option>Reclutamiento</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label style="font-size: 17px">Personales</label>
                      <hr size="3">
                      <br>
                      <select name="habpersonal" class="form-control" id="habpersonal">
                            <option>Actitud de servicio</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label style="font-size: 17px">Tecnicas</label>
                      <hr size="3">
                      <br>
                      <select name="habtecnica" class="form-control" id="habtecnica">
                            <option>Comercialización y Ventas</option>
                        </select> 
                  </div>
                  </div>
 
                  <div class="panel-heading">
                    <h3 class="panel-title, post-subtitle">Fechas</h3>
                </div>
      <div class="panel-body">
        <div class="form-group">
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Contratacion</label>
                    <div class="col-sm-9">
                      <input type="text" name="fechacontrata" class="form-control" placeholder="00-00-0000"></input>
                    </div>
                    </div>
                  </form>
                  <form class="form-horizontal" role="form">
                    <div class="form-group">
                      <label class ="col-sm-3 col-lg-2 col-md-2">Expiracion</label>
                    <div class="col-sm-9">
                      <input type="text" name="fechaexppefil" class="form-control" placeholder="00-00-0000"></input>
                    </div>
                    </div>
                  </form>
                  </div>
      </div>
 
                <div class="panel-heading">
                    <h3 class="panel-title, post-subtitle">Forma de contacto</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label style="font-size: 17px">Contacto</label>
                    <hr size="3">
                    <br>
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Telefono</label>
                      <div class="col-sm-9">
                        <input type="text" name="telperfil" class="form-control" placeholder="0000-0000"></input>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Correo Electronico</label>
                      <div class="col-sm-9">
                        <input type="text" name="correoperfil" class="form-control" placeholder="nombre@example.com"></input>
                      </div>
                      </div>
                    </form>
                  </div>
                  <div class="form-group">
                    <label style="font-size: 17px">Redes Sociales</label>
                    <hr size="3">
                    <br>
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Facebook</label>
                      <div class="col-sm-9">
                        <input type="text" name="fbperfil" class="form-control" placeholder="Facebook" size="10"></input>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Twitter</label>
                      <div class="col-sm-9">
                        <input type="text" name="twitterperfil" class="form-control" placeholder="Twitter"></input>
                      </div>
                      </div>
                      <div class="form-group">
                        <label class ="col-sm-3 col-lg-2 col-md-2">Instagram</label>
                      <div class="col-sm-9">
                        <input type="text" name="instagramperfil" class="form-control" placeholder="Instagram"></input>
                      </div>
                      </div>
                    </form>
                  </div>
            </div>
      </div>
</div>
    <div class="row">
        <button type="submit" class="btn btn-primary" value="Registrar">Guardar</button>
    </div>
</form>
<script type="text/javascript" src="<?=base_url()?>public/js/perfildelpuesto.js"></script>
