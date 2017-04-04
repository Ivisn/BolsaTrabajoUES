<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">		
            <div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title, post-subtitle">Información general</h3>
			  </div>
			  <div class="panel-body">
			  	<div class="form-group">
            		<label for="puesto">Puesto</label>
            		<input type="text" name="puesto" class="form-control" placeholder="Nombre del puesto" size="60"></input>
            	</div>
              <div class="form-group">
                <label for="areaPuesto">Area del puesto</label>
                <input type="text" name="areaPuesto" class="form-control" placeholder="Area a la que pertenece el puesto"></input>
              </div>
            	<div class="form-group">
                	<label>Descripción</label>
                	<textarea  name="descripcionperfil" id="descripcionperfil" class="form-control"  rows="3" placeholder="Descripcion del perfil" size="10px"></textarea>
                </div>
            	<div class="form-group">
            		<label for="vacantes" >Puestos vacantes</label>
            		<input type="text" name="vacantes" class="form-control" placeholder="Cantidad" size="10"></input>
            	</div>
				<div class="form-group">
                  <label>Tipo de contratación</label>
                  <select name="tipocontratacion" class="form-control" id="tipocontratacion">
                         <option>1</option>
                  </select>  
				</div>
				<div class="form-group">
					<label>Experiencia</label>
					<hr size="3">
          <br>
                		<div class="form-inline">
                			<label style="font-size: 15px">Periodo</label>
                			<select name="periodo" class="form-control" id="periodo">
                         		<option>Mes1</option>
                  			</select> 
                  		</div>
                  		<br>
                  		<div class="form-inline">
            				<label style="font-size: 15px">Cantidad</label>
            				<input type="text" name="cantidadexperiencia" class="form-control" placeholder="Cantidad" size="10"></input>
                			<select name="estadoexp" class="form-control" id="estadoexp">
                         		<option>Opcional</option>
                  			</select> 
                		</div>
				</div>
				<div class="form-group">
                	<label>Salario</label>
                	<hr size="3">
                  <br>
                		<div class="form-inline">
                			<select name="simbolo" class="form-control" id="simbolo">
                         		<option>$</option>
                  			</select> 

            				<label style="font-size: 15px">Min</label>
            				<input type="text" name="salariomin" class="form-control" placeholder="" size="5"></input>
            			
                			<label style="font-size: 15px">Max</label>
                			<input type="text" name="salariomax" class="form-control" placeholder="" size="5"></input> 
                		</div>
            	</div>
            	<div class="form-group">
                	<label>Edad</label>
                	<hr size="3">
                  <br>
                		<div class="form-inline">
            				<label style="font-size: 15px">Min</label>
            				<input type="text" name="edadmin" class="form-control" placeholder="" size="10"></input>
            			
                			<label style="font-size: 15px">Max</label>
                			<input type="text" name="edadmax" class="form-control" placeholder="" size="10"></input> 
                		</div>
            	</div>
            	<div class="form-group">
                	<label>Localizacion</label>
                	<hr size="3">
                  <br>
                		<div class="form-inline">
                			<label style="font-size: 15px">Departamento</label>
                			<select name="deptoperfil" class="form-control" id="deptoperfil">
                         		<option>San Salvador</option>
                  			</select> 
                		</div>
                    <br>
                		<div class="form-inline">
                			<label style="font-size: 15px">Municipio</label>
                			<select name="muniperfil" class="form-control" id="muniperfil">
                         		<option>San Salvador</option>
                  			</select> 
                		</div>
            	</div>
			  </div>
        <div class="panel-heading">
          <h3 class="panel-title, post-subtitle">Experiencias</h3>
        </div>
        <div class="panel-body">
            <div class="form-inline">
                      <label style="font-size: 15px">Area</label>
                      <select name="areaexp" class="form-control" id="areaexp">
                            <option>Administrativa</option>
                        </select> 
                      <select name="estadoexp2" class="form-control" id="estadoexp2">
                            <option>Opcional</option>
                        </select> 
                  </div>
                </div>
            <div class="panel-heading">
          <h3 class="panel-title, post-subtitle">Idiomas</h3>
        </div>
        <div class="panel-body">
            <div class="form-inline">
                <label style="font-size: 15px">Idioma</label>
                      <select name="idiomaperfil" class="form-control" id="idiomaperfil">
                            <option>Ingles</option>
                        </select> 
                      <select name="estadoidioma" class="form-control" id="estadoidioma">
                            <option>Opcional</option>
                        </select> 
                  </div>
                  <br>
                  <div class="form-inline">
                    <label style="font-size: 15px">Nivel</label>
                      <select name="nivelidiomaperfil" class="form-control" id="nivelidiomaperfil">
                            <option>Basico</option>
                        </select> 
                  </div>
                </div>
                
			  </div>
			</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
         	<div class="panel panel-default">
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
                      <label>Educacion superior</label>
                      <hr size="3">
                      <br>
                      <div class="form-inline">
                      <label style="font-size: 15px">Area</label>
                      <select name="areaeducacion" class="form-control" id="areaeducacion">
                            <option>Ingenieria de Sistemas Informaticos</option>
                        </select> 
                      </div>
                      <br>
                      <div class="form-inline">
                      <label style="font-size: 15px">Nivel academico</label>
                      <select name="nivelacaeducacion" class="form-control" id="nivelacaeducacion">
                            <option>Egresado</option>
                        </select> 
                      </div>
                  </div>
                </div>
                <div class="panel-heading">
			    <h3 class="panel-title, post-subtitle">Habilidades tecnologicas</h3>
			  </div>
			  <div class="panel-body">
			  		<div class="form-group">
                			<label>Ofimatica</label>
                			<hr size="3">
                      <br>
                			<select name="habofimatica" class="form-control" id="habofimatica">
                         		<option>Microsoft</option>
                  			</select> 
                	</div>
                	<div class="form-inline">
            				<label style="font-size: 15px">Nivel</label>
                			<select name="nivelofimaticaperfil" class="form-control" id="nivelofimaticaperfil">
                         		<option>Basico</option>
                  			</select> 
                	</div>
                	<br>
                	<div class="form-group">
                			<label>Software</label>
                			<hr size="3">
                      <br>
                			<select name="habsoftware" class="form-control" id="habsoftware">
                         		<option>PhotoShop</option>
                  			</select> 
                	</div>
                	<div class="form-inline">
            				<label style="font-size: 15px">Nivel</label>
                			<select name="nivelofimaticaperfil" class="form-control" id="nivelofimaticaperfil">
                         		<option>Basico</option>
                  			</select> 
                	</div>
                  <br>
                  <div class="form-group">
                      <label>Hardware</label>
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
                      <label>Organizacionales</label>
                      <hr size="3">
                      <br>
                      <select name="haborgani" class="form-control" id="haborgani">
                            <option>Planificacion</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label>Sociales</label>
                      <hr size="3">
                      <br>
                      <select name="habsocial" class="form-control" id="habscial">
                            <option>Empatia</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label>Profesionales</label>
                      <hr size="3">
                      <br>
                      <select name="habprofe" class="form-control" id="habprofe">
                            <option>Reclutamiento</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label>Personales</label>
                      <hr size="3">
                      <br>
                      <select name="habpersonal" class="form-control" id="habpersonal">
                            <option>Actitud de servicio</option>
                        </select> 
                  </div>
                  <div class="form-group">
                      <label>Tecnicas</label>
                      <hr size="3">
                      <br>
                      <select name="habtecnica" class="form-control" id="habtecnica">
                            <option>Comercialización y Ventas</option>
                        </select> 
                  </div>
                  </div>
                </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
          <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title, post-subtitle">Fechas</h3>
                </div>
      <div class="panel-body">
          <div class="form-group">
              <label>Fecha de contratacion</label>
              <input type="text" name="fechacontrata" class="form-control" placeholder="00-00-0000"></input>
          </div>
          <div class="form-group">
              <label>Fecha de expiracion</label>
              <input type="text" name="fechaexppefil" class="form-control" placeholder="00-00-0000"></input>
          </div>
      </div>
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
          <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title, post-subtitle">Forma de contacto</h3>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                      <label>Correo electronico</label>
                      <input type="text" name="correoperfil" class="form-control" placeholder="Correo de contacto"></input>
                  </div>
                  <div class="form-group">
                      <label>Telefono</label>
                      <input type="text" name="telperfil" class="form-control" placeholder="Telefono de contacto"></input>
                  </div>
            </div>
      </div>

</div>
