{{-- {{ $pdt }} --}}
{{-- @foreach ($pdt as $p)
   <p> {{ $p }}</p>
@endforeach --}}
@extends('dashboardlayout.layout')

@section('content')
    @include('sidebar.Sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Tables</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-7">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">PRODUCT DETAILS</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            PRODUCT</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            QUANTITY</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            PRICE</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            RATE</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            DESCRIPTION</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            PRODUCT OWNER</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            ACTIONS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $u)
                                        <tr>
                                            <td class="text-xs  font-weight-bold">
                                                {{ $u->product }}
                                            </td>
                                            <td class="text-xs  font-weight-bold">
                                                {{ $u->quantity_left }}
                                            </td>
                                            <td class="text-xs  font-weight-bold">
                                                {{ $u->price }}
                                            </td>
                                            <td class="text-xs  font-weight-bold">
                                                {{ $u->rate }}
                                            </td>
                                            <td class="text-xs  font-weight-bold">
                                                {{ $u->description }}
                                            </td>
                                            <td class="text-xs  font-weight-bold">
                                                {{ $u->productowner }}
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Add to cart"
                                                    data-id="{{ $u->id }}" data-product="{{ $u->product }}"
                                                    id="{{ $u->id }}">
                                                    <i class="fa fa-shopping-cart" data-id="{{ $u->id }}"
                                                        data-product="{{ $u->product }}"
                                                        data-price="{{ $u->price }}"
                                                        data-quantity="{{ $u->quantity }}"
                                                        data-owner="{{ $u->productowner }}"
                                                        ></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>



                            <div class="row">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Cart Items</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="cartItems">
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"  id="onCheckout">Checkout</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>








                            <div class="card-footer px-3 pt-0 pb-2" id='cart'>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('dashboard.footer')
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        //create a document ready function
        $(document).ready(function() {
            //check if the cart is empty
            if (sessionStorage.getItem('cart') == null) {
                //if the cart is empty, create an empty array
                var cart = [];
                var total = 0;
                //save the cart array to local storage
                sessionStorage.setItem('cart', JSON.stringify(cart));
                let details =
                    '<div class="row"><div class="col-md-6"><h6 class="mb-0">Total items in cart: 0</h6></div><div class="col-md-6 text-end"></div>';
                $('#cart').append('<div class="row"><div class="col-md-6"><h6 class="mb-0">Total price: ' + total +
                    '</h6></div><div class="col-md-6 text-end"></div>');

                //append the total items to the div with id cart
                $('#cart').append(details);
            } else {
                //if the cart is not empty, get the cart from local storage
                var cart = JSON.parse(sessionStorage.getItem('cart'));
                //append the total items to the div with id cart
                //create total price for the cart products
                var total = 0;
                //loop through the cart array
                for (var i = 0; i < cart.length; i++) {
                    //get the total price of the cart products
                    total += parseInt(cart[i].price) * parseInt(cart[i].quantity);
                }
                //show view button only if the cart is not empty
                if (cart.length > 0) {
                  //append total items and total price to the div with id cart
                  
                    $('#cart').append('<div class="row"><div class="col-md-6"><h6 class="mb-0">Total Items: ' +
                        cart.length +
                        '</h6></div><div class="col-md-6 text-end"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View</button></div>'
                        );

                $('#cart').append('<div class="row"><div class="col-md-6"><h6 class="mb-0">Total price: ' + total +
                    '</h6></div><div class="col-md-6 text-end"></div>');
                } else {
                    $('#cart').append('<div class="row"><div class="col-md-6"><h6 class="mb-0">Total price: ' +
                        total +
                        '</h6></div><div class="col-md-6 text-end"></div>');
                }


            }

        });





        $(document).ready(function() {

            //get the cart from local storage
            var cart = JSON.parse(sessionStorage.getItem('cart'));
            //create a table to show cart items
            var table =
                '<table class="table table-bordered"><thead><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th><th>Actions</th></tr></thead><tbody>';
            //create total price for the cart products
            var total = 0;
            //loop through the cart array
            for (var i = 0; i < cart.length; i++) {
                //get the total price of the cart products
                total += parseInt(cart[i].price) * parseInt(cart[i].quantity);
                //create a table row for each cart item
                table += '<tr><td>' + cart[i].product + '</td><td>' + cart[i].price + '</td><td>' + cart[i]
                    .quantity + '</td><td>' + parseInt(cart[i].price) * parseInt(cart[i].quantity) + '</td></tr>';
                //add  a button to remove the item from the cart using an icon
                table += '<td><a href="#" class="remove" data-id="' + cart[i].id +
                    '"><i class="fa fa-trash" data-id="' + cart[i].id + '"></i></a></td></tr>';

            }
            //close the table
            table += '</tbody></table>';
            //show total price
            table += '<div class="row"><div class="col-md-6"><h6 class="mb-0">Total price: ' + total +
                '</h6></div><div class="col-md-6 text-end"></div></div>';
            //show the table in the modal
            $('#cartItems').html(table);
            //show the modal
            //$('#cartModal').modal('show');
        });

        $(document).ready(function() {
            $('.fa-shopping-cart').click(function(e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                var product = $(this).attr('data-product');
                var price = $(this).attr('data-price');
                var quantity = $(this).attr('data-quantity');
                //get owner
                var owner = $(this).attr('data-owner');

                //ask the quantity from the user and it should equal or les than quantity
                var qty = prompt('Enter quantity');

                //check if qty is not empty
                if (qty == '') {
                    alert('Please enter quantity');
                }
                //change the quantity to integer and qty to integer
                var qty = parseInt(qty);
                var quantity = parseInt(quantity);



                if (qty > quantity) {
                    alert('Quantity should be less than or equal to ' + quantity);
                    return false;
                } else {

                    //get the cart from local storage
                    var cart = JSON.parse(sessionStorage.getItem('cart'));
                    //check if the product is already in the cart
                    var index = -1;
                    for (var i = 0; i < cart.length; i++) {
                        if (cart[i].id == id) {
                            index = i;
                            break;
                        }
                    }
                    if (index == -1) {
                        //if the product is not in the cart, add the product to the cart
                        var item = {
                            id: id,
                            product: product,
                            price: price,
                            quantity: qty,
                            owner: owner
                        }
                        cart.push(item);
                        //save the cart to local storage
                        sessionStorage.setItem('cart', JSON.stringify(cart));
                        //update the total items in cart
                        
                        //show success message to the user
                        alert('Product added to cart');
                    } else {
                        //if the product is already in the cart, update the quantity
                        cart[index].quantity = parseInt(qty);
                        //save the cart to local storage
                        sessionStorage.setItem('cart', JSON.stringify(cart));
                        //update the total items in cart
                        
                        alert('Product added to cart');
                    }
                }
                location.reload();

            });
            //remove item from cart
            $('.fa-trash').click(function(e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                //let the user confirm if he/she wants to remove the item from the cart
                var confirm = window.confirm('Are you sure you want to remove this item from the cart?');

                if (confirm) {

                    //get the cart from the session
                    var cart = JSON.parse(sessionStorage.getItem('cart'));
                    //loop through the cart array
                    for (var i = 0; i < cart.length; i++) {
                        //check if the id of the product to be removed is equal to the id of the product in the cart
                        if (cart[i].id == id) {
                            //remove the product from the cart
                            cart.splice(i, 1);
                            //save the cart to local storage
                            sessionStorage.setItem('cart', JSON.stringify(cart));
                            //update the total items in cart

                            //show success message to the user
                            alert('Product removed from cart');
                            break;
                        }
                    }

                    location.reload();

                }

            });
        });

        //submit the order on checkout
        $('#onCheckout').click(function(e) {
            e.preventDefault();
            //get the cart from local storage
            var cart = JSON.parse(sessionStorage.getItem('cart'));
            //check if the cart is empty
            if (cart.length == 0) {
                alert('Cart is empty');
                return false;
            }
            //get the address from the user
            var address = prompt('Enter your address');
            //check if the address is not empty
            if (address == '') {
                alert('Please enter your address');
                return false;
            }

            

            var total = 0;
            for (var i = 0; i < cart.length; i++) {
                total += parseInt(cart[i].price) * parseInt(cart[i].quantity);
            }
            //create an order object
            var order = {
                total: total,
                cart: cart,
                address: address
            }
            //submit the order to the database
            //add crsf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route("orders.store") }}',
                method: 'POST',
                beforeSend: function() {
                    $('#onCheckout').html('Processing...');
                },
                data: order,
                success: function(response) {
                    //check if the order was submitted successfully
                    
                    if (response == 'success') {
                        //empty the cart
                        sessionStorage.setItem('cart', JSON.stringify([]));
                        //show success message to the user
                        alert('Order submitted successfully');
                        //redirect to the orders page
                        window.location.href = "{{route('recents')}}";
                    } else {
                        alert('Order not submitted');
                    }
                },
                failure: function(response) {
                    alert('Order not submitted');
                }
            });
        });
    </script>
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
