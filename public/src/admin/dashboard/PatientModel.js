// PatientModel.js
class PatientModel {
    constructor() {
        this.data = [
            {
                "full_name": "John Michael Smith Sr.",
                "first_name": "John",
                "middle_name": "Michael",
                "last_name": "Smith",
                "suffix": "Sr.",
                "birthday": "1980-05-12",
                "age": 44,
                "region": "Region 1",
                "province": "Illinois",
                "municipality": "Springfield",
                "barangay": "La",
                "street_name": "Main St",
                "house_number": "123",
                "full_address": "123 Main St La, Springfield, Illinois, Region 1",
                "contact_number": "555-1234",
                "pwd_senior_control_number": "SCN0012345",
                "email": "john.smith@example.com",
                "guardian_full_name": "James Michael Smith Jr."
            },
            {
                "full_name": "Jane Elizabeth Doe IV",
                "first_name": "Jane",
                "middle_name": "Elizabeth",
                "last_name": "Doe",
                "suffix": "IV",
                "birthday": "1975-07-22",
                "age": 49,
                "region": "Region 2",
                "province": "Illinois",
                "municipality": "Springfield",
                "barangay": "Ua",
                "street_name": "Elm St",
                "house_number": "456",
                "full_address": "456 Elm St Ua, Springfield, Illinois, Region 2",
                "contact_number": "555-5678",
                "pwd_senior_control_number": "PWD0023456",
                "email": "jane.doe@example.com",
                "guardian_full_name": "Michael Robert Doe"
            }
        ];
    }

    getPatient(index) {
        return this.data[index];
    }

    updatePatient(index, updatedPatient) {
        this.data[index] = updatedPatient;
    }

    getAllPatients() {
        return this.data;
    }

    calculateAge(birthday) {
        const birthDate = new Date(birthday);
        const currentDate = new Date();
        let age = currentDate.getFullYear() - birthDate.getFullYear();
        const m = currentDate.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && currentDate.getDate() < birthDate.getDate())) {
            age--;
        }
        return age;
    }
}
