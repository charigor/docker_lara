<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href=""></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex justify-end mb-2">
             <a href="{{route('products.create')}}" class="btn btn-success">Create new product</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->desc}}</td>
                            <td>
                                @if($product->image)
                                    <img src="{{$product->image->url}}" alt="{{$product->title}}">
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary">edit</a>
                                <form action="{{ route('products.destroy',[$product->id])}}" method="POST" style="display:inline-block;">
                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
