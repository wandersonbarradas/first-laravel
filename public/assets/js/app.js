//Abrir Modal de edição
function editMunicipio(id) {
    $("#new_municipio_form").trigger("reset");
    $.ajax({
        type: "GET",
        url: `${window.routes.municipios}/${id}`,
        success: function (res) {
            if (res.status) {
                $("#form_id").val(res.data.id);
                $("#form_cnpj").val(res.data.cnpj);
                $("#form_razao_social").val(res.data.razao_social);
                $("#form_nome_fantasia").val(res.data.nome_fantasia);
                $("#form_logradouro").val(res.data.logradouro);
                $("#form_numero").val(res.data.numero);
                $("#form_bairro").val(res.data.bairro);
                $("#form_complemento").val(res.data.complemento);
                $("#form_cidade").val(res.data.cidade);
                $("#form_estado").val(res.data.estado);
                $("#form_obs").val(res.data.obs);
                $("#form_active").prop(
                    "checked",
                    res.data.active === 1 ? true : false
                );
                openModalMunicipio("edit");
            } else {
                showAlert({
                    type: "danger",
                    title: "Município não encontrado!",
                    message: res.data,
                });
            }
        },
        error: function (error) {
            showAlert({
                type: "danger",
                title: "Ops, ocorreu um erro!",
                message: error.responseJSON.message,
            });
            console.log(error);
        },
    });
}

//Alert
function closeAlert() {
    $("#alert-app").removeClass("active");
    setTimeout(() => {
        $("#alert-app").removeClass("d-flex");
        $("#alert-app").addClass("d-none");
    }, 300);
}
function showAlert(data) {
    $("#alert-app").removeClass("active");
    $("#alert-app").addClass("bg-" + data.type);
    $("#alert-app #alert-title").text(data.title);
    $("#alert-app #alert-description").text(data.message);
    $("#alert-app").addClass("d-flex");
    $("#alert-app").removeClass("d-none");
    $("#alert-app").addClass("active");

    setTimeout(() => {
        closeAlert();
    }, 5000);
}

//Modal deletar
function openModaleleteMunicipio(id) {
    $("#modal-delete").modal("show");
    $("#modal-delete-confirm").attr("data-id", id);
}
function closeModaleleteMunicipio() {
    $("#modal-delete").modal("hide");
    $("#modal-delete-confirm").attr("data-id", "");
}

//Modal Form Municipios
function openModalMunicipio(type) {
    if (type === "add") {
        $("#new_municipio_form").trigger("reset");
    }
    $("#modal_new_municipio_submit .indicator-label").show();
    $("#modal_new_municipio_submit .indicator-progress").hide();
    $("#new_municipio_form")
        .find("input, button, textarea")
        .prop("disabled", false);
    $("#title-modal-new-municipio").text(
        type === "edit" ? "Edição de Municipio" : "Novo Municipio"
    );
    $("#new_municipio_form").attr("data-event", type);
    $("#modal_new_municipio_submit").text(
        type === "edit" ? "Salvar" : "Adicionar"
    );
    $("#modal_new_municipio").modal("show");
}

$(document).ready(function () {
    //setar headers
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    let status = {
        1: { title: "Ativo", state: "success" },
        0: { title: "Inativo", state: "danger" },
    };

    //DATATABLE
    //iniciar datatable
    let table = $("#listMunicipios").DataTable({
        processing: true,
        searchDelay: 500,
        serverSide: true,
        ajax: window.routes.municipios,
        columns: [
            {
                data: "id",
                name: "id",
            },
            {
                data: "cnpj",
                name: "cnpj",
            },

            {
                data: "razao_social",
                name: "razao_social",
            },
            {
                data: "nome_fantasia",
                name: "nome_fantasia",
            },
            {
                data: "ações",
                name: "ações",
                orderable: false,
            },
        ],
        columnDefs: [
            {
                render: function (data, type, row) {
                    var index = row.active;
                    return (
                        data +
                        '<span class="ms-2 badge badge-light-' +
                        status[index]["state"] +
                        ' fw-semibold">' +
                        status[index]["title"] +
                        "</span>"
                    );
                },
                targets: 0,
            },
        ],
        order: [[0, "desc"]],
    });
    //Pesquisa datatable
    $("#searchDatatable").keyup(function (e) {
        table.search(e.target.value).draw();
    });

    //MODAL MUNICIPIOS
    //Abrir modal novo municipio
    $("#btn-open-modal-new-municipio").click(function () {
        openModalMunicipio("add");
    });
    //Navegação Modal municipios
    // $(".nav-link").click(function (e) {
    //     e.preventDefault();
    //     var target = $(this).data("target");
    //     $(".nav-link").removeClass("active");
    //     $(".session").addClass("d-none");
    //     $(this).addClass("active");
    //     $("#" + target).removeClass("d-none");
    // });

    //Adicionar novo municipio
    $("#new_municipio_form").submit(function (e) {
        e.preventDefault();
        $("#modal_new_municipio_submit .indicator-label").hide();
        $("#modal_new_municipio_submit .indicator-progress").show();
        let formData = new FormData(this);
        $(this).find("input, button, textarea").prop("disabled", true);
        let event = $(this).data("event");
        let url = window.routes.municipios;
        if (event === "edit") {
            url += "/" + formData.get("id");
        }
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                let table = $("#listMunicipios").DataTable();
                table.row.add(data).draw(false);
                $("#modal_new_municipio").modal("hide");
                showAlert({
                    type: "success",
                    title: "Sucesso",
                    message: `Municipio ${
                        event === "add" ? "adicionado" : "alterado"
                    } com sucesso!`,
                });
            },
            error: function (error) {
                showAlert({
                    type: "danger",
                    title: "Ops, ocorreu um erro!",
                    message: error.responseJSON.message,
                });
                $("#new_municipio_form")
                    .find("input, button, textarea")
                    .prop("disabled", false);
                console.log(error);
            },
        });
    });

    //MODAL DELETE
    //fechar modal delete
    $("#close-modal-delete").click(closeModaleleteMunicipio);
    $("#modal-delete-cancel").click(closeModaleleteMunicipio);
    // Deletar municipio
    $("#modal-delete-confirm").click(function (e) {
        let id = $(this).data("id");
        $.ajax({
            type: "DELETE",
            url: `${window.routes.municipios}/${id}`,
            success: function (res) {
                let table = $("#listMunicipios").DataTable();
                table.rows().every(function () {
                    let data = this.data();
                    if (data && data.id == res.id) {
                        this.remove().draw(false);
                    }
                });
                showAlert({
                    type: "success",
                    title: "Sucesso",
                    message: `Municipio deletado com sucesso!`,
                });
                closeModaleleteMunicipio();
            },
            error: function (error) {
                showAlert({
                    type: "danger",
                    title: "Ops, ocorreu um erro!",
                    message: error.responseJSON.message,
                });
                closeModaleleteMunicipio();
                console.log(error);
            },
        });
    });

    //Alert
    $("#close-alert").click(closeAlert);
});
