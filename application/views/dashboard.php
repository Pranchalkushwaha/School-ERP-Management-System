
        
            <!-- cardBox start  -->
            <div class = "cardBox">
                <div class = "card">
                    <div>
                        <div class = "numbers">1,000</div>
                        <div class = "cardName">Students</div>
                    </div>
                    <div class = "iconBox">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class = "card">
                    <div>
                        <div class = "numbers">1,00</div>
                        <div class = "cardName">Teachers</div>
                    </div>
                    <div class = "iconBox">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class = "card">
                    <div>
                        <div class = "numbers">1,00,000</div>
                        <div class = "cardName">Total income</div>
                    </div>
                    <div class = "iconBox">
                        <i class="fa fa-inr" aria-hidden="true"></i>
                    </div>
                </div>
                <div class = "card">
                    <div>
                        <div class = "numbers">1,000</div>
                        <div class = "cardName">Total Expence</div>
                    </div>
                    <div class = "iconBox">
                        <i class="fa fa-inr" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!-- cardBox end  -->
            <!-- details start  -->
            <div class = "details">
                <div class = "calender">
                    <div class = "cardHeader">
                        <h2>Calender</h2>
                    </div>
                    <div class = "calendarBody">
                        <div class = "month">
                            <ul>
                            <li class = "prev">&#10094;</li>
                            <li class = "next">&#10095;</li>
                            <li>
                               <div class = "date">
                                <h1></h1>
                                <p></p>
                               </div>
                            </li>
                            </ul>
                        </div>

                        
                        <ul class = "weekDays">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                            
                        </ul>
                        <div class = "days">
                            
                        </div>
                         
                    </div>
                </div>
                
                <div class = "studentStatistics">
                    <div class = "cardHeader">
                        <h2>Student Statistics</h2>
                    </div>
                    <div id="piechart"></div>
                </div>
            </div>
            <!-- details end  -->

        </div>
        <!-- main end  -->
    </div>
    <!-- container end  -->
    <script src="<?php echo base_url('assets/js/calender.js');?>"></script>
    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Work', 8],
        ['Eat', 2],
        ['TV', 4],
        ['Gym', 2],
        ['Sleep', 8]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'Student Data Classwise', 'width':320, 'height':200};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>
</body>
</html>
