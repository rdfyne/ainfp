@component('mail::message')
# New Applicant

You have received an application from {{ $application->name }}. Click the button to view application details.

@component('mail::button', ['url' => route('application.show', $application)])
	View Application
@endcomponent

@endcomponent
