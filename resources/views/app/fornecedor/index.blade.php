<h3>Fornecedores</h3>

{{-- comentario --}}

@php
//como abrir php dentro do blade
 @endphp
Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
{{--@dd($fornecedores)--}}

@if($fornecedores[0]['status'] == 'N' )
    Fornecedor Inativo
@elseif($fornecedores[0]['status'] == 'S')
    Fornecedor Ativo
@else

@endif
