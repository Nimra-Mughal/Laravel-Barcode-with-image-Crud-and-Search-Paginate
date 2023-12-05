@extends('admin.masterlayout')
@section('admin')
<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form action="{{url('insertupdateddata',$product->id)}}" enctype="multipart/form-data" method="post" class=" mx-auto mt-3 bg-light shadow-lg p-3">
                <h1 class="text-center">Update Prodcuts</h1>
                @csrf
                <input type="text" value="{{$product->name}}" name="name" id="" class="form-control mt-3">
                <input type="number" value="{{$product->price}}" name="price" id="" class="form-control mt-3">
                <input type="file" name="image" id="" class="form-control mt-3">
                <img src="./images/{{$product->image}}" height="50px" alt="">
                <select name="brand" class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($brand as $item)
                    <option value="{{$item->id}}"   {{$product->brand->name===$item->name ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
                  </select>
               <input type="text" class="form-control" name="desc" value="{{$product->description}}" id="">
                {{-- <textarea name="desc" id="" value="{{$product->description}}" cols="30" rows="10" class="form-control mt-3"></textarea> --}}
                <input type="submit" name="insert" class="btn btn-dark mx-auto d-block mt-3">
            </form>
        </div>
    </div>
</div>


@endsection