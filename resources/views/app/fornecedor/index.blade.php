<h3>Fornecedores!</h3>

{{--                 IF ELSE                  --}}
{{--if(!<condicao>) {} //enquanto executa se o retorno for true--}}
@php // exemplo primário
    /*
    if (condition) {
        # code...
    } else {
        # code...
    }
    */
@endphp
@php
    /* @if (count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedores) > 10)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrados</h3>
    @endif */
@endphp



{{--                 UNLESS                  --}}
{{-- @unless executa se o retorno for false --}}
@unless ($fornecedores[0]['status'] == 'S') <!-- Se o retorno da condição for false-->
    Fornecedor Inativo
@endunless



{{--                 ISSET                  --}}
{{-- if(isset($variavel)) {} // Retornar true se a variável estiver definida --}}
@isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @if ( !($fornecedores[0]['status'] == 'S') )
        Fornecedor Inativo
    @endif
    <br>
    
@endisset
