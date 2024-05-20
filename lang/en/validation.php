<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute field must be accepted.',//Il campo :attributo deve essere accettato.
    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',//Il campo :attribute deve essere accettato quando :other è :value.'
    'active_url' => 'The :attribute field must be a valid URL.',//'Il campo :attribute deve essere un URL valido.'
    'after' => 'The :attribute field must be a date after :date.',//'Il campo :attribute deve essere una data successiva a :date'.
    'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',//'Il campo :attribute deve essere una data successiva o uguale a :date.
    'alpha' => 'The :attribute field must only contain letters.',//'Il campo :attribute deve contenere solo lettere.'
    'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',//'Il campo :attribute deve contenere solo lettere, numeri, trattini e trattini bassi.'
    'alpha_num' => 'The :attribute field must only contain letters and numbers.',//'Il campo :attribute deve contenere solo lettere e numeri.'
    'array' => 'The :attribute field must be an array.',//'Il campo :attribute deve essere un array.'
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',//'Il campo :attribute deve contenere solo caratteri alfanumerici e simboli a byte singolo.'
    'before' => 'The :attribute field must be a date before :date.',//'Il campo :attribute deve essere una data precedente a :date.',
    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',//'Il campo :attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'array' => 'The :attribute field must have between :min and :max items.',//Il campo :attribute deve contenere elementi compresi tra :min e :max.
        'file' => 'The :attribute field must be between :min and :max kilobytes.',//'Il campo :attribute deve essere compreso tra :min e :max kilobyte.',
        'numeric' => 'The :attribute field must be between :min and :max.',//'Il campo :attribute deve essere compreso tra :min e :max.'
        'string' => 'The :attribute field must be between :min and :max characters.',//'Il campo :attribute deve essere compreso tra :min e :max caratteri.',
    ],
    'boolean' => 'The :attribute field must be true or false.',//'Il campo :attribute deve essere true o false.',
    'can' => 'The :attribute field contains an unauthorized value.',//Il campo :attribute contiene un valore non autorizzato.',
    'confirmed' => 'The :attribute field confirmation does not match.',//'La conferma del campo :attribute non corrisponde.',
    'current_password' => 'The password is incorrect.',//'La password non è corretta.',
    'date' => 'The :attribute field must be a valid date.',//'Il campo :attribute deve essere una data valida.',
    'date_equals' => 'The :attribute field must be a date equal to :date.',//'Il campo :attribute deve essere una data uguale a :date.',
    'date_format' => 'The :attribute field must match the format :format.',//'Il campo :attribute deve corrispondere al formato :format.',

    'decimal' => 'The :attribute field must have :decimal decimal places.',//'Il campo :attribute deve contenere :decimal cifre decimali.',
    'declined' => 'The :attribute field must be declined.',//'Il campo :attributo deve essere rifiutato.',
    'declined_if' => 'The :attribute field must be declined when :other is :value.',//'Il campo :attribute deve essere rifiutato quando :other è :value.',
    'different' => 'The :attribute field and :other must be different.',//'Il campo :attribute e :other devono essere diversi.',
    'digits' => 'The :attribute field must be :digits digits.',//'Il campo :attribute deve essere :digits digits.',
    'digits_between' => 'The :attribute field must be between :min and max',
    'digits.'=> 'The :attribute field must be between :min and :max digits.',//'Il campo :attribute deve essere compreso tra :min e :max cifre.'
    'dimensions' => 'The :attribute field has invalid image dimensions.',//'Il campo :attribute ha dimensioni dell'immagine non valide.',
    'distinct' => 'The :attribute field has a duplicate value.',//'Il campo :attribute ha un valore duplicato.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',//'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',//'Il campo :attribute non deve iniziare con uno dei seguenti: :values.',
    'email' => 'The :attribute field must be a valid email address.',//'Il campo :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'The :attribute field must end with one of the following: :values.',//'Il campo :attribute deve terminare con uno dei seguenti: :values.',
    'enum' => 'The selected :attribute is invalid.',//"L'attributo selezionato non è valido.",
    'exists' => 'The selected :attribute is invalid.',//'L'attributo selezionato non è valido.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',//'Il campo :attribute deve avere una delle seguenti estensioni: :values.',
    'file' => 'The :attribute field must be a file.',//'Il campo :attribute deve essere un file.',
    'filled' => 'The :attribute field must have a value.',// 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',//'Il campo :attribute deve contenere più di :value elementi.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',// 'Il campo :attribute deve essere maggiore di :value kilobyte.',
        'numeric' => 'The :attribute field must be greater than :value.',//'Il campo :attribute deve essere maggiore di :value.',
        'string' => 'The :attribute field must be greater than :value characters.',//'Il campo :attribute deve essere maggiore di :value caratteri.',
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',//'Il campo :attribute deve contenere elementi :value o più.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',//Il campo :attribute deve essere maggiore o uguale a :value kilobyte.,
        'numeric' => 'The :attribute field must be greater than or equal to :value.',// 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',// 'Il campo :attribute deve essere maggiore o uguale ai caratteri :value.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',//'Il campo :attribute deve essere un colore esadecimale valido.',
'image' => 'The :attribute field must be an image.',//'Il campo :attribute deve essere un'immagine.',
    'in' => 'The selected :attribute is invalid.',//'L'attributo selezionato non è valido.',
    'in_array' => 'The :attribute field must exist in :other.',//'Il campo :attribute deve esistere in :other.',
    'integer' => 'The :attribute field must be an integer.',//'Il campo :attribute deve essere un numero intero.',
    'ip' => 'The :attribute field must be a valid IP address.',//'Il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',//'Il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',//'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'The :attribute field must be a valid JSON string.',//'Il campo :attribute deve essere una stringa JSON valida.',
    'list' => 'The :attribute field must be a list.',//'Il campo :attribute deve essere un elenco.',
    'lowercase' => 'The :attribute field must be lowercase.',//'Il campo :attribute deve essere minuscolo.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',//'Il campo :attribute deve contenere meno di :value elementi.
        'file' => 'The :attribute field must be less than :value kilobytes.',//'Il campo :attribute deve essere inferiore a :value kilobyte.',
        'numeric' => 'The :attribute field must be less than :value.',//'Il campo :attribute deve essere inferiore a :value.',
        'string' => 'The :attribute field must be less than :value characters.',//'Il campo :attribute deve contenere meno di :value caratteri.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',//'Il campo :attribute non deve contenere più di :value elementi.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',//'Il campo :attribute deve essere inferiore o uguale a :value kilobyte.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',//'Il campo :attribute deve essere minore o uguale a :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',//'Il campo :attribute deve essere inferiore o uguale ai caratteri :value.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',//'Il campo :attribute deve essere inferiore o uguale ai caratteri :value.',
    'max' => [
        'array' => 'The :attribute field must not have more than :max items.',//'Il campo :attribute non deve contenere più di :max elementi.',

        'file' => 'The :attribute field must not be greater than :max kilobytes.',//'Il campo :attribute non deve essere maggiore di :max kilobyte.'
        'numeric' => 'The :attribute field must not be greater than :max.',//'Il campo :attribute non deve essere maggiore di :max.',
        'string' => 'The :attribute field must not be greater than :max characters.',//'Il campo :attribute non deve essere maggiore di :max caratteri.',
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.',//'Il campo :attribute non deve contenere più di :max cifre.',
    'mimes' => 'The :attribute field must be a file of type: :values.',//'Il campo :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',//'Il campo :attribute deve essere un file di tipo: :values.',
    'min' => [
        'array' => 'The :attribute field must have at least :min items.',//'Il campo :attribute deve contenere almeno :min elementi.',
        'file' => 'The :attribute field must be at least :min kilobytes.',//'Il campo :attribute deve essere almeno :min kilobyte.',
        'numeric' => 'The :attribute field must be at least :min.',//'Il campo :attributo deve essere almeno :min.',
        'string' => 'The :attribute field must be at least :min characters.',//'Il campo :attribute deve contenere almeno :min caratteri.
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.',//'Il campo :attribute deve contenere almeno :min cifre.',
    'missing' => 'The :attribute field must be missing.',//'Il campo :attributo deve mancare.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',//'Il campo :attribute deve mancare quando :other è :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',//'Il campo :attribute deve essere mancante a meno che :other sia :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',//'Il campo :attribute deve mancare quando :values ​​è presente.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',//'Il campo :attribute deve mancare quando sono presenti :values.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',//'Il campo :attribute deve essere un multiplo di :value.',
    'not_in' => 'The selected :attribute is invalid.',//'L'attributo selezionato non è valido.',
    'not_regex' => 'The :attribute field format is invalid.',//'Il formato del campo :attribute non è valido.',
    'numeric' => 'The :attribute field must be a number.',//'Il campo :attribute deve essere un numero.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',//'Il campo :attribute deve contenere almeno una lettera.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',//'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => 'The :attribute field must contain at least one number.',//'Il campo :attribute deve contenere almeno un numero.',
        'symbols' => 'The :attribute field must contain at least one symbol.',//'Il campo :attribute deve contenere almeno un simbolo.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',//'Il dato :attributo è apparso in una fuga di dati. Scegli un :attributo diverso.',
    ],
    'present' => 'The :attribute field must be present.',//'Il campo :attribute deve essere presente.',
    'present_if' => 'The :attribute field must be present when :other is :value.',//'Il campo :attribute deve essere presente quando :other è :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',//'Il campo :attribute deve essere presente a meno che :other sia :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',//'Il campo :attribute deve essere presente quando :values ​​è presente.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',//'Il campo :attribute deve essere presente quando sono presenti :values.',
    'prohibited' => 'The :attribute field is prohibited.',//'Il campo :attributo è vietato.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',//'Il campo :attribute è vietato quando :other è :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',//
    'prohibits' => 'The :attribute field prohibits :other from being present.',//'Il campo :attribute impedisce a :other di essere presente.',
    'regex' => 'The :attribute field format is invalid.',//'Il formato del campo :attribute non è valido.
    'required' => 'The :attribute field is required.',//'Il campo :attributo è obbligatorio.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',//'Il campo :attribute deve contenere voci per: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',//'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',//'Il campo :attribute è obbligatorio quando :other è accettato.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',//'Il campo :attribute è obbligatorio quando :other viene rifiutato.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',//'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',//'Il campo :attribute è obbligatorio quando :values ​​è presente.',
    'required_with_all' => 'The :attribute field is required when :values are present.',//'Il campo :attribute è obbligatorio quando sono presenti :values.',
    'required_without' => 'The :attribute field is required when :values is not present.',//'Il campo :attribute è obbligatorio quando :values ​​non è presente.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',//'Il campo :attribute è obbligatorio quando nessuno dei :value è presente.',
    'same' => 'The :attribute field must match :other.',//'Il campo :attribute deve corrispondere a :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',//'Il campo :attribute deve contenere elementi :size.',
        'file' => 'The :attribute field must be :size kilobytes.',//'Il campo :attribute deve essere :size kilobyte.',
        'numeric' => 'The :attribute field must be :size.',//'Il campo :attributo deve essere :dimensione.',
        'string' => 'The :attribute field must be :size characters.',//'Il campo :attribute deve contenere :dimensioni caratteri.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',//'Il campo :attribute deve iniziare con uno dei seguenti: :values.',
    'string' => 'The :attribute field must be a string.',//'Il campo :attribute deve essere una stringa.',
    'timezone' => 'The :attribute field must be a valid timezone.',//'Il campo :attribute deve essere un fuso orario valido.',
    'unique' => 'The :attribute has already been taken.',//'L':attributo è già stato utilizzato.',
    'uploaded' => 'The :attribute failed to upload.',//'Impossibile caricare:attribute.',
    'uppercase' => 'The :attribute field must be uppercase.',//'Il campo :attribute deve essere in maiuscolo.',
    'url' => 'The :attribute field must be a valid URL.',//'Il campo :attribute deve essere un URL valido.',
    'ulid' => 'The :attribute field must be a valid ULID.',//'Il campo :attribute deve essere un ULID valido.',
    'uuid' => 'The :attribute field must be a valid UUID.',//'Il campo :attribute deve essere un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
