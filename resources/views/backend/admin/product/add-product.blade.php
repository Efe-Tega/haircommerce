@extends('backend.admin.admin-main')
@section('admin-content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ __('Add Product') }}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">haircommerce</a>
                        </li>
                        <li class="breadcrumb-item active">add product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-uppercase">Basic Information</h4>

                    <form class="needs-validation">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Enter product name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Category</label>
                                    <select class="form-select" id="validationCustom03" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="">Select Category</option>
                                        <option value="1">Bundles</option>
                                        <option value="2">Wigs</option>
                                        <option value="3">Closures</option>
                                        <option value="4">Frontals</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="validationCustom03" class="form-label">Description</label>
                                    <textarea class="form-control" name="" id="" rows="5" placeholder="Enter description"></textarea>
                                </div>
                            </div>

                        </div>

                        <h4 class="card-title mt-3 mb-2 text-uppercase">Hair Specification</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Hair Type</label>
                                    <select class="form-select" id="validationCustom03" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="Straight">Straight</option>
                                        <option value="Body Wave">Body Wave</option>
                                        <option value="Deep Wave">Deep Wave</option>
                                        <option value="Curly">Curly</option>
                                        <option value="Loose Wave">Loose Wave</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Lace Type (if applicable)</label>
                                    <select name="lace_type" class="form-select">
                                        <option value="">None</option>
                                        <option value="HD Lace">HD Lace</option>
                                        <option value="Transparent Lace">Transparent Lace</option>
                                        <option value="Swiss Lace">Swiss Lace</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Available length</label>

                                    <div class="row g-3">
                                        @foreach ([10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30] as $len)
                                            <div class="col-6 col-md-4 col-lg-3">
                                                <div class="border rounded p-3 h-100">

                                                    <label class="d-flex align-items-center gap-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="lengths[{{ $len }}][enabled]">
                                                        <strong>{{ $len }} inches</strong>
                                                    </label>

                                                    <input type="number" class="form-control mt-2"
                                                        name="lengths[{{ $len }}][price]"
                                                        placeholder="Price for {{ $len }} inches">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h4 class="card-title mt-3 mb-2 text-uppercase">Pricing & Variants</h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Add price for each length</label>
                                    <input type="text" class="form-control" id="" placeholder="First name"
                                        value="Mark" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validationCustom02" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Last name" value="Otto" required>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-primary" type="submit">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
