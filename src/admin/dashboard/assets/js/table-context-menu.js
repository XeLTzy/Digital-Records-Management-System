document.addEventListener('DOMContentLoaded', function () {
    const contextMenu = document.getElementById('context-menu');
    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
    // const addModal = new bootstrap.Modal(document.getElementById('addModal'));
    // const addItemForm = document.getElementById('addItemForm');
    const editForm = document.getElementById('editForm');
    let contextCell = null;
    let contextRow = null;

    document.addEventListener('contextmenu', function (event) {
        event.preventDefault();
        if (event.target.tagName === 'TD') {
            contextCell = event.target;
            contextRow = event.target.parentElement;
            contextMenu.style.display = 'block';
            contextMenu.style.left = `${event.pageX}px`;
            contextMenu.style.top = `${event.pageY}px`;
        } else {
            contextMenu.style.display = 'none';
        }
    });

    document.addEventListener('click', function () {
        contextMenu.style.display = 'none';
    });

    contextMenu.querySelectorAll('li').forEach(item => {
      item.addEventListener('click', function () {
        switch (this.id) {
          case 'Add Dental Records':
            addModal.show();
            break;
          case 'Edit':
            openEditModal(contextCell);
            break;
          case 'Copy':
            if (contextCell) {
              navigator.clipboard.writeText(contextCell.innerText);
            }
            break;
        }
        contextMenu.style.display = 'none';
      });
    });

    // function openEditModal(cell) {
    //   const row = cell.parentElement;
    //   const cells = row.children;
    //   document.getElementById('patientfirstname').value = cells[0].innerText;
    //   document.getElementById('patientmiddlename').value = cells[1].innerText;
    //   document.getElementById('patientlastname').value = cells[2].innerText;
    //   document.getElementById('patientsuffix').value = cells[3].innerText;

    //   document.getElementById('patientbirthday').value = cells[4].innerText;
    //   document.getElementById('region-text').value = cells[5].innerText;
    //   document.getElementById('province-text').value = cells[6].innerText;
    //   document.getElementById('city-text').value = cells[7].innerText;
    //   document.getElementById('barangay-text').value = cells[8].innerText;
    //   document.getElementById('streetname').value = cells[9].innerText;
    //   document.getElementById('housenumber').value = cells[10].innerText;
    //   document.getElementById('contactnumber').value = cells[11].innerText;
    //   document.getElementById('email').value = cells[12].innerText;
    //   document.getElementById('discountid').value = cells[13].innerText;
    //   document.getElementById('guardianfirstname').value = cells[14].innerText;
    //   document.getElementById('guardianmiddlename').value = cells[15].innerText;
    //   document.getElementById('guardianlastname').value = cells[16].innerText;
    //   document.getElementById('guardiansuffix').value = cells[17].innerText;

    //   editForm.onsubmit = function (event) {
    //     event.preventDefault();
    //     cells[0].innerText = document.getElementById('patientfirstname').value;
    //     cells[1].innerText = document.getElementById('patientmiddlename').value;
    //     cells[2].innerText = document.getElementById('patientlastname').value;

    //     cells[4].innerText = document.getElementById('patientbirthday').value;
    //     cells[5].innerText = document.getElementById('region-text').value;
    //     cells[6].innerText = document.getElementById('province-text').value;
    //     cells[7].innerText = document.getElementById('city-text').value;
    //     cells[8].innerText = document.getElementById('barangay-text').value;
    //     cells[9].innerText = document.getElementById('streetname').value;
    //     cells[10].innerText = document.getElementById('housenumber').value;
    //     cells[11].innerText = document.getElementById('contactnumber').value;
    //     cells[12].innerText = document.getElementById('email').value;
    //     cells[13].innerText = document.getElementById('discountid').value;
    //     cells[14].innerText = document.getElementById('guardianfirstname').value;
    //     cells[15].innerText = document.getElementById('guardianmiddlename').value;
    //     cells[16].innerText = document.getElementById('guardianlastname').value;
    //     cells[17].innerText = document.getElementById('guardiansuffix').value;
    //     editModal.hide();
    //   };
    //   editModal.show();
    // }

});