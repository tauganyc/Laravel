
{{$slot}} {{--slot é uma variável que recebe o conteúdo do componente--}}
<form action="{{route('site.contato')}}" method="post">
    @csrf {{--proteção contra ataques do tipo cross-site request forgery--}}
    <label>
        <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{$classe}}">
    </label>
    @if($errors->has('nome')) {{$errors->first('nome')}} @endif
    <br>
    <label>
        <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{$classe}}">
    </label>
    @if($errors->has('telefone')) {{$errors->first('telefone')}} @endif
    <br>
    <label>
        <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$classe}}">
    </label>
    @if($errors->has('email')) {{$errors->first('email')}} @endif
    <br>
    <label>
        <select name="motivo_contatos_id" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>
            @foreach($motivo_contatos as $key => $motivo_contato)
                <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
        </select>
    </label>
    @if($errors->has('motivo_contatos_id')) {{$errors->first('motivo_contatos_id')}} @endif
    <br>
    <label>
        <textarea name="mensagem" class="{{$classe}}" placeholder="Preencha aqui a sua mensagem">{{!empty(old('mensagem'))?old('mensagem') : ''}}</textarea>
    </label>
    @if($errors->has('mensagem')) {{$errors->first('mensagem')}} @endif
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

{{--@if($errors->any())--}}
{{--    <div style="position: absolute; top: 0; left: 0; width: 100%; background-color: red; color: white; padding: 10px;">--}}
{{--        @foreach($errors->all() as $error)--}}
{{--            {{$error}}<br>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--@endif--}}
