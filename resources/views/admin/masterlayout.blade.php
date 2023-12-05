<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          
        <div class="col-lg-2 py-5" style="height:100vh;background-color:black;">
                <a href="{{route('welcome')}}">
                <img src="https://i.ytimg.com/vi/AUml2IgSFCQ/maxresdefault.jpg" class="w-75" alt="">
                </a>    
                <ul class="nav nav-tab flex-column mt-5">
                <li class="nav-item"><a href="./dashboard.php"  class="nav-link text-light mt-3">Dashboard</a></li>
                    <li class="nav-item active"><a href="{{url('addproduct')}}"  class="nav-link text-light mt-3">ADD PRODUCT</a></li>
                    <li class="nav-item"><a href="{{url('viewproduct')}}"  class="nav-link text-light mt-3">VIEW PRODUCT</a></li>

                    <li class="nav-item"><a href="{{url('addbrand')}}" class="nav-link text-light mt-3">ADD BRAND</a></li>

                    <li class="nav-item"><a href="{{url('viewbrand')}}" class="nav-link text-light mt-3">VIEW BRAND</a></li>
                </ul>
            </div>
            <div class="col-lg-10 px-">
            <nav class="navbar bg-light shadow-lg">
                <form action="" action="get" class="d-flex">
                    @csrf
                    <input type="text" name="search" id="" class="form-control ">
                    <button class="btn btn-dark btn-sm"><i class="fa fa-search"></i></button>
                </form>
                    <div class="col-lg-1 ms-auto">
                      
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                              <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="text-decoration: none; color:black;" class="ms-3">LogOUT</a>
                                </form>
                              </li>
                              </ul>
                          </div>
                       
                    </div>
            </nav>
            @yield('admin')
   
            </div>
        </div>
    </div>
    
</body>
</html>