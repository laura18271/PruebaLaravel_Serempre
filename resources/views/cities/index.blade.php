@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a class=" btn btn-success font-weight-bold" style="color: seashell;" href="{{ Url('/cities/create') }}">{{ __('+') }}</a>
                    {{ __('Listar') }}
                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $citiess)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $citiess->name}}</td>
                                <td>{{$citiess->city}}</td>
                                <td>
                                    <a class=" btn btn-primary" style="color: seashell;" href="{{ Url('/cities/'.$citiess->id.'/edit') }}">{{ __('Editar') }}</a>
                                    <form method="POST" action="{{url('/cities/'.$citiess->id) }}">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('Seguro que desea Borrar?');" class="btn btn-danger">
                                    {{ __('Borrar') }}
                                    </button>
                                    </form>

                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection