<div class="text-center">
    <h3>Add New Record</h3>
    <hr>
</div>
<div style="padding: 12px;">
    @include('home.form')
</div>
<div class="text-center">
    <h3>Your Summary</h3>
</div>
<table class="table" style="width: 100%;">
    <tr>
        <td>
            <label>Total</label>
        </td>
        <td class="text-right numeral-read">
            {{ $total }}
        </td>
    </tr>
</table>
<div class="text-control">
    <h4>Months</h4>
</div>
<table class="table" style="width: 100%;">
    <tr>
        <td>
            <label>July</label>
        </td>
        <td class="text-right numeral-read">
            1255500
        </td>
    </tr>
    <tr>
        <td>
            <label>June</label>
        </td>
        <td class="text-right numeral-read">
            1255500
        </td>
    </tr>
</table>
