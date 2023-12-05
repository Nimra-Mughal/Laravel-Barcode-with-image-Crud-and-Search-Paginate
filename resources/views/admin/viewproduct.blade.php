@extends('admin.masterlayout')
@section('admin')
<div class="container ">
    <div class="row">
        <div class="col-lg-11 mx-auto shadow-lg p-5">
            <a href="{{url('clear')}}" class="btn btn-primary btn-sm">Clear</a>

          <form action="{{url('search')}}" method="post" class="d-flex ms-auto w-25">
            @csrf
            <input type="text" name="search" class="form-control "  id="">
            <button class="btn btn-dark"><i class="fa fa-search"></i></button>
          </form>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>BARCODE</th>
                        <th>IMAGE</th>
                        <th>BRAND</th>
                        <th>DESC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{!! DNS1D::getBarcodeHTML($item->barcode, 'PHARMA',2,100) !!}
                        P- {{$item->barcode}}
                        </td>
                        <td><img src="images/{{$item->image}}" height="50px" alt=""></td>
                        <td>{{$item->brand->name}}</td>
                        <td>{{$item->description}}</td> 
                        <td><a href="deleteproduct/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="updateproduct/{{$item->id}}" class="btn btn-success btn-sm">Update</a></td>    
    
                    </tr>
                    @endforeach
                   
                </tbody>
                
            </table>
            {{$data->links('pagination::bootstrap-5')}}

        </div>
    </div>
</div>
    
@endsection