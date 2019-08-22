<div class="row mt-2">
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-primary">
            <div class="card-body mb-3">
                <button class="btn btn-transparent p-0 float-right" type="button">
                    <i class="icon-user"></i>
                </button>
                <div class="text-value"><?= $suppliers; ?></div>
                <div>Suppliers</div>
            </div>
        </div>
    </div>

    <div class=" col-sm-6 col-lg-3">
        <div class="card text-white bg-info">
            <div class="card-body mb-3">
                <button class="btn btn-transparent p-0 float-right" type="button">
                    <i class="icon-list"></i>
                </button>
                <div class="text-value"><?= $barangs; ?></div>
                <div>Barang</div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-warning">
            <div class="card-body mb-3">
                <button class="btn btn-transparent p-0 float-right" type="button">
                    <i class="icon-list"></i>
                </button>
                <div class="text-value"><?= $beli; ?></div>
                <div>Pembelian</div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-danger">
            <div class="card-body mb-3">
                <button class="btn btn-transparent p-0 float-right" type="button">
                    <i class="icon-list"></i>
                </button>
                <div class="text-value"><?= $jual; ?></div>
                <div>Penjualan</div>
            </div>
        </div>
    </div>

</div>

<?php
/* Mengambil query report*/
foreach ($report as $result) {
    $bulan[] = $result->tanggal; //ambil bulan
    $value[] = (float) $result->total; //ambil nilai
}
/* end mengambil query*/

?>

<!-- Load chart dengan menggunakan ID -->
<div class="card">
    <div class="card-body">
        <div id="log">Daily Graphic</div>

        <div class="d-none d-md-block">
            <button class="btn btn-primary float-right" type="button">
                <i class="icon-cloud-download"></i>
            </button>
            <div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" value="day"> Day
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" value="month"> Month
                </label>
                <label class="btn btn-outline-secondary">
                    <input type="radio" name="options" value="year"> Year
                </label>
            </div>
        </div>
        <div id="report"></div>
    </div>
</div>
<!-- END load chart -->

<!-- Script untuk memanggil library Highcharts -->
<script type="text/javascript">
    $(function() {
        var mode = '';
        $('.btn-group-toggle').click(function() {
            var mode = $("input:checked").val();
            var json = $.getJSON($('#report'));
            $("#log").html(json + " is checked!");
            var items = [];
            $.each(data, function(key, val) {
                items.push("<li id='" + key + "'>" + val + "</li>");
            });
            $("<ul/>", {
                "class": "my-new-list",
                html: items.join("")
            }).appendTo("body");
            // $("#log").html(json + " is checked!");
            // $('#report')
        });

        $('#report').highcharts({
            chart: {
                type: 'line',
                margin: 75,
                options3d: {
                    enabled: false,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'Grafik Penjualan <?php echo $bln ?> ',
                style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            subtitle: {
                text: '',
                style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: <?php echo json_encode($bulan); ?>
            },
            exporting: {
                enabled: false
            },
            yAxis: {
                title: {
                    text: 'Penjualan'
                },
            },
            tooltip: {
                formatter: function() {
                    return 'Total Penjualan Tanggal <b>' + this.x + '</b> Adalah Rp <b>' + Highcharts.numberFormat(this.y, 0) + '</b>';
                }
            },
            series: [{
                name: 'Tanggal',
                data: <?php echo json_encode($value); ?>,
                shadow: true,
                dataLabels: {
                    enabled: true,
                    color: '#045396',
                    align: 'center',
                    formatter: function() {
                        return Highcharts.numberFormat(this.y, 0);
                    }, // one decimal
                    y: 0, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    });
</script>