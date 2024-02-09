function myFunction(button) {
    let tableContainer = button.nextElementSibling;
    let table = tableContainer.querySelector('table');
  
    // Hide all tables with fade-out effect
    document.querySelectorAll('.announcement-content table').forEach(function (tbl) {
        if (tbl !== table) {
            tbl.style.transition = 'opacity 0.5s';
            tbl.style.opacity = 0;
            setTimeout(() => {
                tbl.style.display = 'none';
            }, 100);
        }
    });
  
    // Toggle the visibility of the selected table with fade-in effect
    if (table.style.display === 'none') {
        table.style.transition = 'opacity 0.5s';
        table.style.display = 'block';
        setTimeout(() => {
            table.style.opacity = 1;
        }, 500);
    } else {
        // Hide the selected table with fade-out effect
        table.style.transition = 'opacity 0.5s';
        table.style.opacity = 0;
        setTimeout(() => {
            table.style.display = 'none';
        }, 500);
    }
  }