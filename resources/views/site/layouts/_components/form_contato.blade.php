
{{$slot}} {{--slot é uma variável que recebe o conteúdo do componente--}}
<form action="{{route('site.contato')}}" method="post">
    @csrf {{--proteção contra ataques do tipo cross-site request forgery--}}
    <label>
        <input name="nome" type="text" placeholder="Nome" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input name="telefone" type="text" placeholder="Telefone" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input name="email" type="text" placeholder="E-mail" class="{{$classe}}">
    </label>
    <br>
    <label>
        <select name="motivo_contato" class="{{$classe}}">
            <option value="1">Qual o motivo do contato?</option>
            <option value="2">Dúvida</option>
            <option value="3">Elogio</option>
            <option value="4">Reclamação</option>
        </select>
    </label>
    <br>
    <label>
        <textarea name="mensagem" class="b{{$classe}}">Preencha aqui a sua mensagem</textarea>
    </label>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
