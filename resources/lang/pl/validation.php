<?php

return [
    'accepted'         => ':attribute musi zostać zaakceptowany.',
    'active_url'       => ':attribute nie jest prawidłowym adresem URL.',
    'after'            => ':attribute musi być datą za: data.',
    'after_or_equal'   => ':attribute musi być datą&nbsp;równą albo po :date',
    'alpha'            => ':attribute może zawierać tylko litery.',
    'alpha_dash'       => ':attribute może zawierać tylko litery, cyfry i łączniki.',
    'alpha_num'        => ':attribute może zawierać tylko litery i cyfry.',
    'latin'            => ':attribute może zawierać tylko podstawowe litery alfabetu łacińskiego ISO.',
    'latin_dash_space' => ':attribute może zawierać tylko podstawowe litery,cyfry,myślniki i spacje alfabetu łacińskiego ISO.',
    'array'            => ':attribute musi być tablicą.',
    'before'           => ':attribute musi być datą wcześniejszą :date.',
    'before_or_equal'  => ':attribute musi być datą wcześniejszą lub równą :date.',
    'between'          => [
        'numeric' => ':attribute musi znajdować się między :min i :max.',
        'file'    => ':attribute musi znajdować się między :min i :max kilobajtów.',
        'string'  => ':attribute musi być pomiędzy :min a :max postaciami.',
        'array'   => ':attribute musi być pomiędzy :min a :max produktami.',
    ],
    'boolean'          => ':attribute pole musi być prawdziwe lub fałszywe.',
    'confirmed'        => ':attribute potwierdzenie nie pasuje.',
    'current_password' => 'Hasło jest nieprawidłowe',
    'date'             => ':attribute nie jest prawidłową datą.',
    'date_equals'      => ':attribute must być datą równą  :date.',
    'date_format'      => ':attribute nie pasuje do formatu :format.',
    'different'        => ':attribute i :other musi być odmienne.',
    'digits'           => ':attribute musi być :digits cyframi.',
    'digits_between'   => ':attribute musi być pomiędzy :min a :max cyframi.',
    'dimensions'       => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct'         => ':attribute pole ma zduplikowaną wartość.',
    'email'            => ':attribute musi być prawidłowym adresem e-mail.',
    'ends_with'        => ':attribute musi kończyć sie jedną w wartości:  :values.',
    'exists'           => 'Wybrany :attribute jest nieważny.',
    'file'             => ':attribute musi być plikiem.',
    'filled'           => ':attribute jest wymagany.',
    'gt'               => [
        'numeric' => ':attribute musi być większy niż :value.',
        'file'    => ':attribute musi być większy niż :value  kilobajtów.',
        'string'  => ':attribute musi mieć więcej znaków niż :value.',
        'array'   => ':attribute musi zawierać więcej niż :value elementów.',
    ],
    'gte' => [
        'numeric' => ':attribute musi być większy lub równy :value.',
        'file'    => ':attribute musi być większy lub równy :value  kilobajtów.',
        'string'  => ':attribute musi zawierać minmum :value znaków.',
        'array'   => ':attribute musi zawierać minimum :value elementów lub więcej.',
    ],
    'image'    => ':attribute musi być obrazem.',
    'in'       => 'Wybrany :attribute jest niepoprawny.',
    'in_array' => ':attribute pole nie istnieje w :other.',
    'integer'  => ':attribute musi być liczbą całkowitą.',
    'ip'       => ':attribute musi być prawidłowym adresem IP.',
    'ipv4'     => ':attribute musi być prawidłowym adresem IPv4.',
    'ipv6'     => ':attribute musi być prawidłowym adresem IPv6.',
    'json'     => ':attribute musi być prawidłowym ciągiem JSON.',
    'lt'       => [
        'numeric' => ':attribute musi być mniejszy niż :value.',
        'file'    => ':attribute musi być mniejszy niż :value kilobajtów.',
        'string'  => ':attribute musi być krótszy niż :value znaków.',
        'array'   => ':attribute musi zawierać mniej elementów niż :value.',
    ],
    'lte' => [
        'numeric' => ':attribute może zawierać maksymalnie :value.',
        'file'    => ':attribute może mieć maksymalnie :value kilobajtów.',
        'string'  => ':attribute może mieć maksymalnie :value znaków.',
        'array'   => ':attribute nie może zawierać więcej niż :value elementów.',
    ],
    'max' => [
        'numeric' => ':attribute nie może być większa niż :max.',
        'file'    => ':attribute nie może być większe niż :max. kilobajtów.',
        'string'  => ':attribute nie może być większe niż :max znaków.',
        'array'   => ':attribute nie może mieć więcej niż :max przedmiotów.',
    ],
    'mimes'     => ':attribute musi być typem :values.',
    'mimetypes' => ':attribute musi być plikiem typu :values.',
    'min'       => [
        'numeric' => ':attribute musi wynosić co najmniej :min.',
        'file'    => ':attribute musi wynosić co najmniej :min kilobajtów.',
        'string'  => ':attribute musi wynosić co najmniej :min znaków.',
        'array'   => ':attribute  musi mieć co najmniej :min przedmiotów.',
    ],
    'not_in'               => ':Wybrany :attribute  jest nieważny.',
    'not_regex'            => 'Format :attribute jest nieprawidłowy',
    'numeric'              => ':atrybut musi być liczbą.',
    'password'             => 'Hasło jest nieprawidłowe.',
    'present'              => 'pole :attribute musi być obecne.',
    'regex'                => 'format atrybutu jest nieprawidłowy.',
    'required'             => 'pole  :attribute jest wymagane.',
    'required_if'          => ':attribute pole jest wymagane, gdy :other to :value',
    'required_unless'      => ':attribute pole jest wymagane, chyba że :other jest w :values.',
    'required_with'        => ':attribute pole jest wymagane, gdy :values są obecne.',
    'required_with_all'    => ':attribute pole jest wymagane, gdy :values są obecne.',
    'required_without'     => ':attribute pole jest wymagane, gdy :values nie występują.',
    'required_without_all' => ':attribute pole jest wymagane, gdy żadna z wartości nie jest obecna.',
    'same'                 => ':attribute i : other muszą pasować.',
    'size'                 => [
        'numeric' => ':attribute musi być: size.',
        'file'    => ':attribute musi być :size kilobajtów.',
        'string'  => ':attribute musi być :size characters.',
        'array'   => ':attribute musi zawierać: elementy wielkości.',
    ],
    'starts_with' => ':attribute musi zaczynać się jedną z wymienionych wartości: :values.',
    'string'      => ':attribute musi być łańcuchem.',
    'timezone'    => ':attribute musi być prawidłową strefą.',
    'unique'      => ':attribute został już zajęty.',
    'uploaded'    => 'Nie udało się załadować :attribute.',
    'url'         => ':format atrybutu jest nieprawidłowy.',
    'uuid'        => ':attribute musi być prawidłowym UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute zawiera niedozwolone słowo',
    'dont_allow_first_letter_number' => 'Pole „: input” nie może zawierać pierwszej litery jako liczby',
    'exceeds_maximum_number'         => ':attribute przekracza maksymalną długość',
    'db_column'                      => ':attribute może zawierać tylko litery, cyfry i myślnik podstawowego alfabetu łacińskiego ISO i nie może zaczynać się od cyfr.',
    'attributes'                     => [],
];
