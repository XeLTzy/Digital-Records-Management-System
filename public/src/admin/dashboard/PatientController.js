// PatientController.js
class PatientController {
    constructor(model, view) {
        this.model = model;
        this.view = view;

        this.view.bindContextMenuEvent(this.handleContextMenu.bind(this));
        this.view.bindHideContextMenu(this.handleHideContextMenu.bind(this));
        this.view.bindEditClick(this.handleEditClick.bind(this));
        this.view.bindSaveChanges(this.handleSaveChanges.bind(this));

        this.view.loadTable(this.model.getAllPatients());
    }

    handleContextMenu(event) {
        event.preventDefault();
        this.selectedRowIndex = $(event.target).closest('tr').index();
        this.view.showContextMenu(event.pageX, event.pageY);
    }

    handleHideContextMenu(event) {
        if (!$(event.target).closest('#context-menu-PatientRecords').length) {
            this.view.hideContextMenu();
        }
    }

    handleEditClick() {
        if (this.selectedRowIndex !== null) {
            const selectedPatient = this.model.getPatient(this.selectedRowIndex);
            this.view.populateForm(selectedPatient);
            this.view.showModal();
        }
        this.view.hideContextMenu();
    }

    handleSaveChanges() {
        if (this.selectedRowIndex !== null) {
            const updatedPatient = this.view.getFormData();
            updatedPatient.age = this.model.calculateAge(updatedPatient.birthday);
            this.model.updatePatient(this.selectedRowIndex, updatedPatient);
            this.view.loadTable(this.model.getAllPatients());
            this.view.hideModal();
        }
    }
}

// Initialize MVC
$(function () {
    const model = new PatientModel();
    const view = new PatientView();
    const controller = new PatientController(model, view);
});
