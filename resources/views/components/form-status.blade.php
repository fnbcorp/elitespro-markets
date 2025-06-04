@props([
    'name',
])
@error($name)
    <span class="text-danger pt-2" style="display: inline-block;">{{ $message }}</span>
@enderror