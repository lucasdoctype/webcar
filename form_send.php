 <?php 
    include("connect.php");
    include("auth.php");
 ?>
 <hr>
          <h2>Tenho interesse</h2>
          <form style="width: 360px;">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Nome completo">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
              <small id="emailHelp" class="form-text text-muted blockquote-footer">Nós nunca compartilharemos seu e-mail com mais ninguém.</small>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control  phone_with_ddd" placeholder="(00) 0000-0000">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Olá, tenho interesse no veículo. Por favor entre em contato.</textarea>
            </div>
            <!-- Call to Action Section -->
            <div class="row mb-4">
              <div class="col-md-4">
                  <button class="btn btn-danger" type="submit"><i class="fas fa-paper-plane    "></i> Enviar Mensagem</button>    
              </div>
            </div>
          </div>
          </form>