@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) !== 'Amatech')
<img src="{{ asset('images/logo.jpg') }}" class="logo" alt="Amatech Logo">
@else
<span>Amatech</span>
@endif
</a>
</td>
</tr>
