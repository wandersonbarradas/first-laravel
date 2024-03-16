@extends('layouts.app')
@section('title', 'Municipios')
@section('toolbar')
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
            Municipios cadastrados
        </h1>
        <!--end::Title-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <!--begin::Primary button-->
        <button id="btn-open-modal-new-municipio" class="btn btn-md fw-bold btn-success">Adicionar
            Municipio</button>
        <!--end::Primary button-->
    </div>
    <!--end::Actions-->
@endsection
@section('content')
    <div class="card card-p-0 card-flush">
        <div class="card-header align-items-center justify-content-end py-5 gap-2 gap-md-5">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1 p-2">
                    <span class="svg-icon position-absolute ms-4"><i class="ki-duotone fs-3 ki-magnifier">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i></span>
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14"
                        placeholder="Search Report" id="searchDatatable" />
                </div>
                <!--end::Search-->
            </div>
        </div>
        <div class="table-responsive px-2">
            <table class="table align-middle border rounded table-striped table-row-bordered fs-6 gy-5 gs-7 px-3"
                id="listMunicipios">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th class="min-w-90px">Id</th>
                        <th class="min-w-115px">CNPJ</th>
                        <th class="min-w-200px">Razão Social</th>
                        <th class="min-w-200px">Nome Fantasia</th>
                        <th class="min-w-200px">Ações</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
            </table>
        </div>
    </div>
    <x-modal id="modal_new_municipio">
        <x-formMunicipios />
    </x-modal>

@endsection
