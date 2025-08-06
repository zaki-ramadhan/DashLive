import './bootstrap';
import "flyonui/flyonui"

// Notyf instance
const notyf = new Notyf();

// ketika submit data user baru
// notyf akan menampilkan notifikasi sukses
document.getElementById('createUserForm').addEventListener('submit', function () {
  notyf.success('User Created Succesfully!');
});