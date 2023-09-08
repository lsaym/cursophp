<h1>Novo usuario</h1>
<form action="?page=salvar" method="post">
  <input type="hidden" name="action" value="cadastrar">
  <div class="mb-3">
    <label for="name">nome</label>
    <input type="text" name="name" id="name" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="pass">Senha</label>
    <input type="password" name="pass" id="pass" class="form-control">
  </div>
  <div class="mb-5">
    <label for="date">Data de nascimento</label>
    <input type="date" name="birth" id="birth" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary ">Cadastrar</button>
  </div>

</form>