@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Admin!

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">cedula</th>
                            <th scope="col">nombre</th>
                            <th scope="col">apellido</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $item)
                            <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->cedula}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->last_name}}</td>
                            </tr>
                            <tr>
                        @endforeach()
                         
                        </tbody>
                    </table>
                    {{ $usuarios->links() }}  
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
