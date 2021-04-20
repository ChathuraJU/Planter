
<!DOCTYPE html>
<html lang="en-US">
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    h2{
        text-align: center;
    }
</style>

<body>

<h2>Monthly Report - {{ explode('-', $startDate)[0] .' '. explode('-', $startDate)[1]  }}</h2>

<table>
  <tr>
    <th>Field No</th>
    <th>No. of Liters</th>
    <th>Latex (KG)</th>
    <th>Scrap (KG)</th>
    <th>Over (KG)</th>
    <th>Salaries</th>
  </tr>
    @foreach($data as $row)
      <tr>
        <td>{{$row->field_id}}</td>
        <td>{{$row->liters}}</td>
        <td>{{$row->latex}}</td>
        <td>{{$row->scrap}}</td>
        <td>{{$row->sumover}}</td>
        <td>{{$row->salaries}}</td>
      </tr>
    @endforeach

</table>
<div id="chart_div"></div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">

    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawAnnotations);

    function drawAnnotations() {
        var data = google.visualization.arrayToDataTable([
            ['Field No.', 'No. of Liters', 'Latex (KG)', 'Scrap (KG)', 'Over (KG)'],
            @foreach($data as $row)
                ['{{$row->field_id}}', {{$row->liters}}, {{$row->latex}}, {{$row->scrap}}, {{$row->sumover}}],
            @endforeach
        ]);

        var options = {
            title: 'Rubber Chart Report - {{ explode('-', $startDate)[0] .' '. explode('-', $startDate)[1]  }}',
            chartArea: {width: '50%'},
            annotations: {
                alwaysOutside: true,
                textStyle: {
                    fontSize: 12,
                    auraColor: 'none',
                    color: '#555'
                },
                boxStyle: {
                    stroke: '#ccc',
                    strokeWidth: 1,
                    gradient: {
                        color1: '#f3e5f5',
                        color2: '#f3e5f5',
                        x1: '0%', y1: '0%',
                        x2: '100%', y2: '100%'
                    }
                }
            },
            hAxis: {
                title: '',
                minValue: 0,
            },
            vAxis: {
                title: 'Field No.'
            }
        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    document.addEventListener("DOMContentLoaded", function(event) {
        window.print();
    });

    window.onafterprint = async function() {
        await alert("Redirecting....");
        window.location.href = '{{ url('create-report') }}';
    }
</script>

</body>
</html>

