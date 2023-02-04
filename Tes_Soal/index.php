<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-5">
        <form action="">
            <div class="row">
                Nama Customer
                <select class="form-select" aria-label="Default select example" id="customer" aria-placeholder="a">
                    <option> </option>
                    <?php
                    include 'controller/customer.php';
                    ?>
                </select>
            </div>
            <div class="row">
                Alamat
                <div class="div border border-1" id="alamat">
                    Alamat Customer
                </div>
            </div>
            <div class="row">
                Pembelian dalam 1 tahun
                <div class="div border border-1" id="sales">
                    Penjualan Customer
                </div>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('#customer').change(function() {
            var customer = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'controller/alamat.php',
                data: 'customer_id=' + customer,
                success: function(response) {
                    console.log('====================================');
                    console.log(response);
                    console.log('====================================');
                    $('#alamat').html(response);
                },
                error(e) {
                    console.log(e);
                }
            });
            $.ajax({
                type: 'POST',
                url: 'controller/sales.php',
                data: 'customer_id=' + customer,
                success: function(response) {
                    console.log('====================================');
                    console.log(response);
                    console.log('====================================');
                    $('#sales').html(response);
                },
                error(e) {
                    console.log(e);
                }
            });
        });
    </script>
</body>

</html>