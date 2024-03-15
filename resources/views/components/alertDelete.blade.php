<!--begin::Alert-->
<div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-0">
    <!--begin::Close-->
    <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" id="close-modal-delete">
        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
    </button>
    <!--end::Close-->

    <!--begin::Icon-->
    <i class="ki-duotone ki-information-5 fs-5tx text-danger mb-5"><span class="path1"></span><span
            class="path2"></span><span class="path3"></span></i>
    <!--end::Icon-->

    <!--begin::Wrapper-->
    <div class="text-center">
        <!--begin::Title-->
        <h1 class="fw-bold mb-5">Alerta </h1>
        <!--end::Title-->

        <!--begin::Separator-->
        <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>
        <!--end::Separator-->

        <!--begin::Content-->
        <div class="mb-9 text-gray-900">
            Deseja realmente deletar este municipio.<br />
            Esta ação é irreversível.
        </div>
        <!--end::Content-->

        <!--begin::Buttons-->
        <div class="d-flex flex-center flex-wrap">
            <button id="modal-delete-cancel"
                class="btn btn-outline btn-outline-danger btn-active-danger m-2">Cancelar</button>
            <button id="modal-delete-confirm" class="btn btn-danger m-2">Sim, tenho certeza</button>
        </div>
        <!--end::Buttons-->
    </div>
    <!--end::Wrapper-->
</div>
