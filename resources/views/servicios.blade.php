@extends('layout')

@section('titulo', 'Servicios')


@section('content')
    <h2>Servicios</h2>

    <table class="table table-striped">
        <tr>
            @if($servicios)
                @foreach ($servicios as $item)
                    <td><a href="{{ route('servicios.show',$item) }}">{{ $item->titulo }}</a</td>
                @endforeach
            @else
                <td colspan="4">nada</td>
            @endif
        </tr>
        <tr>
            <td colspan="4">{{$servicios->links()}}</td>
        </tr>
    </table>


    
@endsection
