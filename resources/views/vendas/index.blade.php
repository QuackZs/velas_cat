@extends('app')

@section('content')
    <div class="container pt-5">
        <div class="content">
             <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>Compras/Vendas</span>
                        <a href="{{ route('venda.create') }}" class="btn btn-primary">Nova Compra/Venda</a>
                    </div>
                    
                </div>
               {{--  <div class="card-body">
                    <table id="myTable" class="display">
                        <thead>
                            <th>Nome</th>
                            <th>Preço Custo</th>
                            <th>Gramas/Mililitros</th>
                        </thead>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
{{-- 
@section('scripts')
    <script type="module">
        $('#myTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('produto.index') }}",
            "columns": [
                {"data": "nome"},
                {"data": "pc"},
                {"data": "g-ml"},
                { "data": "action", "orderable": false, "searchable": false }
                // Add more columns as needed
            ]
        });
    </script>
@endsection --}}