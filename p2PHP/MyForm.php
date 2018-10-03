<?php

namespace P2;

use DWA\Form;

class MyForm extends Form
{
    /**
     * Modified from Form.php to allow custom messages (jj)
     * Will loop through each field's rules
     * Returns an array of error messages
     * Stops after the first error for a given field
     * Available rules:
     * requiredCustom1
     */
    public function validateCustom(array $fieldsToValidate)
    {
        $errors = [];

        foreach ($fieldsToValidate as $fieldName => $rules) {
            # Each rule is separated by a |
            $rules = explode('|', $rules);

            foreach ($rules as $rule) {
                # Get the value for this field from the request
                $value = $this->get($fieldName);

                # Handle any parameters with the rule, e.g. max:99
                $parameter = null;
                if (strstr($rule, ':')) {
                    list($rule, $parameter) = explode(':', $rule);
                }

                # Run the validation test with the given rule
                $test = $this->$rule($value, $parameter);

                # Test failed
                if (!$test) {
                    $method = $rule . 'Message';
                    $errors[] = '&#x2716; ' . $this->$method($parameter) . ' [err-src ' . $fieldName . ']';
                    # Only indicate one error per field
                    break;
                }
            }
        }

        # Set public property hasErrors as Boolean
        $this->hasErrors = !empty($errors);

        return $errors;
    }

    /**
     * The value can not be blank
     */
    protected function requiredCustom1($value)
    {
        $value = trim($value);

        return $value != '' && isset($value) && !is_null($value);
    }

    protected function requiredCustom1Message()
    {
        return 'You have to learn something new. ';
    }

    /**
     * The values can not all be "none"
     */
    protected function notNoneCustom1($value)
    {
        $value = trim($value);

        return $value != '' && isset($value) && !is_null($value);
    }

    protected function notNoneCustom1Message()
    {
        return 'You have not selected any dyes. ';
    }

    /**
     * The values can not all be "none"
     */
    protected function matchlessCustom1($value)
    {
        $value = trim($value);

        return $value != '' && isset($value) && !is_null($value);
    }

    protected function matchlessCustom1Message()
    {
        return 'The facial features cannot match the face color. ';
    }
}