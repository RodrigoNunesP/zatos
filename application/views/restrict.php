<section style="min-height: calc(100vh - 83px)" class="light-bg">
  
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-6 text-center">
        <div class="section-title"><p>
          <h2>Área Restrita</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-offset-5 col-lg-2 text-center">
        <div class="form-group">
          <a class="btn btn-link" href="restrict/logoff"><i class="fa fa-sign-out"> LOGOUT</i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_user" role="tab" data-toggle="tab">Clientes</a></li>
      <li><a href="#tab_file" role="tab" data-toggle="tab">Enviar Arquivos</a></li>
    </ul>

    <div class="tab-content">
      <div id="tab_user" class="tab-pane active">
        <div class="container-fluid">
          <h2 class="text-center"><strong>Gerenciar Clientes</strong></h2>
          <a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Cliente</i></a>
          <a id="btn_last_user" class="btn btn-primary"><i class="fa fa-clock-o">&nbsp;&nbsp;Acessos há 5 minutos</i></a>
          <table id="dt_users" class="table table-striped table-bordered">
            <thead>
              <tr class="tableheader">
                <th>Nome</th>
                <th>Email</th>
                <th>Ultima atividade</th>
                <th class="dt-center no-short">Editar</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          
         </div>
      </div>

      <div id="tab_file" class="tab-pane">
        <div class="container-fluid">
          <h2 class="text-center"><strong>Enviar Arquivos</strong></h2>
          
            <?php echo form_open_multipart('file/do_upload');?>
              <input type="file" name="userfile" size="20" />
            <br /><br />
              <button type="submit" id="btn_add_file" class="btn btn-primary">
              <i class="fa fa-plus">&nbsp;&nbsp;Adicionar Arquivo</i></a>
              </button>
            </form>

         </div>
      </div>

    </div>
  </div>

</section>

<div id="modal_user" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Inclusão de Cliente</h4>
      </div>

      <div class="modal-body">
        <form id="form_user">

          <input id="user_id" name="user_id" hidden>
          <input id="date_register" name="date_register" hidden>
          <input id="date_modify" name="date_modify" hidden>
          <input id="date_activity" name="date_activity" hidden>
          
          <div class="form-group">
            <div class="col-lg-12">
            <label>Nome</label><input id="user_name" name="user_name" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
            <label>Usuário</label><input id="user_access" name="user_access" class="form-control" maxlength="30">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
            <label>Senha</label><input type="password" id="user_password" name="user_password" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
            <label>Confirmar Senha</label><input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <label>E-mail</label>
              <input id="email" name="email" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <label>CPF</label>
              <input id="user_cpf" name="user_cpf" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <label>Latitude</label>
              <input id="latitude" name="latitude" class="form-control" maxlength="100">
              <span class="help-block"></span>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-lg-12" class="form-control">
                <label>Longitude</label>
                <input id="longitude" name="longitude" class="form-control" maxlength="100">
                <span class="help-block"></span>
            </div>
          </div>

          
          <div class="form-group text-center">
            <button type="button" id="btn_mark_geo" class="btn btn-primary">
              <i class="fa fa-map-marker"></i>&nbsp;&nbsp;Marcar geolocalização
            </button>
            <span class="help-block"></span>
          </div>
          
          <div class="form-group text-center">
            <button type="submit" id="btn_save_user" class="btn btn-primary">
              <i class="fa fa-save"></i>&nbsp;&nbsp;Gravar
            </button>
            <span class="help-block"></span>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>