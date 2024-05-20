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

    'accepted' => 'El campo :attribute debe ser aceptado.',//Il campo :attributo deve essere accettato.
    'accepted_if' => 'El campo :atributo debe aceptarse cuando :otro es :valor.',//Il campo :attribute deve essere accettato quando :other è :value.'
    'active_url' =>'El campo :attribute debe ser una URL válida.',//'Il campo :attribute deve essere un URL valido.'
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',//'Il campo :attribute deve essere una data successiva a :date'.
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',//'Il campo :attribute deve essere una data successiva o uguale a :date.
    'alpha' => 'El campo :attribute sólo debe contener letras.',//'Il campo :attribute deve contenere solo lettere.'
    'alpha_dash' => 'El campo :attribute sólo debe contener letras, números, guiones y guiones bajos.',//'Il campo :attribute deve contenere solo lettere, numeri, trattini e trattini bassi.'
    'alpha_num' => 'El campo :attribute sólo debe contener letras y números.',//'Il campo :attribute deve contenere solo lettere e numeri.'
    'array' => 'El campo :attribute debe ser una matriz.',//'Il campo :attribute deve essere un array.'
    'ascii' => 'El campo :attribute sólo debe contener símbolos y caracteres alfanuméricos de un solo byte.',//'Il campo :attribute deve contenere solo caratteri alfanumerici e simboli a byte singolo.'
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',//'Il campo :attribute deve essere una data precedente a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',//'Il campo :attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener entre :min y :max elementos.',//Il campo :attribute deve contenere elementi compresi tra :min e :max.
        'file' => 'El campo :attribute debe estar entre :min y :max kilobytes.',//'Il campo :attribute deve essere compreso tra :min e :max kilobyte.',
        'numeric' =>'El campo :attribute debe estar entre :min y :max.',//'Il campo :attribute deve essere compreso tra :min e :max.'
        'string' => 'El campo :attribute debe tener entre caracteres :min y :max.',//'Il campo :attribute deve essere compreso tra :min e :max caratteri.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',//'Il campo :attribute deve essere true o false.',
    'can' => 'El campo :attribute contiene un valor no autorizado.',//Il campo :attribute contiene un valore non autorizzato.',
    'confirmed' =>'La confirmación del campo :attribute no coincide.',//'La conferma del campo :attribute non corrisponde.',
    'current_password' => 'La contraseña es incorrecta.',//'La password non è corretta.',
    'date' => 'El campo :attribute debe ser una fecha válida.',//'Il campo :attribute deve essere una data valida.',
    'date_equals' =>'El campo :atributo debe ser una fecha igual a :fecha.',//'Il campo :attribute deve essere una data uguale a :date.',
    'date_format' => 'El campo :attribute debe coincidir con el formato :formato.',//'Il campo :attribute deve corrispondere al formato :format.',

    'decimal' => 'El campo :attribute debe tener :decimales decimales.',//'Il campo :attribute deve contenere :decimal cifre decimali.',
    'declined' => 'El campo :attribute debe rechazarse.',//'Il campo :attributo deve essere rifiutato.',
    'declined_if' => 'El campo :atributo debe rechazarse cuando :otro es :valor.',//'Il campo :attribute deve essere rifiutato quando :other è :value.',
    'different' => 'El campo :attribute y :other deben ser diferentes.',//'Il campo :attribute e :other devono essere diversi.',
    'digits' => 'El campo :atributo debe ser :dígitos dígitos.',//'Il campo :attribute deve essere :digits digits.',
    'digits_between' => 'El campo :attribute debe estar entre :min y max',
    'digits.'=> 'El campo :attribute debe estar entre :min y :max dígitos.',//'Il campo :attribute deve essere compreso tra :min e :max cifre.'
    'dimensions' => 'El campo :attribute tiene dimensiones de imagen no válidas.',//'Il campo :attribute ha dimensioni dell'immagine non valide.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',//'Il campo :attribute ha un valore duplicato.',
    'doesnt_end_with' => 'El campo :atributo no debe terminar con uno de los siguientes: :valores.',//'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'El campo :attribute no debe comenzar con uno de los siguientes: :values.',//'Il campo :attribute non deve iniziare con uno dei seguenti: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',//'Il campo :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'El campo :atributo debe terminar con uno de los siguientes: :valores.',//'Il campo :attribute deve terminare con uno dei seguenti: :values.',
    'enum' => 'El :atributo seleccionado no es válido.',//"L'attributo selezionato non è valido.",
    'exists' => 'El :atributo seleccionado no es válido.',//'L'attributo selezionato non è valido.',
    'extensions' => 'El campo :atributo debe tener una de las siguientes extensiones: :valores.',//'Il campo :attribute deve avere una delle seguenti estensioni: :values.',
    'file' =>'El campo :attribute debe ser un archivo.',//'Il campo :attribute deve essere un file.',
    'filled' => 'El campo :attribute debe tener un valor.',// 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'array' => 'El campo :attribute debe tener más de :elementos de valor.',//'Il campo :attribute deve contenere più di :value elementi.',
        'file' => 'El campo :attribute debe ser mayor que :value kilobytes.',// 'Il campo :attribute deve essere maggiore di :value kilobyte.',
        'numeric' => 'El campo :atributo debe ser mayor que :valor.',//'Il campo :attribute deve essere maggiore di :value.',
        'string' => 'El campo :attribute debe tener más de :caracteres de valor.',//'Il campo :attribute deve essere maggiore di :value caratteri.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener elementos :value o más.',//'Il campo :attribute deve contenere elementi :value o più.',
        'file' => 'El campo :attribute debe ser mayor o igual que :value kilobytes.',//Il campo :attribute deve essere maggiore o uguale a :value kilobyte.,
        'numeric' =>'El campo :atributo debe ser mayor o igual que :valor.',// 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'string' => 'El campo :attribute debe ser mayor o igual que los caracteres :value.',// 'Il campo :attribute deve essere maggiore o uguale ai caratteri :value.',
    ],
    'hex_color' =>'El campo :attribute debe tener un color hexadecimal válido.',//'Il campo :attribute deve essere un colore esadecimale valido.',
'image' => 'El campo :attribute debe ser una imagen.',//'Il campo :attribute deve essere un'immagine.',
    'in' =>'El :atributo seleccionado no es válido.',//'L'attributo selezionato non è valido.',
    'in_array' => 'El campo :attribute debe existir en :other.',//'Il campo :attribute deve esistere in :other.,
    'integer' => 'El campo :attribute debe ser un número entero.',//'Il campo :attribute deve essere un numero intero.',
    'ip' =>'El campo :attribute debe ser una dirección IP válida.',//'Il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',//'Il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',//'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'El campo :attribute debe ser una cadena JSON válida.',//'Il campo :attribute deve essere una stringa JSON valida.',
    'list' => 'El campo :attribute debe ser una lista.',//'Il campo :attribute deve essere un elenco.',
    'lowercase' =>'El campo :attribute debe estar en minúsculas.',//'Il campo :attribute deve essere minuscolo.',
    'lt' => [
        'array' => 'El campo :attribute debe tener menos elementos que :value.',//'Il campo :attribute deve contenere meno di :value elementi.
        'file' => 'El campo :attribute debe tener menos de :value kilobytes.',//'Il campo :attribute deve essere inferiore a :value kilobyte.',
        'numeric' =>'El campo :atributo debe ser menor que :valor.',//'Il campo :attribute deve essere inferiore a :value.',
        'string' =>'El campo :attribute debe tener menos de :caracteres de valor.',//'Il campo :attribute deve contenere meno di :value caratteri.',
    ],
    'lte' => [
        'array' =>'El campo :attribute no debe tener más de :elementos de valor.',//'Il campo :attribute non deve contenere più di :value elementi.',
        'file' => 'El campo :attribute debe ser menor o igual que :value kilobytes.',//'Il campo :attribute deve essere inferiore o uguale a :value kilobyte.',
        'numeric' =>'El campo :atributo debe ser menor o igual que :valor.',//'Il campo :attribute deve essere minore o uguale a :value.',
        'string' =>'El campo :attribute debe ser menor o igual que los caracteres :value.',//'Il campo :attribute deve essere inferiore o uguale ai caratteri :value.',
    ],
    'mac_address' => 'El campo :attribute debe ser una dirección MAC válida.',//'Il campo :attribute deve essere inferiore o uguale ai caratteri :value.',
    'max' => [
        'array' => 'El campo :attribute no debe tener más de :max elementos.',//'Il campo :attribute non deve contenere più di :max elementi.',

        'file' =>'El campo :attribute no debe ser mayor que :max kilobytes.',//'Il campo :attribute non deve essere maggiore di :max kilobyte.'
        'numeric' => 'El campo :attribute no debe ser mayor que :max.',//'Il campo :attribute non deve essere maggiore di :max.',
        'string' => 'El campo :attribute no debe tener más de :max caracteres.',//'Il campo :attribute non deve essere maggiore di :max caratteri.',
    ],
    'max_digits' => 'El campo :attribute no debe tener más de :max dígitos.',//'Il campo :attribute non deve contenere più di :max cifre.',
    'mimes' => 'El campo :attribute debe ser un archivo de tipo: :values.',//'Il campo :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser un archivo de tipo: :values.',//'Il campo :attribute deve essere un file di tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener al menos :min elementos.',//'Il campo :attribute deve contenere almeno :min elementi.',
        'file' =>'El campo :attribute debe tener al menos :min kilobytes.',//'Il campo :attribute deve essere almeno :min kilobyte.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',//'Il campo :attributo deve essere almeno :min.',
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',//'Il campo :attribute deve contenere almeno :min caratteri.
    ],
    'min_digits' =>'El campo :attribute debe tener al menos :min dígitos.',//'Il campo :attribute deve contenere almeno :min cifre.',
    'missing' => 'Debe faltar el campo :atributo.',//'Il campo :attributo deve mancare.',
    'missing_if' => 'El campo :atributo debe faltar cuando :otro es :valor.',//'Il campo :attribute deve mancare quando :other è :value.',
    'missing_unless' =>'El campo :atributo debe faltar a menos que :otro sea :valor.',//'Il campo :attribute deve essere mancante a meno che :other sia :value.',
    'missing_with' =>'El campo :attribute debe faltar cuando :values ​​está presente.',//'Il campo :attribute deve mancare quando :values ​​è presente.',
    'missing_with_all' => 'El campo :attribute debe faltar cuando :values ​​están presentes.',//'Il campo :attribute deve mancare quando sono presenti :values.',
    'multiple_of' => 'El campo :atributo debe ser un múltiplo de :valor.',//'Il campo :attribute deve essere un multiplo di :value.',
    'not_in' =>'El :atributo seleccionado no es válido.',//'L'attributo selezionato non è valido.',
    'not_regex' => 'El formato del campo :atributo no es válido.',//'Il formato del campo :attribute non è valido.',
    'numeric' =>'El campo :attribute debe ser un número.',//'Il campo :attribute deve essere un numero.',
    'password' => [
        'letters' => 'El campo :attribute debe contener al menos una letra.',//'Il campo :attribute deve contenere almeno una lettera.',
        'mixed' => 'El campo :attribute debe contener al menos una letra mayúscula y una minúscula.',//'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => 'El campo :attribute debe contener al menos un número.',//'Il campo :attribute deve contenere almeno un numero.',
        'symbols' => 'El campo :attribute debe contener al menos un símbolo.',//'Il campo :attribute deve contenere almeno un simbolo.',
        'uncompromised' => 'El atributo :dado apareció en una filtración de datos. Por favor elija un :atributo diferente.',//'Il dato :attributo è apparso in una fuga di dati. Scegli un :attributo diverso.',
    ],
    'present' => 'El campo :attribute debe estar presente.',//'Il campo :attribute deve essere presente.',
    'present_if' => 'El campo :atributo debe estar presente cuando :otro es :valor.',//'Il campo :attribute deve essere presente quando :other è :value.',
    'present_unless' =>'El campo :atributo debe estar presente a menos que :otro sea :valor.',//'Il campo :attribute deve essere presente a meno che :other sia :value',
    'present_with' =>'El campo :attribute debe estar presente cuando :values ​​esté presente.',//'Il campo :attribute deve essere presente quando :values ​​è presente',
    'present_with_all' => 'El campo :attribute debe estar presente cuando :los valores están presentes.',//'Il campo :attribute deve essere presente quando sono presenti :values.',
    'prohibited' => 'El campo :attribute está prohibido.',//'Il campo :attributo è vietato.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :other es :value.',//'Il campo :attribute è vietato quando :other è :value.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :other esté en :values.',//
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',//'Il campo :attribute impedisce a :other di essere presente.',
    'regex' => 'El formato del campo :atributo no es válido.',//'Il formato del campo :attribute non è valido.
    'required' =>'El campo :attribute es obligatorio.',//'Il campo :attributo è obbligatorio.',
    'required_array_keys' =>'El campo :atributo debe contener entradas para: :valores.',//'Il campo :attribute deve contenere voci per: :values.',
    'required_if' => 'El campo :atributo es obligatorio cuando :otro es :valor.',//'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando se acepta :other.',//'Il campo :attribute è obbligatorio quando :other è accettato.',
    'required_if_declined' => 'El campo :attribute es obligatorio cuando :other se rechaza.',//'Il campo :attribute è obbligatorio quando :other viene rifiutato.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',//'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values ​​está presente.',//'Il campo :attribute è obbligatorio quando :values ​​è presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :los valores están presentes.',//'Il campo :attribute è obbligatorio quando sono presenti :value',
    'required_without' => 'El campo :attribute es obligatorio cuando :values ​​no está presente.',//'Il campo :attribute è obbligatorio quando :values ​​non è presente',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los :values ​​está presente.',//'Il campo :attribute è obbligatorio quando nessuno dei :value è presente.',
    'same' => 'El campo :atributo debe coincidir con :otro.',//'Il campo :attribute deve corrispondere a :other.',
    'size' => [
        'array' => 'El campo :attribute debe contener elementos :size.',//'Il campo :attribute deve contenere elementi :size.',
        'file' => 'El campo :attribute debe ser :size kilobytes.',//'Il campo :attribute deve essere :size kilobyte.',
        'numeric' => 'El campo :atributo debe ser :tamaño.',//'Il campo :attributo deve essere :dimensione.',
        'string' => 'El campo :attribute debe tener :caracteres de tamaño.',//'Il campo :attribute deve contenere :dimensioni caratteri.',
    ],
    'starts_with' => 'El campo :atributo debe comenzar con uno de los siguientes: :valores.',//'Il campo :attribute deve iniziare con uno dei seguenti: :values.',
    'string' =>'El campo :attribute debe ser una cadena.',//'Il campo :attribute deve essere una stringa.',
    'timezone' =>'El campo :attribute debe ser una zona horaria válida.',//'Il campo :attribute deve essere un fuso orario valido.',
    'unique' => 'El Contraseña ya ha sido tomado.',//'L':attributo è già stato utilizzato.',
    'uploaded' => 'El :atributo no se pudo cargar.',//'Impossibile caricare:attribute.',
    'uppercase' => 'El campo :attribute debe estar en mayúsculas.',//'Il campo :attribute deve essere in maiuscolo.',
    'url' => 'El campo :attribute debe ser una URL válida.',//'Il campo :attribute deve essere un URL valido.',
    'ulid' => 'El campo :attribute debe ser un ULID válido.',//'Il campo :attribute deve essere un ULID valido.',
    'uuid' => 'El campo :attribute debe ser un UUID válido.',//'Il campo :attribute deve essere un UUID valido.',

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

    'attributes' => [
        'name' => 'Nombre',
        'email' => 'Correo',
        'password' => 'Contraseña',
        'confirm_password'=> 'Confirmar Contraseña'

    ],

];
