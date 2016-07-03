<div class="text-center">
    <h3>Add New Record</h3>
    <hr>
</div>
<div style="padding: 12px;">
    @include('home.form')
</div>
<div class="text-center">
    <h3>Your Summary</h3>
    <hr>
</div>
<table class="table" style="width: 100%;">
    @foreach($year_months as $ym)
    <tr>
        <td>
            <label>{{ $ym->date->format('F Y') }}</label>
        </td>
        <td class="text-right numeral-read">
            {{ $ym->price }}
        </td>
    </tr>
    @endforeach
    <tr>
        <td>
            <label>Total</label>
        </td>
        <td class="text-right">
            <b class="numeral-read">
                {{ $total }}
            </b>
        </td>
    </tr>
</table>
