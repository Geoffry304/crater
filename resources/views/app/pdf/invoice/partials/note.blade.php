@if (isset($settings['invoice_note']))
    <div class="note">
        {!! nl2br(htmlspecialchars($settings['invoice_note'])) !!}
    </div>
@endif
