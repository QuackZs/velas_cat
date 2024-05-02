@extends('app')

@section('content')
    <div class="container pt-5">
        <div class="content">
             <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>Editar Produto</span>
                    </div>
                    
                </div>
                <form action="{{ route('produto.update',$produto->id) }}" method="POST" accept-charset="UTF-8">
                    <div class="card-body">
                            <input name="_method" type="hidden" value="PUT">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                                </div>
                                <div class="col-4">
                                    <input type="number" name="pc" value="{{ $produto->pc }}" step="0.01" class="form-control" placeholder="PC">
                                </div>
                                <div class="col-4">
                                    <input type="number" name="g-ml" value="{{ $produto->getAttribute('g-ml') }}" step="0.01" class="form-control" placeholder="Peso/ML">
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Atualizar Produto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
