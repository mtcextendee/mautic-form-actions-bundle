# Form Actions for Mautic 4, Mautic3 and Mautic2


Plugin allow save to contact field any custom string from form. You're able to use form submitted data and contact fields processed by twig syntax. For example you are able to save to contact field full name with twig syntax:

`{{ formfield.firstname }} {{ formfield.lastname }}`

Another example of twig syntax

- `{{formfield.email|slice(0, 4)}}` - four letters from email
- `{{ formfield.email|split('@')|last }}` - domain of provider from email address - string after @
- `{{ formfield.email|split('@')|first }}` - string before @ from email address

Of course, you are able to process data with any twig feature, you are able to transform/truncate data etc.

#### Allowed custom tags in syntax

- {{ formfield.alias }}  - any field from submitted form
- {{ contactfield.alias }} - any contact fields

## Installation

### Manual

1. Use last version
2. Unzip files to plugins/MauticFormActionsBundle
3. Clear cache (app/cache/prod/)
4. Go to /s/plugins/reload
5. Enable Form Actions
6. Go to forms, create form and see new Form Save actions option in actions tab

<img src="https://user-images.githubusercontent.com/462477/94358620-b0739980-00a2-11eb-9bf1-07af4518967a.png" width="500">

### Credits

<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
