@extends('admin.masterlayout')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form action="inserproduct" enctype="multipart/form-data" method="post" class=" mx-auto mt-3 bg-light shadow-lg p-3">
                <h1 class="text-center">Add Prodcuts</h1>
                @csrf
                <input type="text" name="name" id="" class="form-control mt-3">
                <input type="number" name="price" id="" class="form-control mt-3">
                <input type="file" name="image" id="" class="form-control mt-3">
                <select name="brand" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                   
                  </select>
               
                <textarea name="desc" id="" cols="30" rows="10" class="form-control mt-3"></textarea>
                <input type="submit" name="insert" class="btn btn-dark mx-auto d-block mt-3">
            </form>
        </div>
    </div>
</div>


@endsection