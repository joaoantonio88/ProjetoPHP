<div class="input-field">
  <label>Nome</label>
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
</div>

<div class="input-field">
  <label>Endereço Completo</label>
  <input type="text" name="endereco" value="{{isset($registro->endereco) ? $registro->endereco : ''}}">
</div>

<div class="input-field">
  <label>Inscrição Estadual</label>
  <input type="text" name="ie" value="{{isset($registro->ie) ? $registro->ie : ''}}">
</div>

<div class="input-field">
  <label>CNPJ</label>
  <input type="text" name="cnpj" value="{{isset($registro->cnpj) ? $registro->cnpj : ''}}">
</div>
