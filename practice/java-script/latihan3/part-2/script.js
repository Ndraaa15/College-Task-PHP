document.addEventListener('DOMContentLoaded', () => {
  const studentFormPopup = document.getElementById('studentFormPopup');
  const studentForm = document.getElementById('studentForm');
  const openFormBtn = document.getElementById('openFormBtn');
  const closeFormBtn = document.getElementById('closeFormBtn');
  const saveFormBtn = document.getElementById('saveFormBtn');
  const studentTable = document.getElementById('studentTable').getElementsByTagName('tbody')[0];

  let editIndex = -1;

  const openFormCreate = () => {
    studentFormPopup.style.display = 'block';
  };

  const openFormShow = () => {
    studentFormPopup.style.display = 'block';
    closeFormBtn.hidden = false;
    saveFormBtn.hidden = true;
  };

  const openFormEdit = () => {
    studentFormPopup.style.display = 'block';
    closeFormBtn.hidden = false;
    saveFormBtn.hidden = false;
  };

  const closeForm = () => {
    studentFormPopup.style.display = 'none';
    studentForm.reset();
    editIndex = -1;
  };

  openFormBtn.addEventListener('click', openFormCreate);
  closeFormBtn.addEventListener('click', closeForm);

  const loadStudents = () => {
    const students = JSON.parse(localStorage.getItem('students')) || [];
    studentTable.innerHTML = '';

    students.forEach((student, index) => {
      const row = studentTable.insertRow();
      row.insertCell(0).innerText = index + 1;
      row.insertCell(1).innerText = student.firstName;
      row.insertCell(2).innerText = student.lastName;
      row.insertCell(3).innerText = student.age;
      const actionsCell = row.insertCell(4);
      actionsCell.innerHTML = `
        <button class="show" data-index="${index}">Show</button>
        <button class="edit" data-index="${index}">Edit</button>
        <button class="delete" data-index="${index}">Delete</button>
      `;
    });
  };

  const updateStudentRow = (index, student) => {
    const row = studentTable.rows[index];
    row.cells[1].innerText = student.firstName;
    row.cells[2].innerText = student.lastName;
    row.cells[3].innerText = student.age;
  };

  const studentFormSubmit = (e) => {
    e.preventDefault();
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const age = document.getElementById('age').value;
    const students = JSON.parse(localStorage.getItem('students')) || [];

    if (editIndex === -1) {
      students.push({ firstName, lastName, age });
      loadStudents(); // If adding new student, reload the entire table
    } else {
      students[editIndex] = { firstName, lastName, age };
      updateStudentRow(editIndex, students[editIndex]); // If editing, update the specific row
    }

    localStorage.setItem('students', JSON.stringify(students));
    loadStudents();
    closeForm();
  };

  studentForm.addEventListener('submit', studentFormSubmit);

  studentTable.addEventListener('click', (e) => {
    const index = e.target.getAttribute('data-index');
    const students = JSON.parse(localStorage.getItem('students'));

    if (e.target.classList.contains('show')) {
      const student = students[index];
      document.getElementById('firstName').value = student.firstName;
      document.getElementById('lastName').value = student.lastName;
      document.getElementById('age').value = student.age;
      openFormShow();
    }

    if (e.target.classList.contains('edit')) {
      const student = students[index];
      document.getElementById('firstName').value = student.firstName;
      document.getElementById('lastName').value = student.lastName;
      document.getElementById('age').value = student.age;
      openFormEdit();
      editIndex = index;
    }

    if (e.target.classList.contains('delete')) {
      alert('Are you sure want to delete this student?');
      students.splice(index, 1);
      localStorage.setItem('students', JSON.stringify(students));
      loadStudents();
    }
  });

  loadStudents();
});
