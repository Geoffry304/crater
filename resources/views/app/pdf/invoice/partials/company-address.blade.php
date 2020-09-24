@if($invoice->user->company)
    <h1> {{$invoice->user->company->name}} </h1>
@endif

@if($company_address)
    <p class="company-address">
        @if($company_address->addresses[0]['address_street_1'])
            {!! nl2br(htmlspecialchars($company_address->addresses[0]['address_street_1'])) !!}<br>
        @endif

        @if($company_address->addresses[0]['zip'])
            {{$company_address->addresses[0]['zip']}}
        @endif
        @if($company_address->addresses[0]['city'])
            {{$company_address->addresses[0]['city']}}
        @endif
        <br>
        @if($company_address->addresses[0]['address_street_2'])
            {!! nl2br(htmlspecialchars($company_address->addresses[0]['address_street_2'])) !!} <br>
        @endif
        @if($company_address->addresses[0]['phone'])
            {{$company_address->addresses[0]['phone']}} <br>
        @endif
        @if(isset($settings['invoice_email']))
            {!!  nl2br(htmlspecialchars($settings['invoice_email'])) !!} <br>
        @endif
    </p>
@endif
