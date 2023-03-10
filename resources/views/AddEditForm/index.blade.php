<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>form</title>
</head>

<body>
    <header>
        <div>
            <nav class="container navbar lead rounded-3" style="background-color: #768E4F;">
                <a href="" class=" d-flex w-25 text-decoration-none" style="color: #9EFE00;">
                    <div class=" d-flex flex-column ">
                        <img src="{{ asset('img/rhymin and partners1.png') }}" class="img-fluid" alt="">
                        <span class="align-self-center ">Home</span>
                    </div>

                </a>
                <div class="ms-auto bg-white border rounded-circle" style="width: 3.18rem;height: 3.18rem;">

                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container d-flex">
            <div class="m-3 border border-dark border-2 w-50">
                <div class="text-center" style="background: #D9D9D9;">
                    Add stock
                </div>

                <div class="p-2">
                    <form class="row g-3" action="">
                        <div class="col-md-12">
                            <label for="inputName" class="form-label">item Name*:</label>
                            <select name="name" id="inputName" class="form-select">
                                <option selected>please choose</option>
                                <option>mini pc v2</option>
                                <option>mini pc v1</option>
                                <option>GTD novel</option>
                                <option value="optionAdd">Add more items</option>
                            </select>
                            <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add more item form</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body position-relative">
                                            <form action="">
                                                <div>
                                                    <label for="addName" class="form-label">item name</label>
                                                    <input type="text" class="form-control" id="addName" name="item">
                                                </div>
                                                <div>
                                                    <label for="categories" class="form-label">category Name*:</label>
                                                    <select name="categories" id="categories" class="form-select">
                                                        <option selected>please choose</option>
                                                        <option>Mini PC</option>
                                                        <option>GTD Book</option>
                                                        <option>GTD novel</option>
                                                        <option value="optionAdd">Add more categories</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="m-2 btn btn-dark w-75">ADD</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="selfInputCategory" class="form-label">item categories*:</label>
                            <input type="text" class="form-control" id="selfInputCategory" name="category" value="MINI PC" readonly>
                        </div>

                        <div class="col-md-12">
                            <label for="inputDepartment" class="form-label">Department*:</label>
                            <select name="department" id="inputDepartment" class="form-select">
                                <option class="text-mute" selected>please choose</option>
                                @if ($departments->count())
                                @foreach ($departments as $department)
                                <option value="">{{ $department->name }}</option>
                                @endforeach
                                @endif
                                <option value="optionAdd"><a href="{{ route('departmentModal') }}" data-toggle="modal" data-target="#departmentModal">Add more departments</a></option>
                            </select>
                            @yield('departmentModal')
                        </div>



                        <div class="col-md-12">
                            <label for="inputRefNo" class="form-label">item Ref No*:</label>
                            <input type="text" class="form-control" id="inputRefNo" name="ref_no" value="">
                        </div>

                        <div class="col-md-12">
                            <label for="inputPurchaseDate" class="form-label">Purchase Date*:</label>
                            <input type="date" class="form-control" id="inputPurchaseDate" name="purchase_date" value="">
                        </div>

                        <div class="col-md-12">
                            <label for="inputArrivalDate" class="form-label">Arrival Date:</label>
                            <input type="date" class="form-control" id="inputArrivalDate" name="arrival_date" value="">
                        </div>

                        <div class="col-md-12">
                            <label for="inputQuantity" class="form-label">Quantity:</label>
                            <input type="number" min="1" class="form-control" id="inputQuantity" name="quantity" value="">
                        </div>

                        <div class="col-md-12">
                            <label for="inputVendor" class="form-label">Vendor name*:</label>
                            <select name="vendor" id="inputVendor" class="form-select">
                                <option class="text-mute" selected>please choose</option>
                                <option>Huaho</option>
                                <option value="optionAdd">Add more vendors</option>
                            </select>
                            <div class="modal fade" id="vendorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add more vendor form</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                @csrf
                                                <div>
                                                    <label for="addVendor" class="form-label">vendor name</label>
                                                    <input type="text" class="form-control @error('vendor') is-invalid @enderror" id="addVendor" name="vendor">
                                                </div>
                                                @error('vendor')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <button type="submit" class="m-2 btn btn-dark w-75">ADD</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="inputPrice" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="inputPrice" name="price" value="">
                        </div>

                        <div class="d-flex col-md-12">
                            <div class="col-md-6 p-3">
                                <div class="text-center" style="background: #D9D9D9;">
                                    img
                                </div>
                                <label class="form-label border border-dark border-2 w-100 rounded" for="customFile">Upload Image</label>
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                            <div class="col-md-6 p-3 ">
                                <div class="text-center " style="background: #D9D9D9;">
                                    Descriptions
                                </div>
                                <textarea class="form-control border border-2 border-dark" placeholder="descriptions" id="descriptions" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <a href="" type="submit" class="btn btn-dark w-100">ADD</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        </div>
        <div>@yield('content')</div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var select = document.getElementById("inputName");

        var select_3 = document.getElementById("inputVendor");


        var modal = $('#itemModal');

        var modal_3 = $('#vendorModal');



        select.addEventListener("change", function() {
            if (select.value === "optionAdd") {
                modal.modal('show');
            } else {
                modal.modal('hide');
            }
        });


        select_3.addEventListener("change", function() {
            if (select_3.value === "optionAdd") {
                modal_3.modal('show');
            } else {
                modal_3.modal('hide');
            }
        });
    </script>
</body>

</html>