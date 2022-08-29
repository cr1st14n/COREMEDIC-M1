@extends('layouts.admLay1')
@section('refUbi')
<ol class="breadcrumb">
    <li><a href="#">Recepcion</a></li>
    <li class="active">Especialidades</li>
</ol>

@endsection

@section('content')



<div class="col-lg-5">
    <form id="" class="" method="POST" action="{{ route('update_especialidad') }}">
        {{ csrf_field() }}
        <input type="text" class="hide" name="id" id="id" value="{{$especialidad->id}} ">
        <section class="panel corner-flip">
            <header class="panel-heading sm" data-color="theme-inverse">
                <h2><strong>Actualizar </strong><br>especialidad: {{$especialidad->nombre}} .</h2>
            </header>
            <div class="panel-tools color" align="right" data-toolscolor="#4EA582">
            </div>
            <div class="panel-body">
                <div class="form-horizontal" data-collabel="3" data-alignlabel="center">
                    <div class="form-group{{ $errors->has('esp_nombre') ? ' has-error' : '' }}">
                        <label for="esp_nombre" class="col-md-4 control-label">Especialidades</label>
                        <div class="col-md-6">
                            <input id="esp_nombre" type="text" class="form-control rounded" name="esp_nombre" value=" {{$especialidad->esp_nombre}} " maxlength="50" data-always-show="true">
                            @if ($errors->has('esp_nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('esp_nombre') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('esp_detalle') ? ' has-error' : '' }}">
                        <label for="esp_detalle" class="col-md-4 control-label">Detalle</label>
                        <div class="col-md-6">
                            <input id="esp_detalle" type="text" class="form-control rounded" name="esp_detalle" value=" {{$especialidad->esp_detalle }} " maxlength="50" data-always-show="true">
                            @if ($errors->has('esp_detalle'))esp_detalle
                            <span class="help-block">
                                <strong>{{ $errors->first('esp_detalle') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('esp_costo') ? ' has-error' : '' }}">
                        <label class="control-label">Costo </label>
                        <div>
                            <input id="esp_costo" name="esp_costo" value=" {{$especialidad->esp_costo}} " type="text" class="form-control rounded" maxlength="200" data-always-show="false">
                            @if ($errors->has('esp_costo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('esp_costo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <button type="submit" class="btn btn-theme">Actualizar</button>
                        <button class="btn"><a href="{{route('formNewEspecialidad')}} "> Agregar nueva especialidad</a></button>
                    </footer>
                </div>
            </div>
        </section>
    </form>

</div>

<div class="col-lg-7">
    <section class="panel">
        <header class="panel-heading sm" data-color="theme-inverse">
            <h2><strong>Especialidades </strong>registradas.</h2>
        </header>

        <div class="panel-body">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Especialidad</th>
                            <th>Detalle</th>
                            <th>Costo</th>
                            <th width="30%">Action</th>

                        </tr>
                    </thead>
                    <tbody align="center">
                        @foreach($especialidades as $especialidad)
                        <tr>
                            <td>{{$especialidad->esp_nombre}} </td>
                            <td>{{$especialidad->esp_detalle}} </td>
                            <td>{{$especialidad->esp_costo}} </td>

                            <td>
                                <span class="">
                                    <a href="{{route('form_edit_especialidad',$especialidad->id)}} " class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{route('destroy_especialidad',$especialidad->id)}} " class="btn btn-default btn-sm" title="delete"><i class="fa fa-trash-o"></i></a>
                                </span>
                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</div>


@endsection

@section('scripts')
<script>
    $(document).ready(function() {

        $("#formID").submit(function(e) {
            e.preventDefault();
            if ($(this).parsley('validate')) {
                alert("send");
            }
        });

        //iCheck[components] validate
        $('input').on('ifChanged', function(event) {
            $(event.target).parsley('validate');
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#usu_area > option[value="{{ old('
            usu_area ') }}"]').attr('selected', 'selected');
        //$('input:radio[name="usu_sexo"][value="{{ old('usu_sexo') }}"]').prop('checked', true);
        //$("form input:[name=usu_sexo]").filter('[value={{ old('usu_sexo') }}]').attr('checked', true);


    });
</script>



@endsection