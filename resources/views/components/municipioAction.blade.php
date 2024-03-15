<div class="d-flex justify-content-around">
    <button id="editMunicipio" onclick="editMunicipio({{ $id }})" class="btn btn-sm btn-icon-white btn-primary">
        <i class="ki-outline ki-pencil"></i>Alterar</button>
    <button id="deleteMunicipio" onclick="openModaleleteMunicipio({{ $id }})"
        class="btn btn-sm btn-icon-white btn-danger">
        <i class="ki-duotone fs-2 ki-trash-square">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
        </i>Deletar</button>
</div>
