<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Toggle sidebar
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    
    menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('hide');
    });
    
    // Toggle dropdown
    const dropdownToggle = document.getElementById('dropdownUser');
    const dropdownMenu = document.querySelector('.dropdown_account_link');
    
    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        dropdownMenu.classList.toggle('show');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
    
    // Dark mode toggle
    const switchMode = document.getElementById('switch-mode');
    
    switchMode.addEventListener('change', function() {
        document.body.classList.toggle('dark', this.checked);
        localStorage.setItem('dark-mode', this.checked ? 'true' : 'false');
    });
    
    // Check for saved dark mode preference
    if (localStorage.getItem('dark-mode') === 'true') {
        switchMode.checked = true;
        document.body.classList.add('dark');
    }
    
    // Chart
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const chartData = <?= json_encode($chartData) ?>;
        
        // Set chart font color based on dark mode
        Chart.defaults.color = document.body.classList.contains('dark') ? '#e9ecef' : '#666';

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: 'Doanh thu (VND)',
                    data: chartData.data,
                    borderColor: '#dc3545',
                    backgroundColor: 'rgba(220, 53, 69, 0.1)',
                    borderWidth: 2,
                    pointRadius: 4,
                    pointBackgroundColor: '#dc3545',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return ' ' + context.parsed.y.toLocaleString() + '₫';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function (value) {
                                return value.toLocaleString() + '₫';
                            }
                        },
                        grid: {
                            color: document.body.classList.contains('dark') ? 'rgba(255, 255, 255, 0.1)' : '#eee'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        
        // Update chart colors when dark mode changes
        switchMode.addEventListener('change', function() {
            window.location.reload();
        });
    });
</script>
<script src="/public/admin/dist/js/admin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>