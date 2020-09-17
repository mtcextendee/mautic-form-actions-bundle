# Form Actions

Plugin allow save to any fields custom string processign by twig syntax from form fields and contact fields. For example you are able to save to contact field full name with twig syntax

`{{ formfield.firstname }} {{ formfield.lastname }}`

Another example of twig syntax

`{{formfield.firstname}}x{{formfield.email|slice(0, 4)}}`

Of course, you are able to process data with any twig feature, you can truncate data etc.

## Installation

### Manual

1. Use last version
2. Unzip files to plugins/MauticFormActionsBundle
3. Clear cache (app/cache/prod/)
4. Go to /s/plugins/reload

### Usage

{{formfield.firstname}} {{formfield.email|slice(0, 4)}}

### Credits

<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
