    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tablaacuerdos">
                    <thead>
                        <tr>
                            <th>Puesto</th>
                            <th>Area</th>
                            <th>Vacantes</th>
                            <th>Jornada</th>
                            <th>Fecha Contratacion</th>
                            <th>Fecha Expiracion</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--@foreach ($acuerdos as $ac)-->
                            <tr>
                                <td><!--{{ $ac->idacuerdo }}--></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="{{URL::action('AcuerdosController@edit',$ac->idacuerdo)}}"><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i> Editar</button></a>
                                    <a href="" data-target="#modal-delete-{{$ac->idacuerdo}}" data-toggle="modal"><button class="btn btn-xs btn-danger"><i class="fa fa-remove"></i> Eliminar</button></a>
                                    <a href="" data-target="#modal-delete2-{{$ac->idacuerdo}}" data-toggle="modal"><button  class="btn btn-xs btn-success"><i class="glyphicon glyphicon-list-alt"></i> Consultar</button></a>
                                    </td>
                                </tr>
                                <!--@include('admin.acuerdos.modal')
                        @endforeach -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

