@if ($errors->any())
  <div class="card-panel red lighten-4">
    <ul>
      @foreach ($errors->all() as $erro)
        <li>{{ $erro }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="input-field">
  <input type="text" name="titulo" value="{{ old('titulo', isset($registro) ? $registro->titulo : '') }}">
  <label>Título</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{ old('descricao', isset($registro) ? $registro->descricao : '') }}">
  <label>Descrição</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="{{ old('valor', isset($registro) ? $registro->valor : '') }}">
  <label>Valor</label>
</div>

<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($registro) && $registro->imagem)
  <div class="input-field">
    <img width="150" src="{{asset($registro->imagem)}}" />
  </div>
@endif

<div class="input-field">
  <p>
    <input type="checkbox" id="publicado" name="publicado"
      {{ old('publicado', isset($registro) ? $registro->publicado : false) ? 'checked' : '' }}
      value="1" />
    <label for="publicado">Publicar?</label>
  </p>
  <br><br>
</div>
