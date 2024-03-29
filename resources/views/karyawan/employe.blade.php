@extends('karyawan.base')

@section('content')
    <div class="content-header">
        <span class="title-page">Karyawan</span>
    </div>
    <div class="content-main">
        <table id="penjualan" class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th align="center"><span id="amount" class="amount">Subtotal</span> </th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td align="right">
                        <h3><span id="total" class="total text-success">Grand Total</span></h3>
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Baju</td>
                    <td>
                        <select value="" name="qty" class="qty form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" value="2500" class="price form-control" disabled="true">
                    </td>
                    <td align="center">
                        <h4><span id="amount" class="amount">Rp. 0</span></h4>
                    </td>
                </tr>
                <tr>
                    <td>Sepatu</td>
                    <td>
                        <select value="" name="qty" class="qty form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" value="750" class="price form-control" disabled="true">
                    </td>
                    <td align="center">
                        <h4><span id="amount" class="amount">Rp. 0</span></h4>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            total();
            $('.qty').change(function() {
                total();
            });
            $('.amount').change(function() {
                total();
            });
        });

        function total() {
            var sum = 0;
            $('#penjualan > tbody  > tr').each(function() {
                var qty = $(this).find('option:selected').val();
                var price = $(this).find('.price').val();
                var amount = (qty * price)
                sum += amount;
                $(this).find('.amount').text('' + amount);
            });
            $('.total').text(sum);
        }
    </script>
@endsection
