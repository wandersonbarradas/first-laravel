<!--begin::Modal body-->
<div class="modal-body scroll-y px-10 px-lg-15 py-15">
    <!--begin:Form-->
    <form id="new_municipio_form" class="form" action="#">
        <!--begin::Heading-->
        <div class="mb-13 text-center">
            <!--begin::Title-->
            <h1 id="title-modal-new-municipio" class="mb-3">Novo Municipio</h1>
            <!--end::Title-->
        </div>
        <span class="d-block mb-4 fw-semibold fs-6 text-primary">
            Informações gerais
        </span>
        <input type="hidden" id="form_id" name="id">
        <div class="row g-9 mb-8">
            <!--begin::Input group-->
            <div class="col-md-6 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_cnpj" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">CNPJ</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o numero do CNPJ do Municipio">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o CNPJ" name="cnpj"
                    id="form_cnpj" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-6 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_razao_social" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Razão Social</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite a razão social do Muncipio">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite a Razão Social"
                    name="razao_social" id="form_razao_social" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-6 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_nome_fantasia" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span>Nome Fantasia</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o nome fantasia do Muncipio">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o Nome Fantasia"
                    name="nome_fantasia" id="form_nome_fantasia" />
            </div>
            <!--end::Input group-->
        </div>
        <span class="d-block mb-4 fw-semibold fs-6 text-primary">
            Informações de endereço
        </span>
        <div class="row g-9 mb-8">
            <!--begin::Input group-->
            <div class="col-md-4 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_logradouro" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Logradouro</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o logradouro">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o Logradouro"
                    name="logradouro" id="form_logradouro" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-4 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_numero" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Numero</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o Numero">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o numero"
                    name="numero" id="form_numero" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-4 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_complemento" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span>Complemento</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o complemento">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o Complemento"
                    name="complemento" id="form_complemento" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-4 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_bairro" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Bairro</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o bairro">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o Bairro"
                    name="bairro" id="form_bairro" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-4 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_cidade" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Cidade</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite a Cidade">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o Cidade"
                    name="cidade" id="form_cidade" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="col-md-4 d-flex flex-column fv-row">
                <!--begin::Label-->
                <label for="form_estado" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Estado</span>
                    <span class="ms-1" data-bs-toggle="tooltip" title="Digite o Estado">
                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <input type="text" class="form-control form-control-solid" placeholder="Digite o Estado"
                    name="estado" id="form_estado" />
            </div>
            <!--end::Input group-->
        </div>
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-8">
            <label for="form_obs" class="fs-6 fw-semibold mb-2">Observações</label>
            <textarea id="form_obs" class="form-control form-control-solid" rows="3" name="obs"
                placeholder="Oberservações sobre o cadastro"></textarea>
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-stack mb-8">
            <!--begin::Label-->
            <div class="me-5">
                <label class="fs-6 fw-semibold">Cadastro esta ativo?</label>
                <div class="fs-7 fw-semibold text-muted">Caso Municipio esteja desativado ele não poderá
                    acessar o sistema
                </div>
            </div>
            <!--end::Label-->
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
                <input name="active" id="form_active" class="form-check-input" type="checkbox"
                    checked="checked" />
            </label>
            <!--end::Switch-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancelar</button>
            <button type="submit" id="modal_new_municipio_submit" class="btn btn-primary">
                <span class="indicator-label">Adicionar</span>
                <span class="indicator-progress">Por Favor, aguarde...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end:Form-->
</div>
<!--end::Modal body-->
