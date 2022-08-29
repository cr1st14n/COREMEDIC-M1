<div class="row">

    <div class="col-lg-12">

        <section class="panel">
            <header class="panel-heading">
                <h2><strong>Configuración</strong> Pantalla de información </h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <button type="button" id="btn_addTurnMed" class="btn btn-theme-inverse btn-transparent"><i class="fa fa-plus"></i> Agregar</button>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>
                                <section class="form-group-vertical">
                                    <div class="input-icon"> <i class="fa fa-search  ico"></i>
                                        <label>Filtrar por : </label>
                                        <button class="btn btn-theme-inverse btn-transparent" onclick="btn_funListTypeOrder(1)">Medico</button>
                                        <button class="btn btn-theme-inverse btn-transparent" onclick="btn_funListTypeOrder(2)">Especialidad</button>
                                        <button class="btn btn-theme-inverse btn-transparent" onclick="btn_funListTypeOrder(3)">Fecha</button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Especialidad</th>
                                    <th>Medico</th>
                                    <th>Turno</th>
                                    <th>Costo</th>
                                    <th>Fecha edicion</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="table_cont_tunMed">
                                <tr>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </div>
</div>

<!-- SECCION DE MODAL -->
<div id="md_createTurMed" class="modal fade">

    <div class="modal-body">
        <section class="panel">
            <header class="">
                <h3><strong>Crear</strong> Horario </h3>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" data-alignlabel="center" data-col="sm" id="form_createTurnMed">
                    <div class="form-group">
                        <label class="control-label">Especialidad</i></label>
                        <div>
                            <input type="text" id="inp_turMed_esp" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Medico</label>
                        <input type="text" id="inp_turMed_med" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Costo del servicio </label>
                        <input type="text" id="inp_turMed_cos" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <div>
                            <label> Dias y Hora de atención</label>
                            <input type="text" id="inp_diHo_dias" class="form-control" placeholder="Dias..." autocomplete="off">
                            <input type="text" id="inp_diHo_horas" class="form-control" placeholder="Hora..." autocomplete="off">
                            <button type="button" id="btn_add_diasTurnoMed" class="btn btn-block btn-theme-inverse"><strong>+</strong></button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Dias</th>
                                    <th>Hora</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="tableModalListTurnHoras">
                                <tr>
                                    <td valign="middle">Sander</td>
                                    <td valign="middle">Sander</td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="form-group offset">
                        <div>
                            <button type="submit" class="btn btn-theme">Finalizar y guardar</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!-- //modal-body-->
</div>
<div id="md_editTurMed" class="modal fade">
    <div class="modal-body">
        <section class="panel">
            <header class="">
                <h3><strong>Editar</strong>Horario </h3>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" data-alignlabel="center" data-col="sm" id="form_editTurnMed">
                    <div class="form-group">
                        <label class="control-label">Especialidad</i></label>
                        <div>
                            <input type="text" id="inp_turMed_esp_edit" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Medico</label>
                        <input type="text" id="inp_turMed_med_edit" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Costo del servicio </label>
                        <input type="text" id="inp_turMed_cos_edit" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <div>
                            <label> Dias y Hora de atención</label>
                            <input type="text" id="inp_diHo_dias_edit" class="form-control" placeholder="Dias..." autocomplete="off">
                            <input type="text" id="inp_diHo_horas_edit" class="form-control" placeholder="Hora..." autocomplete="off">
                            <button type="button" id="btn_add_diasTurnoMed_edit" class="btn btn-block btn-theme-inverse"><strong>+</strong></button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Dias</th>
                                    <th>Hora</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody align="center" id="tableModalListTurnHoras_edit">
                                <tr>
                                    <td valign="middle">Sander</td>
                                    <td valign="middle">Sander</td>
                                    <td>
                                        <span class="tooltip-area">
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="form-group offset">
                        <div>
                            <button type="submit" class="btn btn-danger">Guardar Cambios</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!-- //modal-body-->
</div>
<div id="md_deleteTurMed" class="modal fade md-stickTop">
    <div class="modal-header" align='center'>
        <h4 class="modal-title">Eliminar registro</h4>
    </div>
    <!-- //modal-header-->
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-6" align='center'>
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            </div>
            <div class="col-lg-6" align='center'>
                <button class="btn btn-theme-inverse" id="btn_destroy_TurnMed_True">Confirmar</button>
            </div>
        </div>
    </div>
    <!-- //modal-body-->
</div>
<script type="text/javascript" src="{{ asset('/asincrono/PantInfo.js') }}"></script>
<!-- //content > row-->