@props(['type' => 'success', 'dismissible' => true])

@php
    $classes = match($type) {
        'success' => 'alert-success',
        'error' => 'alert-danger',
        'warning' => 'alert-warning',
        'info' => 'alert-info',
        default => 'alert-success',
    };
    
    $icons = match($type) {
        'success' => '✓',
        'error' => '✕',
        'warning' => '⚠',
        'info' => 'ℹ',
        default => '✓',
    };
@endphp

<div class="alert {{ $classes }}" role="alert" data-alert-dismissible="{{ $dismissible ? 'true' : 'false' }}">
    <span class="alert-icon">{{ $icons }}</span>
    <span class="alert-message">{{ $slot }}</span>
    @if($dismissible)
        <button type="button" class="alert-close" onclick="this.parentElement.remove()" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif
</div>

