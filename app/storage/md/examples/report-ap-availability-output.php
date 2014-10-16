<div class="bs-example">
    <blockquote>
        <p>
            This example does not show all of the APs.<br />
            The real Report shall display data for all of the APs.
        </p>
    </blockquote>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Date From</th>
                <th>Date To</th>
                <th>Site</th>
                <th>AP Name</th>
                <th>Availability</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>Midvalley</td>
                <td>ap1</td>
                <td>100%</td>
            </tr>
            <tr>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>Midvalley</td>
                <td>ap2</td>
                <td>97%</td>
            </tr>
            <tr>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>Midvalley</td>
                <td>ap3</td>
                <td>80%</td>
            </tr>
            <tr>
                <td>08/10/2014</td>
                <td>08/10/2014</td>
                <td>Midvalley</td>
                <td>ap4</td>
                <td>13%</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="bs-example">
    <div id="below90"></div>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['AP', 'Availability'],
                ['ap92', 80],
                ['ap21', 75],
                ['ap29', 66],
                ['ap87', 14]
            ]);

            var options = {
                title: 'Below 90% AP Availability',
                hAxis: {title: 'AP'},
                vAxis: {title: 'Availability', maxValue: 100, titleTextStyle: {color: 'red'}}
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('below90'));

            chart.draw(data, options);

        }
    </script>


</div>