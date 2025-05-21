document.getElementById('searchInput').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('#matchesTable tr:not(:first-child)'); // Exclude antetul

    rows.forEach(row => {
        const team1 = row.cells[0].textContent.toLowerCase();
        const team2 = row.cells[1].textContent.toLowerCase();
        const competition = row.cells[3].textContent.toLowerCase();

        if (team1.includes(searchTerm) || team2.includes(searchTerm) || competition.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
});

// Evidențiere meciuri viitoare
const now = new Date();
const rows = document.querySelectorAll('#matchesTable tr:not(:first-child)');

rows.forEach(row => {
    const time = row.cells[2].textContent; // Ora meciului
    const [hours, minutes] = time.split(':').map(Number);
    const matchDate = new Date();
    matchDate.setHours(hours, minutes, 0, 0);

    const timeDiff = (matchDate - now) / (1000 * 60); // Diferența în minute
    if (timeDiff > 0 && timeDiff <= 120) { // Meciuri în următoarele 2 ore
        row.style.backgroundColor = '#ffeb3b'; // Culoare galbenă pentru evidențiere
    }
});