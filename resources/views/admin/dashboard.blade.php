@extends('admin.masterlayout')
@section('admin')
    <div class="w-75 mx-auto pt-5">
        <h4 class="mt-5">DASHBOARD</h4>
        <hr>
        <div class="row pt-3 mt-2">
            <div class="col-lg-4 mt-3 ">
                    <div class="card p-4 bg-light shadow-lg">
                        <div class="row">
                        <div class="col-lg-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4_rw4ImMdLXeLnJiujpzJtVTazTVf974JDRZUy2yrqCZ-PEFnMDxJ-LYHc2rVWoE7MHk&usqp=CAU" width="100%" alt="">
                        </div>
                        <div class="col-lg-8">
                        <h5 class="">Total Customer</h5>

                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-lg-4 mt-3 ">
                <div class="card p-4 bg-light shadow-lg">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="https://www.nicepng.com/png/detail/443-4431327_png-file-fa-fa-product-icon.png" width="100%" alt="">
                        </div>
                        <div class="col-lg-8">
                        <h5 class="">Product Count</h5>
                        <?php 
                            $con=mysqli_connect("localhost","root","","phpcrud");
                            $query="SELECT COUNT(id) FROM `product`";
                            $result=mysqli_query($con,$query);
                            $row=mysqli_fetch_array($result);
                        ?>
                        <h3 class="text-center"><?php echo $row['COUNT(id)']?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3 ">
                <div class="card p-4 bg-light shadow-lg">
                    <div class="row">
                            <div class="col-lg-4">
                                <img src="https://cdn-icons-png.flaticon.com/512/1253/1253360.png" width="100%" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h5 class="">Brand Count</h5>
                            <?php 
                                $con=mysqli_connect("localhost","root","","phpcrud");
                                $query="SELECT COUNT(id) FROM `brand`";
                                $result=mysqli_query($con,$query);
                                $row=mysqli_fetch_array($result);
                            ?>
                        <h3 class="text-center"><?php echo $row['COUNT(id)']?></h3>
                    

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-3 mx-auto">
                <div class="card p-4 bg-light shadow-lg">
                    <div class="row">
                            <div class="col-lg-4">
                                <img src="https://cdn-icons-png.flaticon.com/512/3081/3081986.png" width="100%" alt="">
                            </div>
                            <div class="col-lg-8">
                            <h5 class="">Total Order</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div> 
@endsection