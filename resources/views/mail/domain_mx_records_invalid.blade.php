@component('mail::message')

# Domain MX records invalid

A recent DNS record check on your custom domain **{{ $domain }}** on {{ config('app.name') }} showed that your MX records are no longer pointing to the {{ config('app.name') }} server. This means that {{ config('app.name') }} will not be able to handle your emails for you.

If this MX record change was intentional then you can ignore this email.

Otherwise please visit the domains page on the site by clicking the button below and then rechecking your domain's records to resolve the issue.

@component('mail::button', ['url' => config('app.url').'/domains'])
Check Domain
@endcomponent
@endcomponent
