<div class="bs-example">
    <div id="user_con_hourday" ></div>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Hour', 'Celcom', 'Redtone'],
                ['09',0,0],
                ['10',0,0],
                ['11',2,0],
                ['12',3,1],
                ['13',14,8],
                ['14',17,10],
                ['15',11,7],
                ['16',10,4],
                ['17',8,2],
                ['18',7,2],
                ['19',9,3],
                ['20',4,2],
                ['21',2,2],
                ['22',1,0],
                ['23',0,0]
            ]);

            var options = {
                title: 'User Connectivity by Hour of the Day',
                hAxis: {title: 'Hour',  titleTextStyle: {color: '#333'}},
                vAxis: {title: 'Connections', minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('user_con_hourday'));
            chart.draw(data, options);
        }
    </script>
</div>

<div class="bs-example">
    <blockquote>
        <p>
            This example does not show all of the SSID and Hour for the Day.<br />
            The real Report shall display data for all of the SSID and Hours.
        </p>
    </blockquote>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>SSID</th>
                <th>Date From</th>
                <th>Date To</th>
                <th>Hour</th>
                <th>Connections</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>09:00</td>
                <td>0</td>
            </tr>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>10:00</td>
                <td>0</td>
            </tr>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>11:00</td>
                <td>5</td>
            </tr>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>12:00</td>
                <td>12</td>
            </tr>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>13:00</td>
                <td>26</td>
            </tr>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>14:00</td>
                <td>8</td>
            </tr>
            <tr>
                <td>celcom</td>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>15:00</td>
                <td>13</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="bs-example">

    <div id="user_con_dayweek" ></div>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Day', 'Celcom', 'Redtone'],
                ['Monday',90,60],
                ['Tuesday',89,55],
                ['Thursday',180,90],
                ['Friday',90,29],
                ['Saturday',120,56],
                ['Sunday',130,76]
            ]);

            var options = {
                title: 'User Connectivity by Day of the Week',
                hAxis: {title: 'Day',  titleTextStyle: {color: '#333'}},
                vAxis: {title: 'Connections',  minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('user_con_dayweek'));
            chart.draw(data, options);
        }
    </script>
</div>

<div class="bs-example">
    <blockquote>
        <p>
            This example does not show all of the Days for the Month.<br />
            The real Report shall display data for all of the Days.
        </p>
    </blockquote>
    <div id="user_con_daymonth" ></div>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Day', 'Celcom', 'Redtone'],
                ['1st',90,60],
                ['9th',89,55],
                ['13th',180,90],
                ['20th',90,29],
                ['25th',120,56],
                ['31st',130,76]
            ]);

            var options = {
                title: 'User Connectivity by Day of the Month',
                hAxis: {title: 'Day',  titleTextStyle: {color: '#333'}},
                vAxis: {title: 'Connections',  minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('user_con_daymonth'));
            chart.draw(data, options);
        }
    </script>

</div>

<div class="bs-example">
    <blockquote>
        <p>
            This example does not show all of the Months for the Year.<br />
            The real Report shall display data for all of the Months.
        </p>
    </blockquote>
    <div id="user_con_monthyear" ></div>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Day', 'Celcom', 'Redtone'],
                ['January',940,650],
                ['March',869,595],
                ['June',180,909],
                ['September',940,279],
                ['November',1420,756],
                ['December',1350,726]
            ]);

            var options = {
                title: 'User Connectivity by Month of the Year',
                hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
                vAxis: {title: 'Connections',  minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('user_con_monthyear'));
            chart.draw(data, options);
        }
    </script>

</div>