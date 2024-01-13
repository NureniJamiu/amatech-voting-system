<x-mail::message>
# Congratulations {{$user->name}}


We're thrilled to let you know that your account has been reviewed and approved by our Administrators.
You can now proceed to your dashboard.


<x-mail::button :url="'127.0.0.1:8000/app/login'" color="success">
Go to Dashboard
</x-mail::button>

Thanks,<br>
<!-- {{ config('app.name') }} -->
Amatech Team
</x-mail::message>
