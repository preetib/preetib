<?php

function template_substitution($template, $data)
{
    $placeholders = array_map(function ($placeholder) 
    {
        return strtoupper("{{$placeholder}}");
    }, array_keys($data));

    return strtr($template, array_combine($placeholders, $data));
}

$variables = array(
    'first_name' => 'John',
    'last_name' => 'Smith',
    'status' => 'won',
);

$string = 'Dear {FIRST_NAME} {LAST_NAME}, we wanted to tell you that you have {STATUS} the competition.';

echo template_substitution($string, $variables);

?>
