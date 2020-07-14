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
  <input type="text" name="ano" placeholder="Ano..." value="{{isset($registro->ano) ? $registro->ano : ''}}">
</div>

<div class="input-field">
  <input type="text" name="modelo" placeholder="Modelo..." value="{{isset($registro->modelo) ? $registro->modelo : ''}}">

</div>

<div class="input-field">
  <input type="text" name="cor" placeholder="Cor..." value="{{isset($registro->cor) ? $registro->cor : ''}}">

</div>

<div class="input-field">
  <input type="text" name="numerochassis" placeholder="Número do Chassis..."value="{{isset($registro->numerochassis) ? $registro->numerochassis : ''}}">

</div>

<div class="input-field">
  <select type="text" class="browser-default" name="categoria" value="{{isset($registro->categoria) ? $registro->categoria : ''}}">
    <option value="" disabled selected>Selecione a Categoria</option>
    <option value="Entrada">Entrada</option>
    <option value="Hat pequeno">Hat pequeno</option>
    <option value="Hat médio">Hat médio</option>
    <option value="Sedã médio">Sedã médio</option>
    <option value="Sedã grande">Sedã grande</option>
    <option value="SUV">SUV</option>
    <option value="Pic-ups">Pic-ups</option>

  </select
</div>
