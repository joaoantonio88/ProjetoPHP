<div class="input-field">

  <select class="browser-default" id="filial_id" name="filial_id" value="{{isset($registro->filial_id) ? $registro->filial_id : ''}}">
    <option value="filial_id" disabled selected>Selecione a filial</option>
    @foreach ($filiais as $fil)
      <option value="{{$fil->id}}">
      {{$fil->nome}}
      </option>

    @endforeach
  </select>
</div>

<div class="input-field">

  <input type="text" name="nome" placeholder="Nome..." value="{{isset($registro->nome) ? $registro->nome : ''}}">
</div>

<div class="input-field">
  <input type="text" class="datepicker" name="datanascimento" placeholder="Data Nascimento" value="{{isset($registro->datanascimento) ? $registro->datanascimento : ''}}">
</div>

<div class="input-field">

  <input type="text" name="sexo" placeholder="Sexo..." value="{{isset($registro->sexo) ? $registro->sexo : ''}}">
</div>

<div class="input-field">

  <input type="text" name="cpf" placeholder="CPF..." value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
</div>

<div class="input-field">

  <input type="text" name="endereco" placeholder="Endereço Completo..." value="{{isset($registro->endereco) ? $registro->endereco : ''}}">
</div>

<div class="input-field">

  <input type="text" name="cargo" placeholder="Cargo Desempenhado..." value="{{isset($registro->cargo) ? $registro->cargo : ''}}">
</div>

<div class="input-field">

  <input type="text" name="salario" placeholder="Salário..." value="{{isset($registro->salario) ? $registro->salario : ''}}">
</div>

<div class="input-field">
  <p>
      <input type="checkbox" id="test5" name="situacao" {{isset($registro->situacao) && $registro->situacao == 'ativo' ? 'checked' : '' }} value="true" />
      <label for="test5">Situação?</label>
    </p>
    <br><br>
</div>


<div class="input-field">
  <input type="text" id="calc" onclick="javascript:validar()" placeholder="Senha..." value="{{isset($registro->senha) ? $registro->senha : ''}}">
</div>


<script>
      function validar() {
        var senha = Math.random().toString(36).slice(-6);
        document.getElementById("calc").value = senha;
      }
</script>
