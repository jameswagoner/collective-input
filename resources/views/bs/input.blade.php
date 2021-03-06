@extends('form::base')

@section('input')
    @if($formGroup)<div @if ($groupClass){!! 'class="' . $groupClass . '"' !!}@endif>@endif
        {!! $before !!}
        @if($label && !$labelAfter)<label for="{{ $options['id'] }}" @if ($labelClass){!! 'class="' . $labelClass . '"' !!}@endif>{!! $label !!}</label>@endif
        @yield('input')
        @if($label && $labelAfter)<label for="{{ $options['id'] }}" @if ($labelClass){!! 'class="' . $labelClass . '"' !!}@endif>{!! $label !!}</label>@endif
        @if($helper)<small id="{{ $name }}Help" class="form-text text-muted">{{ $helper }}</small>@endif
        @error($dotName)<small class="invalid-feedback">{{ $message }}</small>@enderror
        {!! $after !!}
    @if($formGroup)</div>@endif
@overwrite