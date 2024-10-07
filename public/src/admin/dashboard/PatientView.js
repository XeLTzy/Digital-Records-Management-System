// PatientView.js
class PatientView {
    constructor() {
        this.table = $('#table');
        this.contextMenu = $('#context-menu-PatientRecords');
        this.editForm = $('#editFormPatientInformation');
        this.modal = $('#UpdatePatientPersonalRecords');
    }

    bindContextMenuEvent(handler) {
        this.table.on('contextmenu', handler);
    }

    bindHideContextMenu(handler) {
        $(document).on('click', handler);
    }

    bindEditClick(handler) {
        this.contextMenu.find('a[data-item="editPatientRecords"]').on('click', handler);
    }

    bindSaveChanges(handler) {
        $('#saveChangesPatientInformation').on('click', handler);
    }

    showContextMenu(x, y) {
        this.contextMenu.css({
            display: 'block',
            top: y + 'px',
            left: x + 'px'
        });
    }

    hideContextMenu() {
        this.contextMenu.hide();
    }

    showModal() {
        this.modal.modal('show');
    }

    hideModal() {
        this.modal.modal('hide');
    }

    populateForm(patient) {
        $('#UpdatePatientPersonalfirstName').val(patient.first_name);
        $('#UpdatePatientPersonalmiddleName').val(patient.middle_name);
        $('#UpdatePatientPersonallastName').val(patient.last_name);
        $('#UpdatePatientPersonalsuffix').val(patient.suffix);
        $('#UpdatePatientPersonalbirthday').val(patient.birthday);
        $('#UpdatePatientPersonalage').val(patient.age);
        $('#UpdatePatientPersonalregion').val(patient.region);
        $('#UpdatePatientPersonalprovince').val(patient.province);
        $('#UpdatePatientPersonalmunicipality').val(patient.municipality);
        $('#UpdatePatientPersonalbarangay').val(patient.barangay);
        $('#UpdatePatientPersonalstreetName').val(patient.street_name);
        $('#UpdatePatientPersonalhouseNumber').val(patient.house_number);
        $('#UpdatePatientPersonalcontactNumber').val(patient.contact_number);
        $('#UpdatePatientPersonalEmail').val(patient.email);
        $('#UpdatePatientPersonaldiscountId').val(patient.pwd_senior_control_number);
    }

    getFormData() {
        return {
            first_name: $('#UpdatePatientPersonalfirstName').val(),
            middle_name: $('#UpdatePatientPersonalmiddleName').val(),
            last_name: $('#UpdatePatientPersonallastName').val(),
            suffix: $('#UpdatePatientPersonalsuffix').val(),
            birthday: $('#UpdatePatientPersonalbirthday').val(),
            age: $('#UpdatePatientPersonalage').val(),
            region: $('#UpdatePatientPersonalregion').val(),
            province: $('#UpdatePatientPersonalprovince').val(),
            municipality: $('#UpdatePatientPersonalmunicipality').val(),
            barangay: $('#UpdatePatientPersonalbarangay').val(),
            street_name: $('#UpdatePatientPersonalstreetName').val(),
            house_number: $('#UpdatePatientPersonalhouseNumber').val(),
            contact_number: $('#UpdatePatientPersonalcontactNumber').val(),
            email: $('#UpdatePatientPersonalEmail').val(),
            pwd_senior_control_number: $('#UpdatePatientPersonaldiscountId').val(),
            full_address: `${$('#UpdatePatientPersonalhouseNumber').val()} ${$('#UpdatePatientPersonalstreetName').val()} ${$('#UpdatePatientPersonalbarangay').val()}, ${$('#UpdatePatientPersonalmunicipality').val()}, ${$('#UpdatePatientPersonalprovince').val()}, ${$('#UpdatePatientPersonalregion').val()}`,
            full_name: `${$('#UpdatePatientPersonalfirstName').val()} ${$('#UpdatePatientPersonalmiddleName').val()} ${$('#UpdatePatientPersonallastName').val()} ${$('#UpdatePatientPersonalsuffix').val()}`
        };
    }

    loadTable(data) {
        this.table.bootstrapTable('load', data);
    }
}