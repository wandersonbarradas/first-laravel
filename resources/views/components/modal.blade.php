<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-800px">
        <div class="position-relative modal-content rounded">
            <!--begin::Modal header-->
            <div class="position-absolute top-0 start-0 end-0 modal-header pb-0 border-0 justify-content-end z-index-3">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-danger" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            {{ $slot }}
        </div>
    </div>
</div>
