<x-mail::message>
# Hello <span style="text-transform: capitalize;">{{$user->name}}</span>,

We are delighted to inform you that your voter registration has been approved! You are now ready to participate in the upcoming elections.
<br>

If you have any questions or need assistance with the voting process, please don't hesitate to contact our support team.

Welcome to our electoral community.

<x-mail::button :url="'127.0.0.1:8000/app/login'" color="success">
Proceed to Dashboard
</x-mail::button>

Sincerely,<br>
<!-- {{ config('app.name') }} -->
Amatech Team
</x-mail::message>
