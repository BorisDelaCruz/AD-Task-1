document.addEventListener('DOMContentLoaded', () => {
    const addButtons = document.querySelectorAll('.btn-add');
    const detailButtons = document.querySelectorAll('.btn-details');

    addButtons.forEach(button => {
        button.addEventListener('click', () => {
            alert('Item added to cart!');
        });
    });

    detailButtons.forEach(button => {
        button.addEventListener('click', () => {
            alert('Viewing details...');
        });
    });

    // Data for storage availability
    const storageData = {
        labels: ['Samsung 970 EVO 1TB', 'Western Digital Blue 2TB'],
        datasets: [{
            label: 'Available Storage (GB)',
            data: [1000, 2000], // Example data in GB
            backgroundColor: ['#33ffcc', '#335bff'], // Colors for each bar
            borderColor: ['#28d4a8', '#2a4bdc'], // Border colors for each bar
            borderWidth: 1
        }]
    };

    // Configuration for the chart
    const config = {
        type: 'bar',
        data: storageData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Storage (GB)'
                    }
                }
            }
        }
    };

    // Render the chart
    const ctx = document.getElementById('storageChart').getContext('2d');
    new Chart(ctx, config);
});