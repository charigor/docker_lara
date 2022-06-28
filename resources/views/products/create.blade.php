<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href=""></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <form action="{{route('products.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="title" class="label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group mb-2">
                        <label for="price" class="label">Price</label>
                        <input type="number" class="form-control" name="price" id="price">
                    </div>
                    <div class="form-group mb-2">
                        <label for="short_desc" class="label">Short Description</label>
                        <textarea name="short_desc" class="form-control" id="short_desc" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="desc" class="label">Description</label>
                        <textarea name="desc" class="form-control" id="desc" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="url" class="label">Image url</label>
                        <input type="text" class="form-control" name="url">
                    </div>
                    <div class=" d-flex justify-end">
                        <button type="submit" class="btn btn-primary text-primary">Save</button>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>
