<?php include 'dashIncludes/dash_header.php'?>

<!-- Content Area -->
<main class="p-4">
    <!-- Dashboard Overview -->
    <section class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold mb-4">Dashboard Overview</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Total Reservations -->
            <div class="bg-blue-500 text-white p-4 rounded-lg flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Total Reservations</h3>
                    <p class="text-4xl font-bold">250</p>
                </div>
                <i class="fas fa-calendar-check fa-3x"></i>
            </div>

            <!-- Revenue -->
            <div class="bg-green-500 text-white p-4 rounded-lg flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Revenue</h3>
                    <p class="text-4xl font-bold">$25,000</p>
                </div>
                <i class="fas fa-chart-line fa-3x"></i>
            </div>

            <!-- Occupancy Rate -->
            <div class="bg-yellow-500 text-white p-4 rounded-lg flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Occupancy Rate</h3>
                    <p class="text-4xl font-bold">85%</p>
                </div>
                <i class="fas fa-bed fa-3x"></i>
            </div>
        </div>
    </section>
    <div class="flex gap-4">
       <!-- Reservation Chart -->
      <section class="mt-8">
          <canvas id="reservationChart"></canvas>
      </section>

      <!-- Revenue Chart -->
      <section class="mt-8">
          <canvas id="revenueChart"></canvas>
      </section>
    </div>
   
</main>

<?php include 'dashIncludes/dash_footer.php'?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Retrieve the context of the reservation chart canvas element
        var reservationCtx = document.getElementById("reservationChart").getContext("2d");

        // Define the data for the reservation chart
        var reservationChartData = {
            labels: ["Approved", "Not Approved"],
            datasets: [{
                label: "Reservations",
                data: [150, 100],
                backgroundColor: ["rgba(51, 204, 51)", "rgba(255, 99, 132)"],
                borderColor: ["rgba(54, 162, 235, 1)", "rgba(255, 99, 132, 1)"],
                borderWidth: 1
            }]
        };

        // Create the reservation chart
        var reservationChart = new Chart(reservationCtx, {
            type: "doughnut",
            data: reservationChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Retrieve the context of the revenue chart canvas element
        var revenueCtx = document.getElementById("revenueChart").getContext("2d");

        // Define the data for the revenue chart
        var revenueChartData = {
            labels: ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December",],
            datasets: [{
                label: "Revenue",
                data: [5000, 7500, 10000, 8000, 12000, 9000,5000, 7500, 10000, 8000, 12000, 9000],
                backgroundColor: ["rgba(255, 162, 235)","rgba(54, 162, 235)","rgba(0, 0, 0)","rgba(162, 162, 162)","rgba(255, 100, 100)","rgba(54, 162, 54)","rgba(180, 162, 0)","rgba(200, 50, 235)","rgba(255, 100, 0)","rgba(255, 255, 255)","rgba(0, 80, 180)","rgba(0, 100, 100)"],
                borderColor: "rgba(54, 162, 235)",
                borderWidth: 1
            }]
        };

        // Create the revenue chart
        var revenueChart = new Chart(revenueCtx, {
            type: "bar",
            data: revenueChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
