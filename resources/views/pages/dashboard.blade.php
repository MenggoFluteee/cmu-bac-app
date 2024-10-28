@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Dashboard</h3>
            </div>


        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">Projects</p>

                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-lucide="layout"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 24.300</h3>
                                <p class="mb-2">List of Materials</p>

                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-success" data-lucide="briefcase"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">43</h3>
                                <p class="mb-2">List of Labors</p>

                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-danger" data-lucide="users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                <div class="card flex-fill">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h3 class="mb-2">$ 18.700</h3>
                                <p class="mb-2">List of Equipments</p>

                            </div>
                            <div class="d-inline-block ms-3">
                                <div class="stat">
                                    <i class="align-middle text-info" data-lucide="truck"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
