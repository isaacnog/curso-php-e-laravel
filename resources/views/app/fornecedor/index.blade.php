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
{{--
    @unless ($fornecedores[0]['status'] == 'S') <!-- Se o retorno da condição for false-->
    Fornecedor Inativo
@endunless
--}}



{{--                 ISSET                  --}}
{{-- if(isset($variavel)) {} // Retornar true se a variável estiver definida --}}



{{--                 EMPTY                  --}}
{{--
    - ''
    - 0
    - 0.0
    - '0'
    - NULL
    - FALSE
    - ARRAY()
    - $var
--}}



@isset($fornecedores)

    @forelse ($fornecedores as $fornecedor)

    @dd($loop)

        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}})
        {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if ($loop->first)
            Primeira Iteração do loop
        @endif
        @if ($loop->last)
            Última Iteração do loop
            <br>
            Total de Registro: {{ $loop->count }}
        @endif
        <hr>
        @empty 
            Não existem fornecedores cadastrados!
    @endforelse
        
@endisset

<br>
