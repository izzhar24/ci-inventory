    <?php
    /* Mengambil query report*/
    foreach ($report as $result) {
        $barang_nama[] = $result->barang_nama; //ambil barang_nama
        $value[] = (float) $result->tot_stok; //ambil nilai
    }
    /* end mengambil query*/

    ?>

    <!-- Load chart dengan menggunakan ID -->
    <div class="card">
        <div class="card-body">
            <div id="report" class="table"></div>

            <div class="row">
                <div class="col-6">
                </div>
            </div>
        </div>
    </div>

    <!-- END load chart -->


    <!-- Script untuk memanggil library Highcharts -->
    <script type="text/javascript">
        $(function() {
            $('#report').highcharts({
                chart: {
                    type: 'column',
                    margin: 75,
                    options3d: {
                        enabled: false,
                        alpha: 10,
                        beta: 25,
                        depth: 70
                    }
                },
                title: {
                    text: 'Grafik Stok Barang',
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
                    categories: <?php echo json_encode($barang_nama); ?>
                },
                exporting: {
                    enabled: false
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Barang'
                    },
                },
                tooltip: {
                    formatter: function() {
                        return 'Total Stok <b>' + this.x + '</b> Adalah <b>' + Highcharts.numberFormat(this.y, 0) + '</b> Items ';
                    }
                },
                series: [{
                    name: 'Stok Barang',
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
                            fontSize: '14px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
            });
        });
    </script>