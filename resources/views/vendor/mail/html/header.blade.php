<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
        <center><img src="https://administracionyfinanzasplem.gob.mx/espaciogenero/genero/images/logo/placa_genero.png" style="max-width: 100%; align-content: center"></center>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
