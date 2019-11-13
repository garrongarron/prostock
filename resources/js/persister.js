let a = document.querySelectorAll('a');

for (var i = 0; i < a.length; i++) {
    a[i].addEventListener('click', function(event) {
        if (!confirm("sure u want to delete ")) {
            event.preventDefault();
        }
    });
}