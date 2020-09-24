@if (isset($settings['invoice_footer']))
    <div class="footer">
        {!! nl2br(htmlspecialchars($settings['invoice_footer'])) !!}
    </div>
@endif
