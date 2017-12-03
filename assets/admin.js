function delete_url(id) {
    if (confirm('Are you sure you want to delete this record?')) {
        document.location = 'index.php?delete_id=' + id;
    }
}
function update_url(id) {
    if (confirm('Are you sure you want to change this record?')) {
        document.location = 'update?id=' + id;
    }
}
