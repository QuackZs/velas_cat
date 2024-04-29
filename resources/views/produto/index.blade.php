@extends('app')

@section('content')
    <div class="container pt-5">
        <div class="content">
             <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>Produtos</span>
                        <a href="{{ route('produto.create') }}" class="btn btn-primary">Novo Produto</a>
                    </div>
                    
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection