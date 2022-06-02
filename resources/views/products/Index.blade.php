{{-- @extends('Frontend.master') --}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>teacher id</th>
            <th>classroom Id</th>
            <th>Content</th>
            <th>Created at</th>
            
            
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>#{{ $loop->iteration }}</td>
                <td>{{ $product->teacher_id }}</td>
                <td>{{ $product->classroom_id }}</td>
                <td>{{ $product->content }}</td>
                <td>{{ $product->created_at }}</td>
                
                <td>
                        <a href="{{ route('products.show', $product)}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('products.edit', $product) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection