
{{$slot}} {{--slot é uma variável que recebe o conteúdo do componente--}}
<form action="{{route('site.contato')}}" method="post">
    @csrf {{--proteção contra ataques do tipo cross-site request forgery--}}
    <label>
        <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input name="telefone" value="{{old('telefone')}}" type="text" placeholder="Telefone" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$classe}}">
    </label>
    <br>
    <label>
        <select name="motivo_contato" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>
            @foreach($motivo_contatos as $key => $motivo_contato)
                <option value="{{$motivo_contato->id}}" {{old('motivo_contato') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <label>
        <textarea name="mensagem" class="b{{$classe}}" placeholder="Preencha aqui a sua mensagem">
            @if(!empty(old('mensagem')))
                {{old('mensagem')}}
            @endif

        </textarea>
    </label>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
