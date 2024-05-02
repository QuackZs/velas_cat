@extends('app')

@section('content')
    <div class="container pt-5">
        <div class="content">
             <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>Nova Compra/Venda</span>
                    </div>
                    
                </div>
                <form action="{{ route('venda.store') }}" method="POST">
                    <div class="card-body">
                        
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                                </div>
                                <div class="col-4">
                                    <select name="tipo"  class="form-select" placeholder="Tipo">
                                        <option value="compra">Compra</option>
                                        <option value="venda">Venda</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <input type="number" name="total" step="0.01" class="form-control" placeholder="Total">
                                </div>
                            </div>
                            <hr>
                            <div class="row grpProdutos">
                                
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Criar Compra/Venda</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
